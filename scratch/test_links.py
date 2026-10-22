import urllib.request
import re

url = 'http://127.0.0.1:8000/home.php'
try:
    with urllib.request.urlopen(url) as response:
        html = response.read().decode('utf-8', errors='ignore')
        print(f'Successfully fetched home.php, length: {len(html)}')
        
        # Check all href links in page
        links = set(re.findall(r'href=[\"\']([^\"\'#]+)[\"\']', html))
        internal_links = [
            l for l in links 
            if not l.startswith('http') 
            and not l.startswith('mailto:') 
            and not l.startswith('tel:') 
            and not l.startswith('javascript:')
            and not l.startswith('/acts/') # external or mock route
        ]
        print(f'Found {len(internal_links)} internal links to test:')
        
        broken = []
        for l in sorted(internal_links):
            test_url = 'http://127.0.0.1:8000/' + l.lstrip('/')
            try:
                with urllib.request.urlopen(test_url) as res:
                    print(f'  [200 OK] {l}')
            except Exception as e:
                print(f'  [FAIL] {l} -> {e}')
                broken.append((l, str(e)))
        
        if broken:
            print('\nBROKEN LINKS:', broken)
        else:
            print('\nALL INTERNAL LINKS ARE VALID (NO 404s)!')
except Exception as e:
    print('Failed to request home.php:', e)
