@extends('layouts.main')

@section('title', 'Development')
@section('body-class', 'development-page')

@section('content')
<head>
    <style>
        body {
            font-family: 'Raleway', sans-serif;
            margin: 0;
            background: #fff;
            color: #000;
            overflow-x: hidden;
            position: relative;
        }

        /* NAVBAR */
        #navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            display: flex;
            align-items: center;
            padding: 15px 70px;
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

        /* === HERO SECTION === */
        .hero {
            position: relative;
            width: 100%;
            height: 100vh;
            background: url("{{ asset('images/development0.jpeg') }}") center/cover no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
        }
        .hero::after {
            content: "";
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(0,0,0,0.4);
        }
        .hero h1 {
            position: relative;
            font-size: 3rem;
            font-weight: 700;
            z-index: 1;
            animation: fadeInDown 1s ease-out;
        }

        /* Development Content Section */
        .development-content {
            padding: 80px 50px;
            background: #fff;
            position: relative;
            z-index: 1;
            overflow: hidden; /* Untuk memastikan background tidak keluar dari area */
        }

        /* Background Elements untuk development-content */
        .dev-bg-left, .dev-bg-right {
            position: absolute;
            width: 600px; /* Diperbesar dari 300px menjadi 400px */
            height: 500px; /* Diperbesar dari 300px menjadi 400px */
            z-index: -1;
            opacity: 0.5; /* Sedikit dikurangi opacity agar tidak terlalu mencolok */
            object-fit: contain;
        }

        .dev-bg-left {
            top: 50%;
            left: -60px; /* Posisi di luar area content di sebelah kiri */
            transform: translateY(-50%); /* Posisikan di tengah secara vertikal */
        }

        .dev-bg-right {
            top: 50%;
            right: -60px; /* Posisi di luar area content di sebelah kanan */
            transform: translateY(-50%) scaleX(-1); /* Mirror effect dan posisi tengah vertikal */
        }

        .development-title {
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 40px;
            text-align: center;
            position: relative;
            padding-bottom: 15px;
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .development-title.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .development-title::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: linear-gradient(to right, #5a7fa3, #123566);
        }

        .development-items {
            display: flex;
            flex-direction: column;
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 2; /* Pastikan item di atas background */
        }

        .development-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 30px;
            padding: 20px;
            border-radius: 8px;
            background: #f9f9f9;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .development-item.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .development-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 16px rgba(0,0,0,0.12);
        }

        .item-letter {
            font-size: 2rem;
            font-weight: 700;
            color: #123566;
            margin-right: 20px;
            min-width: 40px;
            text-align: center;
        }

        .item-content {
            flex: 1;
        }

        .item-image {
            width: 100%;
            height: auto;
            border-radius: 6px;
            margin-bottom: 15px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .item-image:hover {
            transform: scale(1.02);
        }

        .item-content h3 {
            font-size: 1.4rem;
            margin-bottom: 10px;
            color: #333;
        }

        .item-content p {
            color: #666;
            line-height: 1.6;
        }

        /* Animations */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Stagger animation for items */
        .development-item:nth-child(1) { transition-delay: 0.1s; }
        .development-item:nth-child(2) { transition-delay: 0.2s; }
        .development-item:nth-child(3) { transition-delay: 0.3s; }

        /* CSS untuk modal gambar */
        .image-modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.9);
            animation: fadeIn 0.3s;
        }

        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 900px;
            max-height: 80%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: 5px solid white;
            border-radius: 5px;
        }

        .close-modal {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
            z-index: 1001;
        }

        .close-modal:hover {
            color: #bbb;
        }

        @keyframes fadeIn {
            from {opacity: 0;}
            to {opacity: 1;}
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .dev-bg-left, .dev-bg-right {
                width: 250px; /* Ukuran lebih kecil untuk mobile */
                height: 250px;
            }
            
            .dev-bg-left {
                left: -50px;
            }
            
            .dev-bg-right {
                right: -50px;
            }
            
            .hero {
                height: 70vh;
            }
            
            .development-content {
                padding: 60px 20px;
            }
            
            .development-title {
                font-size: 1.8rem;
            }
            
            .development-item {
                flex-direction: column;
                padding: 15px;
            }
            
            .item-letter {
                margin-right: 0;
                margin-bottom: 15px;
            }
            
            .nav-links {
                gap: 15px;
            }
            
            .logo img {
                margin-right: 100px;
            }
            
            .modal-content {
                width: 95%;
                max-width: none;
            }
        }

        /* ====== Footer ====== */
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
</head>

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

{{-- === HERO IMAGE SECTION === --}}
<section class="hero">
    <h1>Development detail</h1>
</section>

<section class="development-content">
    <!-- Background Elements di dalam development-content -->
    <img src="{{ asset('images/bgblue0.png') }}" alt="Background decoration left" class="dev-bg-left">
    <img src="{{ asset('images/bgblue0.png') }}" alt="Background decoration right" class="dev-bg-right">
    
    <h2 class="development-title">Our project development</h2>
    
    <div class="development-items">
        <div class="development-item">
            <div class="item-content">
                <!-- Tambahkan id pada gambar untuk memudahkan seleksi dengan JavaScript -->
                <img src="{{ asset('images/development.png') }}" alt="Project Analysis" class="item-image" id="development-img">
                <h3>Sistem Informasi Peminjaman Barang (SiJamBang)</h3>
                <p>23 Agustus 2023 -

Aplikasi ini dibuat untuk mencatat keluar masuk barang Airport Technology yang dipinjam oleh pihak lain baik internal maupun eksternal.</p>
            </div>
        </div>
        
    </div>
</section>

<!-- Tambahkan modal untuk menampilkan gambar -->
<div id="imageModal" class="image-modal">
    <span class="close-modal">&times;</span>
    <img class="modal-content" id="modalImage">
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

<script>
    // Navbar Scroll Hide/Show
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
    
    // Animation on scroll
    document.addEventListener('DOMContentLoaded', function() {
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);
        
        // Observe development title
        const devTitle = document.querySelector('.development-title');
        if (devTitle) {
            observer.observe(devTitle);
        }
        
        // Observe all development items
        const devItems = document.querySelectorAll('.development-item');
        devItems.forEach(item => {
            observer.observe(item);
        });
        
        // Tambahkan fungsi untuk modal gambar
        const modal = document.getElementById("imageModal");
        const modalImg = document.getElementById("modalImage");
        const developmentImg = document.getElementById("development-img");
        
        // Ketika gambar development diklik
        developmentImg.onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.src;
        }
        
        // Ketika tombol close diklik
        const closeModal = document.querySelector(".close-modal");
        closeModal.onclick = function() {
            modal.style.display = "none";
        }
        
        // Ketika area di luar gambar diklik
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    });
</script>
@endsection