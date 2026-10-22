<?php if (!defined('CHUK_PUBLIC_PAGE')) { http_response_code(404); exit; } ?><nav id="navbar" class="navbar" aria-label="Main Navigation">
    <ul>
        <li style="font-weight: bold; font-size: 25;"><a class="nav-link scrollto" href="home.php">Home</a></li>
        <li class="dropdown" style="font-weight: bold; font-size: 25;">
            <a href="#" class="nav-text" role="button" aria-expanded="false" aria-haspopup="true"><span>About</span> <i class="bi bi-chevron-down" aria-hidden="true"></i></a>
            <ul>
                <li><a href="home.php#about">C-HUK</a></li>
                <li><a href="home.php#param">PARAM</a></li>
                <li><a href="home.php#team">Team</a></li>
                <li><a href="testimonials.php">Testimonials</a></li>
            </ul>
        </li>
        <li class="dropdown" style="font-weight: bold; font-size: 25;">
            <a href="#services" class="nav-text active" role="button" aria-expanded="false" aria-haspopup="true"><span>Resources</span> <i class="bi bi-chevron-down" aria-hidden="true"></i></a>
            <ul>
                <li><a href="cbp.php" class="active">HPCP</a></li>
                <li><a href="fdp.php">FDP</a></li>
                <li><a href="blp.php">BLP</a></li>
                <li><a href="outreach_report.php">Reports</a></li>
            </ul>
        </li>
        <li class="dropdown" style="font-weight: bold; font-size: 25;">
            <a href="#" class="nav-text" role="button" aria-expanded="false" aria-haspopup="true"><span>Event Calender</span> <i class="bi bi-chevron-down" aria-hidden="true"></i></a>
            <ul>
                <li><a href="home.php#Eventcalender">Upcoming Events</a></li>
                <li><a href="home.php#Eventcalender">Past Events</a></li>
            </ul>
        </li>
        <li class="dropdown" style="font-weight: bold; font-size: 25;">
            <a href="#team" class="nav-text" role="button" aria-expanded="false" aria-haspopup="true"><span>News &amp; Events</span> <i class="bi bi-chevron-down" aria-hidden="true"></i></a>
            <ul>
                <li><a href="media.php">Media</a></li>
                <li><a href="gallery.php">Gallery</a></li>
            </ul>
        </li>
        <li style="font-weight: bold; font-size: 25;"><a class="nav-link scrollto" href="home.php#contact">Contact</a></li>
        <li style="font-weight: bold; font-size: 25;"><a href="faq.php">FAQ</a></li>

        <li class="login-button" style="margin-left: auto; font-weight: bold; font-size: 25;">
            <a class="getstarted scrollto" href="index.php">Login</a>
        </li>
    </ul>
    <button type="button" class="mobile-nav-toggle" aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="navbar">
        <i class="bi bi-list" aria-hidden="true"></i>
    </button>
</nav>