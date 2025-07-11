@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

<body class="index-page">
  <main class="main">
  <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>"Have a project in mind or a question? Feel free to reach out — I’d be happy to connect."</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade" data-aos-delay="100">
        <div class="row gy-4">
          <!-- Adresse et Téléphone côte à côte -->
          <div class="col-lg-6 mb-4">
        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
          <i class="bi bi-geo-alt flex-shrink-0"></i>
          <div>
            <h3>Address</h3>
            <p>Lot III N 01 CB Fiadanana, Tananarive, MADAGASCAR</p>
          </div>
        </div>
          </div>
          <div class="col-lg-6 mb-4">
        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
          <i class="bi bi-telephone flex-shrink-0"></i>
          <div>
            <h3>Call Us</h3>
            <p>+261 38 77 256 25 ou +261 33 30 121 77</p>
          </div>
        </div>
          </div>
          <!-- Email en dessous sur toute la largeur -->
          <div class="col-lg-6 mb-4">
        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-envelope flex-shrink-0"></i>
          <div>
            <h3>Email Us</h3>
            <p>ralaivaorichardo@gmail.com</p>
          </div>
        </div>
          </div>
          <div class="col-lg-6 mb-4">
        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
          <i class="bi bi-whatsapp flex-shrink-0"></i>
          <div>
            <h3>WhatsApp</h3>
            <p>+261 38 77 256 25</p>
          </div>
        </div>
          </div>
        </div>
      </div>

    </section><!-- /Contact Section -->

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
</body>
@endsection
