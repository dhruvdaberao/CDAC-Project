<?php define('CHUK_PUBLIC_PAGE', true); ?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AICTE Master Trainer Programme (MTP) - C-HUK</title>
  <meta content="AICTE Master Trainer Programme on High Performance Computing conducted by C-DAC and NSM." name="description">
  <meta content="AICTE, MTP, Master Trainer Programme, HPC, C-DAC, NSM, Supercomputing" name="keywords">
  <link href="assets/img/C-HUK.png" rel="icon">
  <link href="assets/img/C-HUK.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <link rel="stylesheet" href="assets/css/extracted/mtp-1.css">
  <link rel="stylesheet" href="assets/css/extracted/mtp-2.css">
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
    <section class="relative py-8 bg-gradient-to-r from-blue-50 to-blue-100" aria-label="Page Header">
      <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-center items-center">
          <h1 class="text-4xl font-bold text-blue-600">
            AICTE Master Trainer Programme
          </h1>
        </div>
      </div>
    </section>

    <!-- Content Container -->
    <div class="container1 mx-auto px-4 py-8">
      <!-- Overview Section -->
      <section id="overview" aria-labelledby="overview-heading" class="mb-12">
        <div class="overview-flex flex flex-wrap md:flex-nowrap gap-8 items-center">
          <div class="overview-text md:w-2/3">
            <h2 id="overview-heading" class="text-2xl font-bold mb-4 text-blue-700">Overview</h2>
            <p class="mb-4 text-justify leading-relaxed">
              The National Supercomputing Mission (NSM) is Government of India’s initiative for building capacity and capability in the area of High Performance Computing (HPC) in the country and is being implemented by Centre for Development of Advanced Computing (C-DAC). Generation of HPC-aware manpower has been one of the key deliverables of the NSM-HRD mission. Various training initiatives related to HPC involving short-term, medium-term and formal education programs have been conducted since the mission was started.
            </p>
            <p class="mb-4 text-justify leading-relaxed">
              All India Council for Technical Education (AICTE) is the statutory body and national-level council for technical education under the Department of Higher Education, Ministry of Education, Government of India. AICTE is involved in planning and coordinated development of technical education throughout India and promoting qualitative improvements in technical education.
            </p>
            <p class="mb-4 text-justify leading-relaxed">
              Considering the need for knowledge of HPC for faculties, Centre for Development of Advanced Computing (C-DAC) proposes a master trainer program providing a unique opportunity to train faculties, and contribute to the advancement of education in alignment with global advancement. This initiative aims to enhance the outreach of HPC education to the grassroots level, ensuring broader accessibility and engagement with a diverse audience.
            </p>
          </div>
          <div class="overview-image md:w-1/3 flex justify-center">
            <img src="assets/img/hpc.png" alt="Illustration of High Performance Computing ecosystem" class="max-w-full h-auto rounded-lg shadow-md">
          </div>
        </div>
      </section>

      <!-- Objective Section -->
      <section id="objective" aria-labelledby="objective-heading" class="mb-12">
        <div class="overview-flex flex flex-wrap md:flex-nowrap gap-8 items-center">
          <div class="overview-image md:w-1/3 flex justify-center order-2 md:order-1">
            <img src="assets/img/objective.png" alt="Illustration of Master Trainer Programme learning objectives" class="max-w-full h-auto rounded-lg shadow-md">
          </div>
          <div class="overview-text md:w-2/3 order-1 md:order-2">
            <h2 id="objective-heading" class="text-2xl font-bold mb-4 text-blue-700">Objective</h2>
            <p class="mb-4 text-justify leading-relaxed">
              The objective of a Master Trainer Program on HPC is to equip participants with advanced knowledge, skills, and expertise in high-performance computing. This specialized program aims to produce certified trainers who can effectively educate and mentor others in diverse aspects of HPC. Key objectives include:
            </p>
            <ul class="list-disc pl-5 space-y-2 text-justify">
              <li><strong>In-depth Understanding of HPC Concepts:</strong> Provide comprehensive mastery of foundational theories, architectures, and principles underlying modern supercomputing.</li>
              <li><strong>Technical Proficiency:</strong> Develop hands-on competencies in designing, configuring, and optimizing large-scale compute clusters and applications.</li>
              <li><strong>Advanced Programming and Parallel Computing:</strong> Impart advanced techniques in MPI, OpenMP, CUDA, and hybrid programming for extreme scalability.</li>
              <li><strong>Optimization Techniques:</strong> Train educators on algorithmic efficiency, memory hierarchies, profiling, and benchmarking on HPC platforms.</li>
              <li><strong>Performance Monitoring and Analysis:</strong> Provide practical expertise with tools for tracing, performance debugging, and bottleneck identification.</li>
              <li><strong>Best Practices and Case Studies:</strong> Share real-world deployments across molecular dynamics, weather forecasting, computational fluid dynamics, and AI workloads.</li>
              <li><strong>Pedagogy and Knowledge Transfer:</strong> Cultivate effective teaching methods to empower faculty to train their students and colleagues effectively.</li>
            </ul>
          </div>
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
