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
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#courses">Courses</a>
          <li><a href="#about">About</a></li>
          <li><a href="blog.php">Blog</a></li>

        </ul>
      </nav><!-- .nav-menu -->
      <?php if(isset($_SESSION['username'])) { ?>
      <a href="proses/logout.php" class="get-started-btn scrollto">Logout</a>
      <?php } else { ?>
        <a href="#login" class="get-started-btn scrollto">Login</a>
        <?php } ?>
    </div>
    
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
         <?php if(isset($_SESSION['username'])) { ?>
        <h1>Hello <?php echo $_SESSION['username']; ?></h1>
         <?php } else { ?>
          <h1>Hello World</h1>
         <?php } ?>
          <h2>Selamat Datang Di AWPROJECT</h2>
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
    <section id="cliens" class="cliens section-bg">
      <div class="container">

      <div class="container">

<div class="row" data-aos="zoom-in">

  
</div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
               Website Ini dalam tahap pengembangan Semoga website ini dapat Berkembang dan bermanfaat bagi setiap orang,
               Adapun Visi dan Misi Web ini sebagai berikut
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i>Menjadi Forum Diskusi Antar User</li>
              <li><i class="ri-check-double-line"></i>Menjadi Panduan Pembelajaran yang bermanfaat</li>
              <li><i class="ri-check-double-line"></i>Memperluas Koneksi Antar User</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Jika menurut Anda website ini bermanfaat dan berguna bagi anda, Anda dapat melakukan donasi
              Di Kotak bawah, Donasi Bebas Sesuai dengan kepuasan User
            </p>
            <a href="https://sociabuzz.com/azfarwisnu/tribe" target="_blank" class="btn-learn-more">Donate</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
  
    <!-- ======= Skills Section ======= -->
  
    <!-- ======= Services Section ======= -->
  

    <!-- ======= Cta Section ======= -->
  

    <!-- ======= Portfolio Section ======= -->
  
    <!-- ======= Course ======= -->
    <section id="courses" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Courses</h2>
        </div>

        <!--Carousel Wrapper-->
<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

<!--Controls-->
<div class="controls-top" style="background-color: red;">
  <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
  <a class="btn-floating" href="#multi-item-example" data-slide="next"><i
      class="fas fa-chevron-right"></i></a>
</div>
<!--/.Controls-->

<!--Indicators-->
<ol class="carousel-indicators" style="margin-bottom: -50px;">
  <li data-target="#multi-item-example" data-slide-to="0" class="active" style="background-color: blue;"></li>
  <li data-target="#multi-item-example" data-slide-to="1" style="background-color: blue;"></li>
  
</ol>
<!--/.Indicators-->

<!--Slides-->
<div class="carousel-inner" role="listbox">

  <!--First slide-->
  <div class="carousel-item active">

  <?php
  
  include "proses/koneksi.php";
  $sql = "SELECT * FROM kursus";
  $qkursus = $koneksi->query($sql);
  $rowkursus = $qkursus->fetch_assoc();

  do {
  
  ?>



    <div class="col-md-3" style="float:left">
     <div class="card mb-2">
        <img class="card-img-top"
          src="assets/img/kursus/<?php echo $rowkursus['gambar']; ?>" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title"><?php echo $rowkursus['nama_kursus']; ?></h4>
          <p class="card-text"><?php echo substr ($rowkursus['deskripsi'],0,100); echo"|| Belajar Untuk Lanjut"; ?></p>
          <a  href= "kursus.php?id_kursus=<?php echo $rowkursus['id_kursus'];?>" class="btn btn-primary">Belajar</a>
        </div>
      </div>
    </div>

  <?php }while($rowkursus = $qkursus->fetch_assoc()); ?>



   
   

  </div>
  <!--/.First slide-->

  <!--Second slide-->
  <div class="carousel-item">

    <div class="col-md-3" style="float:left">
      <div class="card mb-2">
        <img class="card-img-top"
          src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a class="btn btn-primary">Button</a>
        </div>
      </div>
    </div>

    <div class="col-md-3" style="float:left">
      <div class="card mb-2">
        <img class="card-img-top"
          src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a class="btn btn-primary">Button</a>
        </div>
      </div>
    </div>

    <div class="col-md-3" style="float:left">
      <div class="card mb-2">
        <img class="card-img-top"
          src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a class="btn btn-primary">Button</a>
        </div>
      </div>
    </div>
    
    <div class="col-md-3" style="float:left">
      <div class="card mb-2">
        <img class="card-img-top"
          src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a class="btn btn-primary">Button</a>
        </div>
      </div>
    </div>

  </div>
  <!--/.Second slide-->

 

</div>
<!--/.Slides-->

</div>
<!--/.Carousel Wrapper-->


        

        </div>

      </div>
    </section><!-- End Team Section -->


    <!-- ======= Frequently Asked Questions Section ======= -->

    <!-- ======= Contact Section ======= -->
    <?php if(isset($_SESSION['username'])) { ?>

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

    <?php } else { ?>
    <section id="login" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Register / Login</h2>
        <p>Daftar dan login untuk mendapat Courses Gratis</p>
        </div>

        <div class="row">

          <div class="col-lg-6 d-flex align-items-stretch">
            <div class="info">       
      <!-- Default form login -->
<form class="text-center border border-light p-5" action="proses/login.php" method="post" enctype="multipart/form-data">
<div class="section-title">
          <h2>login disini</h2>
        </div>

<!-- Email -->
<input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="username" name="usernamelogin">

<!-- Password -->
<input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password" name="passwordlogin">

<div class="d-flex justify-content-around">
    <div>
        <!-- Remember me -->
</div>
</div>

<!-- Sign in button -->
<button class="btn btn-info btn-block my-4" type="submit">Sign in</button>

<!-- Register -->

<!-- Social login --> 
</form>
<!-- Default form login -->

            </div>

          </div>

         
          <div class="col-lg-6   d-flex align-items-stretch">
            <div class="info">     
            <form action="proses/pendaftaran.php" method="POST" role="form" encytipe="multipart/form-data">
            <div class="signup-form">
                <h2>Daftar Akun</h2>
                <h2>Isi dengan baik dan benar</h2>
                <hr>
                    <div class="form-group">
                  <div class="row">
                    <div class="col"><input type="text" class="form-control" name="username" placeholder="Username" required="required"></div>
                  </div>        	
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                    </div>  
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="alamat" placeholder="Alamat" required="required">
                    </div>
                
                <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg">Daftar</button>
                    </div>
                </form>
            </div>
            </form>
          </div>

        </div>




      </div>
    </section><!-- End Contact Section -->

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
        <?php } ?>

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