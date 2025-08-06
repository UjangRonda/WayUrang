<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelurahan Contoh</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        canvas {
            max-width: 500px;
            margin: 20px;
        }

        /* ================= GLOBAL STYLE CSS================= */
        html {
            scroll-behavior: smooth;
            /* smooth scroll antar section */
        }

        body {
            margin: 0;
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
            background: #ffffff;
            color: #333;
        }

        /* ================= HERO ================= */
        .hero {
            position: relative;
            height: 100vh;
            background: linear-gradient(135deg, rgba(0, 102, 204, 0.4), rgba(0, 180, 216, 0.4)), url("image/background-header.jpeg") center/cover no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            overflow: hidden;
        }

        .hero::before,
        .hero::after {
            content: "";
            position: absolute;
            left: 0;
            width: 100%;
            height: 120px;
            z-index: 1;
            pointer-events: none;
        }

        .hero::after {
            bottom: 0;
            background: linear-gradient(to top, #ffffff 0%, rgba(255, 255, 255, 0) 50%);
        }

        .hero-container {
            position: relative;
            z-index: 2;
            text-align: center;
        }

        .hero-container img {
            width: 120px;
            margin-bottom: 15px;
        }

        .hero-text {
            position: relative;
            z-index: 2;
            font-size: 29px;
            color: #ffffff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        /* ================= SECTION ================= */
        #section-1 {
            position: relative;
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        }

        #section-1::before,
        #section-1::after {
            content: "";
            position: absolute;
            left: 0;
            width: 100%;
            height: 100px;
            /* fade halus antar section */
            pointer-events: none;
            z-index: 1;
        }

        #section-1::before {
            top: 0;
            background: linear-gradient(to bottom, #ffffff 0%, rgba(255, 255, 255, 0) 100%);
        }

        #section-1::after {
            bottom: 0;
            background: linear-gradient(to top, #ffffff 0%, rgba(255, 255, 255, 0) 100%);
        }

        /* ================= SECTION 2 - STATISTIK ================= */
        #section-2 {
            position: relative;
            background: #ffffff;
            padding: 60px 20px;
            z-index: 1;
        }

        #section-2::before,
        #section-2::after {
            content: "";
            position: absolute;
            left: 0;
            width: 100%;
            height: 80px;
            pointer-events: none;
            z-index: 0;
        }

        .stats-container {
            max-width: 1100px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 30px;
            z-index: 2;
            position: relative;
        }

        .stat-card {
            flex: 1 1 calc(25% - 30px);
            background: linear-gradient(135deg, #0066cc 0%, #00b4d8 100%);
            padding: 30px 20px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 102, 204, 0.2);
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .stat-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 180, 216, 0.3);
        }

        .stat-card h3 {
            font-size: 2.5em;
            margin: 0;
            color: #ffffff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .stat-card p {
            margin-top: 10px;
            font-size: 1.1em;
            color: rgba(255, 255, 255, 0.9);
        }

        @media (max-width: 768px) {
            .stat-card {
                flex: 1 1 100%;
            }
        }

        .chart-wrapper {
            max-width: 1100px;
            margin: 40px auto 0;
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            justify-content: center;
        }

        .chart-box {
            background: #ffffff;
            padding: 30px 20px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 102, 204, 0.1);
            flex: 1 1 450px;
            max-width: 500px;
            text-align: center;
            border: 1px solid #e0e7ff;
        }

        .chart-box h3 {
            color: #0066cc;
            margin-bottom: 20px;
            font-size: 1.2em;
            font-weight: 600;
        }

        .chart-box canvas {
            width: 100% !important;
            height: auto !important;
            max-height: 320px;
        }

        .section-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 102, 204, 0.1);
            z-index: 0;
        }

        .hero,
        .content {
            position: relative;
            z-index: 1;
        }

        .content-container {
            position: relative;
            z-index: 2;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 30px;
            max-width: 1100px;
            margin: 0 auto;
            padding: 60px 20px;
        }

        .info {
            flex: 1;
            font-size: 1.2em;
            color: #333;
        }

        .info h2 {
            margin-bottom: 10px;
            font-size: 2em;
            color: #0066cc;
        }

        /* ================= MAP ================= */
        .map {
            position: relative;
            flex: 1;
            height: 500px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 102, 204, 0.2);
            z-index: 2;
            border: 2px solid rgba(0, 102, 204, 0.1);
        }

        .map::after {
            display: none;
        }

        .map iframe {
            position: relative;
            z-index: 10;
        }

        /* ================= NAVBAR ================= */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            background: gradient(180deg, #3e8cd9ff 40%, #316a94 20%, #2b526105 10%);
            backdrop-filter: blur(15px);
            transition: all 0.4s ease;
            z-index: 1000;
            padding: 15px 0;
            overflow: visible;

        }

        .navbar::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.95);
            transform: translateY(-100%);
            transition: transform 0.4s ease;
            z-index: -1;
            box-shadow: 0 4px 20px rgba(0, 102, 204, 0.1);
        }

        .navbar.scrolled::before {
            transform: translateY(0);
        }

        .nav-container {
            max-width: 1100px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        .nav-logo {
            display: flex;
            align-items: center;
            color: #0066cc;
            font-size: 1.2em;
            font-weight: 700;
        }

        .nav-logo img {
            height: 35px;
            margin-right: 8px;
        }


        .navbar.scrolled {
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: 0 8px 32px rgba(0, 102, 204, 0.15);
        }

        .navbar.scrolled nav a,
        .navbar.scrolled span {
            color: #0066cc;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
            max-width: 1200px;
            margin: 0 auto;
        }


        .nav-logo span {
            font-weight: bold;
            color: #fff;
            font-size: 1.2em;
        }

        nav a {
            padding: 15px 20px;
            color: #fff;
            margin-left: 20px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;

        }

        nav a:hover {
            color: #ffffff;
        }

        /* Dropdown */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 999;

        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .dropdown-menu a {
            display: block;
            color: #fff;
            background-color: rgba(0, 126, 216, 0.3);
            transition: all 0.3s ease;
        }

        .dropdown-menu a:hover {
            color: #0066cc;
        }

        .navbar.scrolled .dropdown-menu a {
            background-color: rgba(255, 255, 255, 0.7);
        }

        /* ================= RESPONSIVE ================= */
        @media (max-width: 768px) {
            .content-container {
                flex-direction: column;
                text-align: center;
            }

            .map {
                width: 100%;
                height: 250px;
            }
        }

        /* ================= ANIMASI ================= */
        @keyframes slideDown {
            0% {
                transform: translateY(-100%);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }


        /* Footer */
        .footer {
            font-family: "Montserrat", sans-serif;
            background: linear-gradient(135deg, #0066cc 0%, #00b4d8 50%, #87ceeb 100%);
            color: white;
            padding: 50px 0 0 0;
            margin-top: 50px;
            position: relative;
            overflow: hidden;
        }

        .footer::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="rgba(255,255,255,0.08)"/><circle cx="75" cy="75" r="1" fill="rgba(255,255,255,0.08)"/><circle cx="50" cy="10" r="0.5" fill="rgba(255,255,255,0.05)"/><circle cx="90" cy="40" r="0.5" fill="rgba(255,255,255,0.05)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            pointer-events: none;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-evenly;
            align-items: flex-start;
            gap: 50px;
            padding: 0 30px 40px 30px;
            position: relative;
            z-index: 1;
        }

        .footer-column {
            flex: 1;
            max-width: 300px;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.6s ease forwards;
        }

        .footer-column:nth-child(1) {
            animation-delay: 0.1s;
        }

        .footer-column:nth-child(2) {
            animation-delay: 0.2s;
        }

        .footer-column:nth-child(3) {
            animation-delay: 0.3s;
        }

        .footer-column:nth-child(4) {
            animation-delay: 0.4s;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .footer-column h3 {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 25px;
            color: white;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-column h3::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 3px;
            background: linear-gradient(90deg, #ffffff, #87ceeb);
            border-radius: 2px;
        }

        .footer-column ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-column ul li {
            margin-bottom: 12px;
            transform: translateX(-10px);
            opacity: 0;
            animation: slideInLeft 0.5s ease forwards;
        }

        .footer-column ul li:nth-child(1) {
            animation-delay: 0.5s;
        }

        .footer-column ul li:nth-child(2) {
            animation-delay: 0.6s;
        }

        .footer-column ul li:nth-child(3) {
            animation-delay: 0.7s;
        }

        .footer-column ul li:nth-child(4) {
            animation-delay: 0.8s;
        }

        @keyframes slideInLeft {
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .footer-column ul li a {
            color: #e2e8f0;
            text-decoration: none;
            font-size: 14px;
            font-weight: 400;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            padding: 8px 0;
            border-radius: 6px;
            position: relative;
        }

        .footer-column ul li a::before {
            content: "▶";
            margin-right: 10px;
            font-size: 10px;
            color: #ffffff;
            transition: all 0.3s ease;
        }

        .footer-column ul li a:hover {
            color: white;
            transform: translateX(5px);
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }

        .logo-lampung img {
            width: 200px;
        }

        .footer-column ul li a:hover::before {
            color: #87ceeb;
            transform: scale(1.2);
        }

        .social-media {
            width: 160px;
            display: grid;
            grid-auto-flow: column;
            gap: 10px;
        }

        .social-media a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            transition: all 0.3s ease;
        }

        .social-media a:hover {
            background: #ffffff;
            color: #0066cc;
            transform: translateY(-3px);
        }

        .map-container {
            margin-bottom: 20px;
        }

        .map-placeholder {
            width: 100%;
            height: 160px;
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
            border: 2px solid rgba(0, 102, 204, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #0066cc;
            font-size: 13px;
            font-weight: 500;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px rgba(0, 102, 204, 0.1);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .map-placeholder:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 40px rgba(0, 102, 204, 0.2);
        }

        .address {
            background: rgba(255, 255, 255, 0.15);
            padding: 20px;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .address p {
            font-size: 14px;
            line-height: 1.7;
            color: #e2e8f0;
            margin: 0;
            font-weight: 400;
        }

        .visitor-stats {
            background: rgba(255, 255, 255, 0.15);
            padding: 25px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }

        .stat-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
            padding: 8px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            font-size: 14px;
            font-weight: 400;
        }

        .stat-row:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }

        .stat-row span:first-child {
            color: #e2e8f0;
        }

        .stat-row span:last-child {
            font-weight: 600;
            color: #ffffff;
            font-size: 16px;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
        }

        .footer-bottom {
            background: rgba(0, 102, 204, 0.3);
            padding: 25px 0;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            position: relative;
            z-index: 1;
        }

        .footer-bottom-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
            color: #e2e8f0;
            font-weight: 400;
        }

        .footer-bottom-content p {
            margin: 0;
            line-height: 1.5;
        }

        .footer-bottom-content p:first-child {
            font-weight: 500;
            color: white;
        }

        @media (max-width: 768px) {
            .footer-container {
                flex-direction: column;
                gap: 40px;
                padding: 0 20px 30px 20px;
            }

            .footer-bottom-content {
                flex-direction: column;
                gap: 15px;
                text-align: center;
                padding: 0 20px;
            }

            .footer-column h3 {
                font-size: 18px;
            }
        }

        @media (max-width: 1024px) {
            .footer-container {
                flex-wrap: wrap;
                gap: 40px;
            }
        }

        /* Scroll animation trigger */
        .footer.animate .footer-column {
            animation-play-state: running;
        }

        /* ========== SECTION 3: WISATA ========== */
        .wisata {
            padding: 60px 20px;
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            color: #333;
            text-align: center;
        }

        .section-title h2 {
            font-size: 2em;
            color: #0066cc;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .section-title p {
            color: #666;
            margin-bottom: 40px;
        }

        .wisata-gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }

        .wisata-card {
            background: #ffffff;
            border-radius: 15px;
            overflow: hidden;
            width: 280px;
            box-shadow: 0 8px 25px rgba(0, 102, 204, 0.1);
            transition: all 0.3s ease;
            border: 1px solid #e0e7ff;
        }

        .wisata-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 180, 216, 0.2);
        }

        .wisata-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .wisata-card:hover img {
            transform: scale(1.05);
        }

        .wisata-card h3 {
            margin: 15px 0 10px;
            color: #0066cc;
            font-weight: 600;
        }

        .wisata-card p {
            color: #666;
            font-size: 0.9em;
            padding: 0 15px 20px;
            line-height: 1.6;
        }

        .info-wisata {
            top: 50px;
            display: flex;
            position: relative;
            justify-content: center;
            width: 100%;
        }

        .info-wisata a {
            background: linear-gradient(135deg, #0066cc, #00b4d8);
            color: white;
            padding: 12px 25px;
            border-radius: 25px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            font-weight: 500;
            box-shadow: 0 4px 15px rgba(0, 102, 204, 0.3);
        }

        .info-wisata a:hover {
            background: linear-gradient(135deg, #00b4d8, #87ceeb);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 180, 216, 0.4);
        }
    </style>
</head>

<body>
    <header class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <img src="image/logo.png" alt="Logo Kelurahan">
                <span>Way Urang</span>
            </div>
            <nav>
                <a href="#hero">Beranda</a>
                <div class="dropdown">
                    <a href="#tentang">Tentang ▾</a>
                    <div class="dropdown-menu">
                        <a href="tentang/sejarah.php">Sejarah</a>
                        <a href="tentang/visiMisi.php">Visi Misi</a>
                        <a href="tentang/strukturOrganisasi.php">Struktur Organisasi</a>
                    </div>
                </div>
                <a href="tempat wisata/potensiWisata.php">Potensi Wisata</a>
                <a href="#kontak">Kontak</a>
            </nav>

        </div>
    </header>

    <section class="hero" id="hero">
        <div class="section-overlay"></div>
        <div class="hero-container">
            <img src="image/logo.png" alt="Logo Kelurahan" class="logo">
            <div class="hero-text">
                <h1>SELAMAT DATANG DI WAY URANG</h1>
                <p>Lampung Selatan BISA! BISA! BISA!</p>
            </div>
        </div>
    </section>

    <section class="hero" id="section-1">
        <div class="section-overlay"></div>
        <div class="content-container">
            <div class="info">
                <h2>Kelurahan Way Urang</h2>Kelurahan Way Urang, yang terletak di jantung Kecamatan Kalianda, Lampung Selatan, merupakan kawasan aktif dan dinamis dengan semangat gotong royong yang kuat. Melalui berbagai program seperti pelatihan kesiapsiagaan bencana, aksi bersih sungai, hingga kegiatan meriah seperti jalan sehat dan peluncuran <span style="font-weight:bold;">Koperasi Desa <span style="color:red;">Merah</span> <span style="color:white; background-color:black;">Putih</span></span>, Way Urang terus tumbuh sebagai kelurahan yang tangguh, peduli lingkungan, dan berdaya secara ekonomi.
            </div>
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31760.367115117562!2d105.58153845!3d-5.7065105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e41103cd936a2d9%3A0x649a075338c4a840!2sWay%20Urang%2C%20Kalianda%2C%20South%20Lampung%20Regency%2C%20Lampung!5e0!3m2!1sen!2sid!4v1753075539861!5m2!1sen!2sid&zoom=15&disableDefaultUI=true&scrollwheel=false"
                    width="600"
                    height="450"
                    style="border:0; pointer-events:none;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

        </div>
    </section>

    <section id="section-2">
        <div class="stats-container">
            <!-- Statistik singkat -->
            <div class="stat-card">
                <h3>14.844</h3>
                <p>Jumlah Penduduk</p>
            </div>
            <div class="stat-card">
                <h3>57</h3>
                <p>Jumlah RT</p>
            </div>
            <div class="stat-card">
                <h3>77%</h3>
                <p>Usia Produktif</p>
            </div>

            <!-- Chart Section -->
            <div class="chart-wrapper">
                <div class="chart-box">
                    <h3>Rasio Jenis Kelamin</h3>
                    <canvas id="genderChart"></canvas>
                </div>
                <div class="chart-box">
                    <h3>Distribusi Pekerjaan</h3>
                    <canvas id="jobChart"></canvas>
                </div>
            </div>
    </section>

    <section id="section-3" class="wisata">
        <div class="section-title">
            <h2>Tempat Wisata di Way Urang</h2>
            <p>Jelajahi keindahan alam dan budaya lokal yang ada di Kelurahan Way Urang.</p>
        </div>
        <div class="wisata-gallery">
            <div class="wisata-card">
                <img src="image/senaya/senaya (1).JPG" alt="Pantai Senaya">
                <h3>Senaya Beach</h3>
                <p>Destinasi favorit warga lokal untuk menikmati pemandangan matahari terbenam dan angin pantai yang sejuk.</p>
            </div>
            <div class="wisata-card">
                <img src="image/Aurora/Aurora (1).JPG" alt="Pantai Aurora">
                <h3>Aurora Beach</h3>
                <p>Terletak di balik perbukitan, pantai ini menawarkan suasana tenang dan cocok untuk berjalan santai atau berfoto.</p>
            </div>
            <div class="wisata-card">
                <img src="image/sanggar-1.JPG" alt="Pantai Sanggar">
                <h3>Sanggar Beach</h3>
                <p>Pantai berpasir putih yang sering digunakan sebagai tempat edukasi alam dan kegiatan masyarakat lokal.</p>
            </div>

        </div>
        <div class="info-wisata">
            <a href="">Lihat Selengkapnya</a>
        </div>
    </section>


    <section class="content" id="tentang">
        <footer class="footer">
            <div class="footer-container">
                <div class="footer-column">
                    <h3>Lokasi</h3>
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3969.9174090236666!2d105.58537167474643!3d-5.725036194257011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e411121219caf0d%3A0x29bacdcac4050a82!2sKantor%20Lurah%20Way%20Urang!5e0!3m2!1sen!2sid!4v1753858623359!5m2!1sen!2sid"
                            width="100%"
                            height="160"
                            style="border:0; border-radius: 10px;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div class="address">
                        <p>Jl. Samudra Pasai No.33, Way Urang, Kec. Kalianda, Kota Lampung Selatan, Lampung<br>
                            Kode Pos 35716</p>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Navigasi</h3>
                    <ul class="footer-nav">
                        <li><a href="#beranda">Beranda</a></li>
                        <li><a href="#tentang">Tentang</a></li>
                        <li><a href="#layanan">Layanan</a></li>
                        <li><a href="#kontak">Kontak</a></li>
                    </ul>
                </div>


                <div class="footer-column">
                    <h3>Temukan kami di sosial media</h3>
                    <div class="social-media">
                        <a href="#" class="social-link-instagram">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                        <a href="#" class="social-link-outube">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                            </svg>
                        </a>
                        <a href="#" class="social-link-acebook">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="#" class="social-link-witter">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                            </svg>
                        </a>
                    </div>
                </div>



            </div>
            </div>

            <div class="footer-bottom">
                <div class="footer-bottom-content">
                    <p>© Kelurahan Way Urang.</p>
                    <p>Support By : KKN Mahasiswa Universitas Sebelas Maret</p>
                </div>
            </div>
        </footer>
    </section>

    <script>
        const navbar = document.querySelector('.navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const genderCtx = document.getElementById('genderChart').getContext('2d');
        new Chart(genderCtx, {
            type: 'doughnut',
            data: {
                labels: ['Perempuan', 'Laki-laki'],
                datasets: [{
                    data: [7440, 7404],
                    backgroundColor: ['#ff4d6d', '#4d79ff'],
                }]
            },
            options: {
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            color: '#0066cc'
                        }
                    }
                }
            }
        });

        const jobCtx = document.getElementById('jobChart').getContext('2d');
        new Chart(jobCtx, {
            type: 'bar',
            data: {
                labels: [
                    'Karyawan (PNS, TNI, Swasta)', 'Wiraswasta / Pedagang', 'Petani', 'Buruh Tani',
                    'Peternak', 'Jasa', 'Pensiunan', 'Lainnya', 'Pengangguran', 'Pelajar'
                ],
                datasets: [{
                    label: 'Jumlah',
                    data: [1776, 1808, 497, 108, 159, 208, 285, 402, 100, 9501],
                    backgroundColor: '#4bc0c0',
                }]
            },
            options: {
                indexAxis: 'y',
                scales: {
                    x: {
                        ticks: {
                            color: '#0066cc'
                        },
                        grid: {
                            color: '#444'
                        }
                    },
                    y: {
                        ticks: {
                            color: '#0066cc'
                        },
                        grid: {
                            color: '#444'
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        backgroundColor: '#333',
                        titleColor: '#ffcc00',
                        bodyColor: '#0066cc'
                    }
                }
            }
        });
    </script>

</body>

</html>