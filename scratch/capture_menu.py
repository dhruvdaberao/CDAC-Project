import urllib.request
import subprocess

html = urllib.request.urlopen('http://127.0.0.1:8000/home.php').read().decode('utf-8', errors='ignore')
html = html.replace('class="accessibility-menu" id="accessibility-menu"', 'class="accessibility-menu show" id="accessibility-menu"')
html = html.replace('href="assets/', 'href="../assets/').replace('src="assets/', 'src="../assets/')

with open('scratch/menu_preview.html', 'w', encoding='utf-8') as f:
    f.write(html)

chrome_path = r'C:\Program Files\Google\Chrome\Application\chrome.exe'
out_path = r'c:\Users\wbl\Desktop\C-HUK\scratch\menu_screenshot_new.png'
subprocess.run([chrome_path, '--headless', '--disable-gpu', f'--screenshot={out_path}', '--window-size=1280,950', r'c:\Users\wbl\Desktop\C-HUK\scratch\menu_preview.html'], check=True)
print('Screenshot generated successfully!')
