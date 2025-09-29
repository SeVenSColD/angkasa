<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Service - Airport Technology</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Global */
        body {
            font-family: 'Raleway', sans-serif;
            margin: 0;
            background-color: #fff;
            color: black;
            overflow-x: hidden;

                /* gunakan gambar dari folder images */
    background: url("{{ asset('images/2.png') }}") no-repeat center center fixed;
    background-size: cover;   /* menyesuaikan agar menutupi seluruh layar */
        }

body::before {
    content: "";
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    
    /* Overlay putih sangat tipis agar background tampak lebih pudar */
    background: rgba(255,255,255,0.4); /* 0.4 = 40% putih; bisa 0.2 untuk lebih transparan */
    z-index: -1;
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

        .hero {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }

        .hero-video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hero-overlay-text {
            position: absolute;
            top: 50%;
            left: 50px;
            transform: translateY(-50%);
            color: white;
            z-index: 2;
            text-align: left;
            color: #404040;
            text-shadow: 2px 2px 6px rgba(163, 163, 163, 0.6);
        }

        .hero-overlay-text h1 {
            font-size: 3rem;
            margin: 0;
        }

        .hero-overlay-text p {
            font-size: 1.2rem;
            margin-top: 10px;
        }

        /* Content Section */
        .content-section {
            position: relative;
            padding: 80px 50px;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 40px;
            flex-wrap: wrap;
            overflow: visible;
            max-width: 1200px;
            margin: 0 auto;
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .content-section.animate {
            opacity: 1;
            transform: translateY(0);
        }

        .content-text {
            flex: 1;
            background: #fff;
            padding: 25px;
            box-shadow: 0px 8px 18px rgba(0,0,0,0.15);
            border-radius: 8px;
            text-align: left;
            max-width: 500px;
            margin-top: 100px;
            text-align: justify;
            position: relative;
            z-index: 3;
            opacity: 0;
            transform: translateX(-30px);
            transition: opacity 0.8s ease 0.3s, transform 0.8s ease 0.3s;
        }

        .content-section.animate .content-text {
            opacity: 1;
            transform: translateX(0);
        }

        .content-text p {
            font-size: 1rem;
            line-height: 1.6;
            color: #333;
            margin: 0;
        }

        .content-image {
            flex: 1;
            text-align: center;
            margin-top: -10px;
            position: relative;
            display: inline-block;
            z-index: 2;
            max-width: 500px;
            opacity: 0;
            transform: translateX(30px);
            transition: opacity 0.8s ease 0.5s, transform 0.8s ease 0.5s;
        }

        .content-section.animate .content-image {
            opacity: 1;
            transform: translateX(0);
        }

        .content-image h3 {
            font-size: 1.4rem;
            margin-bottom: 15px;
            color: #333;
        }

        .content-image img {
            max-width: 80%;
            height: auto;
            border-radius: 10px;
            margin-top: -60px;
            position: relative;
            z-index: 3;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .content-image img:hover {
            transform: scale(1.03);
        }

        /* Container untuk SVG animasi */
        .svg-animation-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
            overflow: visible;
        }

        .services-section {
            background: #fff;
            padding: 80px 20px;
            text-align: center;
        }

        .section-header {
            display: grid;
            grid-template-columns: 1fr auto 1fr;
            align-items: center;
            margin-bottom: 50px;
            width: 100%;
        }

        .section-logo {
            height: 80px;
            width: auto;
            justify-self: center;
        }

        .left-text {
            text-align: left;
            font-size: 1.4rem;
            font-weight: 500;
            color: #3b3b3b;
            padding-left: 50px;
        }

        .right-text {
            text-align: right;
            font-size: 1.4rem;
            font-weight: 500;
            color: #3b3b3b;
            padding-right: 50px;
        }

        .skills {
            margin-top: 30px;
            width: 300px;
        }

        .skill {
            margin-bottom: 20px;
        }

        .skill span {
            display: block;
            font-size: 1rem;
            margin-bottom: 5px;
        }

        .progress-bar {
            width: 100%;
            height: 12px;
            background: rgba(255,255,255,0.2);
            border-radius: 6px;
            overflow: hidden;
        }

        .progress {
            height: 100%;
            width: 0;
            background: linear-gradient(to right, #727272, #a4a4a4);
            border-radius: 6px;
            transition: width 2s ease-in-out;
        }
        
        /* Versi kebalikan: gambar kiri, teks kanan */
.content-section.reverse {
    flex-direction: row-reverse;
}

.content-section.reverse .content-text {
    text-align: right;
    margin-top: 100px;
}

/* Geser section agak ke kiri */
.content-section.shift-left {
    margin-left: -10px;  /* sesuaikan angka untuk lebih jauh ke kiri */
    width: calc(100% + 60px); /* biar tidak kepotong */
}

#content2 {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 100px;
    padding: 120px 120px;
    padding-top:1px;
    max-width: 1200px;
    margin: 0 auto;
    opacity: 0;
    transform: translateY(50px);
    transition: opacity 0.8s ease, transform 0.8s ease;
}

#content2.animate {
    opacity: 1;
    transform: translateY(0);
}

#content2 .content-image {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-end;  /* gambar turun ke bawah */
    padding-top: 100px;          /* tambahkan ruang di atas */
    max-width: 500px;
    opacity: 0;
    transform: translateX(-30px);
    transition: opacity 0.8s ease 0.3s, transform 0.8s ease 0.3s;
}

#content2.animate .content-image {
    opacity: 1;
    transform: translateX(0);
}

#content2 .content-image img {
    max-width: 80%;
    width: 100%;
    height: auto;
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

#content2 .content-image img:hover {
    transform: scale(1.03);
}

#content2 .content-text {
    flex: 0 0 50%;
    text-align: left;
    position: relative;
    padding: 40px;
    max-width: 500px;
    opacity: 0;
    transform: translateX(30px);
    transition: opacity 0.8s ease 0.5s, transform 0.8s ease 0.5s;
}

#content2.animate .content-text {
    opacity: 1;
    transform: translateX(0);
}

#content2 .content-text p {
    margin: 0;
    line-height: 1.6;
}

/* Hilangkan shadow logo injourney */
.section-logo {
    box-shadow: none !important;
    filter: none !important;
}

/* Hilangkan text-shadow pada teks kiri & kanan */
.section-header .left-text,
.section-header .right-text {
    text-shadow: none !important;
}


.content-bas{

            position: relative;
            padding: 80px 50px;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 40px;
            flex-wrap: wrap;
            overflow: visible;
            max-width: 1200px;
            margin: 0 auto;
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 0.8s ease, transform 0.8s ease;
}

.content-bas.animate {
    opacity: 1;
    transform: translateY(0);
}

/* Styling untuk content-bas image */
.content-bas .content-image img {
    max-width: 80%;
    height: auto;
    border-radius: 10px;
    margin-top: -60px;
    position: relative;
    z-index: 3;
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.content-bas .content-image img:hover {
    transform: scale(1.03);
}

/* Styling untuk content-bas text */
.content-bas .content-text {
    flex: 1;
    background: #fff;
    padding: 25px;
    box-shadow: 0px 8px 18px rgba(0,0,0,0.15);
    border-radius: 8px;
    text-align: left;
    max-width: 500px;
    margin-top: 100px;
    text-align: justify;
    position: relative;
    z-index: 3;
    opacity: 0;
    transform: translateX(-30px);
    transition: opacity 0.8s ease 0.3s, transform 0.8s ease 0.3s;
}

.content-bas.animate .content-text {
    opacity: 1;
    transform: translateX(0);
}

.content-bas .content-text p {
    font-size: 1rem;
    line-height: 1.6;
    color: #333;
    margin: 0;
}

.content-bas .content-image h3 {
    font-size: 1.4rem;
    margin-bottom: 15px;
    color: #333;
}

.content-bas .content-image {
    opacity: 0;
    transform: translateX(30px);
    transition: opacity 0.8s ease 0.5s, transform 0.8s ease 0.5s;
}

.content-bas.animate .content-image {
    opacity: 1;
    transform: translateX(0);
}


.read-more-section {
    text-align: center;
    padding: 30px 0;
    max-width: 1200px;
    margin: 0 auto;
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.8s ease, transform 0.8s ease;
}

.read-more-section.animate {
    opacity: 1;
    transform: translateY(0);
}

.read-more-section .read-more {
    font-weight: 600;
    font-size: 1rem;
    color: #0073ffff;
    text-decoration: none;
    transition: color .3s ease;
    display: inline-block;
    padding: 10px 20px;
    border: 2px solid #0073ffff;
    border-radius: 30px;
}

.read-more-section .read-more:hover {
    color: #fff;
    background-color: #0073ffff;
}


/* FOOTER */
.footer-main {
  background: #121212;
  color: #ddd;
  padding: 60px 40px 20px;
  opacity: 0;
  transform: translateY(20px);
  transition: opacity 0.8s ease, transform 0.8s ease;
}

.footer-main.animate {
  opacity: 1;
  transform: translateY(0);
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

<!-- Video Section -->
<section class="hero">
    <video autoplay muted loop class="hero-video">
    <source src="{{ asset('videos/ourservicesvid.mp4') }}" type="video/mp4">
        Browser Anda tidak mendukung video.
    </video>

    <!-- Skill h1 hero -->
    <div class="hero-overlay-text">
        <h1>Airport Technology</h1>
        <p>Solusi modern untuk dunia penerbangan</p>

        <!-- Skill Bars -->
        <div class="skills">
            <div class="skill">
                <span>Hardware</span>
                <div class="progress-bar">
                    <div class="progress" data-percentage="95"></div>
                </div>
            </div>

            <div class="skill">
                <span>Design & Development</span>
                <div class="progress-bar">
                    <div class="progress" data-percentage="90"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Content Section -->
<section id="content" class="content-section">
    <div class="section-header">
        <div class="left-text">Airport Technology</div>
    <img src="{{ asset('images/logoinjourney.png') }}" alt="Logo" class="section-logo">
        <div class="right-text">Service</div>
    </div>
    
    <div class="content-text">
        <p>
            (Building Integration System) <br>
            Solusi perangkat lunak yang mengelola berbagai subsistem keamanan seperti kontrol akses, 
            pengawasan video, alarm kebakaran, alamat publik atau sistem intrusi pada satu platform tunggal
        </p>
    </div>
    
    <!-- Kotak gambar -->
    <div class="content-image">
        <h3>BIS</h3>
    <img src="{{ asset('images/3.png') }}" alt="BIS Image">
        
     
    </div>
</section>

<!-- Content Section (Gambar Kiri, Teks Kanan) -->
<section id="content2" class="content-section shift-left">
    <div class="section-header">

    <!-- Gambar di kiri -->
    <div class="content-image">
        <h3>CCTV</h3>
        <img src="{{ asset('images/4.png') }}" alt="ACS Image">
    </div>

    <!-- Teks di kanan -->
    <div class="content-text">
        <p>
           (Closed Circuit Television) <br>
CCTV ini memiliki tujuan untuk memantau situasi dan kondisi tempat tertentu, sehingga dapat mencegah terjadinya tindak kejahatan bahkan sering sekali juga bisa dijadikan sebagai bukti tindak kejahatan yang telah terjadi
        </p>
    </div>
</section>


<!-- Content Section -->
<section id="content" class="content-bas">
    <div class="section-header">
    </div>
    
    <div class="content-text">
        <p>
            (Building Automation System)<br>
Sistem ini bisa dibilang untuk menjalankan semua fungsi yang ada di dalam gedung secara otomatis tanpa ada campur tangan manusia di dalamnya. Sistem ini menggunakan komputer dan juga teknologi informasi untuk mengontrol semua kegiatan fasilitas gedung
        </p>
    </div>
    
    <!-- Kotak gambar -->
    <div class="content-image">
        <h3>BAS</h3>
    <img src="{{ asset('images/6.png') }}" alt="BIS Image">
        
     
    </div>
</section>

<!-- Content Section (Gambar Kiri, Teks Kanan) -->
<section id="content2" class="content-section shift-left">
    <div class="section-header">

    <!-- Gambar di kiri -->
    <div class="content-image">
        <h3>FIDS</h3>
        <img src="{{ asset('images/5.png') }}" alt="ACS Image">
    </div>

    <!-- Teks di kanan -->
    <div class="content-text">
        <p> 
           (Flight Information Display System) <br>
Flight Information Display System adalah suatu sistem yang berfungsi untuk menampilkan informasi jadwal penerbangan baik kedatangan pesawat (arrival) maupun keberangkatan pesawat (departure) di suatu bandar udara
        </p>
    </div>
</section>

<!-- Content Section -->
<section id="content" class="content-bas">
    <div class="section-header">
    </div>
    
    <div class="content-text">
        <p>
            (Master Clock) <br>
Berbasis NTP untuk komunikasi berbagai perangkat bandara seperti FIDS atau Flight Information Display System, Jam Digital dan Jam Analog serta Jam Tower, juga World Clocks dapat kami implementasi dengan sistem ini
        </p>
    </div>
    
    <!-- Kotak gambar -->
    <div class="content-image">
        <h3>MASTER CLOCK</h3>
    <img src="{{ asset('images/7.png') }}" alt="BIS Image">
        
     
    </div>
</section>

<!-- Content Section (Gambar Kiri, Teks Kanan) -->
<section id="content2" class="content-section shift-left">
    <div class="section-header">

    <!-- Gambar di kiri -->
    <div class="content-image">
        <h3>Fire Alarm & Panic Button</h3>
        <img src="{{ asset('images/8.png') }}" alt="ACS Image">
    </div>

    <!-- Teks di kanan -->
    <div class="content-text">
        <p>
Fire alarm system adalah sebuah sistem penanda bahaya terhadap kebakaran yang bekerja untuk mendeteksi keberadaan api yang tidak diinginkan denga memonitor perubahan lingkungan yang terkait dengan pembakaran</p>
    </div>  
</section>

<section class="read-more-section">
<a href="{{ url('readmore') }}" class="read-more">Selengkapnya &raquo;</a>
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

    // Progress bar animation
    document.addEventListener("DOMContentLoaded", function() {
        const progresses = document.querySelectorAll('.progress');
        progresses.forEach(bar => {
            const percentage = bar.getAttribute('data-percentage');
            setTimeout(() => {
                bar.style.width = percentage + '%';
            }, 500);
        });
        
        // Animation on scroll - berulang setiap kali elemen terlihat
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                // Reset animasi ketika elemen tidak terlihat
                if (!entry.isIntersecting) {
                    entry.target.classList.remove('animate');
                    
                    // Reset juga elemen di dalamnya
                    const innerElements = entry.target.querySelectorAll('.content-text, .content-image');
                    innerElements.forEach(el => {
                        // Force reflow untuk memastikan animasi berulang
                        void el.offsetWidth;
                    });
                } 
                // Jalankan animasi ketika elemen terlihat
                else if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                }
            });
        }, observerOptions);
        
        // Observe all content sections
        const contentSections = document.querySelectorAll('.content-section, .content-bas, #content2, .read-more-section, .footer-main');
        contentSections.forEach(section => {
            observer.observe(section);
        });
    });
</script>

</body>
</html>