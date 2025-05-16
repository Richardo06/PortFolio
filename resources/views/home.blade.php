@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

<body class="index-page">


  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <img src="assets/img/elle.jpeg" alt="" style="margin:0 0 0 0; width: 100%; height: auto;">

      <div class="container" data-aos="zoom-out">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <h2 style="font-size:2.2rem;">
              RALAIVAO Alimananirina<br>Richardo
            </h2>
            <p>I'm <span class="typed" data-typed-items="Developer, Freelancer, Data Specialist">Developer</span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
            <div class="social-links">
              <a href=" https://www.facebook.com/share/19HPrP3rEs/ "><i class="bi bi-facebook"></i></a>
              <a href=" https://www.instagram.com/rhd0602 "><i class="bi bi-instagram"></i></a>
              <a href=" https://www.linkedin.com/in/richardo-ralaivao-alimananirina-13a810297 "><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    

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
