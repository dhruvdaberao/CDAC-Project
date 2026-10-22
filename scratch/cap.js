const fs = require('fs');
const { spawn } = require('child_process');

async function capture(url, outputFile, width = 1200, height = 800, scrollTo = 0) {
  const chromePath = 'C:\\Program Files\\Google\\Chrome\\Application\\chrome.exe';
  const port = 9223;
  const userDataDir = process.env.TEMP + '\\chrome_cap_' + Date.now();
  
  const chrome = spawn(chromePath, [
    '--headless=new',
    `--remote-debugging-port=${port}`,
    `--user-data-dir=${userDataDir}`,
    '--disable-gpu',
    'about:blank'
  ]);

  try {
    await new Promise(r => setTimeout(r, 1500));
    const listRes = await fetch(`http://127.0.0.1:${port}/json`);
    const targets = await listRes.json();
    const wsUrl = targets[0].webSocketDebuggerUrl;

    const ws = new WebSocket(wsUrl);
    await new Promise((res, rej) => {
      ws.onopen = res;
      ws.onerror = rej;
    });

    let id = 1;
    function send(method, params = {}) {
      return new Promise((res, rej) => {
        const curId = id++;
        const handler = (evt) => {
          const msg = JSON.parse(evt.data);
          if (msg.id === curId) {
            ws.removeEventListener('message', handler);
            if (msg.error) rej(msg.error);
            else res(msg.result);
          }
        };
        ws.addEventListener('message', handler);
        ws.send(JSON.stringify({ id: curId, method, params }));
      });
    }

    await send('Page.enable');
    await send('Emulation.setDeviceMetricsOverride', {
      width,
      height,
      deviceScaleFactor: 1,
      mobile: width < 768
    });

    const loadPromise = new Promise(res => {
      const handler = (evt) => {
        const msg = JSON.parse(evt.data);
        if (msg.method === 'Page.loadEventFired') {
          ws.removeEventListener('message', handler);
          res();
        }
      };
      ws.addEventListener('message', handler);
    });

    await send('Page.navigate', { url });
    await loadPromise;
    await new Promise(r => setTimeout(r, 1000));

    if (scrollTo > 0) {
      await send('Runtime.evaluate', {
        expression: `window.scrollTo(0, ${scrollTo});`
      });
      await new Promise(r => setTimeout(r, 500));
    }

    const metrics = await send('Runtime.evaluate', {
      expression: `JSON.stringify({
        header: (() => {
          const el = document.getElementById('header');
          if (!el) return null;
          const r = el.getBoundingClientRect();
          const s = window.getComputedStyle(el);
          return { top: r.top, left: r.left, width: r.width, height: r.height, pos: s.position, zIndex: s.zIndex, padTop: s.paddingTop, padBottom: s.paddingBottom };
        })(),
        skipLink: (() => {
          const el = document.querySelector('.skip-link');
          if (!el) return null;
          const r = el.getBoundingClientRect();
          const s = window.getComputedStyle(el);
          return { top: r.top, left: r.left, width: r.width, height: r.height, pos: s.position, disp: s.display, vis: s.visibility, op: s.opacity };
        })(),
        logoHeader: (() => {
          const el = document.querySelector('.logo-header');
          if (!el) return null;
          const r = el.getBoundingClientRect();
          const s = window.getComputedStyle(el);
          return { top: r.top, left: r.left, width: r.width, height: r.height, marTop: s.marginTop };
        })(),
        navbar: (() => {
          const el = document.getElementById('navbar');
          if (!el) return null;
          const r = el.getBoundingClientRect();
          const s = window.getComputedStyle(el);
          return { top: r.top, height: r.height, padTop: s.paddingTop };
        })()
      })`,
      returnByValue: true
    });

    console.log('METRICS:', metrics.result.value);

    const shot = await send('Page.captureScreenshot', { format: 'png' });
    fs.writeFileSync(outputFile, Buffer.from(shot.data, 'base64'));
    console.log('Saved to', outputFile);

    ws.close();
  } finally {
    chrome.kill();
    process.exit(0);
  }
}

const args = process.argv.slice(2);
capture(args[0] || 'http://127.0.0.1:8000/home.php', args[1] || 'test_cap.png', parseInt(args[2] || '1200'), parseInt(args[3] || '800'), parseInt(args[4] || '0'))
  .catch(err => { console.error(err); process.exit(1); });
