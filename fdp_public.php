<?php define('CHUK_PUBLIC_PAGE', true); ?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Faculty Development Programme (FDP) - C-HUK</title>
  <meta content="5-Day Faculty Development Programme (FDP) on High Performance Computing (HPC) by C-HUK and C-DAC Bangalore." name="description">
  <meta content="FDP, Faculty Development Programme, HPC, C-DAC Bangalore, NSM, Supercomputing" name="keywords">
  <link href="assets/img/C-HUK.png" rel="icon">
  <link href="assets/img/C-HUK.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <link rel="stylesheet" href="assets/css/extracted/fdp_page-1.css">
  <link rel="stylesheet" href="assets/css/extracted/fdp_page-2.css">
  <link rel="stylesheet" href="assets/css/extracted/fdp_page-3.css">
</head>
<body class="bg-gradient-to-b from-blue-50 to-white text-gray-900">
  <!-- Skip to main content link for keyboard and screen reader accessibility -->
  <a href="#main" class="skip-link">Skip to main content</a>

  <!-- Header & Navigation -->
  <?php require __DIR__ . '/includes/header-fdp_page.php'; ?>

  <!-- Partner Logos Banner -->
  <header class="w-full bg-blue-50 flex justify-center items-center py-8" role="region" aria-label="Partner Organizations" style="padding-top: 5rem;">
    <div class="max-w-6xl mx-auto px-4">
      <div class="flex flex-wrap justify-center items-center gap-12">
        <!-- NSM Logo -->
        <a href="https://nsmindia.in/" target="_blank" rel="noopener noreferrer" class="flex-shrink-0 transition-transform duration-300 hover:scale-105" aria-label="National Supercomputing Mission (NSM)">
          <img src="assets/img/NSM-01.png" alt="National Supercomputing Mission (NSM)" class="h-24 w-auto object-contain">
        </a>

        <!-- C-HUK Logo -->
        <a href="home.php" class="flex-shrink-0 transition-transform duration-300 hover:scale-105" aria-label="Centre for HPC Upskilling &amp; Knowledge-sharing (C-HUK)">
          <img src="assets/img/Logo C-HUK - Final.png" alt="Centre for HPC Upskilling &amp; Knowledge-sharing (C-HUK)" class="h-24 w-auto object-contain">
        </a>

        <!-- CDAC Logo -->
        <a href="https://cdac.in/" target="_blank" rel="noopener noreferrer" class="flex-shrink-0 transition-transform duration-300 hover:scale-105" aria-label="Centre for Development of Advanced Computing (C-DAC)">
          <img src="assets/img/cdac 1.png" alt="Centre for Development of Advanced Computing (C-DAC)" class="h-24 w-auto object-contain">
        </a>

        <!-- MeitY Logo -->
        <a href="https://meity.gov.in/" target="_blank" rel="noopener noreferrer" class="flex-shrink-0 transition-transform duration-300 hover:scale-105" aria-label="Ministry of Electronics and Information Technology (MeitY)">
          <img src="assets/img/meity2.png" alt="Ministry of Electronics and Information Technology (MeitY)" class="h-24 w-auto object-contain">
        </a>
      </div>
    </div>
  </header>

  <main id="main">
    <section class="relative py-8 bg-gradient-to-r from-blue-50 to-blue-100" aria-label="Page Title">
      <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-center items-center">
          <h1 class="text-4xl font-bold text-blue-600">
            5-Day Faculty Development Programme (FDP)
          </h1>
        </div>
      </div>
    </section>

    <!-- Content -->
    <div class="container1 mx-auto px-4 py-8">
      <!-- Overview -->
      <section id="overview" aria-labelledby="fdp-overview-heading" class="mb-12">
        <div class="overview-flex flex flex-wrap md:flex-nowrap gap-8 items-center">
          <div class="overview-text md:w-2/3">
            <h2 id="fdp-overview-heading" class="text-2xl font-bold mb-4 text-blue-700">Overview</h2>
            <p class="mb-4 text-justify leading-relaxed">
              High Performance Computing (HPC) plays an important role in both scientific advancement and economic competitiveness of a nation — making production of scientific and industrial solutions faster, less expensive, and of higher quality. HPC is a key component in many applications including designing of vehicles, aerospace engineering, drug discovery, renewable energy extraction, and atmospheric weather modeling. The supercomputing systems and facilities of C-DAC are used to solve computationally challenging problems in several areas of national and practical significance.
            </p>
            <p class="mb-4 text-justify leading-relaxed">
              C-DAC Bengaluru, under the aegis of the Ministry of Electronics &amp; Information Technology (MeitY), Govt. of India, has established the Centre for HPC Upskilling and Knowledge-sharing (C-HUK) to empower candidates belonging to SC, ST, and Women categories with knowledge and proficiency in HPC, AI, Embedded Systems, and Cyber Security as part of the National Supercomputing Mission (NSM).
            </p>
            <p class="mb-4 text-justify leading-relaxed">
              The Centre creates capabilities through 6-month Capacity Building programmes (CBP) and 5-day Faculty Development Programmes (FDPs) for faculty members from universities and engineering institutions across India, conducted in Bengaluru and the North East in offline mode.
            </p>
          </div>
          <div class="overview-image md:w-1/3 flex justify-center">
            <img src="assets/img/hpc.png" alt="Diagram illustrating the High Performance Computing ecosystem and workflow" class="max-w-full h-auto rounded-lg shadow-md">
          </div>
        </div>
      </section>

      <!-- Objective -->
      <section id="objective" aria-labelledby="fdp-objective-heading" class="mb-12">
        <div class="overview-flex flex flex-wrap md:flex-nowrap gap-8 items-center">
          <div class="overview-image md:w-1/3 flex justify-center order-2 md:order-1">
            <img src="assets/img/objective.png" alt="Illustration representing Faculty Development Programme training goals" class="max-w-full h-auto rounded-lg shadow-md">
          </div>
          <div class="overview-text md:w-2/3 order-1 md:order-2">
            <h2 id="fdp-objective-heading" class="text-2xl font-bold mb-4 text-blue-700">Objective</h2>
            <p class="mb-4 text-justify leading-relaxed">
              The primary objective of the FDP is to enhance and upgrade the pedagogical and technical expertise of faculty members by introducing them to High Performance Computing and related emerging technologies. Selected participants gain comprehensive theoretical knowledge and hands-on laboratory experience in HPC architectures, parallel algorithms, and their convergence with Artificial Intelligence, Embedded Systems, and Cyber Security.
            </p>
          </div>
        </div>
      </section>

      <!-- Salient Features -->
      <section id="features" aria-labelledby="fdp-features-heading" class="py-6 mb-12">
        <h2 id="fdp-features-heading" class="text-2xl font-bold mb-6 text-blue-700">Salient Features of FDP</h2>
        <ol class="space-y-4">
          <li class="flex items-center space-x-4">
            <span class="flex items-center justify-center w-10 h-10 rounded-full feature-gradient text-gray-800 font-bold text-lg shadow flex-shrink-0" aria-hidden="true">1</span>
            <div class="flex-1 feature-gradient text-gray-900 rounded-lg px-6 py-3 shadow-md">
              A total of 300 faculty members across up to 15 FDP batches will be trained over 24 months.
            </div>
          </li>
          <li class="flex items-center space-x-4">
            <span class="flex items-center justify-center w-10 h-10 rounded-full feature-gradient text-gray-800 font-bold text-lg shadow flex-shrink-0" aria-hidden="true">2</span>
            <div class="flex-1 feature-gradient text-gray-900 rounded-lg px-6 py-3 shadow-md">
              Faculty members must belong to SC, ST, or Women categories.
            </div>
          </li>
          <li class="flex items-center space-x-4">
            <span class="flex items-center justify-center w-10 h-10 rounded-full feature-gradient text-gray-800 font-bold text-lg shadow flex-shrink-0" aria-hidden="true">3</span>
            <div class="flex-1 feature-gradient text-gray-900 rounded-lg px-6 py-3 shadow-md">
              Women faculty members can be from any category.
            </div>
          </li>
          <li class="flex items-center space-x-4">
            <span class="flex items-center justify-center w-10 h-10 rounded-full feature-gradient text-gray-800 font-bold text-lg shadow flex-shrink-0" aria-hidden="true">4</span>
            <div class="flex-1 feature-gradient text-gray-900 rounded-lg px-6 py-3 shadow-md">
              Each FDP batch will have a minimum of 20 faculty members.
            </div>
          </li>
          <li class="flex items-center space-x-4">
            <span class="flex items-center justify-center w-10 h-10 rounded-full feature-gradient text-gray-800 font-bold text-lg shadow flex-shrink-0" aria-hidden="true">5</span>
            <div class="flex-1 feature-gradient text-gray-900 rounded-lg px-6 py-3 shadow-md">
              Hands-on practical training conducted on C-DAC’s PARAM Supercomputing Facility.
            </div>
          </li>
          <li class="flex items-center space-x-4">
            <span class="flex items-center justify-center w-10 h-10 rounded-full feature-gradient text-gray-800 font-bold text-lg shadow flex-shrink-0" aria-hidden="true">6</span>
            <div class="flex-1 feature-gradient text-gray-900 rounded-lg px-6 py-3 shadow-md">
              Complimentary registration kit and course study material are provided.
            </div>
          </li>
          <li class="flex items-center space-x-4">
            <span class="flex items-center justify-center w-10 h-10 rounded-full feature-gradient text-gray-800 font-bold text-lg shadow flex-shrink-0" aria-hidden="true">7</span>
            <div class="flex-1 feature-gradient text-gray-900 rounded-lg px-6 py-3 shadow-md">
              No registration or training fee is charged to participants.
            </div>
          </li>
          <li class="flex items-center space-x-4">
            <span class="flex items-center justify-center w-10 h-10 rounded-full feature-gradient text-gray-800 font-bold text-lg shadow flex-shrink-0" aria-hidden="true">8</span>
            <div class="flex-1 feature-gradient text-gray-900 rounded-lg px-6 py-3 shadow-md">
              Boarding, lodging, and travel expenses are covered per mission guidelines.
            </div>
          </li>
        </ol>
      </section>

      <!-- Eligibility Criteria -->
      <section id="eligibility" aria-labelledby="fdp-eligibility-heading" class="py-6 mb-12">
        <h2 id="fdp-eligibility-heading" class="text-2xl font-bold mb-4 text-blue-700">Eligibility Criteria</h2>
        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
          <ul class="space-y-4">
            <li class="flex items-start">
              <i class="fas fa-check-circle text-blue-600 mt-1 mr-3 flex-shrink-0" aria-hidden="true"></i>
              <p class="text-gray-700 leading-relaxed">
                Faculty members belonging to SC, ST, and Women categories who are working in Graduate, Post Graduate, Degree, Diploma, and Engineering colleges with a qualifying degree in IT, Computer Science, Electronics, Telecommunications, Electrical, or Instrumentation from recognized universities and institutions across the country.
              </p>
            </li>
          </ul>
        </div>
      </section>
    </div>
  </main>

  <!-- Footer -->
  <footer role="contentinfo" class="bg-gray-50 border-t border-gray-200 py-8">
    <div class="flex justify-center items-center space-x-6 mb-4" id="media">
      <!-- Twitter/X -->
      <a href="https://twitter.com/CDACBengaluru" target="_blank" rel="noopener noreferrer" class="transform hover:scale-110 transition-transform duration-300" aria-label="Follow C-DAC Bangalore on X">
        <img src="assets/img/Twitter-new-logo.jpeg" alt="" aria-hidden="true" class="w-8 h-8 rounded">
      </a>
      <!-- Facebook -->
      <a href="https://www.facebook.com/cdacbangalore" target="_blank" rel="noopener noreferrer" class="transform hover:scale-110 transition-transform duration-300" aria-label="Follow C-DAC Bangalore on Facebook">
        <i class="fab fa-facebook text-3xl text-blue-600" aria-hidden="true"></i>
      </a>
      <!-- YouTube -->
      <a href="https://www.youtube.com/channel/UCh-fxwvQbIeAxgE7sallBvg" target="_blank" rel="noopener noreferrer" class="transform hover:scale-110 transition-transform duration-300" aria-label="Follow C-DAC Bangalore on YouTube">
        <i class="fab fa-youtube text-3xl text-red-600" aria-hidden="true"></i>
      </a>
      <!-- LinkedIn -->
      <a href="https://in.linkedin.com/school/cdac-bangalore" target="_blank" rel="noopener noreferrer" class="transform hover:scale-110 transition-transform duration-300" aria-label="Follow C-DAC Bangalore on LinkedIn">
        <i class="fab fa-linkedin text-3xl text-blue-700" aria-hidden="true"></i>
      </a>
    </div>
    <p class="text-center text-sm text-gray-500">&copy; 2026 C-DAC Bangalore. All rights reserved.</p>
  </footer>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>
