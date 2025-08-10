<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Potensi Wisata - Kelurahan Way Urang</title>
  <style>
    /* ================= GLOBAL ================= */
    :root {
      --primary-color: #0066cc;
      --secondary-color: #00b4d8;
      --accent-color: #87ceeb;
      --text-color: #333;
      --light-text: #ffffff;
      --bg-gradient: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 50%, var(--accent-color) 100%);
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    html {
      scroll-behavior: smooth;
      font-size: 16px;
    }

    body {
      margin: 0;
      font-family: "Montserrat", sans-serif;
      font-optical-sizing: auto;
      font-weight: 400;
      font-style: normal;
      background: #ffffff;
      color: var(--text-color);
      line-height: 1.6;
      overflow-x: hidden;
    }

    img {
      max-width: 100%;
      height: auto;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    /* ================= NAVBAR ================= */
    .navbar {
      position: fixed;
      top: 0;
      width: 100%;
      background: transparent;
      backdrop-filter: blur(15px);
      transition: all 0.4s ease;
      z-index: 1000;
      padding: 15px 0;
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

    .navbar.scrolled span {
      font-weight: bold;
      color: var(--primary-color);
    }

    .navbar.scrolled .dropdown-menu a {
      background-color: #fff;
    }

    .navbar.scrolled nav a {
      color: var(--primary-color);
    }

    .nav-container {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 20px;
    }

    .nav-logo {
      display: flex;
      align-items: center;
      color: var(--primary-color);
      font-size: 1.2rem;
      font-weight: 700;
      z-index: 1001;
    }

    .nav-logo img {
      width: 40px;
      height: auto;
      margin-right: 10px;
    }

    .nav-logo span {
      font-weight: bold;
      color: var(--light-text);
      transition: color 0.3s;
    }

    .navbar.scrolled .nav-logo span {
      color: var(--primary-color);
    }

    .nav-links {
      display: flex;
      align-items: center;
      gap: 20px;
    }

    .nav-links a {
      padding: 10px 15px;
      color: var(--light-text);
      text-decoration: none;
      font-weight: 500;
      font-size: 0.95rem;
      transition: all 0.3s;
      border-radius: 8px;
    }

    .nav-links a:hover {
      color: var(--light-text);
      background: rgba(255, 255, 255, 0.1);
    }

    .navbar.scrolled .nav-links a {
      color: var(--primary-color);
    }

    .navbar.scrolled .nav-links a:hover {
      color: var(--light-text);
      background: rgba(0, 102, 204, 0.1);
    }

    /* Dropdown */
    .dropdown {
      position: relative;
    }

    .dropdown-menu {
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      z-index: 999;
      min-width: 200px;
      background: rgba(0, 102, 204, 0.95);
      backdrop-filter: blur(10px);
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 8px 32px rgba(0, 102, 204, 0.3);
    }

    @media (min-width: 769px) {
      .dropdown:hover .dropdown-menu {
        display: block;
      }
    }

    .dropdown-menu a {
      display: block;
      color: var(--light-text) !important;
      background: transparent;
      padding: 12px 16px;
      margin: 0;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
      font-size: 0.9em;
    }

    .dropdown-menu a:hover {
      background: rgba(255, 255, 255, 0.1);
    }

    .navbar.scrolled .dropdown-menu {
      background: rgba(255, 255, 255, 0.95);
    }

    .navbar.scrolled .dropdown-menu a {
      color: var(--primary-color) !important;
      border-bottom: 1px solid rgba(0, 102, 204, 0.1);
    }

    .navbar.scrolled .dropdown-menu a:hover {
      background: rgba(0, 102, 204, 0.1);
    }

    /* Hamburger Menu */
    .hamburger {
      display: none;
      flex-direction: column;
      cursor: pointer;
      padding: 5px;
      z-index: 1001;
    }

    .hamburger span {
      width: 25px;
      height: 3px;
      background: var(--light-text);
      margin: 3px 0;
      transition: 0.3s;
      border-radius: 2px;
    }

    .navbar.scrolled .hamburger span {
      background: var(--primary-color);
    }

    .hamburger.active span:nth-child(1) {
      transform: rotate(-45deg) translate(-5px, 6px);
    }

    .hamburger.active span:nth-child(2) {
      opacity: 0;
    }

    .hamburger.active span:nth-child(3) {
      transform: rotate(45deg) translate(-5px, -6px);
    }

    /* Mobile Navigation */
    @media (max-width: 768px) {
      .hamburger {
        display: flex;
      }

      .nav-links {
        position: fixed;
        top: 70px;
        right: -60%;
        width: 60%;
        height: calc(100vh - 70px);
        background: rgba(0, 102, 204, 0.95);
        backdrop-filter: blur(15px);
        flex-direction: column;
        justify-content: flex-start;
        align-items: stretch;
        padding: 20px 0;
        transition: right 0.3s ease;
        gap: 0;
        overflow-y: auto;
      }

      .nav-links.active {
        right: 0;
      }

      .navbar.scrolled .nav-links {
        background: rgba(0, 102, 204, 0.95);
      }

      .nav-links > a,
      .nav-links > .dropdown {
        width: 100%;
        margin: 0;
      }

      .nav-links > a {
        padding: 15px 20px;
        text-align: left;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        color: var(--light-text) !important;
        font-weight: 500;
        display: block;
        text-decoration: none;
      }

      .nav-links > a:hover {
        background: rgba(255, 255, 255, 0.1);
        color: var(--light-text) !important;
      }

      /* Dropdown styling untuk mobile */
      .dropdown {
        width: 100%;
      }

      .dropdown > a {
        padding: 15px 20px;
        text-align: left;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        color: var(--light-text) !important;
        font-weight: 500;
        display: flex;
        justify-content: space-between;
        align-items: center;
        text-decoration: none;
        cursor: pointer;
      }

      .dropdown > a:hover {
        background: rgba(255, 255, 255, 0.1);
        color: var(--light-text) !important;
      }

      .dropdown > a::after {
        content: "▼";
        font-size: 0.8em;
        transition: transform 0.3s ease;
      }

      .dropdown.active > a::after {
        transform: rotate(180deg);
      }

      .dropdown-menu {
        position: static;
        display: none;
        width: 100%;
        background: rgba(0, 0, 0, 0.3);
        box-shadow: none;
        border-radius: 0;
        margin: 0;
        padding: 0;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
      }

      .dropdown.active .dropdown-menu {
        display: block;
      }

      .dropdown-menu a {
        background: transparent !important;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        font-size: 0.9em;
        padding: 12px 40px;
        color: rgba(255, 255, 255, 0.9) !important;
        font-weight: 400;
        text-align: left;
        display: block;
        text-decoration: none;
      }

      .dropdown-menu a:hover {
        background: rgba(255, 255, 255, 0.1) !important;
        color: var(--light-text) !important;
      }

      .dropdown-menu a:last-child {
        border-bottom: none;
      }

      .nav-container {
        padding: 0 15px;
      }

      .nav-logo img {
        height: 30px;
      }

      .nav-logo span {
        font-size: 1em;
      }
    }

    /* ================= HERO SECTION ================= */
    .hero-section {
      height: 70vh;
      min-height: 500px;
      background: var(--bg-gradient);
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      position: relative;
      padding: 0 20px;
    }

    .hero-content {
      max-width: 800px;
      margin: 0 auto;
    }

    .hero-content h1 {
      font-size: clamp(2rem, 5vw, 3.5rem);
      margin: 0;
      color: var(--light-text);
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
      line-height: 1.2;
    }

    .hero-content p {
      font-size: clamp(1rem, 2vw, 1.3rem);
      margin-top: 15px;
      color: var(--light-text);
      opacity: 0.95;
    }

    .breadcrumb {
      margin-top: 20px;
      font-size: 0.95rem;
      color: rgba(255, 255, 255, 0.8);
    }

    .breadcrumb a {
      color: var(--light-text);
      text-decoration: none;
      transition: color 0.3s;
    }

    .breadcrumb a:hover {
      color: #ffff99;
    }

    /* Wave Animation */
    .wave-after {
      width: 100%;
      overflow: hidden;
      line-height: 0;
      margin-top: -5px;
    }

    .wave-after svg {
      display: block;
      width: 100%;
      height: 120px;
    }

    /* ================= MAIN CONTENT ================= */
    .main-content {
      max-width: 1200px;
      margin: 0 auto;
      padding: 80px 20px;
      position: relative;
      z-index: 1;
      background: #ffffff;
    }

    .content-section {
      margin-bottom: 60px;
    }

    .content-section h2 {
      color: var(--primary-color);
      font-size: clamp(1.5rem, 3vw, 2.2rem);
      margin-bottom: 40px;
      text-align: center;
      border-bottom: 3px solid var(--primary-color);
      padding-bottom: 10px;
      display: inline-block;
      width: 100%;
    }

    /* ================= PUBLIKASI GRID ================= */
    .publikasi-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 30px;
      margin-top: 40px;
    }

    .publikasi-card {
      background: #ffffff;
      border-radius: 15px;
      border: 1px solid #e0e7ff;
      box-shadow: 0 8px 25px rgba(0, 102, 204, 0.1);
      overflow: hidden;
      transition: all 0.3s ease;
      cursor: pointer;
      text-decoration: none;
      color: inherit;
    }

    .publikasi-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 40px rgba(0, 180, 216, 0.2);
      border-color: var(--primary-color);
    }

    .card-image {
      width: 100%;
      height: 200px;
      overflow: hidden;
      position: relative;
    }

    .card-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.3s ease;
    }

    .publikasi-card:hover .card-image img {
      transform: scale(1.05);
    }

    .card-content {
      padding: 25px;
    }

    .card-title {
      font-size: 1.2rem;
      font-weight: 600;
      color: var(--primary-color);
      margin-bottom: 15px;
      line-height: 1.3;
    }

    .card-description {
      color: #555;
      line-height: 1.6;
      padding-bottom: 20px;
      font-size: 0.95rem;
      margin: 0;
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }

    /* ================= FOOTER ================= */
    .footer {
      font-family: "Montserrat", sans-serif;
      background: var(--bg-gradient);
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

    @keyframes fadeInUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .footer-column h3 {
      font-size: 1.25rem;
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
      background: linear-gradient(90deg, #ffffff, var(--accent-color));
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
      font-size: 0.875rem;
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

    .footer-column ul li a:hover::before {
      color: var(--accent-color);
      transform: scale(1.2);
    }

    .social-media {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
      justify-content: flex-start;
    }

    .social-media a {
      display: flex;
      width: 40px;
      height: 40px;
      background: rgba(255, 255, 255, 0.2);
      border-radius: 50%;
      align-items: center;
      justify-content: center;
      color: #fff;
      transition: all 0.3s ease;
    }

    .social-media a:hover {
      background: #ffffff;
      color: var(--primary-color);
      transform: translateY(-3px);
    }

    .social-media a.social-link-instagram:hover {
      background: #ffffff !important;
      transform: translateY(-3px);
    }

    .social-media a.social-link-instagram:hover svg {
      filter: sepia(1) hue-rotate(290deg) saturate(3) brightness(1.2) !important;
    }

    .map-container {
      margin-bottom: 20px;
      width: 100%;
    }

    .map-container iframe {
      width: 100%;
      height: 160px;
      border: 0;
      border-radius: 10px;
      box-shadow: 0 8px 32px rgba(0, 102, 204, 0.1);
    }

    .address {
      background: rgba(255, 255, 255, 0.15);
      padding: 20px;
      border-radius: 10px;
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);
      width: 100%;
    }

    .address p {
      font-size: 0.875rem;
      line-height: 1.7;
      color: #e2e8f0;
      margin: 0;
      font-weight: 400;
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
      font-size: 0.8125rem;
      color: #e2e8f0;
      font-weight: 400;
      flex-wrap: wrap;
      gap: 15px;
    }

    .footer-bottom-content p {
      margin: 0;
      line-height: 1.5;
    }

    .footer-bottom-content p:first-child {
      font-weight: 500;
      color: white;
    }

    /* RESPONSIVE FOOTER */
    @media (max-width: 768px) {
      .footer-container {
        flex-direction: column;
        gap: 30px;
        padding: 0 20px 30px 20px;
      }

      .footer-column {
        max-width: 100%;
        text-align: left;
      }

      /* Khusus untuk kolom lokasi - batasi lebar */
      .footer-column:first-child {
        max-width: 350px;
        align-self: flex-start;
      }

      .map-container {
        width: 100%;
        max-width: 350px;
      }

      .map-container iframe {
        width: 100%;
        height: 180px;
      }

      .address {
        width: 100%;
        max-width: 350px;
        padding: 15px;
        margin-top: 15px;
      }

      .address p {
        font-size: 0.8125rem;
        text-align: left;
      }

      .footer-bottom-content {
        flex-direction: column;
        text-align: center;
        padding: 0 20px;
      }

      .footer-column h3 {
        font-size: 1.125rem;
      }

      .social-media {
        justify-content: flex-start;
      }
    }

    @media (max-width: 480px) {
      .footer-container {
        padding: 0 15px 20px 15px;
        gap: 25px;
      }

      .footer-column {
        max-width: 100%;
      }

      /* Khusus untuk kolom lokasi di mobile */
      .footer-column:first-child {
        max-width: 320px;
        align-self: flex-start;
      }

      .footer-column h3 {
        font-size: 1rem;
      }

      .map-container {
        width: 100%;
        max-width: 320px;
      }

      .map-container iframe {
        width: 100%;
        height: 160px;
      }

      .address {
        width: 100%;
        max-width: 320px;
        padding: 12px;
        margin-top: 12px;
      }

      .address p {
        font-size: 0.75rem;
        line-height: 1.6;
      }

      .footer-bottom-content {
        padding: 0 15px;
      }
    }

    /* Extra small screens */
    @media (max-width: 360px) {
      .footer-column:first-child {
        max-width: 280px;
        align-self: flex-start;
      }

      .map-container {
        width: 100%;
        max-width: 280px;
      }

      .map-container iframe {
        width: 100%;
        height: 140px;
      }

      .address {
        width: 100%;
        max-width: 280px;
        padding: 10px;
      }

      .address p {
        font-size: 0.6875rem;
        line-height: 1.5;
      }
    }

    /* ================= RESPONSIVE ================= */
    @media (max-width: 768px) {
      .hero-section {
        height: 60vh;
        min-height: 400px;
      }

      .hero-content h1 {
        font-size: 2rem;
      }

      .hero-content p {
        font-size: 1rem;
      }

      .main-content {
        padding: 60px 20px;
      }

      .publikasi-grid {
        grid-template-columns: 1fr;
        gap: 20px;
      }

      .card-image {
        height: 180px;
      }
    }

    @media (max-width: 480px) {
      .hero-section {
        height: 50vh;
        min-height: 350px;
      }

      .main-content {
        padding: 40px 15px;
      }

      .nav-links {
        width: 60%;
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
        <a href="../index.php">
          <img src="../image/logo.png" alt="Logo Kelurahan">
          <span>Way Urang</span>
        </a>
      </div>
      
      <nav class="nav-links" id="navLinks">
        <a href="../index.php">Beranda</a>
        <div class="dropdown">
          <a href="#tentang">Tentang</a>
          <div class="dropdown-menu">
            <a href="../tentang/sejarah.php">Sejarah</a>
            <a href="../tentang/visiMisi.php">Visi Misi</a>
            <a href="../tentang/strukturOrganisasi.php">Struktur Organisasi</a>
          </div>
        </div>
        <a href="potensiWisata.php">Potensi Wisata</a>
      </nav>
      
      <div class="hamburger" id="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </header>

  <section class="hero-section">
    <div class="hero-content">
      <h1>Potensi Wisata</h1>
      <p>Menelusuri pesona alam dan budaya yang menjanjikan di Kelurahan Way Urang</p>
      <div class="breadcrumb">
        <a href="../index.php">Beranda</a> / <span>Potensi Wisata</span>
      </div>
    </div>
  </section>
  <div class="wave-after">
    <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
      <defs>
        <linearGradient id="heroWaveGradient" x1="0%" y1="0%" x2="100%" y2="100%">
          <stop offset="0%" stop-color="var(--primary-color)" />
          <stop offset="50%" stop-color="var(--secondary-color)" />
          <stop offset="100%" stop-color="var(--accent-color)" />
        </linearGradient>
      </defs>
      <path d="M0,0 C300,100 900,0 1200,100 L1200,0 L0,0 Z" fill="url(#heroWaveGradient)">
        <animate attributeName="d" dur="6s" repeatCount="indefinite"
          values="
          M0,0 C300,100 900,0 1200,100 L1200,0 L0,0 Z;
          M0,0 C300,80 900,20 1200,100 L1200,0 L0,0 Z;
          M0,0 C300,100 900,0 1200,100 L1200,0 L0,0 Z" />
      </path>
    </svg>
  </div>

  <main class="main-content">
    <div class="content-section">
      <h2>Destinasi Wisata Kelurahan Way Urang</h2>
      <div class="publikasi-grid">
        <!-- Card 1 -->
        <a href="pantaiSanggar.php" class="publikasi-card">
          <div class="card-image">
            <img src="../image/sanggar/sanggar (3).JPG" alt="Pantai Sanggar">
          </div>
          <div class="card-content">
            <h3 class="card-title">Pantai Sanggar</h3>
            <p class="card-description">
              Pantai Sanggar menyuguhkan pasir putih, air jernih, dan nuansa tropis ala Bali dengan spot foto yang estetik. Dilengkapi fasilitas seperti kafe, gazebo, dan area camping yang cocok untuk liburan keluarga atau teman.
            </p>
          </div>
        </a>

        <!-- Card 2 -->
        <a href="pantaiSenaya.php" class="publikasi-card">
          <div class="card-image">
            <img src="../image/senaya.jpeg" alt="Pantai Senaya">
          </div>
          <div class="card-content">
            <h3 class="card-title">Pantai Senaya</h3>
            <p class="card-description">
              Pantai Senaya menawarkan hamparan pasir putih, panorama Gunung Rajabasa, dan spot sunset yang menawan. Dengan tiket masuk terjangkau, pengunjung bebas menikmati berbagai fasilitas seperti gazebo, bean bag, dan area bermain anak.
            </p>
          </div>
        </a>

        <!-- Card 3 -->
        <a href="pantaiAlauAlau.php" class="publikasi-card">
          <div class="card-image">
            <img src="../image/alau-alau/alau-alau (cover).JPG" alt="Alau-Alau Resort">
          </div>
          <div class="card-content">
            <h3 class="card-title">Alau-Alau Resort</h3>
            <p class="card-description">
              Pantai Alau-Alau adalah destinasi wisata dengan pasir putih bersih dan ombak tenang. Dikelilingi pepohonan rindang dan batu karang, pantai ini cocok untuk bersantai, bermain air, atau menikmati matahari terbenam.
            </p>
          </div>
        </a>

        <!-- Card 4 -->
        <a href="pantaiKedu.php" class="publikasi-card">
          <div class="card-image">
            <img src="../image/Kedu/kedu (7).JPG" alt="Pantai Kedu">
          </div>
          <div class="card-content">
            <h3 class="card-title">Pantai Kedu</h3>
            <p class="card-description">
              Pantai Kedu menawarkan pengalaman wisata yang seru dengan sensasi sunset spektakuler, suasana asri yang cocok untuk keluarga maupun milenial, serta fasilitas lengkap mulai dari camping hingga hiburan.
            </p>
          </div>
        </a>

        <!-- Card 5 -->
        <a href="pantaiKeduWarna.php" class="publikasi-card">
          <div class="card-image">
            <img src="../image/KeduWarna/IMG_4262.JPG" alt="Pantai Kedu Warna">
          </div>
          <div class="card-content">
            <h3 class="card-title">Pantai Kedu Warna</h3>
            <p class="card-description">
              Pantai Kedu Warna terkenal dengan keindahan malamnya yang dihiasi lampu-lampu warna-warni. Pantai ini sering menjadi tempat favorit untuk camping, bersantai, dan menikmati suasana laut yang tenang dengan pemandangan cahaya yang memikat.
            </p>
          </div>
        </a>

        <!-- Card 6 -->
        <a href="pantaiAurora.php" class="publikasi-card">
          <div class="card-image">
            <img src="../image/IMG_4538.JPG" alt="Pantai Aurora">
          </div>
          <div class="card-content">
            <h3 class="card-title">Pantai Aurora</h3>
            <p class="card-description">
              Pantai Aurora menawarkan pemandangan alam yang memikat. Salah satu daya tarik utamanya adalah café di area pantai yang menyediakan fasilitas karaoke, cocok untuk bersantai dan menikmati waktu bersama teman atau keluarga.
            </p>
          </div>
        </a>

        <!-- Card 7 -->
        <a href="pantaiBenteng.php" class="publikasi-card">
          <div class="card-image">
            <img src="../image/BentengTakeshi/benteng.JPG" alt="Pantai Benteng">
          </div>
          <div class="card-content">
            <h3 class="card-title">Pantai Benteng</h3>
            <p class="card-description">
              Pantai ini menghadirkan suasana santai di tepi laut, dilengkapi area food station atau café (Benteng Food Station) yang instagramable. Spot benteng sebagai pintu masuk kerap jadi latar keren untuk berfoto, terutama saat sunset.
            </p>
          </div>
        </a>

        <!-- Card 8 -->
        <a href="pantaiKalianda.php" class="publikasi-card">
          <div class="card-image">
            <img src="../image/kaliu.JPG" alt="Pantai Kalianda">
          </div>
          <div class="card-content">
            <h3 class="card-title">Pantai Kalianda</h3>
            <p class="card-description">
              Pantai ini menawarkan pemandangan laut yang tenang dengan latar belakang Gunung Rajabasa, pasir putih kecokelatan, dan suasana yang cocok untuk bersantai. Lokasinya sering jadi tempat favorit untuk menikmati matahari terbenam.
            </p>
          </div>
        </a>
      </div>
    </div>
  </main>

  <footer class="footer">
    <div class="footer-container">
      <div class="footer-column">
        <h3>Lokasi</h3>
        <div class="map-container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3969.9174090236666!2d105.58537167474643!3d-5.725036194257011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e411121219caf0d%3A0x29bacdcac4050a82!2sKantor%20Lurah%20Way%20Urang!5e0!3m2!1sen!2sid!4v1753858623359!5m2!1sen!2sid"
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
          <li><a href="../index.php">Beranda</a></li>
          <li><a href="../tentang/sejarah.php">Sejarah</a></li>
          <li><a href="../tentang/visiMisi.php">Visi Misi</a></li>
          <li><a href="../tentang/strukturOrganisasi.php">Struktur Organisasi</a></li>
          <li><a href="potensiWisata.php">Potensi Wisata</a></li>
        </ul>
      </div>

      <div class="footer-column">
        <h3>Temukan kami di sosial media</h3>
        <div class="social-media">
          <a href="https://www.instagram.com/kelurahan_wayurang/" class="social-link-instagram">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
              <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
            </svg>
          </a>
          <a href="https://www.facebook.com/pages/Kantor%20Kelurahan%20Way%20Urang%20Kalianda/1700218406943437/#" class="social-link-facebook">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
              <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
            </svg>
          </a>
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

  <script>
    // Navbar scroll effect
    const navbar = document.querySelector('.navbar');
    window.addEventListener('scroll', () => {
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });

    // Mobile menu toggle - DIPERBAIKI
    document.addEventListener("DOMContentLoaded", function() {
      const hamburger = document.getElementById("hamburger");
      const navLinks = document.getElementById("navLinks");
      const dropdowns = document.querySelectorAll(".dropdown");

      // Toggle hamburger menu
      hamburger.addEventListener("click", (e) => {
        e.preventDefault();
        hamburger.classList.toggle("active");
        navLinks.classList.toggle("active");

        // Tutup semua dropdown saat menu utama ditutup
        if (!navLinks.classList.contains("active")) {
          dropdowns.forEach(dropdown => {
            dropdown.classList.remove("active");
          });
        }
      });

      // Close menu when clicking outside
      document.addEventListener("click", (e) => {
        if (!hamburger.contains(e.target) && !navLinks.contains(e.target)) {
          hamburger.classList.remove("active");
          navLinks.classList.remove("active");
          // Tutup semua dropdown
          dropdowns.forEach(dropdown => {
            dropdown.classList.remove("active");
          });
        }
      });

      // PERBAIKAN UTAMA: Dropdown functionality untuk mobile
      dropdowns.forEach(dropdown => {
        const dropdownLink = dropdown.querySelector('a');

        dropdownLink.addEventListener("click", function(e) {
          // Hanya aktif di mobile dan saat hamburger menu terbuka
          if (window.innerWidth <= 768 && navLinks.classList.contains("active")) {
            e.preventDefault();

            // Tutup dropdown lain terlebih dahulu
            dropdowns.forEach(otherDropdown => {
              if (otherDropdown !== dropdown) {
                otherDropdown.classList.remove("active");
              }
            });

            // Toggle dropdown yang diklik
            dropdown.classList.toggle("active");
          }
        });
      });

      // Close menu when clicking nav links (bukan dropdown)
      const directNavLinks = document.querySelectorAll('.nav-links > a:not(.dropdown a)');
      directNavLinks.forEach(link => {
        link.addEventListener('click', () => {
          hamburger.classList.remove("active");
          navLinks.classList.remove("active");
          dropdowns.forEach(dropdown => {
            dropdown.classList.remove("active");
          });
        });
      });

      // Close menu when clicking dropdown menu items
      const dropdownMenuLinks = document.querySelectorAll('.dropdown-menu a');
      dropdownMenuLinks.forEach(link => {
        link.addEventListener('click', () => {
          hamburger.classList.remove("active");
          navLinks.classList.remove("active");
          dropdowns.forEach(dropdown => {
            dropdown.classList.remove("active");
          });
        });
      });

      // Reset dropdown state saat window resize
      window.addEventListener('resize', () => {
        if (window.innerWidth > 768) {
          dropdowns.forEach(dropdown => {
            dropdown.classList.remove("active");
          });
          hamburger.classList.remove("active");
          navLinks.classList.remove("active");
        }
      });
    });

    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          const offsetTop = target.offsetTop - 70;
          window.scrollTo({
            top: offsetTop,
            behavior: 'smooth'
          });
        }
      });
    });
  </script>
</body>
</html>