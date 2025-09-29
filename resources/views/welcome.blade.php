<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;600;700&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <title>AP Technical</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="UTF-8">
    <title>@yield('title', 'AP Technical')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

body {
  margin: 0;
  font-family: 'Raleway', sans-serif;
  background: #fff;   /* ganti jadi putih */
  color: black;       /* teks default jadi hitam */
  
}

        nav {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        display: flex;
        align-items: center;
        padding: 15px 50px;
        background: linear-gradient(to right, #5a7fa3, #123566);
        transition: transform 0.3s ease;
        z-index: 1000;
        }


        nav.hide {
          transform: translateY(-100%); /* sembunyikan navbar */
        }

        .logo img {
          height: 80px;
          width: auto;
          display: block;
        margin-right: 220px; /* jarak logo dengan teks menu */
        }

        .nav-links {
  display: flex;
  gap: 30px; /* jarak antar menu */
}

        .nav-links a {
    color: white;
    text-decoration: none;
    font-weight: 600;
    font-family: 'Raleway', sans-serif;
    position: relative;
        }

        .nav-links a::after {
          content: "";
          position: absolute;
          width: 100%;
          height: 2px;
          bottom: 0;
          left: 0;
          background-color: white;
          transform: scaleX(0);
          transition: transform 0.3s ease;
        }

        .nav-links a:hover::after,
        .nav-links a.active::after {
          transform: scaleX(1);
        }

        /* VIDEO SECTION */
.video-wrapper {
  position: relative;
  width: 100%;
  height: 100vh;
  overflow: hidden;
  margin-top: 110px;
  background: #121212; /* background hitam hanya di video section */
}
        .video-gradient {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 180px;
            background: linear-gradient(to bottom, rgba(0,0,0,0) 0%, #ffffff 100%);
            z-index: 1;
        }

        .video-wrapper video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transform: translateY(-10px);
            z-index: 0;
        }   

        .video-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            z-index: 2;
        }

.content-section {
    position: relative;
    width: 100%;
    min-height: 100vh;
    background: 
        linear-gradient(to bottom, rgba(255, 255, 255, 0.32), rgba(255,255,255,1)), /* transparan → putih */
        url("images/bghome1.png") no-repeat center center/cover;
    padding: 50px;
    color: black; /* biar teks tetap terbaca */
    z-index: 1;
}

        .footer-bottom {
            text-align: center;
            padding: 40px 20px;
            background-color: #121212;
            color: #bbb;
            font-size: 1.2rem;
            font-style: italic;
            letter-spacing: 0.5px;
        }

.image-container {
  display: flex;
  justify-content: center;
  gap: 20px;
}

.card {
  position: relative;
  display: inline-block;
  width: 280px;
  border-radius: 15px;
  overflow: hidden;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  cursor: pointer; /* biar jelas bisa di-hover */
}

.card img {
  width: 100%;
  border-radius: 15px;
  display: block;
  transition: transform 0.3s ease;
}

.text-overlay {
  position: absolute;
  top: 10px;   /* posisi teks */
  left: 50%;
  transform: translateX(-50%);
  color: white;  /* warna teks */
  font-size: 24px;
  font-weight: bold;
  text-shadow: 1px 1px 4px rgba(0,0,0,0.7); /* biar teks tetap terlihat */
  
}

.cards-wrapper {
  position: relative;   /* penting agar logo bisa absolute */
  width: 100%;
  min-height: 100vh;
  background: 
    linear-gradient(to bottom, rgba(255, 255, 255, 0.53), #ffffff),
    url("{{ asset('images/bghome1.png') }}") no-repeat center center/cover;
  padding: 150px 20px 0px 20px;
  display: flex;
  flex-direction: column;  /* penting: susun konten vertikal */
  justify-content: flex-start; 
  align-items: center;

  color: #666; 
  z-index: 1;


  opacity: 0;
  transform: translateY(50px);
  transition: all 0.8s ease-out;
}

.card:hover {
  transform: scale(1.05); /* efek timbul */
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.25); /* bayangan saat hover */
}

.card:hover img {
  transform: scale(1.1); /* zoom-in sedikit */
}

.cards-wrapper.show {
  opacity: 1;
  transform: translateY(0);
}

/* Supaya tiap card ikut animasi */
.cards-wrapper .card {
  opacity: 0;
  transform: scale(0.9);
  transition: all 0.6s ease-in-out;
}

.cards-wrapper.show .card {
  opacity: 1;
  transform: scale(1);
}

.cards-wrapper::after {
  content: "";
  position: absolute;
  top: 100%; /* mulai setelah background asli section */
  left: 0;
  width: 100%;
  height: 100vh; /* tinggi sampai footer, bisa disesuaikan */
  background: url('{{ asset("images/d5192349-b602-41a9-bcaf-6ccb5be6b036.png") }}') repeat-y center;
  background-size: cover;
  z-index: -1;
}

.section-title {
  text-align: center;
  margin-bottom: 70px;
    color: #666; 
}

.section-title h2 {
  font-family: 'Raleway', sans-serif;
  font-size: 56px;
  font-weight: 700;
  color: #123566;   /* biru tua biar kontras */
  text-transform: uppercase;
  letter-spacing: 2px;
}


.section-logo {
  position: absolute;
  top: 35px;
  right: 80px;
  width: 150px;   /* naikkan dari 80px ke 150px */
  height: auto;
  opacity: 0.9;
  z-index: 10;    /* pastikan tetap di atas konten */
}

.equipment-coverage {
  position: relative;  /* penting agar logo bisa absolute */
  width: 100%;
  padding: 80px 50px;
  background: rgba(255,255,255,0.9); /* bisa diganti background lain */
    margin-top: -100px; 
  overflow: hidden;   /* cegah logo keluar */

  .bg-lines {
  background: repeating-linear-gradient(
    to right,
    transparent 0,
    transparent 10%,
    #f7931e 10%,
    #f7931e 15%,
    transparent 15%,
    transparent 30%,
    #ef4136 30%,
    #ef4136 35%,
    transparent 35%,
    transparent 50%,
    #009999 50%,
    #009999 55%,
    transparent 55%
  );
}

}

.equipment-logo {
  position: absolute;
  width: 100px;
  height: auto;
  opacity: 0.9;
  z-index: 2;
  animation: float 4s ease-in-out infinite;
  filter: drop-shadow(0 0 8px rgba(0, 150, 255, 0.7));
  transition: transform 0.3s ease;
}


.equipment-logo:hover {
  transform: scale(1.2);
  filter: drop-shadow(0 0 20px rgba(0, 200, 255, 1));
}

@keyframes float {
  0%   { transform: translateY(0px); }
  50%  { transform: translateY(-15px); }
  100% { transform: translateY(0px); }
}

/* 🔹 Posisi acak */
.logo1 { top: 20px; left: 40px; }
.logo2 { top: 50px; right: 60px; }
.logo3 { bottom: 40px; left: 80px; }
.logo4 { bottom: 60px; right: 200px; }
.logo5 { top: 10px; left: 45%; }

.equipment-coverage .section-title {
  text-align: center;
  font-family: 'Raleway', sans-serif;
  font-size: 28px;
  font-weight: 600;
  margin-bottom: 40px;
  color: #333;
}

.coverage-content {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 40px;
}

.coverage-images {
  display: flex;
  flex-direction: column;
    justify-content: center; /* Biar dua gambar tetap terpusat */
  gap: 20px;
}

.coverage-images img {
  width: 300px;
  border-radius: 15px;
  box-shadow: 0 6px 20px rgba(0,0,0,0.2);
}

.coverage-text {
  background: #222;
  color: #fff;
  padding: 30px;
  border-radius: 12px;
  max-width: 500px;
  line-height: 1.6;
  box-shadow: 0 6px 25px rgba(0,0,0,0.3);
}

.main-sections {
  display: flex;
  flex-direction: column;
  gap: 120px;
  background: #f9f9f9;
  padding-top: 40px;   /* awalnya 60px, diperkecil supaya naik */
  padding-bottom: 60px;
  margin-top: -20px;  /* geser semua section naik 40px */
}





.our-skill {
  text-align: center;
  padding: 60px 20px;
  background: linear-gradient(to bottom, #f9f9f9, #fff);
}

.our-skill h2 {
  font-family: 'Raleway', sans-serif;
  font-size: 36px;        /* lebih besar */
  margin-bottom: 50px;
  font-weight: 700;
  text-align: center;
}

.skill-item h3 {
  font-family: 'Raleway', sans-serif;
  font-size: 22px;        /* diperbesar */
  font-weight: 600;       /* ditebalkan */
  color: #333;
  text-align: center;     /* simetris di tengah */
  margin-top: 10px;
}

.skill-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 150px;          /* jarak antar kolom diperbesar */
  flex-wrap: wrap;
  padding: 50px 0;     /* beri ruang atas & bawah */
  transform: scale(1.2); /* opsional: perbesar seluruh wrapper */
}

.skill-item {
  width: 150px;        /* logo lebih besar */
  height: auto;
}

.skill-item h3 {
  font-size: 26px;     /* teks lebih besar */
}

.skill-item img {
  width: 150px; /* atur sesuai kebutuhan */
  height: auto;
  margin-bottom: 15px;
  transition: transform 0.3s ease;
}

.skill-item img:hover {
  transform: scale(1.1); /* efek timbul saat hover */
}

.skill-item h3 {
  font-family: 'Raleway', sans-serif;
  font-size: 18px;
  color: #555;
}

/* Footer */

.vision-wrapper {
  text-align: center;
  padding: 80px 20px;
  background: linear-gradient(to bottom, #f9f9f9, #ffffff);
}

.vision-wrapper h2 {
  font-size: 36px;
  margin-bottom: 20px;
  font-weight: bold;
}

.vision-wrapper p {
  font-size: 20px;
  max-width: 800px;
  margin: 0 auto;
  line-height: 1.6;
}

.vision-mission-target {
  padding: 80px 40px;
  background: #fff;
  text-align: center;
}

.vision-mission-target .section-title {
  font-size: 36px;
  font-weight: 700;
  color: #333;
  margin-bottom: 60px;
}

.vmt-container {
  display: flex;
  justify-content: center;
  align-items: stretch;
  gap: 40px;
  flex-wrap: wrap; /* biar responsif di layar kecil */
}

.vmt-card {
  background: #222;
  color: #fff;
  border-radius: 25px;
  padding: 30px 20px;
  width: 300px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  text-align: center;
  box-shadow: 0 8px 25px rgba(0,0,0,0.25);
  transition: transform 0.3s ease, box-shadow 0.3s ease;

    opacity: 0;
  transform: translateY(50px);
  transition: opacity 0.8s ease-out, transform 0.8s ease-out;
}

/* Saat muncul */
.vmt-card.show {
  opacity: 1;
  transform: translateY(0);
}

.vmt-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 40px rgba(0,0,0,0.35);
}

.vmt-logo {
  width: 70px;
  height: auto;
  margin: 0 auto 20px;
}

.vmt-card p {
  flex-grow: 1;
  font-size: 16px;
  line-height: 1.6;
  margin-bottom: 20px;
}

.vmt-image {
  width: 100%;
  border-radius: 15px;
  object-fit: cover;
}


.footer-main {
  background: #121212;
  color: #ddd;
  padding: 60px 40px 20px;
  font-family: 'Raleway', sans-serif;
}

.footer-container {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 40px;
  margin-bottom: 30px;
}

.footer-col {
  flex: 1 1 200px;
  min-width: 200px;
}

.footer-col h3 {
  font-size: 20px;
  font-weight: 700;
  margin-bottom: 15px;
  color: #fff;
}

.footer-col ul {
  list-style: none;
  padding: 0;
  margin: 0 0 20px 0;
}

.footer-col ul li {
  margin-bottom: 10px;
  font-size: 15px;
}

.footer-col ul li a {
  color: #bbb;
  text-decoration: none;
  transition: color 0.3s ease;
}

.footer-col ul li a:hover {
  color: #fff;
}

.footer-bottom {
  text-align: center;
  font-size: 14px;
  color: #aaa;
  border-top: 1px solid #333;
  padding-top: 15px;
}

.footer-bottom a {
  color: #bbb;
  text-decoration: none;
}

.footer-bottom a:hover {
  color: #fff;
}

/* spin responsif */

.vmt-logo {
  width: 80px;
  transition: transform 1s ease;
}

.vmt-logo.spin {
  animation: spin 7s linear infinite;
}

@keyframes spin {
  from { transform: rotate(0deg); }
  to { transform: rotate(360deg); }
}

/* GIF Splash Screen */
.splash-screen {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #ffffffff;
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 9999;
  transition: opacity 0.0s ease;
}

.splash-screen img {
  max-width: 100%;
  max-height: 100%;
  object-fit: contain;
}

/* Hide main content initially */
.main-content {
  opacity: 0;
  transition: opacity 0.5s ease;
}

/* Show main content after splash screen */
.main-content.visible {
  opacity: 1;
}

/* Tambahkan di bagian style CSS */
.social-media {
  display: flex;
  gap: 15px;
  margin-top: 15px;
}

.social-icon {
  width: 20px; /* Perkecil dari 30px menjadi 20px */
  height: 20px; /* Perkecil dari 30px menjadi 20px */
  transition: transform 0.3s ease;
}

.social-icon:hover {
  transform: scale(1.2);
}
    </style>
</head>
<body>

<!-- GIF Splash Screen -->
<div class="splash-screen" id="splashScreen">
  <img src="{{ asset('images/tech2.gif') }}" alt="Loading..." id="splashGif">

</div>

<!-- Main Content -->
<div class="main-content" id="mainContent">

<nav>
  <div class="logo">
    <img src="images/logoinjourney.png" alt="Logo">
  </div>
  <div class="nav-links">
    <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a>
    <a href="{{ url('/about') }}" class="{{ Request::is('about') ? 'active' : '' }}">About Us</a>
    <a href="{{ url('/services') }}" class="{{ Request::is('services') ? 'active' : '' }}">Our Service</a>
    <a href="{{ url('/contact') }}" class="{{ Request::is('contact') ? 'active' : '' }}">Contact us</a>
    <a href="{{ url('/development') }}" class="{{ Request::is('development') ? 'active' : '' }}">Development</a>
    <a href="{{ url('/planning') }}" class="{{ Request::is('planning') ? 'active' : '' }}">Planning</a>
  </div>
</nav>

<main>
  @yield('content')
</main>

<div class="video-wrapper">
    <!-- VIDEO BACKGROUND -->
    <video class="video-bg" autoplay muted loop playsinline>
        <source src="{{ asset('videos/vid-bg1.mp4') }}" type="video/mp4">
        Browser Anda tidak mendukung video.
    </video>

    <!-- 🔹 TEKS OVERLAY -->
    <div class="video-text">
        <h1>Selamat Datang</h1>
        <h2>Bandar Udara Internasional Sultan Aji Muhammad Sulaiman</h2>
        <hr>
        <h3>Technical Support</h3>
    </div>
</div>


<section class="cards-wrapper">
    <!-- 🔹 Logo pojok kanan atas -->
    <img src="{{ asset('images/logoinjourney.png') }}" alt="Logo" class="section-logo">

    <h2 class="section-title">Taking Care of Your Problem</h2>

    <div class="image-container">
        <div class="card">
            <img src="{{ asset('images/card1.jpg') }}" alt="Integrated System">
            <div class="text-overlay">Integrated System</div>
        </div>
        <div class="card">
            <img src="{{ asset('images/card2.jpg') }}" alt="Quality Control">
            <div class="text-overlay">Quality Control</div>
        </div>
        <div class="card">
            <img src="{{ asset('images/card3.jpg') }}" alt="Learning and Sharing">
            <div class="text-overlay">Learning and Sharing</div>
        </div>
        <div class="card">
            <img src="{{ asset('images/card4.jpg') }}" alt="Operator">
            <div class="text-overlay">Operator</div>
        </div>
        <div class="card">
            <img src="{{ asset('images/card5.jpeg') }}" alt="Certified Technician">
            <div class="text-overlay">Certified Technician</div>
        </div>
    </div>
</div>
</section>

<section class="equipment-coverage">
      <!-- 🔹 Logo di pojok kanan atas -->
    <img src="{{ asset('images/logo2.png') }}" alt="Logo" class="equipment-logo logo1">
    <img src="{{ asset('images/logo2.png') }}" alt="Logo" class="equipment-logo logo2">
    <img src="{{ asset('images/logo2.png') }}" alt="Logo" class="equipment-logo logo3">
    <img src="{{ asset('images/logo2.png') }}" alt="Logo" class="equipment-logo logo4">
    <img src="{{ asset('images/logo2.png') }}" alt="Logo" class="equipment-logo logo5">



    <h2 class="section-title">Airport Technology Equipment Coverage</h2>
    <div class="coverage-content">
        <!-- Gambar Kiri -->
        <div class="coverage-images">
            <img src="{{ asset('images/t1.webp') }}" alt="Equipment 1">
            <img src="{{ asset('images/t2.jpg') }}" alt="Equipment 2">
        </div>

        <!-- Teks Kanan -->
        <div class="coverage-text">
            <p>
                Peralatan yang menjadi tanggung jawab BPNLTI ada 12 yaitu BAS (Building Automation System), 
                BIS (Building Integration System), CCTV (Closed Circuit Television), FIDS (Flight Information Display System),
                SECURITY EQUIPMENT (X-Ray, WTMD, ETD, Handheld Metal Detector), FIRE ALARM & PANIC BUTTON, MASTER CLOCK, 
                MATV (Master Antenna Television), TATA SUARA (PAS & AAS), TELEPON (IP Phone & Analog), JARINGAN DATA, 
                HBS, dan GROUND COMMUNICATION.
            </p>
        </div>
    </div>
</section>

<section class="our-skill">
    <h2>Our Skill</h2>
    <div class="skill-wrapper">
        <div class="skill-item">
            <img src="{{ asset('images/logoengineer.png') }}" alt="Engineering">
            <h3>Engineering</h3>
        </div>
        <div class="skill-item">
            <img src="{{ asset('images/logosoftware.png') }}" alt="Software">
            <h3>Software</h3>
        </div>
        <div class="skill-item">
            <img src="{{ asset('images/logohardware.png') }}" alt="Hardware">
            <h3>Hardware</h3>
        </div>
    </div>
</section>

<!-- Section Baru -->
<section class="vision-mission-target">
  <h2 class="section-title">Our Vision Mission and Target</h2>

  <div class="vmt-container">
    <!-- Card 1 -->
    <div class="vmt-card">
      <img src="{{ asset('images/logo2.png') }}" alt="Logo2" class="vmt-logo">
      <p>Belajar dan berbagi demi kemajuan perusahaan</p>
      <img src="{{ asset('images/vision1.jpeg') }}" alt="Foto 1" class="vmt-image">
    </div>

    <!-- Card 2 -->
    <div class="vmt-card">
      <img src="{{ asset('images/logo2.png') }}" alt="Logo2" class="vmt-logo">
      <p>
        Responsif dan sinergitas dalam penanganan gangguan peralatan, 
        memberikan solusi menyeluruh untuk sistem teknologi informasi di bandara, 
        mendorong karyawan untuk terus melakukan inovasi seiring dengan semakin pesatnya laju 
        perkembangan teknologi informasi, berkomitmen untuk menjaga standar kualitas dalam semua lini layanan
      </p>
            <img src="{{ asset('images/vision4.jpeg') }}" alt="Foto 3" class="vmt-image">
        </div>

    <!-- Card 3 -->
    <div class="vmt-card">
      <img src="{{ asset('images/logo2.png') }}" alt="Logo2" class="vmt-logo">
      <p>
        People Strategy, ditujukan untuk mengembangkan dan mengelola sumber daya manusia yang lebih efisien, 
        Process Strategy, merancang/menata/mengusulkan alur data baik manajemen maupun operasional data dalam organisasi perusahaan. 
        Technology Strategy, didasarkan pada prinsip pemanfaatan dan penerapan teknologi untuk mendukung pencapaian tujuan perusahaan
      </p>
      <img src="{{ asset('images/vision3.webp') }}" alt="Foto 3" class="vmt-image">
    </div>
  </div>
</section>


<!-- FOOTER -->
<footer class="footer-main">
  <div class="footer-container">

    <!-- Kolom 1 - Map -->
    <div class="footer-col">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15951.83346854826!2d116.9027472!3d-1.2680568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df1480f07a8ef1b%3A0x6c0afc08a88d40f!2sBandar%20Udara%20Internasional%20Sultan%20Aji%20Muhammad%20Sulaiman%20Sepinggan!5e0!3m2!1sid!2sid!4v1693430000000!5m2!1sid!2sid"
        width="250" 
        height="200" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>

    <!-- Kolom 2 - TI & Support -->
    <div class="footer-col">
      <h3>TI</h3>
      <ul>
        <li><a href="about">About Us</a></li>
        <li><a href="services">Our Services</a></li>
      </ul>
      <h3>Support</h3>
      <ul>
        <li><a href="contact">Contact Us</a></li>
      </ul>
    </div>

    <!-- Kolom 3 - Innovation -->
    <div class="footer-col">
      <h3>Innovation</h3>
      <ul>
        <li><a href="development">Development</a></li>
        <li><a href="planning">Planning</a></li>
      </ul>
    </div>

    <!-- Kolom 4 - Vendor & Media Sosial -->
    <div class="footer-col">
      <h3>Our Vendor</h3>
      <ul>
        <li>PT. Angkasa Pura Supports</li>
      </ul>
      
      <!-- Tambahkan bagian Media Sosial -->
      <h3>Follow Us</h3>
      <div class="social-media">
        <a href="https://www.instagram.com/ap_supports.bpn?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank">
          <img src="{{ asset('images/instagram.png') }}" alt="Instagram" class="social-icon">
        </a>
      </div>
    </div>
  </div>

  <!-- Bawah Footer -->
  <div class="footer-bottom">
    <p>Sepinggan, Balikpapan Selatan, Kota Balikpapan, Kalimantan Timur</p>
    <p>Telp : 0542 - 757 - 7009</p>
    <p>Email : <a href="mailto:elband.sepinganairport@gmail.com">elband.sepinganairport@gmail.com</a></p>
  </div>  
</footer>

</div> <!-- End of main-content div -->


<!-- 🔹 Script untuk hide/show navbar -->
<script>
let lastScrollTop = 0;
const navbar = document.querySelector("nav");

window.addEventListener("scroll", function() {
  let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

  if (scrollTop > lastScrollTop) {
    // scroll ke bawah → sembunyikan navbar
    navbar.classList.add("hide");
  } else {
    // scroll ke atas → tampilkan navbar
    navbar.classList.remove("hide");
  }

  lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
});
</script>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const section = document.querySelector(".vision-mission-target");
    const logos = document.querySelectorAll(".vmt-logo");

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          logos.forEach(logo => logo.classList.add("spin"));   // aktifkan animasi
        } else {
          logos.forEach(logo => logo.classList.remove("spin")); // hentikan animasi
        }
      });
    }, { threshold: 0.5 }); // aktif kalau 50% section terlihat

    observer.observe(section);
  });
</script>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const section = document.querySelector(".cards-wrapper");

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          section.classList.add("show");   // animasi aktif
        } else {
          section.classList.remove("show"); // reset animasi saat keluar viewport
        }
      });
    }, { threshold: 0.3 });

    observer.observe(section);
  });
</script>


<script>
document.addEventListener("DOMContentLoaded", () => {
  const cards = document.querySelectorAll(".vmt-card");

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show");   // muncul
      } else {
        entry.target.classList.remove("show"); // hilang lagi
      }
    });
  }, { threshold: 0.2 }); // 20% bagian terlihat

  cards.forEach(card => observer.observe(card));
});
</script>

<!-- Script for GIF splash screen -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const splashScreen = document.getElementById("splashScreen");
    const mainContent = document.getElementById("mainContent");
    const splashGif = document.getElementById("splashGif");
    
    // Fallback jika gagal memuat GIF
    splashGif.onerror = function() {
      console.error("Gagal memuat GIF. Periksa path file.");
      // Tampilkan konten utama meskipun gagal memuat GIF
      splashScreen.style.display = "none";
      mainContent.classList.add("visible");
    };
    
    // Event listener untuk mengetahui kapan GIF selesai dimuat
    splashGif.onload = function() {
      console.log("GIF berhasil dimuat");
      
      // Set timeout berdasarkan durasi GIF (dalam milidetik)
      // Sesuaikan dengan durasi sebenarnya dari GIF Anda
      const gifDuration = 3500; // 5 detik
      
      setTimeout(function() {
        // Fade out the splash screen
        splashScreen.style.opacity = "0";
        
        // After the fade out transition, hide the splash screen and show the main content
        setTimeout(function() {
          splashScreen.style.display = "none";
          mainContent.classList.add("visible");
        }, 500); // This should match the transition duration in CSS
      }, gifDuration);
    };
    
    // Fallback jika GIF tidak selesai dimuat dalam waktu tertentu
    setTimeout(function() {
      if (splashScreen.style.display !== "none") {
        console.warn("Timeout: GIF tidak selesai dimuat dalam waktu yang diharapkan");
        splashScreen.style.opacity = "0";
        
        setTimeout(function() {
          splashScreen.style.display = "none";
          mainContent.classList.add("visible");
        }, 500);
      }
    }, 10000); // 10 detik fallback
  });
</script>

</body>
</html>