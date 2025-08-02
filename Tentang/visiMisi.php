<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi Misi - Kelurahan Way Urang</title>
    <style>
        /* ================= GLOBAL ================= */
        html {
          scroll-behavior: smooth;
        }

        body {
          margin: 0;
          font-family: "Montserrat", sans-serif;
          font-optical-sizing: auto;
          font-weight: 400;
          font-style: normal;
          background: #111;
          color: #fff;
        }

        /* ================= NAVBAR ================= */

        .navbar {
          position: fixed;
          top: 0;
          width: 100%;
          background: rgba(0, 0, 0, 0.9);
          backdrop-filter: blur(10px);
          transition: background 0.3s ease, box-shadow 0.3s ease;
          z-index: 10;
          padding: 10px 0;
          box-shadow: 0 2px 10px rgba(0, 0, 0, 0.4);
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
          color: #fff;
          font-size: 1.2em;
          font-weight: 700;
        }

        .nav-logo img {
          height: 35px;
          margin-right: 8px;
        }

        .navbar nav a {
          color: #fff;
          text-decoration: none;
          font-weight: 500;
          margin-left: 20px;
          padding: 0 20px;
          transition: color 0.3s;
        }

        .navbar nav a:hover {
          color: #ffcc00;
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
          padding-bottom: 20px;
          padding-top: 20px;
          margin-bottom: 20px;
          margin-top: 20px; 
          color: #fff;
          background-color: rgba(0, 0, 0, 0.3);
        }

        /* ================= HERO SECTION ================= */
        .hero-section {
          height: 60vh;
          background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
            url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 600"><rect fill="%23333" width="1200" height="600"/><path fill="%234bc0c0" opacity="0.1" d="M0,300 Q300,100 600,300 T1200,300 L1200,600 L0,600 Z"/></svg>')
              center/cover;
          display: flex;
          align-items: center;
          justify-content: center;
          text-align: center;
          position: relative;
          margin-top: 70px;
        }

        .hero-content h1 {
          font-size: 3.5em;
          margin: 0;
          color: #4bc0c0;
          text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .hero-content p {
          font-size: 1.3em;
          margin-top: 15px;
          color: #fff;
          opacity: 0.9;
        }

        .breadcrumb {
          margin-top: 20px;
          font-size: 1em;
          color: #ccc;
        }

        .breadcrumb a {
          color: #4bc0c0;
          text-decoration: none;
          transition: color 0.3s;
        }

        .breadcrumb a:hover {
          color: #fff;
        }

        /* ================= MAIN CONTENT ================= */
        .main-content {
          max-width: 1100px;
          margin: 0 auto;
          padding: 80px 20px;
          position: relative;
          z-index: 1;
        }

        .content-section {
          margin-bottom: 60px;
          background: rgba(34, 34, 34, 0.8);
          padding: 40px;
          border-radius: 15px;
          backdrop-filter: blur(10px);
          border: 1px solid rgba(255, 255, 255, 0.1);
          box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
          transition: transform 0.3s ease;
        }

        .content-section:hover {
          transform: translateY(-5px);
        }

        .content-section h2 {
          color: #4bc0c0;
          font-size: 2.2em;
          margin-bottom: 25px;
          border-bottom: 3px solid #4bc0c0;
          padding-bottom: 10px;
          display: inline-block;
        }

        .content-section h3 {
          color: #ffcc00;
          font-size: 1.5em;
          margin-top: 30px;
          margin-bottom: 15px;
        }

        .content-section p {
          line-height: 1.8;
          font-size: 1.1em;
          color: #e0e0e0;
          margin-bottom: 20px;
          text-align: justify;
        }

        .visi-box {
          background: linear-gradient(
            135deg,
            rgba(75, 192, 192, 0.15),
            rgba(255, 204, 0, 0.1)
          );
          padding: 40px;
          border-radius: 20px;
          border: 2px solid rgba(75, 192, 192, 0.3);
          margin: 30px 0;
          text-align: center;
          position: relative;
          overflow: hidden;
        }



        .visi-box h3 {
          color: #4bc0c0;
          font-size: 1.8em;
          margin-top: 20px;
          margin-bottom: 20px;
          text-transform: uppercase;
          letter-spacing: 2px;
          font-weight: 700;
        }

        .visi-text {
          font-size: 1.3em;
          color: #fff;
          font-weight: 600;
          text-transform: uppercase;
          letter-spacing: 1px;
          line-height: 1.6;
          text-align: center;
        }

        .misi-container {
          background: linear-gradient(
            135deg,
            rgba(255, 204, 0, 0.1),
            rgba(75, 192, 192, 0.1)
          );
          padding: 40px;
          border-radius: 20px;
          border: 2px solid rgba(255, 204, 0, 0.3);
          margin: 40px 0;
        }

        .misi-container h3 {
          color: #ffcc00;
          font-size: 1.8em;
          margin-bottom: 30px;
          text-align: center;
          text-transform: uppercase;
          letter-spacing: 2px;
          font-weight: 700;
          position: relative;
        }



        .misi-list {
          list-style: none;
          padding: 0;
          margin: 0;
        }

        .misi-item {
          background: rgba(255, 255, 255, 0.05);
          margin: 20px 0;
          padding: 25px;
          border-radius: 15px;
          border-left: 5px solid #ffcc00;
          position: relative;
          transition: all 0.3s ease;
        }

        .misi-item:hover {
          transform: translateX(10px);
          background: rgba(255, 255, 255, 0.08);
        }

        .misi-item::before {
          content: counter(misi-counter);
          counter-increment: misi-counter;
          position: absolute;
          left: -15px;
          top: 20px;
          background: #ffcc00;
          color: #111;
          width: 30px;
          height: 30px;
          border-radius: 50%;
          display: flex;
          align-items: center;
          justify-content: center;
          font-weight: 700;
          font-size: 0.9em;
        }

        .misi-list {
          counter-reset: misi-counter;
        }

        .misi-item p {
          margin: 0;
          font-size: 1.1em;
          line-height: 1.7;
          color: #e0e0e0;
          text-align: justify;
          padding-left: 20px;
        }

        .highlight-box {
          background: linear-gradient(
            135deg,
            rgba(75, 192, 192, 0.1),
            rgba(255, 204, 0, 0.1)
          );
          padding: 25px;
          border-radius: 12px;
          border-left: 5px solid #4bc0c0;
          margin: 30px 0;
          position: relative;
        }

        .highlight-box::before {
          content: "💡";
          position: absolute;
          top: -10px;
          left: 20px;
          background: #111;
          padding: 5px 10px;
          border-radius: 50%;
          font-size: 1.2em;
        }

        .highlight-box h4 {
          color: #4bc0c0;
          margin-top: 10px;
          margin-bottom: 15px;
        }

        /* ================= FOOTER ================= */
        .footer {
          font-family: "Montserrat", sans-serif;
          background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 50%, #3b82f6 100%);
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
          background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="rgba(255,255,255,0.03)"/><circle cx="75" cy="75" r="1" fill="rgba(255,255,255,0.03)"/><circle cx="50" cy="10" r="0.5" fill="rgba(255,255,255,0.02)"/><circle cx="90" cy="40" r="0.5" fill="rgba(255,255,255,0.02)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
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
          background: linear-gradient(90deg, #fbbf24, #f59e0b);
          border-radius: 2px;
        }

        .map-container {
          margin-bottom: 20px;
        }

        .address {
          background: rgba(255, 255, 255, 0.08);
          padding: 20px;
          border-radius: 10px;
          backdrop-filter: blur(10px);
          border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .address p {
          font-size: 14px;
          line-height: 1.7;
          color: #e2e8f0;
          margin: 0;
          font-weight: 400;
        }

        .social-media {
          display: flex;
          gap: 15px;
        }

        .social-media a {
          display: inline-block;
          width: 40px;
          height: 40px;
          background: rgba(255, 255, 255, 0.1);
          border-radius: 50%;
          display: flex;
          align-items: center;
          justify-content: center;
          color: #fff;
          transition: all 0.3s ease;
        }

        .social-media a:hover {
          background: #ffcc00;
          color: #111;
          transform: translateY(-3px);
        }

        .logo-lampung img {
          width: 200px;
        }

        /* ================= RESPONSIVE ================= */
        @media (max-width: 768px) {
          .hero-content h1 {
            font-size: 2.5em;
          }

          .main-content {
            padding: 40px 20px;
          }

          .content-section {
            padding: 25px;
          }

          .visi-box, .misi-container {
            padding: 25px;
          }

          .navbar nav {
            display: none;
          }

          .footer-container {
            flex-direction: column;
            gap: 30px;
          }
        }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <header class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <img src="../image/logo.png" alt="Logo Kelurahan">
                <span>Way Urang</span>
            </div>
            <nav>
                <a href="../index.php">Beranda</a>
                <div class="dropdown">
                    <a href="#tentang">Tentang ▾</a>
                    <div class="dropdown-menu">
                        <a href="sejarah.html">Sejarah</a>
                        <a href="visiMisi.html">Visi Misi</a>
                        <a href="strukturOrganisasi.html">Struktur Organisasi</a>
                    </div>
                </div>
                <a href="#layanan">Publikasi</a>
                <a href="#layanan">Potensi Wisata</a>
                <a href="#kontak">Kontak</a>
            </nav>
        </div>
    </header>

    <section class="hero-section">
        <div class="hero-content">
            <h1>Visi & Misi</h1>
            <p>Arah dan Tujuan Pembangunan Lampung Selatan</p>
            <div class="breadcrumb">
                <a href="../index.html">Beranda</a> / <a href="#">Tentang</a> / <span>Visi & Misi</span>
            </div>
        </div>
    </section>

    <main class="main-content">
        <div class="content-section">
            <div class="visi-box">
                <h3>Visi</h3>
                <div class="visi-text">
                    Terwujudnya Masyarakat Lampung Selatan yang Berintegritas, Maju dan Sejahtera dengan Semangat Gotong Royong
                </div>
            </div>
        </div>

        <div class="content-section">
            <div class="misi-container">
                <h3>Misi</h3>
                <ul class="misi-list">
                    <li class="misi-item">
                        <p>Meningkatkan penerapan nilai-nilai agama, budaya dan keluarga dalam kehidupan bermasyarakat</p>
                    </li>
                    <li class="misi-item">
                        <p>Meningkatkan kualitas sumber daya manusia melalui pelayanan pendidikan dan kesehatan serta kesejahteraan sosial</p>
                    </li>
                    <li class="misi-item">
                        <p>Membangun infrastruktur untuk meningkatkan konektivitas antar wilayah dan pusat-pusat perekonomian yang berkelanjutan</p>
                    </li>
                    <li class="misi-item">
                        <p>Mengembangkan ekonomi kreatif dengan memanfaatkan potensi unggulan daerah</p>
                    </li>
                    <li class="misi-item">
                        <p>Meningkatkan kualitas tata kelola pemerintahan dan pelayanan publik yang profesional, transparan, efektif dan akuntabel</p>
                    </li>
                </ul>
            </div>
        </div>


    </main>

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
                <h3>Temukan kami di sosial media</h3>
                <div class="social-media">
                    <a href="#" class="social-link-instagram">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-link-youtube">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-link-facebook">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-link-twitter">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="footer-column logo-column">
                <div class="logo-lampung">
                    <img src="../image/logo.png" alt="Logo Lampung">
                </div>
            </div>
        </div>
    </footer>
</body>
</html>