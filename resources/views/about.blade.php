@extends('layouts.main')

@section('title', 'About Us')
@section('body-class', 'about-page')

@section('content')

<head>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>


<svg class="flying-snakes" viewBox="0 0 1000 500" preserveAspectRatio="none">
  <!-- Garis Oranye -->
  <path class="snake snake1"
        d="M0,500 C200,400 400,300 1000,0"
        fill="none"
        stroke="#f7931e"
        stroke-width="6"
        stroke-linecap="round"/>
        
  <!-- Garis Merah -->
  <path class="snake snake2"
        d="M0,500 C300,450 600,250 1000,50"
        fill="none"
        stroke="#ef4136"
        stroke-width="6"
        stroke-linecap="round"/>
        
  <!-- Garis Hijau -->
  <path class="snake snake3"
        d="M0,500 C150,350 500,150 1000,20"
        fill="none"
        stroke="#00a99d"
        stroke-width="6"
        stroke-linecap="round"/>
</svg>








<style>
/* Global */
body {
  font-family: 'Raleway', sans-serif !important;
  margin: 0;
  background-color: #fff;
  color: black;
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

/* HERO */
.hero {
  position: relative;
  width: 100%;
  height: 90vh;
  padding-top: 80px;
  overflow: hidden;
}
.hero-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
  clip-path: ellipse(100% 90% at 50% 10%);
}
.hero-text {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  text-align: center;
}
.hero-text h1 {
  font-size: 3rem;
  margin-bottom: 10px;
  font-weight: bold;
  text-shadow: 2px 2px 6px rgba(0,0,0,0.6);
}
.hero-text p {
  font-size: 1.2rem;
  text-shadow: 2px 2px 6px rgba(0,0,0,0.6);
}


.flying-snakes {
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
  z-index: 0;
  opacity: 0.8;
}

.snake {
  filter: drop-shadow(0 0 6px rgba(0,0,0,0.3));
  stroke-dasharray: 400 2000;  /* <--- 400 adalah panjang “ekor”, 2000 total path */
  stroke-dashoffset: 2000;
  animation: snakeFly 6s linear infinite;
  stroke-linecap: round;
  opacity: 0.4;
}

.snake1 { animation-delay: 0s; }
.snake2 { animation-delay: 2s; }
.snake3 { animation-delay: 4s; }

@keyframes snakeFly {
  0%   { stroke-dashoffset: 2000; opacity: 0; }
  10%  { opacity: 0.7; }
  100% { stroke-dashoffset: 0; opacity: 0.4; }
}







/* ABOUT SECTION */
.about-section {
  position: relative;
  text-align: center;
  margin: 20px auto;   /* lebih kecil */
  max-width: 900px;
  min-height: auto;    /* biar sesuai konten, tidak dipaksa tinggi */
  overflow: hidden;
  opacity: 0;
  transform: scale(0.95);
  transition: opacity 0.8s ease, transform 0.8s ease;

    z-index: 1; /* konten tetap di depan */
    
}

.about-image-mission { 
  margin-top: 40px;   /* lebih rapat */
}

.about-section.visible {
  opacity: 1;
  transform: scale(1);
}



body::before {
  content: "";
  position: absolute; /* tetap absolute biar tidak ikut scroll */
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: 
    url("{{ asset('images/logo2.png') }}"),
    url("{{ asset('images/logo2.png') }}"),
    url("{{ asset('images/logo2.png') }}"),
    url("{{ asset('images/logo2.png') }}"),
    url("{{ asset('images/logo2.png') }}"),
    url("{{ asset('images/logo2.png') }}"),
    url("{{ asset('images/logo2.png') }}"),
    url("{{ asset('images/logo2.png') }}");
  background-repeat: no-repeat;
  background-size: 120px;
  background-position:
    40% 40%,   /* kiri atas */
    90% 10%,   /* kanan atas */
    10% 50%,   /* kiri tengah */
    90% 50%,   /* kanan tengah */
    10% 90%,   /* kiri bawah */
    90% 90%,   /* kanan bawah */
    80% 60%,   /* tengah atas */
    10% 70%;   /* tengah bawah */
  opacity: 50%;
  z-index: 0;
  pointer-events: none;
}

body {
  position: relative;
}
body * {
  position: relative;
  z-index: 1;
}




.about-section * {
  position: relative;
  z-index: 1;
}

.about-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  gap: 20px;

    z-index: 1; /* Supaya teks & gambar tetap di atas background logo */
}
.about-image {
  width: 100%;
  max-width: 600px;
  border-radius: 15px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.2);
}
.about-image-mission { margin-top: 90px; }

.section-title {
  font-size: 40px;
  font-weight: 600;
  margin-bottom: 10px;
  color: #222;
  text-transform: uppercase;
  letter-spacing: 2px;
}
.about-text {
  max-width: 900px;
  font-size: 17px;
  line-height: 1.8;
  color: #333;

  /* buat efek transparan */
  background: rgba(255, 255, 255, 0.8); 
  backdrop-filter: blur(6px); 

  padding: 15px 25px;
  border-radius: 12px;

  /* shadow ringan */

}

/* khusus untuk teks terakhir */
.about-text p:last-child {
  position: relative;
  display: inline-block;
  background: rgba(255, 255, 255, 0.85);
  padding: 15px 25px;
  border-radius: 10px;
  box-shadow: 0px 6px 18px rgba(0, 0, 0, 0.25);
}

.org-section .about-text h2 {
  margin:10px;
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  background: rgba(255, 255, 255, 0.85);
  border-radius: 8px;
  box-shadow: 0px 6px 18px rgba(0, 0, 0, 0.25);
}

/* ORGANIZATION SECTION */
.org-section {
  text-align: center;
  padding: 40px 20px;
  display: flex;
  justify-content: center;
}
.org-wrapper {
  display: flex;
  flex-direction: column;
  align-items: center;
  position: relative;
}

.org-line {
  width: 10px;        /* tebal garis */
  height: 50px;       /* panjang garis */
  background-color: orange;
  margin-top: -5px;   /* naik sedikit agar menempel ke bawah teks */
  border-radius: 5px; /* ujung garis membulat */
  z-index: 1;
}

.line {
  width: 10px;
  height: 85px;
  background-color: orange;
}
.org-image {
  max-width: 115vh;
  width: 100%;
  margin: 20px auto;
  border-radius: 15px;
  box-shadow: 0 4px 20px rgba(0,0,0,0.3);
  margin-top: 0px;    /* supaya menempel garis */
}

/* FOOTER */
.footer-main {
  background: #121212;
  color: #ddd;
  padding: 60px 40px 20px;
}
.footer-container {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 40px;
  margin-bottom: 30px;
}
.footer-col { flex: 1 1 200px; }
.footer-col h3 {
  font-size: 20px;
  font-weight: 700;
  margin-bottom: 15px;
  color: #fff;
}
.footer-col ul { list-style: none; padding: 0; margin: 0; }
.footer-col ul li { margin-bottom: 10px; font-size: 15px; }
.footer-col ul li a {
  color: #bbb;
  text-decoration: none;
  transition: color 0.3s ease;
}
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
</style>

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

<section class="hero">
  <img src="{{ asset('images/vision3.webp') }}" alt="Hero Image" class="hero-image">
  <div class="hero-text">
    <h1>About Us</h1>
    <p>Bersama membangun masa depan</p>
  </div>
</section>

<!-- Section 1 -->
<section class="about-section">
  <div class="about-container">
    <img src="{{ asset('images/fotobersama.jpg') }}" alt="Our Mission" class="about-image about-image-mission">
    <h1 class="section-title">Our Mission</h1>
    <div class="about-text">
      <p>Airport Technology (TI) merupakan salah satu bagian penting dari Airport Technical Department di bawah PT. (Persero) Angkasa Pura 1, yang mengelola berbagai aspek teknologi bandara untuk memastikan operasional yang lancar dan efisien. Di Bandara Sultan Aji Muhammad Sulaiman Sepinggan Balikpapan, yang merupakan salah satu cabang dari PT. (Persero) Angkasa Pura 1, Airport Technical Department berperan strategis dalam pengelolaan fasilitas dan infrastruktur bandara, serta memastikan standar keselamatan dan keamanan yang tinggi.</p>
    </div>
  </div>
</section>

<!-- Section 2 -->
<section class="about-section">
  <div class="about-container">
    <div class="about-text">
      <p> Airport Technical Department ini dipimpin oleh Bapak R. Haryo Triharso Seno, yang memiliki tanggung jawab besar dalam mengelola keseluruhan aspek teknis operasional bandara, termasuk pemeliharaan fasilitas, pengelolaan energi, serta teknologi penerbangan yang canggih. Di bawah kepemimpinannya, departemen ini memainkan peran kunci dalam menjaga performa bandara yang optimal dan sesuai dengan standar internasional. Salah satu bagian penting dari Airport Technical Department adalah Airport Technology Section, yang dipimpin oleh Bapak Joddy Suryanto. Bagian ini berfokus pada penerapan teknologi terkini di bandara, mulai dari sistem manajemen teknologi informasi, perangkat lunak kontrol penerbangan, hingga teknologi keamanan dan monitoring canggih. </p>
    </div>
  </div>
</section>

<!-- Section 3 -->
<section class="about-section">
  <div class="about-container">
    <div class="about-text">
      <p>Airport Technology Section juga bertanggung jawab dalam menjaga infrastruktur teknologi yang mendukung operasional sehari-hari, serta memastikan sistem teknologi informasi berjalan dengan lancar untuk mendukung efisiensi dan efektivitas layanan bandara. Dengan kombinasi kepemimpinan yang kuat dan penerapan teknologi yang inovatif, Airport Technology Section di Bandara Sultan Aji Muhammad Sulaiman Sepinggan Balikpapan memiliki peran vital dalam mendukung kesuksesan operasional bandara, sekaligus memastikan kenyamanan dan keamanan bagi setiap penumpang yang menggunakan fasilitas bandara.</p>
    </div>
  </div>
</section>

<!-- Organization -->
<section class="org-section">
  <div class="org-wrapper">
    <div class="about-text"><h2>STRUKTUR ORGANISASI</h2></div>
    <div class="line"></div>
    <img src="{{ asset('images/orgn.jpeg') }}" alt="Struktur Organisasi" class="org-image">
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
        <li><a href="#">About Us</a></li>
        <li><a href="#Services">Our Services</a></li>
      </ul>
      <h3>Support</h3>
      <ul>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Gallery</a></li>
      </ul>
    </div>

    <!-- Kolom 3 - Innovation -->
    <div class="footer-col">
      <h3>Innovation</h3>
      <ul>
        <li><a href="#">Development</a></li>
        <li><a href="#">Field Industrial Practice</a></li>
        <li><a href="#">Planning</a></li>
      </ul>
    </div>

    <!-- Kolom 4 - Vendor -->
    <div class="footer-col">
      <h3>Our Vendor</h3>
      <ul>
        <li>CV. Menara Timur</li>
        <li>PT. Jatimas Angkasa</li>
        <li>PT. Angkasa Pura Supports</li>
      </ul>
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
  document.addEventListener("DOMContentLoaded", function () {
    const sections = document.querySelectorAll(".about-section");

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("visible");
          } else {
            // reset lagi supaya bisa animasi ulang
            entry.target.classList.remove("visible");
          }
        });
      },
      { threshold: 0.2 } // muncul saat 20% terlihat
    );

    sections.forEach((section) => {
      observer.observe(section);
    });
  });
</script>



<script>
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

@endsection
