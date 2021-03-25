<?php 

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@WisnuAzfar - AWproject</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/typewriter.css" rel="stylesheet">
  <link href="assets/css/button1.css" rel="stylesheet">
  <link href="assets/css/button1.js" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v2.2.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">AWproject</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="#home"><a href="index.php">Home</a></li>
          <li class="active"><a href="index.php#courses">Courses</a>
          <li><a href="index.php#about">About</a></li>
          <li><a href="blog.php">Blog</a></li>

        </ul>
      </nav><!-- .nav-menu -->
      <?php if(isset($_SESSION['username'])) { ?>
      <a href="proses/logout.php" class="get-started-btn scrollto">Logout</a>
      <?php } else { ?>
        <a href="index.php#login" class="get-started-btn scrollto">Login</a>
        <?php } ?>
    </div>
    
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
    <?php

        $id_materi  = $_GET['id_materi'];
        include "proses/koneksi.php";
        $sql = " SELECT * FROM materi_kursus WHERE id  = $id_materi ";
        $query = $koneksi->query($sql); 
        $rowmateri = $query->fetch_assoc();


    ?>


      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
         <?php if(isset($_SESSION['username'])) { ?>
        <h1>Hello <?php echo $_SESSION['username']; ?></h1>
         <?php } else { ?>
          <h1>Hello World</h1>
         <?php } ?>
          <h2>Selamat Datang Di Materi <?php echo $rowmateri['nama_materi']; ?></h2>
          <div class="d-lg-flex">
            <a href="https://www.instagram.com/wisnuazfarm/" target="_blank"  class="btn-get-started scrollto">Instagram</a>
            <a href="https://www.youtube.com/watch?v=HQI78A2nLYw" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true">Youtube <i class="icofont-play-alt-2"></i></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Cliens Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Materi</h2>
        </div>

        <div class="row">

    

          <div class="col-lg-5 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h2><?php echo $rowmateri['nama_materi']; ?></h2>
              <hr>
             <p style="text-align : justify;"><?php echo $rowmateri['isi_materi']; ?></p>
             <br><br>
                    <div class="alert alert-success" role="alert">
                  <h4 class="alert-heading">Praktik</h4>
                  <hr>
                 <p style="text-align : justify;"><?php echo $rowmateri['praktek']; ?></p>
                </div>
            </div>
          </div>

          <div class="col-lg-7  mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
          
            <div class="box featured">
            <h3>Klik icon untuk Run dan Output muncul di Layar Bawah</h3>
            <hr>
            <iframe height="800px" width="100%" src="<?php echo $rowmateri['text_editor']; ?>" scrolling="no" frameborder="no" allowtransparency="true" allowfullscreen="true" sandbox="allow-forms allow-pointer-lock allow-popups allow-same-origin allow-scripts allow-modals"></iframe>
            
            </div>
          </div>


         

        </div>

      </div>
    </section><!-- End Pricing Section -->


    <!-- ======= Why Us Section ======= -->
  
    <!-- ======= Skills Section ======= -->
  
    <!-- ======= Services Section ======= -->
  

    <!-- ======= Cta Section ======= -->
  

    <!-- ======= Portfolio Section ======= -->
  
    <!-- ======= Course ======= -->


<!--/.Carousel Wrapper-->


    


    <!-- ======= Frequently Asked Questions Section ======= -->

    <!-- ======= Contact Section ======= -->
   

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">



    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Arsha - @Wisnuazfar</span></strong>. All Rights Reserved
      </div>
    
      <div class="credits">
      <p>Full backend @wisnuazfar</p>
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->

      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html> 