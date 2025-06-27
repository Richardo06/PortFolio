@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

<body class="index-page">
<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="container">
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('projet') }}">Projects</a></li>
            <li class="current">Details Logistics</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Details</h2>
        <p>A web-based logistics management platform built with Laravel, Bootstrap, and MySQL, designed to efficiently organize transport and delivery operations.
        The system allows route planning, driver assignment, and real-time delivery tracking.
        It includes a vehicle management module, notification system, and a dashboard displaying key performance indicators (delays, successful deliveries, etc.).
        This project was developed to enhance operational visibility and optimize team coordination in logistics workflows.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="assets/img/logistique.PNG" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 content">
            <h2>Logistics.</h2>
            <h5>Technology</h5>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Symfony</strong></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>PHP</strong></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>HTML & CSS</strong></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Bootstrap</strong></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>JavaScript</strong></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>MySQL</strong></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Source GitHub</strong> <a href="https://github.com/Richardo06/Logistique/tree/pre-prod">Logistic</a></li>
                </ul>
              </div>
            </div>
            
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

  </main>

  <footer id="footer" class="footer position-relative light-background">
    <div class="container">
      <!-- <h3 class="sitename">RALAIVAO Alimananirina<br>Richardo</h3> -->
      <p>"I'm available for freelance work and new opportunities. Let's get in touch and bring your ideas to life!"</p>
      <div class="social-links d-flex justify-content-center">
        <a href=" https://www.facebook.com/share/19HPrP3rEs/ "><i class="bi bi-facebook"></i></a>
        <a href=" https://www.instagram.com/rhd0602 "><i class="bi bi-instagram"></i></a>
        <a href=" https://www.linkedin.com/in/richardo-ralaivao-alimananirina-13a810297 "><i class="bi bi-linkedin"></i></a>
      </div>
      <div class="container">
        <div class="copyright">
          <span>Copyright</span> <strong class="px-1 sitename">R. Richardo</strong> <span>All Rights Reserved</span>
        </div>
        
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
    
@endsection
