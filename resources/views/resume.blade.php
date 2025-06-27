@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

<body class="index-page">
  <main class="main">
    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Resume</h2>
        <p>Passionate web developer crafting efficient applications with Laravel, JavaScript, and Python. Curious and detail-oriented, I thrive on solving real-world problems and contributing to meaningful projects.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Sumary</h3>

            <div class="resume-item pb-0">
              <h4>RALAIVAO Alimananirina Richardo</h4>
              <p><em>I’m a passionate web developer with a strong foundation in PHP (Laravel), JavaScript, and Python. I love building clean, efficient, and user-friendly web applications. With a problem-solving mindset and constant curiosity, I’m always looking to learn and take on new challenges.</em></p>
              <ul>
                <li>Lot III N 01 CB Fiadanana, Tananarive, MADAGASCAR</li>
                <li>+(261) 38 77 256 25</li>
                <li>ralaivaorichardo@gmail.com</li>
              </ul>
            </div><!-- Edn Resume Item -->

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>License in Software Engineering </h4>
              <h5>2023 - 2024</h5>
              <p><em>Institute Supérieurs de l'Informatique et du Management d'Entreprise (ISIME)</em></p>
              <p>Focused on advanced software development, database systems, and web application architecture. Acquired solid skills in PHP (Laravel), JavaScript, and software project management.</p>
            </div><!-- Edn Resume Item -->
            <div class="resume-item">
              <h4>Higher Technician Diploma </h4>
              <h5>2022 - 2023</h5>
              <p><em>Institute Supérieurs de l'Informatique et du Management d'Entreprise (ISIME)</em></p>
              <p>Completed a two-year technical program in computer science. Gained hands-on experience in software design, networking, and data structures using Java and MySQL.</p>
            </div><!-- Edn Resume Item -->

            <div class="resume-item">
              <h4>General Baccalaureate Diploma</h4>
              <h5>2018 - 2019</h5>
              <p><em>CPE Tanimbarinandriana High School, Tananarive</em></p>
              <p>Developed strong skills in critical thinking, communication, and textual analysis. Studied philosophy, literature, languages, and history intensively.</p>
            </div><!-- Edn Resume Item -->

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>Web Development Intern & Network Technician</h4>
              <h5>Contact ref: +261 34 20 521 54</h5>
              <h5>Date: 2023 - 2024</h5>
              <p><em>Ministry of National Education of Madagascar </em></p>
              <ul>
                <li>Developed web applications using PHP (Laravel), JavaScript, HTML, CSS, and MySQL.</li>
                <li>Designed and developed a web platform for network maintenance management with task planning, intervention tracking, and reporting features.</li>
                <li>Provided technical support as an IT and network technician, including system maintenance, hardware setup, cabling, and user assistance.</li>
                <li>Also contributed to network configuration and IT infrastructure modernization projects.</li>
              </ul>
            </div><!-- Edn Resume Item -->

            <div class="resume-item">
              <h4>Web Developer & Data Set Engineer</h4>
              <h5>Contact ref: +261 34 16 566 05</h5>
              <h5>Date: 2024 - 2025</h5>
              <p><em>Databoost, Tananarive</em></p>
              <ul>
                <li>Web development using PHP Symfony, JavaScript, HTML, CSS, and MySQL.</li>
                <li>Data collection, annotation, and cleaning using Python (Pandas).</li>
                <li>Experience with annotation tools such as Labelbox, CVAT, and Label Studio.</li>
                <li>Skilled in preparing high-quality datasets for machine learning projects.</li>
              </ul>
            </div><!-- Edn Resume Item -->
            <div class="resume-item">
              <h4>Data Specialist (Freelance)</h4>
              <h5>Contact ref: +261 32 03 172 39</h5>
              <h5>Date: 2025</h5>
              <p><em>SmartOne, Tananarive</em></p>
              <ul>
                <li>Freelance Data Specialist focused on video data processing and analysis.</li>
                <li>Managed and optimized video workflows on the company’s internal platform.</li>
              </ul>
            </div><!-- Edn Resume Item -->

          </div>

        </div>

      </div>

    </section><!-- /Resume Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Languages</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    @php
                        $languages = [
                            ['name' => 'Malagasy', 'level' => 100],
                            ['name' => 'French', 'level' => 80],
                            ['name' => 'English', 'level' => 60],
                            ['name' => 'German', 'level' => 40],
                        ];
                    @endphp

                    @foreach($languages as $lang)
                        <div class="progress mb-3">
                            <span class="skill d-flex justify-content-between align-items-center">
                                <span>{{ $lang['name'] }}</span>
                                <i class="val">{{ $lang['level'] }}%</i>
                            </span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar"
                                         aria-valuenow="{{ $lang['level'] }}" aria-valuemin="0" aria-valuemax="100"
                                         style="width: {{ $lang['level'] }}%;">
                                </div>
                            </div>
                        </div><!-- End Skills Item -->
                    @endforeach

                </div>
            </div>
        </div>

    </section><!-- /Skills Section -->
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
