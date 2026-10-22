<?php define('CHUK_PUBLIC_PAGE', true); ?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Contact Us | Centre for HPC Upskilling &amp; Knowledge-sharing (C-HUK)</title>
    <meta content="Contact the Centre for HPC Upskilling &amp; Knowledge-sharing (C-HUK) at C-DAC Bengaluru for queries, feedback, and training program details." name="description">
    <meta content="C-HUK contact, C-DAC Bengaluru, HPC enquiry, feedback" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/C-HUK.png" rel="icon">
    <link href="assets/img/C-HUK.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Skip Link (GIGW 5.2.27) -->
    <a href="#main" class="skip-link">Skip to main content</a>

    <?php require __DIR__ . '/includes/header-contact.php'; ?>

    <main id="main">
        <h1 class="visually-hidden">Contact Us - Centre for HPC Upskilling &amp; Knowledge-sharing (C-HUK)</h1>

        <!-- Logos Header -->
        <div class="row"
            style="width: 100%; background: aliceblue; text-align: center; display: flex; justify-content: center; align-items: center; padding-top: 6%; margin: 0; padding-left: 0;">

            <div class="col-md-2 nopadding" style="padding-right: 0;">
                <a class="navbar-brand" href="https://nsmindia.in/" target="_blank" rel="noopener noreferrer" aria-label="National Supercomputing Mission (opens in new tab)">
                    <img src="assets/img/NSM-01.png" id="nixiImg1" alt="National Supercomputing Mission (NSM)" style="height: 100px; max-width: 100%; object-fit: contain;" />
                </a>
            </div>
            <div class="col-md-2 nopadding" style="padding-right: 0;">
                <a href="home.php">
                    <img class="img-responsive" src="assets/img/Logo C-HUK - Final.png" alt="Centre for HPC Upskilling &amp; Knowledge-sharing (C-HUK) Logo" style="height: 100px; max-width: 100%; object-fit: contain;" />
                </a>
            </div>
            <div class="col-md-2 nopadding" style="padding-right: 0;">
                <a class="navbar-brand" href="http://cdac.in/" target="_blank" rel="noopener noreferrer" aria-label="Centre for Development of Advanced Computing (opens in new tab)">
                    <img src="assets/img/cdac 1.png" id="cdacImg1" alt="Centre for Development of Advanced Computing (C-DAC)" style="height: 100px; max-width: 100%; object-fit: contain;" />
                </a>
            </div>
            <div class="col-md-2 nopadding" style="padding-right: 0;">
                <a class="navbar-brand" href="https://meity.gov.in/" target="_blank" rel="noopener noreferrer" aria-label="Ministry of Electronics and Information Technology (opens in new tab)">
                    <img src="assets/img/meity2.png" id="meityImg1" alt="Ministry of Electronics and Information Technology (MeitY)" style="height: 100px; max-width: 100%; object-fit: contain;" />
                </a>
            </div>
        </div>

        <section id="contact" class="contact" style="padding-top: 2%; justify-content: center;">
            <div class="container" data-aos="fade-up">

                <div class="section-title text-center">
                    <h2 style="padding-top: 2%; color: #124265;">
                        <img src="assets/img/msgicon.png" alt="" aria-hidden="true" style="height: 30px; width: 30px; margin-right: 8px;">
                        Your Feedback / Enquiry
                    </h2>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8 mt-4">
                        <form action="connect4.php" method="post" style="justify-content: center;">
                            <div class="row gy-3">
                                <div class="col-md-6 form-group">
                                    <label for="name" class="visually-hidden">Your Name</label>
                                    <input type="text" name="Uname" class="form-control" id="name" placeholder="Your Name" autocomplete="name" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="email" class="visually-hidden">Your Email</label>
                                    <input type="email" class="form-control" name="Email" id="email" placeholder="Your Email" autocomplete="email" required>
                                </div>
                                <div class="form-group col-12">
                                    <label for="subject" class="visually-hidden">Subject</label>
                                    <input type="text" class="form-control" name="Subject" id="subject" placeholder="Subject" required>
                                </div>
                                <div class="form-group col-12">
                                    <label for="message" class="visually-hidden">Message</label>
                                    <textarea class="form-control" name="Message" id="message" rows="5" placeholder="Message" required></textarea>
                                </div>
                                <div class="text-center col-12">
                                    <button class="btn btn-primary" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </section>
    </main>

    <?php require __DIR__ . '/includes/footer.php'; ?>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center" aria-label="Scroll back to top"><i class="bi bi-arrow-up-short" aria-hidden="true"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>
