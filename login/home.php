<!doctype html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>

  <!-- Add your site or application content here -->
  <?php 
  include('./session.php');
  //include('../includes/config.php');
  $userDetails = $userClass->userDetails($session_uid);
  ?>
  <h1>Welcome <?php echo $userDetails->username; ?></h1>

  <a href="<?php echo BASE_URL ?>login/logout.php">Logout</a>

</body>

</html>