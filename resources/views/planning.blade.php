@extends('layouts.main')

@section('title', 'Planning')
@section('body-class', 'planning-page')

@push('styles')
<style>
/* General Styles */
body {
    font-family: 'Raleway', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #fff;
    color: #000;
    overflow-x: hidden;
}

/* Navbar Styles */
.navbar {
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

.navbar.hidden {
    transform: translateY(-100%);
}

.navbar .logo img {
    height: 80px;
    width: auto;
    margin-right: 220px;
}

.navbar .nav-links {
    display: flex;
    gap: 30px;
}

.navbar .nav-links a {
    color: white;
    text-decoration: none;
    font-weight: 500;
    position: relative;
}

.navbar .nav-links a::after {
    content: "";
    position: absolute;
    width: 0;
    height: 2px;
    bottom: -5px;
    left: 0;
    background-color: white;
    transition: width 0.3s ease;
}

.navbar .nav-links a:hover::after,
.navbar .nav-links a.active::after {
    width: 100%;
}

/* Hero Section */
.hero {
    position: relative;
    height: 100vh;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    margin-top: 85px; /* Space for fixed navbar */
}

.hero-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('{{ asset("images/dayak1.jpg") }}');
    background-size: cover;
    background-position: center;
    filter: brightness(0.7);
    z-index: -1;
}

.hero-content {
    text-align: center;
    color: white;
    padding: 0 20px;
    z-index: 1;
}

.hero-title {
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 20px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.hero-subtitle {
    font-size: 1.5rem;
    font-weight: 400;
    max-width: 800px;
    margin: 0 auto;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
}

/* Program Section */
.program-section {
    padding: 80px 0;
    position: relative;
}

.section-title {
    text-align: center;
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 50px;
    color: #123566;
    position: relative;
    z-index: 2;
}

.program-container {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 30px;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    position: relative;
    z-index: 2;
}

.program-item {
    flex: 1;
    min-width: 300px;
    max-width: 350px;
    background: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
}

.program-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.15);
}

.program-image {
    width: 100%;
    height: 250px;
    background-size: cover;
    background-position: center;
}

.program-content {
    padding: 25px;
    text-align: center;
    flex-grow: 1;
}

.program-title {
    font-size: 1.4rem;
    font-weight: 600;
    margin-bottom: 15px;
    color: #123566;
}

.program-description {
    font-size: 1rem;
    line-height: 1.6;
    color: #555;
    margin-bottom: 20px;
}

.program-link {
    display: inline-block;
    padding: 10px 20px;
    background-color: #5a7fa3;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-weight: 500;
    transition: background-color 0.3s ease;
}

.program-link:hover {
    background-color: #123566;
}

/* Background decorations */
.program-bg-left, .program-bg-right {
    position: absolute;
    top: 0;
    width: 900px;
    height: 100%;
    z-index: 1;
    opacity: 0.15;
    background-size: cover;
    background-position: center;
}

.program-bg-left {
    left: 100px;
    background-image: url('{{ asset("images/bg injour.png") }}');
}

.program-bg-right {
    right: 0;
    background-image: url('{{ asset("images/bg injour.png") }}');
}

/* Bottom Image Section */
.bottom-image-container {
    width: 100%;
    height: 400px;
    position: relative;
    overflow: hidden;
    margin-top: 0;
    z-index: 1;
    background: linear-gradient(to bottom, #ffffff, #f5f5f5);
}

.garuda-image {
    width: 80%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 200px;
    opacity: 0.6;
    filter: drop-shadow(0px 5px 15px rgba(0, 0, 0, 0.2));
    transform-origin: center bottom;
}



/* Footer Styles */
.footer-main {
    background: #121212;
    color: #ddd;
    padding: 60px 40px 20px;
    margin-top: 20px;
}

.footer-container {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 40px;
    margin-bottom: 30px;
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
}

.footer-col {
    flex: 1;
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
    max-width: 1200px;
    margin: 0 auto;
}

.footer-bottom a {
    color: #bbb;
    text-decoration: none;
}

.footer-bottom a:hover {
    color: #fff;
}

/* Social Media Icons */
.social-media {
    display: flex;
    gap: 15px;
    margin-top: 15px;
}

.social-icon {
    width: 20px;
    height: 20px;
    transition: transform 0.3s ease;
}

.social-icon:hover {
    transform: scale(1.2);
}

/* Responsive Styles */
@media (max-width: 1200px) {
    .program-bg-left, .program-bg-right {
        width: 150px;
    }
}

@media (max-width: 992px) {
    .navbar .logo img {
        margin-right: 100px;
    }
    
    .navbar .nav-links {
        gap: 20px;
    }
    
    .hero-title {
        font-size: 3rem;
    }
    
    .hero-subtitle {
        font-size: 1.3rem;
    }
}

@media (max-width: 768px) {
    .program-bg-left, .program-bg-right {
        display: none;
    }
    
    .navbar {
        padding: 15px 20px;
    }
    
    .navbar .logo img {
        height: 60px;
        margin-right: 20px;
    }
    
    .hero {
        margin-top: 90px;
    }
    
    .hero-title {
        font-size: 2.5rem;
    }
    
    .hero-subtitle {
        font-size: 1.1rem;
    }
    
    .section-title {
        font-size: 2rem;
    }
    
    .program-container {
        gap: 20px;
    }
    
    .program-item {
        min-width: 280px;
    }
    
    .program-image {
        height: 200px;
    }
    
    .program-content {
        padding: 20px;
    }
    
    .bottom-image-container {
        height: 300px;
    }
    
    .footer-container {
        gap: 30px;
    }
    
    .footer-col {
        flex: 1 1 100%;
        text-align: center;
    }
    
    .footer-col ul {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 15px;
    }
    
}

@media (max-width: 576px) {
    .hero-title {
        font-size: 2rem;
    }
    
    .hero-subtitle {
        font-size: 1rem;
    }
    
    .section-title {
        font-size: 1.8rem;
        margin-bottom: 30px;
    }
    
    .program-item {
        min-width: 100%;
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
}
</style>
@endpush

@section('content')
<!-- Navbar -->
<nav class="navbar">
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

<!-- Hero Section -->
<div class="hero">
    <div class="hero-bg"></div>
    <div class="hero-content">
        <h1 class="hero-title">Perencanaan Teknis Bandara</h1>
        <h1 class="hero-title">Tepat dan Andal</h1>
        <p class="hero-subtitle">Mendukung operasional penerbangan dengan jadwal perawatan analisis yang presisi.</p>
    </div>
</div>

<!-- Program Unggulan Section -->
<div class="program-section">
    <!-- Background decorations -->
    <div class="program-bg-left"></div>
    <div class="program-bg-right"></div>
    
    <h2 class="section-title">Program Unggulan</h2>
    <div class="program-container">
        <div class="program-item">
            <div class="program-image" style="background-image: url('{{ asset("images/program1.jpg") }}');"></div>
            <div class="program-content">
                <h3 class="program-title">Program 1</h3>
                <p class="program-description">Deskripsi singkat untuk program pertama Anda. Anda dapat mengganti teks ini sesuai kebutuhan.</p>
                <a href="#" class="program-link">Pelajari Lebih Lanjut</a>
            </div>
        </div>
        
        <div class="program-item">
            <div class="program-image" style="background-image: url('{{ asset("images/program2.jpg") }}');"></div>
            <div class="program-content">
                <h3 class="program-title">Program 2</h3>
                <p class="program-description">Deskripsi singkat untuk program kedua Anda. Anda dapat mengganti teks ini sesuai kebutuhan.</p>
                <a href="#" class="program-link">Pelajari Lebih Lanjut</a>
            </div>
        </div>
        
        <div class="program-item">
            <div class="program-image" style="background-image: url('{{ asset("images/program3.jpg") }}');"></div>
            <div class="program-content">
                <h3 class="program-title">Program 3</h3>
                <p class="program-description">Deskripsi singkat untuk program ketiga Anda. Anda dapat mengganti teks ini sesuai kebutuhan.</p>
                <a href="#" class="program-link">Pelajari Lebih Lanjut</a>
            </div>
        </div>
    </div>
</div>

<!-- Bottom Image Section -->
<div class="bottom-image-container">
    <img src="{{ asset("images/garuda.png") }}" alt="Gambar Garuda" class="garuda-image">
</div>

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
@endsection

@push('scripts')
<script>
    // Navbar hide/show on scroll
    document.addEventListener('DOMContentLoaded', function() {
        let lastScrollTop = 0;
        const navbar = document.querySelector('.navbar');
        
        window.addEventListener('scroll', function() {
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            if (scrollTop > lastScrollTop && scrollTop > 100) {
                // Scroll down
                navbar.classList.add('hidden');
            } else {
                // Scroll up
                navbar.classList.remove('hidden');
            }
            
            lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
        });
    });
</script>
@endpush