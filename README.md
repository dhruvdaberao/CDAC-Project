

| File or folder | What it contains | When to edit it |
| --- | --- | --- |
| `home.php` | Public homepage content | Homepage sections, headings, images and page-specific markup |
| Root-level `*.php` pages | Individual public pages | Content or accessibility issues limited to one page |
| `includes/header.php` | Header shared by 20 pages | Shared header structure |
| `includes/navbar.php` | Menu inside that shared header | Navigation labels, menu markup and keyboard-accessible controls |
| `includes/header-home.php` | Homepage header | Homepage header layout |
| `includes/navbar-home.php` | Homepage navigation and accessibility toolbox markup | Homepage menu/toolbox controls |
| `includes/header-*.php`, `navbar-*.php` | Existing navigation variants | Changes to the corresponding page group; see section 4 |
| `includes/footer.php` | Footer shared by 25 pages | Common footer content and link accessibility |
| `includes/footer-cbp.php` | Footer for CBP, FDP and Outreach | Footer changes for those three pages |
| `includes/footer-outreach_report.php` | Outreach report footer | Report-specific footer changes |
| `assets/css/style.css` | Existing main site stylesheet | General layout, navigation styles and shared visual rules |
| `assets/css/extracted/` | Nine CSS blocks moved out of the original HTML | Page-specific styles; see section 5 |
| `css/` | Additional existing stylesheets | Check the page's stylesheet links before editing |
| `assets/js/main.js` | Navigation toggles, scrolling, gallery/lightbox and slider initialization | Interactive behavior; preserve selectors used by the markup |
| `assets/js/script.js` | Existing contact-form popup demonstration code | Inspect before use: it prevents submission and simulates success; it is not proof that a form sends data |
| `js/global.js` | Existing form-widget setup, including date picker behavior | Form-widget accessibility after checking which pages load it |
| `assets/img/` | Supplied images | Image content; alternative text is normally edited in the page markup |
| `assets/vendor/`, `vendor/` | Third-party libraries, styles and fonts | Identify dependencies; prefer site-specific overrides over editing vendor files |
| `includes/.htaccess` | Blocks direct browser access to include fragments | Leave in place; PHP pages can still include these files |

A component being present does not mean every page loads it. Check the page's `require`, `<link>` and `<script>` statements first. Some scripts remain inline inside pages.

## 3. How a page works

For example, `contact.php` loads its header using:

```php
<?php require __DIR__ . '/includes/header-contact.php'; ?>
```

That header loads `includes/navbar-contact.php`. PHP combines the fragments and page content before sending HTML to the browser.

- Change page content in `contact.php`.
- Change its menu in `includes/navbar-contact.php`.
- Change applicable CSS in the stylesheet actually loaded by the page.
- Test all pages sharing any modified component.

The PHP fragments contain a guard using `CHUK_PUBLIC_PAGE`. Preserve it. Preview the full page, not the include file directly.

## 4. Which pages share navigation?

The filenames below are inside `includes/`. Each header loads the correspondingly named navbar file, for example `header-gallery.php` loads `navbar-gallery.php`.

| Header | Pages using it |
| --- | --- |
| `header.php` / `navbar.php` | `10th_fdp.php`, `11th_fdp.php`, `1st_FDP.php`, `2nd_fdp.php`, `3rd_FDP.php`, `3rd_fdp_bangalore.php`, `4th_FDP.php`, `5th_FDP.php`, `7th_FDP.php`, `8th_fdp.php`, `9th_fdp.php`, `acc_march.php`, `acc_march_24.php`, `acc_september.php`, `aicte_mtp.php`, `aicte_mtp2.php`, `campus.php`, `cbp_august.php`, `first_outreach.php`, `second_outreach.php` |
| `header-home.php` | `home.php` |
| `header-hpc_march.php` | `hpc_march.php`, `hpc_march_24.php`, `hpc_september.php` |
| `header-fdp.php` | `fdp.php`, `outreach.php` |
| `header-fdp_page.php` | `fdp_public.php`, `mtp.php` |
| `header-blp.php` | `blp.php` |
| `header-cbp.php` | `cbp.php` |
| `header-contact.php` | `contact.php` |
| `header-gallery.php` | `gallery.php` |
| `header-media.php` | `media.php` |
| `header-outreach_report.php` | `outreach_report.php` |
| `header-roadtrip_report.php` | `roadtrip_report.php` |
| `header-silchar_page.php` | `silchar_page.php` |
| `header-testimonials.php` | `testimonials.php` |

`Course_page.php` and `faq.php` have no extracted shared header. Inspect their own markup.

The menu variants preserve differences in the supplied site. Do not assume editing `navbar.php` changes the homepage or every other page. If consolidating them later, compare links and active states before removing a variant.

## 5. Where to change CSS

| PHP page | Extracted stylesheet(s) under `assets/css/extracted/` |
| --- | --- |
| `home.php` | `index-1.css`, `index-2.css` |
| `fdp_public.php` | `fdp_page-1.css`, `fdp_page-2.css`, `fdp_page-3.css` |
| `mtp.php` | `mtp-1.css`, `mtp-2.css` |
| `Course_page.php` | `Course_page-1.css` |
| `faq.php` | `faq-1.css` |

These CSS filenames retain the original HTML page names. Other pages may rely on the main stylesheet, vendor CSS and inline attributes.

Nine embedded `<style>` blocks were moved into files. **Existing `style="..."` attributes remain.** This is unfinished cleanup, not an accessibility pass.

To remove an inline style safely:

1. Find the element in its page or shared include.
2. Give it a descriptive class, preserving its existing classes and IDs.
3. Put the rule in an appropriate site stylesheet.
4. Inspect computed styles and test every affected page at desktop/mobile sizes.
5. Check focus, hover and JavaScript-driven states. Do not add `!important` to every rule.

Use browser Developer Tools to identify which stylesheet wins. Moving a declaration from an inline attribute into a stylesheet changes its priority.

## 6. Run locally

### Windows with XAMPP

1. Copy `c-huk_website` into `C:\xampp\htdocs\`.
2. Start Apache from the XAMPP Control Panel.
3. Open `http://localhost/c-huk_website/home.php`.
4. Edit files in VS Code and refresh the browser.

Do not double-click PHP files or preview them with a static HTML server. Apache/PHP must process the includes.

Old links still use `.html`. The package's outer `instructions/apache-routes.txt` contains the rules mapping those URLs to the new PHP pages. In a **new local folder**, use those rules in a site-root `.htaccess`. On staging/production, the owner must merge them with existing security rules, not replace `.htaccess`.

Examples:

| Existing URL | New PHP page |
| --- | --- |
| `index.html` | `home.php` |
| `contact.html` | `contact.php` |
| `gallery.html` | `gallery.php` |
| `fdp_page.html` | `fdp_public.php` |

The existing `index.php` login and `fdp_page.php` application page are separate and must remain intact. Other converted pages keep their base names and capitalization. Linux filenames are case-sensitive.

If Git contains only `c-huk_website`, the outer `instructions` folder may not be in the repository. Ask the owner for the routing snippet before testing old URLs. Do not invent broad rules that run every HTML file as PHP.

A missing asset, download or backend page in this partial package is not permission to delete its link. Record it and request the missing dependency. Real form submissions and authenticated workflows need the complete staging application.

## 7. Accessibility work: where to begin


Use the official GIGW checklist and WCAG 2.1 AA as the assessment baseline. The following is a starting worklist, not the complete standard:

| Area | Start in | Check/fix |
| --- | --- | --- |
| Navigation | Navbar includes and `assets/js/main.js` | Keyboard operation, visible focus, accessible names, expanded state and no keyboard traps |
| Structure | Each page plus header/footer | Logical headings, landmarks, skip navigation, page title and language |
| Images | Page markup and image links | Useful text alternatives; empty alternatives for decoration |
| Layout | Site/page CSS | Contrast, 200% text resizing, 320 CSS-pixel reflow and text-spacing changes |
| Forms | Page markup and owner-provided handlers | Labels, instructions, associated errors and status announcements |
| Movement/media | Page scripts, sliders and content | Pause controls where required, captions and alternatives |
| CAPTCHA | Owner-provided login flow | Accessible alternative without weakening server-side protections |
| Documents | Linked PDFs and downloads | Reading order, headings, meaningful links and accessible document content |

A toolbox alone does not establish compliance. Inline CSS alone does not establish a failure. Evaluate the actual experience and checkpoint requirements.

## 8. Suggested first assignment

1. Run `home.php`, `contact.php`, `gallery.php` and one page using `includes/header.php`.
2. Record existing appearance and behavior before making changes.
3. Test the home menu and mobile toggle using only the keyboard.
4. Fix one confirmed navigation issue in the relevant include/script.
5. Test every page using that changed component.
6. Submit a small pull request with evidence before applying the same pattern elsewhere.

Keep content, course names, links and backend behavior unchanged unless the finding requires a reviewed change. Do not remove troublesome content to make a checker report fewer errors.

## 9. Testing and pull-request checklist

For every change, record what you actually tested:

- PHP syntax check: for example, `C:\xampp\php\php.exe -l home.php` on Windows; lint modified includes too.
- Apache preview with no new console/network errors.
- Desktop and mobile layout comparison.
- Keyboard-only navigation: Tab, Shift+Tab, Enter, Space and Escape where applicable.
- Screen-reader review, for example NVDA on Windows.
- Automated accessibility scan followed by manual review.
- Shared-component regression checks across the affected page list.
- Existing links and form behavior checked on the complete staging application where necessary.

Use this issue/PR format:

```text
Page/URL:
Affected files:
Reported checkpoint:
Problem and reproduction steps:
Change made:
Browsers/assistive technology tested:
Before/after evidence:
Remaining issues or missing dependencies:
Reviewer:
```

Commit work to a feature branch, for example `accessibility/navigation`, and request review. Do not deploy directly to production. Authentication, CSRF, CAPTCHA validation, session protection and rate limiting must remain in place.

## 10. Official references

- [GIGW accessibility guidelines](https://guidelines.india.gov.in/accessibility-guidelines-and-attributes/)
- [GIGW conformity matrix](https://guidelines.india.gov.in/annexure-ii-matrix-to-check-conformity/)
- [WCAG 2.1](https://www.w3.org/TR/WCAG21/)

Use the full checklist for acceptance. Ask the owner for approved policy text, accessibility contact details and any organizational requirements. Do not publish a compliance statement until the complete site, documents and application flows have been assessed.
