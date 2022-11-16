<?php

    include '../QuesTemplate/functions.php';
    include '../TemplateHTML/boilerplate.html';
    css();
    


?>
  <link href="../assets/css/login.css" rel="stylesheet">
  <link href="../assets/css/main.css" rel="stylesheet">
</head>

<body>


  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <!-- <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div> -->
      <div class="social-links d-none d-md-flex">
        <a href="https://twitter.com/regain_e" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/profile.php?id=100084952402576" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/e__regain/" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/ES 1.png" alt="">
        <h1>E-SANCHAY<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="./allUsers.php">USERS</a></li>
          <li><a href="./allProducts.php">PRODUCTS</a></li>
          <li><a href="../index.php">LOGOUT</a></li>
          <!-- <li><a href="#services">Services</a></li> -->
         
          <!-- <li><a href="#team">Team</a></li> -->
          <!-- <li><a href="login.php">LOGIN/SIGN UP</a></li> -->
      
        </ul>
      </nav><!-- .navbar -->
      
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header>

<div class="box" style="display:flex; justify-content:center;">
    <div class="mainBox" style="width:1600px; height:1000px; background-color:#ABE2AB;">
        <div class="adminHeader">
            <center>
                <h1>Admin Page</h1>
            </center>
        </div>
        <div class="navBox" style="margin-top: 50px;">
            <nav class="navbar navbar-dark bg-dark">
              <div class="container-fluid">
                <center>
                    <!-- <a class="navbar-brand" href="./allUsers.php">Users</a>
                    <a class="navbar-brand" href="./allProducts.php">Products</a> -->
                </center>
              </div>
            </nav>
        </div>
    </div>
</div>


