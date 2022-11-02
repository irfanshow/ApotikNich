<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Alstar Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assetsLandingPageUser/Alstar/assets/img/favicon.png" rel="icon">
  <link href="/assetsLandingPageUser/Alstar/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assetsLandingPageUser/Alstar/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/assetsLandingPageUser/Alstar/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assetsLandingPageUser/Alstar/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assetsLandingPageUser/Alstar/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assetsLandingPageUser/Alstar/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assetsLandingPageUser/Alstar/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assetsLandingPageUser/Alstar/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Alstar - v4.9.1
  * Template URL: https://bootstrapmade.com/alstar-free-parallax-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between ">

      <div class="logo">
        <h1><a href="index.html">ApoticNich</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="/assetsLandingPageUser/Alstar/assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Sign In</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(/assetsLandingPageUser/Alstar/assets/img/slide/slide-1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>ApotikNich</span></h2>
                <p class="animate__animated animate__fadeInUp">Sistem Informasi Apotik</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(/assetsLandingPageUser/Alstar/assets/img/slide/slide-2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">SISTEM INFORMASI APOTIK</h2>
                <a href="#" class="btn-get-started scrollto animate__animated animate__fadeInUp">Sign In</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-double-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-double-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>Sistem Informasi Penjualan Apotek adalah suatu kumpulan informasi yang 
            mendukung suatu proses pemenuhan kebutuhan suatu informasi yang bertanggung 
            jawab untuk menyediakan informasi penjualan obat dalam satu kesatuan proses yang 
            bertujuan untuk meningkatkan pelayanan pada Apotek</p>
        </div>
      </div>
    </section><!-- End About Section -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assetsLandingPageUser/Alstar/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assetsLandingPageUser/Alstar/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assetsLandingPageUser/Alstar/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assetsLandingPageUser/Alstar/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assetsLandingPageUser/Alstar/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/assetsLandingPageUser/Alstar/assets/js/main.js"></script>
  <?= $this->renderSection('contentLandingPageUser') ?>

</body>

</html>