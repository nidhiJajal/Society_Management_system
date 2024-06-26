<?php
	session_start();
?>
<!-- 
PROJECT: Medic | Medical HTML Template
VERSION: 1.0.0
AUTHOR: Themefisher
WEBSITE: https://themefisher.com
-->

<!DOCTYPE html>
<html lang="zxx">
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>SMS | Society Management System</title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Medical HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Medical HTML Template v1.0">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- FancyBox -->
  <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
  <!-- fontawesome -->
  <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
  <!-- animate.css -->
  <link rel="stylesheet" href="plugins/animation/animate.min.css">
  <!-- jquery-ui -->
  <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.css">
  <!-- timePicker -->
  <link rel="stylesheet" href="plugins/timePicker/timePicker.css">
  
  <!-- Stylesheets -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="icon" href="images/logo-4.png" type="image/x-icon">

</head>


<body>
  <div class="page-wrapper">

  



<!--Header Upper-->
<section class="header-uper">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-xl-4 col-lg-3">
        <div class="logo">
          <a href="index.php">
            <img loading="lazy" class="img-fluid" src="images/logo-3.png" alt="logo">
          </a>
        </div>
      </div>
      <div class="col-xl-8 col-lg-9">
        <div class="right-side">
          <ul class="contact-info pl-0 mb-4 mb-md-0">
            <li class="item text-left">
              <div class="icon-box">
                <i class="far fa-envelope"></i>
              </div>
              <strong>Email</strong>
              <br>
              <a href="mailto:sms@gmail.com">
                <span>sms@gmail.com</span>
              </a>
            </li>
            <li class="item text-left">
              <div class="icon-box">
                <i class="fas fa-phone"></i>
              </div>
              <strong>Call Now</strong>
              <br>
              <span>+ (91) - 90909 - 08080</span>
            </li>
          </ul>
          
        </div>
      </div>
    </div>
  </div>
</section>
<!--Header Upper-->


<!--Main Header-->
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarLinks" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarLinks">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item @@about">
          <a class="nav-link" href="about.php">About</a>
        </li>
		<li class="nav-item dropdown @@blogs">
          <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Updates</a>

          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item @@blog" href="new.php">News</a></li>
            <li><a class="dropdown-item @@blogDetails" href="rules.php">Rules</a></li>
          </ul>
        </li>
        <li class="nav-item @@service">
          <a class="nav-link" href="maintenance.php">Maintenance</a>
        </li>        
        <li class="nav-item @@appointment">
          <a class="nav-link" href="complaint.php">Complain</a>
        </li>
		<li class="nav-item @@contact">
          <a class="nav-link" href="hall_booking.php">Hall-Booking</a>
        </li>
        <li class="nav-item @@contact">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
		<li class="nav-item @@team">
          <a class="nav-link" href="user.php">user</a>
        </li>
		<li class="nav-item @@team">
		  <a class="nav-link" href="login.php" onclick="return confirm('are you sure you wants to leave site ???')">
          
              <p>Logout</p>
            </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--End Main Header -->
