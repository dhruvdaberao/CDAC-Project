<?php
define('CHUK_PUBLIC_PAGE', true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Login - Centre for HPC Upskilling &amp; Knowledge-sharing (C-HUK)</title>
  <meta content="Login portal for C-HUK trainees, educators, and administrators." name="description">

  <link href="assets/img/C-HUK.png" rel="icon">
  <link href="assets/img/C-HUK.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Raleway:400,600,700|Poppins:400,600" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(135deg, #f0f7fc 0%, #e8f1f8 100%);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      font-family: "Open Sans", sans-serif;
      margin: 0;
      padding: 0;
    }
    .skip-link {
      position: absolute;
      top: -100px;
      left: 50%;
      transform: translateX(-50%);
      background: #124265;
      color: #ffffff;
      padding: 10px 20px;
      font-weight: 700;
      font-size: 14px;
      border-radius: 0 0 8px 8px;
      z-index: 99999;
      text-decoration: none;
      transition: top 0.2s ease-in-out;
    }
    .skip-link:focus {
      top: 0;
    }
    .login-header {
      position: sticky;
      top: 0;
      z-index: 1020;
      background: #ffffff;
      border-bottom: 1px solid #e2e8f0;
      box-shadow: 0 2px 10px rgba(18, 66, 101, 0.06);
    }
    .login-container {
      width: 100%;
      max-width: 420px;
      margin: auto;
      padding: 32px 28px;
      background: #ffffff;
      border-radius: 14px;
      box-shadow: 0 10px 30px rgba(18, 66, 101, 0.08);
      border: 1px solid #e2e8f0;
    }
    .login-logo {
      text-align: center;
      margin-bottom: 20px;
    }
    .login-logo img {
      height: 70px;
      max-width: 100%;
      object-fit: contain;
    }
    .login-title {
      font-size: 22px;
      font-weight: 700;
      color: #124265;
      text-align: center;
      margin-bottom: 6px;
    }
    .login-subtitle {
      font-size: 13.5px;
      color: #64748b;
      text-align: center;
      margin-bottom: 22px;
    }
    .form-label {
      font-size: 13.5px;
      font-weight: 600;
      color: #124265;
      margin-bottom: 6px;
    }
    .form-control {
      border: 1px solid #cbd5e1;
      border-radius: 8px;
      padding: 10px 14px;
      font-size: 14px;
      color: #1e293b;
      transition: border-color 0.2s, box-shadow 0.2s;
    }
    .form-control:focus {
      border-color: #2487ce;
      box-shadow: 0 0 0 3px rgba(36, 135, 206, 0.2);
      outline: none;
    }
    .btn-login {
      background-color: #124265;
      border: 1px solid #124265;
      color: #ffffff;
      font-weight: 600;
      padding: 10px 16px;
      border-radius: 8px;
      width: 100%;
      font-size: 15px;
      transition: all 0.2s ease;
    }
    .btn-login:hover {
      background-color: #2487ce;
      border-color: #2487ce;
      color: #ffffff;
      transform: translateY(-1px);
      box-shadow: 0 4px 12px rgba(36, 135, 206, 0.25);
    }
    .btn-back-home {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      background-color: #f8fafc;
      color: #124265;
      font-size: 13.5px;
      font-weight: 600;
      padding: 7px 16px;
      border-radius: 6px;
      border: 1px solid #cbd5e1;
      text-decoration: none;
      transition: all 0.2s ease;
    }
    .btn-back-home:hover {
      background-color: #124265;
      border-color: #124265;
      color: #ffffff;
      text-decoration: none;
    }
    .btn-back-home i {
      font-size: 15px;
      transition: transform 0.2s ease;
    }
    .btn-back-home:hover i {
      transform: translateX(-3px);
    }
    .back-home {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 5px;
      text-align: center;
      width: 100%;
      margin-top: 18px;
      font-size: 13px;
      color: #64748b;
      text-decoration: none;
      font-weight: 500;
      transition: color 0.2s ease;
    }
    .back-home:hover {
      color: #124265;
      text-decoration: underline;
    }
    .login-footer {
      background: #ffffff;
      border-top: 1px solid #e2e8f0;
      font-size: 12.5px;
      color: #64748b;
      padding: 14px 20px;
    }

    /* Screen height & mobile responsiveness */
    @media (max-width: 576px) {
      .login-header {
        padding-top: 10px !important;
        padding-bottom: 10px !important;
      }
      .login-header img {
        height: 40px !important;
      }
      .btn-back-home {
        padding: 5px 12px;
        font-size: 12.5px;
      }
      .login-container {
        padding: 22px 18px;
        border-radius: 12px;
      }
      .login-logo img {
        height: 55px;
      }
      .login-title {
        font-size: 20px;
      }
    }
    @media (max-height: 750px) {
      .login-container {
        padding: 20px 24px;
      }
      .login-logo {
        margin-bottom: 10px;
      }
      .login-logo img {
        height: 50px;
      }
      .login-subtitle {
        margin-bottom: 14px;
      }
      .mb-3 {
        margin-bottom: 0.75rem !important;
      }
      .back-home {
        margin-top: 12px;
      }
    }
  </style>
</head>
<body>
  <a href="#login-main" class="skip-link">Skip to login form</a>

  <header class="login-header py-3 px-4">
    <div class="container d-flex justify-content-between align-items-center">
      <a href="home.php" class="d-flex align-items-center text-decoration-none">
        <img src="assets/img/Logo C-HUK - Final.png" alt="C-HUK Logo" style="height: 48px; object-fit: contain;">
      </a>
      <a href="home.php" class="btn-back-home">
        <i class="bi bi-arrow-left"></i>
        <span>Back to Home</span>
      </a>
    </div>
  </header>

  <main id="login-main" class="container d-flex align-items-center justify-content-center flex-grow-1 py-3">
    <div class="login-container">
      <div class="login-logo">
        <img src="assets/img/Logo C-HUK - Final.png" alt="C-HUK Logo">
      </div>
      <h1 class="login-title">Portal Login</h1>
      <p class="login-subtitle">Sign in to access your C-HUK training portal</p>

      <form action="#" method="post" novalidate>
        <div class="mb-3">
          <label for="username" class="form-label">Username or Email</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username or email" required autocomplete="username">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required autocomplete="current-password">
        </div>
        <div class="d-flex justify-content-between align-items-center mb-3">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="rememberMe">
            <label class="form-check-label" for="rememberMe" style="font-size: 13px; color: #475569;">Remember me</label>
          </div>
          <a href="#" style="font-size: 13px; color: #2487ce; text-decoration: none; font-weight: 500;">Forgot password?</a>
        </div>
        <button type="submit" class="btn btn-login">Sign In</button>
      </form>

      <a href="home.php" class="back-home">
        <i class="bi bi-arrow-left"></i> Return to Homepage
      </a>
    </div>
  </main>

  <footer class="login-footer text-center">
    &copy; <?= date('Y') ?> Centre for HPC Upskilling &amp; Knowledge-sharing (C-HUK), C-DAC. All rights reserved.
  </footer>
</body>
</html>
