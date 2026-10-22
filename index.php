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
      justify-content: space-between;
      font-family: "Open Sans", sans-serif;
    }
    .login-container {
      max-width: 440px;
      margin: 40px auto;
      padding: 30px;
      background: #ffffff;
      border-radius: 16px;
      box-shadow: 0 12px 36px rgba(18, 66, 101, 0.12);
      border: 1px solid #e1e8ed;
    }
    .login-logo {
      text-align: center;
      margin-bottom: 25px;
    }
    .login-logo img {
      height: 75px;
      object-fit: contain;
    }
    .login-title {
      font-size: 22px;
      font-weight: 700;
      color: #124265;
      text-align: center;
      margin-bottom: 8px;
    }
    .login-subtitle {
      font-size: 14px;
      color: #6c757d;
      text-align: center;
      margin-bottom: 25px;
    }
    .form-control:focus {
      border-color: #2487ce;
      box-shadow: 0 0 0 0.2rem rgba(36, 135, 206, 0.25);
    }
    .btn-login {
      background-color: #2487ce;
      border-color: #2487ce;
      color: #ffffff;
      font-weight: 600;
      padding: 10px;
      border-radius: 8px;
      width: 100%;
      transition: background-color 0.2s;
    }
    .btn-login:hover {
      background-color: #1b6da7;
      color: #ffffff;
    }
    .back-home {
      display: block;
      text-align: center;
      margin-top: 20px;
      font-size: 14px;
      color: #124265;
      text-decoration: none;
      font-weight: 600;
    }
    .back-home:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <a href="#login-main" class="skip-link">Skip to login form</a>

  <header class="py-3 px-4 bg-white border-bottom">
    <div class="container d-flex justify-content-between align-items-center">
      <a href="home.php" class="d-flex align-items-center text-decoration-none">
        <img src="assets/img/Logo C-HUK - Final.png" alt="C-HUK Logo" style="height: 50px;">
      </a>
      <a href="home.php" class="btn btn-outline-primary btn-sm">&larr; Back to Home</a>
    </div>
  </header>

  <main id="login-main" class="container my-auto">
    <div class="login-container">
      <div class="login-logo">
        <img src="assets/img/Logo C-HUK - Final.png" alt="C-HUK Logo">
      </div>
      <h1 class="login-title">Portal Login</h1>
      <p class="login-subtitle">Sign in to access your C-HUK training portal</p>

      <form action="#" method="post" novalidate>
        <div class="mb-3">
          <label for="username" class="form-label fw-bold" style="color: #124265; font-size: 14px;">Username or Email</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username or email" required autocomplete="username">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label fw-bold" style="color: #124265; font-size: 14px;">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required autocomplete="current-password">
        </div>
        <div class="d-flex justify-content-between align-items-center mb-3">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="rememberMe">
            <label class="form-check-label" for="rememberMe" style="font-size: 13px; color: #495057;">Remember me</label>
          </div>
          <a href="#" style="font-size: 13px; color: #2487ce; text-decoration: none;">Forgot password?</a>
        </div>
        <button type="submit" class="btn btn-login">Sign In</button>
      </form>

      <a href="home.php" class="back-home">&larr; Return to Homepage</a>
    </div>
  </main>

  <footer class="py-3 text-center text-muted" style="font-size: 13px; background: #ffffff; border-top: 1px solid #e1e8ed;">
    &copy; <?= date('Y') ?> Centre for HPC Upskilling &amp; Knowledge-sharing (C-HUK), C-DAC. All rights reserved.
  </footer>
</body>
</html>
