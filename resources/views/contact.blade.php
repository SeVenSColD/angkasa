@extends('layouts.main')

@section('title', 'About Us')
@section('body-class', 'about-page')

@section('content')

<head>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<style>
/* ====== Global ====== */
body {
  font-family: 'Raleway', sans-serif;
  margin: 0;
  background: #fff;
  color: #000;
  overflow-x: hidden;
}

        /* NAVBAR */
        #navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            display: flex;
            align-items: center;
            padding: 15px 50px;
            background: linear-gradient(to right, #5a7fa3, #123566);
            transition: top 0.3s ease;
            z-index: 1000;
        }
        #navbar.hidden { top: -100px; }

        .logo img {
            height: 80px;
            width: auto;
            margin-right: 220px;
        }

        .nav-links {
            display: flex;
            gap: 30px;
            margin-left: 5px;
        }
        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            position: relative;
        }
        .nav-links a::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: -3px;
            left: 0;
            background-color: white;
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }
        .nav-links a:hover::after,
        .nav-links a.active::after {
            transform: scaleX(1);
        }

/* ====== Hero Section ====== */
.hero {
  position: relative;
  width: 100%;
  height: 100vh;
  background: url('{{ asset("images/card1.jpg") }}') center/cover no-repeat;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 80px;
}
.hero-overlay {
  background: rgba(0,0,0,0.45);
  padding: 60px;
  text-align: center;
  border-radius: 10px;
}
.hero-overlay h1 {
  color: #fff;
  font-size: 3rem;
  margin-bottom: 20px;
  font-weight: 700;
}
.hero-overlay p {
  color: #eee;
  font-size: 1.2rem;
}

/* ====== Logo Section ====== */
.content-section {
  position: relative;
  width: 100%;
  padding: 80px 0;
  background: #fff;
  text-align: center;
}
.section-logo {
  max-width: 150px;
  height: auto;
  display: block;
  margin: 0 auto;
}
.section-header { margin-top: -60px; }

/* Shadow hitam ke putih di atas logo injourney */
.content-section::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 120px;
  background: linear-gradient(to bottom, rgba(0,0,0,0.6), rgba(255,255,255,0));
  z-index: 1;
  pointer-events: none;
}

/* ====== GIF Section ====== */
.gif-section {
  position: relative;
  width: 100%;
  padding: 0px; /* Kurangi padding dari 30px menjadi 20px */
  text-align: center;
}

.gif-container {
  position: relative;
  width: 100%;
  max-width: 500px;
  margin: 0 auto;
}

.gif-image {
  width: 700%;
  max-width: 500px;
  height: auto;
  opacity: 0;
  animation: fadeInZoom 1s ease-out forwards;
  animation-delay: 0.3s;
  border-radius: 10px;
}

/* ====== Corner Box ====== */
.corner-box {
  position: relative;
  width: 100%;
  max-width: 700px;
  margin: 20px auto; /* Kurangi margin dari 50px menjadi 20px */
  padding: 90px 60px;
  background: #fff;
  box-shadow: 0 0 25px rgba(0,0,0,0.15);
  border-radius: 16px;
  text-align: center;
  opacity: 0;
  animation: fadeSlideUp 1s ease-out forwards;
  animation-delay: 0.5s;
}

/* Corner images */
.corner-img {
  position: absolute;
  width: 200px;
  height: auto;
  opacity: 0;
  animation: fadeZoom 1s ease-out forwards;
    animation:
      fadeZoom 1s ease-out forwards,
      floatSlow 6s ease-in-out infinite;
}
/* Corner images – lebih menempel ke pojok */
.corner-top-left    { top: -80px; left: -80px; }
.corner-top-right   { top: -80px; right: -80px; }
.corner-bottom-left { bottom: -80px; left: -80px; }
.corner-bottom-right{ bottom: -80px; right: -80px; }

/* Tambahkan ke style Anda */
@keyframes floatSlow {
  0%   { transform: translateY(0); }
  50%  { transform: translateY(-10px); }  /* naik 10px */
  100% { transform: translateY(0); }
}

@keyframes fadeInZoom {
  0% { opacity: 0; transform: scale(0.8); }
  100% { opacity: 1; transform: scale(1); }
}

/* ====== Background 7 Logo Acak ====== */
.bg-random-logos {
  position: fixed;          /* menempel ke layar */
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1;              /* di belakang semua konten */
  pointer-events: none;     /* supaya tidak menghalangi klik */
}

.bg-random-logos img {
  position: absolute;
  opacity: 0.20;            /* transparansi agar lembut */
  width: 180px;             /* ukuran logo, bisa disesuaikan */
}

/* Posisi acak setiap gambar */
.bg-random-logos img:nth-child(1) { top: 10%;  left: 15%; transform: rotate(15deg); }
.bg-random-logos img:nth-child(2) { top: 40%;  left: 70%; transform: rotate(-10deg); }
.bg-random-logos img:nth-child(3) { top: 75%;  left: 25%; transform: rotate(20deg); }
.bg-random-logos img:nth-child(4) { top: 20%;  left: 55%; transform: rotate(-25deg); }
.bg-random-logos img:nth-child(5) { top: 60%;  left: 80%; transform: rotate(12deg); }
.bg-random-logos img:nth-child(6) { top: 85%;  left: 5%;  transform: rotate(-18deg); }
.bg-random-logos img:nth-child(7) { top: 30%;  left: 35%; transform: rotate(8deg); }


/* ====== Form & Content ====== */
.corner-content h2 {
  font-size: 1.6rem;
  margin-bottom: 35px;
  color: #333;
  opacity: 0;
  animation: fadeSlideUp 0.8s ease-out forwards;
  animation-delay: 0.8s;
}

.corner-check {
  position: absolute;
  width: 60px;
  height: 60px;
  border-radius: 50%;
  background: #4CAF50;
  display: flex;
  justify-content: center;
  align-items: center;
  color: white;
  font-size: 2rem;
  opacity: 0;
  transform: scale(0);
  pointer-events: none;
}

/* animasi masuk */
.corner-check.show {
  animation: popIn 0.6s ease forwards;
}

/* animasi keluar */
.corner-check.hide {
  animation: popOut 0.6s ease forwards;
}

@keyframes popIn {
  0%   { opacity: 0; transform: scale(0); }
  60%  { opacity: 1; transform: scale(1.2); }
  100% { opacity: 1; transform: scale(1); }
}

@keyframes popOut {
  0%   { opacity: 1; transform: scale(1); }
  100% { opacity: 0; transform: scale(0); }
}

/* Posisi sudut kanan bawah, bisa diganti */
.corner-check.bottom-right {
  bottom: -20px;
  right: -20px;
}



.contact-form input,
.contact-form textarea {
  width: 100%;
  max-width: 400px;
  margin: 12px auto;
  padding: 12px 20px;
  border: 1px solid #ccc;
  border-radius: 30px;
  font-size: 1rem;
  display: block;
  opacity: 0;
  animation: fadeSlideUp 0.8s ease-out forwards;
}
.contact-form textarea {
  border-radius: 20px;
  height: 100px;
  resize: none;
}
.contact-form input:nth-of-type(1){ animation-delay: 1.0s; }
.contact-form input:nth-of-type(2){ animation-delay: 1.1s; }
.contact-form input:nth-of-type(3){ animation-delay: 1.2s; }
.contact-form input:nth-of-type(4){ animation-delay: 1.3s; }
.contact-form textarea           { animation-delay: 1.4s; }

.contact-form button {
  margin-top: 20px;
  padding: 14px 28px;
  background: #555;
  color: #fff;
  border: none;
  border-radius: 30px;
  cursor: pointer;
  font-size: 1rem;
  opacity: 0;
  animation: fadeSlideUp 0.8s ease-out forwards;
  animation-delay: 1.5s;
}

/* ====== Animations ====== */
@keyframes fadeSlideUp {
  0% { opacity: 0; transform: translateY(40px); }
  100% { opacity: 1; transform: translateY(0); }
}
@keyframes fadeZoom {
  0% { opacity: 0; transform: scale(0.6); }
  100% { opacity: 1; transform: scale(1); }
}

/* ====== Footer ====== */
.footer-main {
  background: #121212;
  color: #ddd;
  padding: 60px 40px 20px;
  margin-top: 80px; /* Tambahkan margin atas untuk jarak dari corner box */
}
.footer-container {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 40px;
  margin-bottom: 30px;
}
.footer-col { flex: 1 1 200px; }
.footer-col h3 { font-size: 20px; font-weight: 700; margin-bottom: 15px; color: #fff; }
.footer-col ul { list-style: none; padding: 0; margin: 0; }
.footer-col ul li { margin-bottom: 10px; font-size: 15px; }
.footer-col ul li a { color: #bbb; text-decoration: none; transition: color 0.3s ease; }
.footer-col ul li a:hover { color: #fff; }
.footer-bottom {
  text-align: center;
  font-size: 14px;
  color: #aaa;
  border-top: 1px solid #333;
  padding-top: 15px;
}
.footer-bottom a { color: #bbb; }
.footer-bottom a:hover { color: #fff; }

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

<!-- Background acak logo injourney -->
<div class="bg-random-logos">
   <img src="{{ asset('images/logoinjourney4.png') }}" alt="">
   <img src="{{ asset('images/logoinjourney4.png') }}" alt="">
   <img src="{{ asset('images/logoinjourney4.png') }}" alt="">
   <img src="{{ asset('images/logoinjourney4.png') }}" alt="">
   <img src="{{ asset('images/logoinjourney4.png') }}" alt="">
   <img src="{{ asset('images/logoinjourney4.png') }}" alt="">
   <img src="{{ asset('images/logoinjourney4.png') }}" alt="">
</div>


<section>
  <nav id="navbar">
    <div class="logo">
      <img src="{{ asset('images/logoinjourney.png') }}" alt="Logo">
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
</section>

<section class="hero">
  <div class="hero-overlay">
    <h1>Hubungi Kami</h1>
    <p>Kami hadir untuk memberikan pelayanan terbaik di bandara.</p>
  </div>
</section>

<!-- Logo injourney di tengah -->
<section id="content" class="content-section">
  <div class="section-header">
    <img src="{{ asset('images/logoinjourney.png') }}" alt="Logo" class="section-logo">
  </div>
</section>

<!-- GIF Section terpisah -->
<section class="gif-section">
  <div class="gif-container">
    <img src="{{ asset('images/techh1.gif') }}" class="gif-image" alt="Tech Animation">
  </div>
</section>

<!-- Contact / Corner Box -->
<section class="corner-box">
  <img src="{{ asset('images/redlogo2.png') }}" class="corner-img corner-top-left" alt="">
  <img src="{{ asset('images/bluelogo2.png') }}" class="corner-img corner-top-right" alt="">
  <img src="{{ asset('images/orangelogo2.png') }}" class="corner-img corner-bottom-left" alt="">
  <img src="{{ asset('images/greenlogo2.png') }}" class="corner-img corner-bottom-right" alt="">

<!-- Icon centang tersembunyi -->
<div class="corner-check bottom-right" id="cornerCheck">✓</div>

  <div class="corner-content">
    <h2>Berikan ulasan anda</h2>
<form class="contact-form" id="reviewForm"
      action="{{ route('reviews.store') }}"   {{-- route yang kita buat di web.php --}}
      method="POST">
    @csrf  {{-- token keamanan Laravel --}}

    <input type="text" name="name" placeholder="Masukan Nama anda..." required>
    <input type="email" name="email" placeholder="Masukan email anda..." required>
    <input type="tel" name="phone" placeholder="Masukan Nomor telepon anda..." required>
    <input type="text" name="title" placeholder="Judul masalah" required>
    <textarea name="message" placeholder="Deskripsi masalah..." required></textarea>
    <button type="submit">kirim</button>
</form>

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

<script>
    // Navbar Scroll
    let lastScrollTop = 0;
    const navbar = document.getElementById("navbar");
    window.addEventListener("scroll", function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollTop > lastScrollTop) {
            navbar.classList.add("hidden"); 
        } else {
            navbar.classList.remove("hidden");
        }
        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
    });
</script>


<script>
