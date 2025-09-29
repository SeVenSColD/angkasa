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
    background: url("{{ asset('images/1.png') }}") no-repeat center center fixed;
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
            margin-right: 315px;
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

        /* Content BIS */
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
    /* pastikan tinggi minimum agar ada ruang untuk link */
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
            max-width: 80%; /* Perbesar dari 50% menjadi 80% */
            height: auto;
            border-radius: 10px;
            margin-top: -60px;
            position: relative;
            z-index: 3;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1); /* Tambahkan shadow */
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

        /* Shadow hitam → putih */
        .services-section::before {
            content: "";
            position: absolute;
            top: 0px;
            left: 0;
            width: 100%;
            height: 150px;
            background: linear-gradient(to bottom, rgba(220, 220, 220, 0.74), #ffffff);
            z-index: -1;
            pointer-events: none;
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
    align-items: center;
    justify-content: center;
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
    opacity: 0;
    transform: translateX(-30px);
    transition: opacity 0.8s ease 0.3s, transform 0.8s ease 0.3s;
}

#content2.animate .content-image {
    opacity: 1;
    transform: translateX(0);
}

#content2 .content-image img {
    max-width: 80%; /* Perbesar dari 280px menjadi 80% */
    width: 100%;      /* biar ngikutin container */
    height: auto;
    box-shadow: 0 10px 20px rgba(0,0,0,0.1); /* Tambahkan shadow */
    transition: transform 0.3s ease;
}

#content2 .content-image img:hover {
    transform: scale(1.03);
}

#content2 .content-text {
    flex: 0 0 50%;
    text-align: left;
    position: relative;
    padding: 40px;             /* ruang dalam kotak teks */
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

/* Styling untuk content-bas text */
.content-bas .content-text {
            opacity: 0;
            transform: translateX(-30px);
            transition: opacity 0.8s ease 0.3s, transform 0.8s ease 0.3s;
        }

.content-bas.animate .content-text {
            opacity: 1;
            transform: translateX(0);
        }

/* Styling untuk content-bas image */
.content-bas .content-image {
            opacity: 0;
            transform: translateX(30px);
            transition: opacity 0.8s ease 0.5s, transform 0.8s ease 0.5s;
        }

.content-bas.animate .content-image {
            opacity: 1;
            transform: translateX(0);
        }

/* Tambahkan styling untuk content-bas image */
.content-bas .content-image img {
    max-width: 80%; /* Perbesar gambar */
    height: auto;
    border-radius: 10px;
    margin-top: -60px;
    position: relative;
    z-index: 3;
    box-shadow: 0 10px 20px rgba(0,0,0,0.1); /* Tambahkan shadow */
    transition: transform 0.3s ease;
}

.content-bas .content-image img:hover {
    transform: scale(1.03);
}

.back-section {
    width: 100%;
    text-align: center;      /* teks berada di tengah */
    padding: 40px 0;         /* jarak atas bawah */
    margin-top: 60px;        /* jarak dari konten terakhir */
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.8s ease, transform 0.8s ease;
    max-width: 1200px;
    margin: 60px auto 0;
}

.back-section.animate {
    opacity: 1;
    transform: translateY(0);
}

.back-section .back-link {
    text-decoration: none;
    font-size: 1.1rem;
    font-weight: 600;
    color: #0073ffff;          /* warna oranye konsisten */
    transition: color 0.3s ease;
    display: inline-block;
    padding: 10px 20px;
    border: 2px solid #0073ffff;
    border-radius: 30px;
}

.back-section .back-link:hover {
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






<!-- Content Section -->
<section id="content" class="content-section">
    <div class="section-header">

    </div>
    
    <div class="content-text">
        <p> 
            (Master Antena Televisi) <br>
MATV adalah singkatan dari Master Antena Televisi yaitu sebuah sistem distribusi sinyal siaran televisi untuk pelayanan hiburan publik melalui tayangan tv yang menyiarkan channel yang membuat penumpang merasa nyaman ketika berada di ruang tunggu atau di area terminal bandara
        </p>
    </div>
    
    <div class="orange-line"></div> <!-- garis oranye -->
    
    <!-- Kotak gambar -->
    <div class="content-image">
        <h3>MATV</h3>
    <img src="{{ asset('images/9.png') }}" alt="MATV Image">
        
     
    </div>
</section>

<!-- Content Section (Gambar Kiri, Teks Kanan) -->
<section id="content2" class="content-section shift-left">
    <div class="section-header">

    <!-- Gambar di kiri -->
    <div class="content-image">
        <h3>PAS & AAS</h3>
        <img src="{{ asset('images/10.png') }}" alt="PAS & AAS Image">
    </div>

    <div class="orange-line"></div>

    <!-- Teks di kanan -->
    <div class="content-text">
            <div class="orange-line"></div>
        <p>
           (Public Announching System) <br>
(PAS) adalah perangkat yang berfungsi untuk memudahkan costumer service airline di gate untuk menyampaikan informasi tentang penerbangan secara manual yang dikeluarkan dalam bentuk audio.Automatic announcement System (AAS) di desain untuk memberikan pengumuman secara otomatis sesuai system FIDS      </p>
    </div>
</section>


<!-- Content Section -->
<section id="content" class="content-bas">
    <div class="section-header">
    </div>
    
    <div class="content-text">
        <p>
           (IP Phone Analog) <br>
IP PHONE adalah telepon berbasis IP yang memungkinkan panggilan telepon yang akan dilakukan melalui jaringan IP seperti internet. IP PHONE seperti telepon sederhana dengan perangkat lunak berbasis softphones atau bertujuan agar dibangun perangkat keras yang banyak muncul seperti telepon biasa    </p>
    </div>
    
    <div class="orange-line-bas"></div> <!-- garis oranye -->
    
    <!-- Kotak gambar -->
    <div class="content-image">
        <h3>IP Phone Analog</h3>
    <img src="{{ asset('images/11.png') }}" alt="IP Phone Analog Image">
        
     
    </div>
</section>

<!-- Content Section (Gambar Kiri, Teks Kanan) -->
<section id="content2" class="content-section shift-left">
    <div class="section-header">

    <!-- Gambar di kiri -->
    <div class="content-image">
        <h3>Jaringan DataCCTV</h3>
        <img src="{{ asset('images/12.png') }}" alt="Jaringan DataCCTV Image">
    </div>

    <div class="orange-line"></div>

    <!-- Teks di kanan -->
    <div class="content-text">
            <div class="orange-line"></div>
        <p>
Perangkat jaringan data dari Router,Firewall,Core,Distribution,Access Switch       </p>
    </div>
</section>

<!-- Content Section -->
<section id="content" class="content-bas">
    <div class="section-header">
    </div>
    
    <div class="content-text">
        <p>
            (Hold Baggage Screening) <br>
merupakan sebuah software untuk mengontrol barang yang akan masuk pada bagasi pesawat dan pada X-Ray bagasi dengan menggunakan SCADA sebagian control perpindahan barang dan untuk mengetahui posisi penempatan barang tersebut. HBS mengubah pola check-in penumpang, seluruh pemeriksaan penumpang, bagasi termasuk boarding pass dikemas jadi satu menggunakan scan barcode. Barcode inilah yang akan terintegrasi dengan pola bagasi (Baggage Handling System)
        </p>
    </div>
    
    <div class="orange-line-bas"></div> <!-- garis oranye -->
    
    <!-- Kotak gambar -->
    <div class="content-image">
        <h3>HBS</h3>
    <img src="{{ asset('images/13.png') }}" alt="HBS Image">
        
     
    </div>
</section>

<!-- Content Section (Gambar Kiri, Teks Kanan) -->
<section id="content2" class="content-section shift-left">
    <div class="section-header">

    <!-- Gambar di kiri -->
    <div class="content-image">
        <h3>Ground Comunication</h3>
        <img src="{{ asset('images/14.png') }}" alt="Ground Comunication Image">
    </div>

    <div class="orange-line"></div>

    <!-- Teks di kanan -->
    <div class="content-text">
            <div class="orange-line"></div>
        <p>
           (Ground Comunication) <br>
Handy Talky disebut secara singkat HT adalah sebuah alat komunikasi yang bentuknya mirip dengan telepon genggam yang dapat mengkomunikasikan dua orang atau lebih dengan menggunakan gelombang radio dan sering dipakai untuk komunikasi yang sifatnya sementara karena salurannya dapat diganti-ganti setiap saat
       </p>
    </div>  
</section>


<!-- Content Section -->
<section id="content" class="content-bas">
    <div class="section-header">
    </div>
    
    <div class="content-text">
        <p>
Walk Through Metal Detector adalah alat keamanan inspeksi metal atau logam yang berguna untuk mengecek logam pada seseorang yang melewatinya.Hand Held Metal Detector adalah alat pendeteksi logam, yaitu sebuah alat yang mampu mendeteksi keberadaan logam dalam jarak tertentu. X-ray security ini adalah mesin yang diciptakan untuk mendeteksi secara visual semua barang bawaan penumpang pesawat udara yang dapat membahayakan keselamatan penumpang lainnya
        </p>
    </div>
    
    <div class="orange-line-bas"></div> <!-- garis oranye -->
    
    <!-- Kotak gambar -->
    <div class="content-image">
        <h3>Security Equipment</h3>
    <img src="{{ asset('images/15.png') }}" alt="Security Equipment Image">
        
     
    </div>
</section>

<!-- Section Kembali -->
<section class="back-section">
    <a href="{{ url('/services') }}" class="back-link">Kembali</a>
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
        const contentSections = document.querySelectorAll('.content-section, .content-bas, #content2, .footer-main');
        contentSections.forEach(section => {
            observer.observe(section);
        });
    });
</script>

</body>
</html>