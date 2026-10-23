<?php if (!defined('CHUK_PUBLIC_PAGE')) { http_response_code(404); exit; } ?><nav id="navbar" class="navbar" aria-label="Main Navigation">

      <ul>
        <li><a class="nav-link scrollto active" href="home.php">Home</a></li>
        <li class="dropdown">
          <a href="#" class="nav-text" role="button" aria-expanded="false" aria-haspopup="true"><span>About</span> <i class="bi bi-chevron-down" aria-hidden="true"></i></a>
          <ul>
            <li><a href="#about">C-HUK</a></li>
            <li><a href="#param">PARAM</a></li>
            <li><a href="#team">Team</a></li>
            <li><a href="silchar_page.php">CDAC CINE</a></li>
            <li><a href="testimonials.php">Testimonials</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#services" class="nav-text" role="button" aria-expanded="false" aria-haspopup="true"><span>Resources</span> <i class="bi bi-chevron-down" aria-hidden="true"></i></a>
          <ul>
            <li><a href="#hero">HPCP</a></li>
            <li><a href="#hero">FDP</a></li>
            <li><a href="#hero">BLP</a></li>
            <li><a href="outreach_report.php">Reports</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="nav-text" role="button" aria-expanded="false" aria-haspopup="true"><span>Event Calender</span> <i class="bi bi-chevron-down" aria-hidden="true"></i></a>
          <ul>
            <li><a href="#Eventcalender">Upcoming Events</a></li>
            <li><a href="#Eventcalender">Past Events</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#team" class="nav-text" role="button" aria-expanded="false" aria-haspopup="true"><span>News &amp; Events</span> <i class="bi bi-chevron-down" aria-hidden="true"></i></a>
          <ul>
            <li><a href="media.php">Media</a></li>
            <li><a href="gallery.php">Gallery</a></li>
          </ul>
        </li>
        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        <li><a class="nav-link scrollto" href="/acts/industrial_visit_request">Industrial Visit</a></li>
        <li><a class="nav-link scrollto" href="https://supercomputingindia.org" target="_blank" rel="noopener noreferrer">SCI2025 <i class="bi bi-box-arrow-up-right ms-1" style="font-size: 11px;" aria-hidden="true"></i> <span class="visually-hidden">(opens in new tab)</span></a></li>

        <li class="login-button">
          <a class="getstarted scrollto" href="index.php">Login</a>
        </li>
      </ul>

      <!-- Skip to Main Content Floating Shortcut (Outside card, left of accessibility icon) -->
      <a href="#hero" id="floatingSkipBtn" class="floating-skip-btn" title="Skip navigation and jump to main content" aria-label="Skip to main content">
          <i class="bi bi-box-arrow-in-down" aria-hidden="true"></i>
          <span>Skip to Content</span>
      </a>

      <button type="button" id="accessibility-link" class="accessibility-toggle-btn" aria-label="Open Accessibility Toolbox" aria-expanded="false" aria-controls="accessibility-menu" title="Accessibility Toolbox">
          <svg class="a11y-icon" viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <circle cx="12" cy="4.5" r="2.5" fill="currentColor"/>
              <path d="M4 9.5c3.5 1.5 6.5 1.5 8 1.5s4.5 0 8-1.5"/>
              <path d="M12 11v5"/>
              <path d="M8.5 21l3.5-5 3.5 5"/>
          </svg>
          <span class="visually-hidden">Accessibility Toolbox</span>
      </button>
  
      <div class="accessibility-menu" id="accessibility-menu" role="region" aria-label="Accessibility Toolbox" aria-hidden="true">
          <div class="a11y-header">
              <div class="a11y-header-left">
                  <i class="bi bi-universal-access a11y-header-icon" aria-hidden="true"></i>
                  <span class="toolbox-title">Accessibility Tools</span>
              </div>
              <div class="a11y-header-actions">
                  <button type="button" class="btn-quick-reset" id="headerResetSettings" aria-label="Reset all accessibility settings" title="Reset all settings to default">
                      <i class="bi bi-arrow-counterclockwise" aria-hidden="true"></i> Reset
                  </button>
                  <button type="button" class="close-toolbox-btn" id="closeAccessibilityMenu" aria-label="Close Accessibility Toolbox">&times;</button>
              </div>
          </div>

          <div class="a11y-body">
              <div class="a11y-section">
                  <span class="toolbox-subtitle"><i class="bi bi-type" aria-hidden="true"></i> Text Size</span>
                  <div class="a11y-font-group">
                      <button type="button" class="a11y-btn" id="decreaseFontSize" aria-label="Decrease text size" title="Smaller font (-15%)">
                          <i class="bi bi-dash-lg" aria-hidden="true"></i> A-
                      </button>
                      <button type="button" class="a11y-btn active" id="resetFontSize" aria-label="Reset text size to default" title="Default font size (100%)">
                          <i class="bi bi-arrow-counterclockwise" aria-hidden="true"></i> <span id="fontScalePct">100%</span>
                      </button>
                      <button type="button" class="a11y-btn" id="increaseFontSize" aria-label="Increase text size" title="Larger font (+15% / +30%)">
                          <i class="bi bi-plus-lg" aria-hidden="true"></i> A+
                      </button>
                  </div>
              </div>

              <div class="a11y-section">
                  <span class="toolbox-subtitle"><i class="bi bi-palette" aria-hidden="true"></i> Color &amp; Contrast</span>
                  <div class="a11y-grid-2">
                      <button type="button" class="a11y-btn" id="brightContrast" title="High contrast mode">
                          <i class="bi bi-brightness-high-fill" aria-hidden="true"></i> High Contrast
                      </button>
                      <button type="button" class="a11y-btn" id="reverseContrast" title="Invert / Dark theme">
                          <i class="bi bi-moon-stars-fill" aria-hidden="true"></i> Dark / Invert
                      </button>
                      <button type="button" class="a11y-btn a11y-col-span-2" id="uncoloredDisplay" title="Monochrome grayscale view">
                          <i class="bi bi-circle-half" aria-hidden="true"></i> Grayscale
                      </button>
                  </div>
              </div>

              <div class="a11y-section">
                  <span class="toolbox-subtitle"><i class="bi bi-eye" aria-hidden="true"></i> Highlight Content</span>
                  <div class="a11y-grid-2">
                      <button type="button" class="a11y-btn" id="underlineLinks" title="Underline hyperlinks">
                          <i class="bi bi-link-45deg" aria-hidden="true"></i> Links
                      </button>
                      <button type="button" class="a11y-btn" id="underlineHeaders" title="Underline section headings">
                          <i class="bi bi-type-h1" aria-hidden="true"></i> Headers
                      </button>
                      <button type="button" class="a11y-btn a11y-col-span-2" id="highlightImages" title="Highlight image borders">
                          <i class="bi bi-image" aria-hidden="true"></i> Highlight Images
                      </button>
                  </div>
              </div>

              <div class="a11y-section">
                  <span class="toolbox-subtitle"><i class="bi bi-cursor" aria-hidden="true"></i> Cursor</span>
                  <div class="a11y-grid-2">
                      <button type="button" class="a11y-btn" id="bigWhiteCursor" title="Large white cursor pointer">
                          <i class="bi bi-cursor-fill" aria-hidden="true"></i> White Cursor
                      </button>
                      <button type="button" class="a11y-btn" id="bigBlackCursor" title="Large black cursor pointer">
                          <i class="bi bi-cursor" aria-hidden="true"></i> Black Cursor
                      </button>
                  </div>
              </div>

              <div class="a11y-section">
                  <span class="toolbox-subtitle"><i class="bi bi-aspect-ratio" aria-hidden="true"></i> Page Zoom</span>
                  <div class="a11y-grid-2">
                      <button type="button" class="a11y-btn" id="zoomPageIn" title="Zoom in page (+10%)">
                          <i class="bi bi-zoom-in" aria-hidden="true"></i> Zoom In (+)
                      </button>
                      <button type="button" class="a11y-btn" id="zoomPageOut" title="Zoom out page (-10%)">
                          <i class="bi bi-zoom-out" aria-hidden="true"></i> Zoom Out (-)
                      </button>
                      <button type="button" class="a11y-btn a11y-col-span-2 active" id="zoomPageReset" title="Reset page zoom to 100%">
                          <i class="bi bi-arrow-counterclockwise" aria-hidden="true"></i> Default Zoom (<span id="zoomScalePct">100%</span>)
                      </button>
                  </div>
              </div>

              <div class="a11y-footer">
                  <button type="button" class="a11y-reset-all-btn" id="resetSettings" title="Reset all accessibility settings to default">
                      <i class="bi bi-arrow-counterclockwise" aria-hidden="true"></i> Reset All Settings
                  </button>
              </div>
          </div>
      </div>
      <button type="button" class="mobile-nav-toggle" aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="navbar">
        <i class="bi bi-list" aria-hidden="true"></i>
      </button>
    </nav>