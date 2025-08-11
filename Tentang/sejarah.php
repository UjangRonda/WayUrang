<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejarah - Kelurahan Way Urang</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        /* ================= GLOBAL STYLE CSS================= */
        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
            background: #ffffff;
            color: #333;
            overflow-x: hidden;
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
            font-size: clamp(1em, 2.5vw, 1.2em);
            font-weight: 700;
            z-index: 1001;
        }

        .nav-logo img {
            height: 35px;
            margin-right: 8px;
        }

        .nav-logo a {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: inherit;
        }

        .nav-logo span {
            font-weight: bold;
            color: #fff;
            font-size: 1.2em;
        }

        .navbar.scrolled .nav-logo span {
            color: #0066cc;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .nav-links a {
            padding: 15px 20px;
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            font-size: clamp(0.9em, 2vw, 1em);
            transition: all 0.3s ease;
            border-radius: 8px;
        }

        .nav-links a:hover {
            color: #ffffff;
            background: rgba(255, 255, 255, 0.1);
        }

        .navbar.scrolled .nav-links a {
            color: #0066cc;
        }

        .navbar.scrolled .nav-links a:hover {
            color: #ffffff;
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

        /* Desktop hover hanya untuk layar besar */
        @media (min-width: 769px) {
            .dropdown:hover .dropdown-menu {
                display: block;
            }
        }

        .dropdown-menu a {
            display: block;
            color: #fff !important;
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
            color: #0066cc !important;
            border-bottom: 1px solid rgba(0, 102, 204, 0.1);
        }

        .navbar.scrolled .dropdown-menu a:hover {
            background: rgba(0, 102, 204, 0.1);
        }

        /* Hamburger Menu Styles */
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
            background: #fff;
            margin: 3px 0;
            transition: 0.3s;
            border-radius: 2px;
        }

        .navbar.scrolled .hamburger span {
            background: #0066cc;
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

        /* Mobile Navigation - FIXED */
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

            .nav-links>a,
            .nav-links>.dropdown {
                width: 100%;
                margin: 0;
            }

            .nav-links>a {
                padding: 15px 20px;
                text-align: left;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
                color: #fff !important;
                font-weight: 500;
                display: block;
                text-decoration: none;
            }

            .nav-links>a:hover {
                background: rgba(255, 255, 255, 0.1);
                color: #fff !important;
            }

            /* Dropdown styling untuk mobile */
            .dropdown {
                width: 100%;
            }

            .dropdown>a {
                padding: 15px 20px;
                text-align: left;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
                color: #fff !important;
                font-weight: 500;
                display: flex;
                justify-content: space-between;
                align-items: center;
                text-decoration: none;
                cursor: pointer;
            }

            .dropdown>a:hover {
                background: rgba(255, 255, 255, 0.1);
                color: #fff !important;
            }

            .dropdown>a::after {
                content: "▼";
                font-size: 0.8em;
                transition: transform 0.3s ease;
            }

            .dropdown.active>a::after {
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
                color: #fff !important;
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
            height: 60vh;
            min-height: 400px;
            background: linear-gradient(135deg, #0066cc 0%, #00b4d8 50%, #87ceeb 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero-content h1 {
            font-size: clamp(2em, 5vw, 3.5em);
            margin: 0;
            color: #ffffff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            font-weight: 700;
        }

        .hero-content p {
            font-size: clamp(0.9em, 2.5vw, 1.3em);
            margin-top: 15px;
            color: #ffffff;
            opacity: 0.95;
        }

        .breadcrumb {
            margin-top: 20px;
            font-size: clamp(0.8em, 2vw, 1em);
            color: rgba(255, 255, 255, 0.8);
        }

        .breadcrumb a {
            color: #ffffff;
            text-decoration: none;
            transition: color 0.3s;
        }

        .breadcrumb a:hover {
            color: #0066cc;
        }

        /* ================= MAIN CONTENT ================= */
        .main-content {
            max-width: 1100px;
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
            color: #0066cc;
            font-size: clamp(1.5em, 4vw, 2.2em);
            margin-bottom: 40px;
            text-align: center;
            border-bottom: 3px solid #0066cc;
            padding-bottom: 10px;
            display: inline-block;
            width: 100%;
            font-weight: 600;
        }

        .content-section h3 {
            color: #0066cc;
            font-size: clamp(1.2em, 3vw, 1.5em);
            margin-bottom: 20px;
            margin-top: 30px;
            font-weight: 600;
        }

        .content-section p {
            line-height: 1.8;
            margin-bottom: 20px;
            text-align: justify;
            font-size: clamp(0.9em, 2.5vw, 1em);
        }

        /* ================= HIGHLIGHT BOX ================= */
        .highlight-box {
            background: linear-gradient(135deg, #f8fafc 0%, #e0e7ff 100%);
            border-left: 5px solid #0066cc;
            padding: 25px;
            margin: 30px 0;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 102, 204, 0.1);
        }

        .highlight-box h4 {
            color: #0066cc;
            font-size: clamp(1em, 2.5vw, 1.2em);
            margin-bottom: 15px;
            font-weight: 600;
        }

        .highlight-box p {
            margin: 0;
            color: #555;
            line-height: 1.7;
            font-size: clamp(0.85em, 2vw, 0.95em);
        }

        .highlight-box strong {
            color: #0066cc;
        }

        /* ================= TIMELINE ================= */
        .timeline {
            position: relative;
            padding-left: 30px;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 15px;
            top: 0;
            bottom: 0;
            width: 3px;
            background: linear-gradient(to bottom, #0066cc, #00b4d8, #87ceeb);
        }

        .timeline-item {
            position: relative;
            margin-bottom: 40px;
            padding: 25px;
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 102, 204, 0.1);
            border: 1px solid #e0e7ff;
            margin-left: 40px;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -55px;
            top: 30px;
            width: 15px;
            height: 15px;
            background: #0066cc;
            border-radius: 50%;
            box-shadow: 0 0 0 4px #ffffff, 0 0 0 8px #0066cc;
        }

        .timeline-year {
            font-size: clamp(1.1em, 2.5vw, 1.3em);
            font-weight: 600;
            color: #0066cc;
            margin-bottom: 15px;
        }

        .timeline-item p {
            margin: 0;
            line-height: 1.7;
            color: #555;
            font-size: clamp(0.85em, 2vw, 0.95em);
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

        .footer-column ul li a:hover::before {
            color: #87ceeb;
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
            color: #0066cc;
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
            width: 100%;
        }

        .address p {
            font-size: 14px;
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
            font-size: 13px;
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

        /* RESPONSIVE FOOTER - IMPROVED ADDRESS ALIGNMENT */
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
                font-size: 13px;
                text-align: left;
            }

            .footer-bottom-content {
                flex-direction: column;
                text-align: center;
                padding: 0 20px;
            }

            .footer-column h3 {
                font-size: 18px;
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
                font-size: 16px;
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
                font-size: 12px;
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
                font-size: 11px;
                line-height: 1.5;
            }
        }

        /* ================= RESPONSIVE ================= */
        @media (max-width: 768px) {
            .hero-section {
                height: 50vh;
                min-height: 350px;
                padding: 20px;
            }

            .main-content {
                padding: 50px 15px;
            }

            .timeline {
                padding-left: 20px;
            }

            .timeline-item {
                margin-left: 25px;
                padding: 20px;
            }

            .timeline-item::before {
                left: -40px;
            }

            .highlight-box {
                padding: 20px;
                margin: 20px 0;
            }

            .content-section {
                margin-bottom: 40px;
            }
        }

        @media (max-width: 480px) {
            .hero-section {
                height: 45vh;
                min-height: 300px;
                padding: 15px;
            }

            .main-content {
                padding: 30px 10px;
            }

            .timeline {
                padding-left: 15px;
            }

            .timeline-item {
                margin-left: 20px;
                padding: 15px;
            }

            .timeline-item::before {
                left: -35px;
                width: 12px;
                height: 12px;
            }

            .highlight-box {
                padding: 15px;
                margin: 15px 0;
            }

            .nav-links {
                width: 60%;
            }
        }

        /* ================= SCROLL BEHAVIOR IMPROVEMENTS ================= */
        @media (prefers-reduced-motion: reduce) {
            html {
                scroll-behavior: auto;
            }

            * {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
        }
    </style>
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
                        <a href="sejarah.php">Sejarah</a>
                        <a href="visiMisi.php">Visi Misi</a>
                        <a href="strukturOrganisasi.php">Struktur Organisasi</a>
                    </div>
                </div>
                <a href="../tempat wisata/potensiWisata.php">Potensi Wisata</a>
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
            <h1>Sejarah Way Urang</h1>
            <p>Mengenal Perjalanan Panjang Kelurahan Way Urang</p>
            <div class="breadcrumb">
                <a href="../index.php">Beranda</a> / <a href="#">Tentang</a> / <span>Sejarah</span>
            </div>
        </div>
    </section>

    <main class="main-content">
        <div class="content-section">
            <h2>Asal Usul Nama Way Urang</h2>
            <p>
                Nama "Way Urang" memiliki dua versi sejarah yang menarik. Secara etimologi, nama ini berasal dari dua unsur bahasa Lampung, yaitu "Way" yang berarti "sungai" dan "Urang" yang berarti "orang" atau "masyarakat". Dengan demikian, nama ini dapat diartikan sebagai "sungai tempat masyarakat bermukim" atau "permukiman orang di tepi sungai", yang menunjukkan keterikatan erat antara masyarakat lokal dengan aliran sungai sebagai sumber kehidupan dan jalur transportasi alami.
            </p>

            <div class="highlight-box">
                <h4>Versi Sejarah Penamaan</h4>
                <p>
                    Menurut catatan sejarah lokal, asal mula pemberian nama Desa Way Urang bermula dari musyawarah yang dilakukan oleh <strong>Minak Raden Ramenay</strong> bersama keluarga yang berasal dari Daerah Sekala Bekha, Liwa Lampung Barat. Dari musyawarah tersebut diambil kesepakatan bahwa desa ini diberi nama <strong>Desa Way Urang</strong> yang diambil dari nama <strong>Way Merang</strong> pada tahun <strong>1884</strong>.
                </p>
            </div>
        </div>

        <div class="content-section">
            <h2>Perjalanan Sejarah</h2>

            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-year">1884 - Penetapan Nama</div>
                    <p>
                        Nama "Way Urang" resmi ditetapkan melalui musyawarah yang dipimpin oleh Minak Raden Ramenay bersama keluarga dari Daerah Sekala Bekha, Liwa Lampung Barat. Nama ini diambil dari "Way Merang" dan menjadi identitas resmi desa.
                    </p>
                </div>

                <div class="timeline-item">
                    <div class="timeline-year">1909 - Pembentukan Struktur Administratif</div>
                    <p>
                        Berdasarkan data monografi resmi pemerintahan, Way Urang mulai berkembang sebagai satuan administratif. Wilayah ini memiliki struktur kepemimpinan lokal berupa kepala kampung atau lurah yang ditunjuk secara turun-temurun maupun administratif.
                    </p>
                </div>

                <div class="timeline-item">
                    <div class="timeline-year">Abad ke-16 - Pengaruh Kesultanan Banten</div>
                    <p>
                        Wilayah Way Urang menerima pengaruh kebudayaan Islam melalui jalur laut dari pergerakan Kesultanan Banten. Way Urang menjadi salah satu simpul lokal yang berkembang dalam jaringan dagang maritim pada masa Islamisasi di Nusantara.
                    </p>
                </div>

                <div class="timeline-item">
                    <div class="timeline-year">Era Kemerdekaan - Transformasi Modern</div>
                    <p>
                        Way Urang mengalami perubahan dari kampung adat menjadi kelurahan modern, namun tetap mempertahankan nilai-nilai tradisional. Pembangunan fisik dan infrastruktur mulai berkembang termasuk fasilitas pendidikan, kesehatan, dan ekonomi.
                    </p>
                </div>

                <div class="timeline-item">
                    <div class="timeline-year">Era Modern - Status Kelurahan</div>
                    <p>
                        Way Urang berkembang menjadi kelurahan yang strategis dengan jarak hanya 3 km dari pusat kecamatan dan kurang dari 2 km dari pusat pemerintahan kabupaten. Posisi ini menjadikannya berperan penting dalam perkembangan sosial dan ekonomi daerah.
                    </p>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h2>Karakteristik Geografis dan Posisi Strategis</h2>

            <h3>Lokasi Strategis</h3>
            <p>
                Secara geografis, Kelurahan Way Urang memiliki posisi strategis karena berada di sekitar pusat kota Kalianda dan cukup dekat dengan jalur lintas Sumatra. Letaknya yang hanya sekitar 3 km dari pusat kecamatan dan kurang dari 2 km dari pusat pemerintahan kabupaten membuat wilayah ini memiliki peran penting dalam perkembangan sosial dan ekonomi daerah.
            </p>

            <h3>Keunggulan Natural</h3>
            <p>
                Pada masa lampau, Desa Way Urang terkenal dengan hasil pertaniannya. Konon tanah di Desa Way Urang sangat subur, sehingga kehidupan masyarakat desa pun bisa dikatakan makmur. Aksesibilitas yang baik ini juga menjadikannya salah satu wilayah yang lebih dahulu berkembang dibanding desa-desa lain di sekitarnya.
            </p>

            <div class="highlight-box">
                <h4>Keistimewaan Geografis</h4>
                <p>
                    Keterikatan erat antara masyarakat lokal dengan aliran sungai menjadikan sungai sebagai sumber kehidupan dan jalur transportasi alami yang mendukung perkembangan peradaban lokal.
                </p>
            </div>
        </div>

        <div class="content-section">
            <h2>Sistem Sosial dan Kepemimpinan Tradisional</h2>
            <p>
                Sistem sosial masyarakat Way Urang berkembang dengan nilai-nilai religius yang kuat. Hal ini dapat dilihat dari struktur sosial yang menghormati tokoh adat dan tokoh agama, serta dari sejarah kepemimpinan lokal yang banyak diisi oleh tokoh-tokoh bergelar adat dan memiliki kedekatan dengan institusi keagamaan.
            </p>

            <h3>Struktur Kepemimpinan Lokal</h3>
            <p>
                Sebagaimana daerah lain di Lampung, struktur sosial Way Urang mengadopsi pola pemimpin lokal yang juga menjalankan peran sebagai penjaga nilai adat dan agama. Sistem kepemimpinan ini telah berlangsung sejak awal abad ke-20 dengan kesinambungan yang terjaga hingga kini.
            </p>

            <h3>Pengaruh Kebudayaan Islam</h3>
            <p>
                Dari perspektif sejarah regional, Way Urang tidak bisa dilepaskan dari pengaruh perkembangan budaya dan agama di wilayah pesisir barat Sumatra yang sejak abad ke-16 telah dipengaruhi oleh pergerakan Kesultanan Banten. Wilayah Lampung, termasuk Kalianda dan Way Urang, merupakan bagian dari jaringan dagang maritim yang berkembang pesat pada masa Islamisasi di Nusantara.
            </p>

            <div class="highlight-box">
                <h4>Jalur Islamisasi</h4>
                <p>
                    Way Urang diduga merupakan salah satu simpul lokal yang menerima pengaruh kebudayaan Islam melalui jalur laut, baik dari Jawa maupun Sumatra bagian utara, yang kemudian berkembang menjadi bagian integral dari peradaban Islam Nusantara.
                </p>
            </div>
        </div>
    </main>

    <footer class="footer" id="tentang">
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
                    <li><a href="sejarah.php">Sejarah</a></li>
                    <li><a href="visiMisi.php">Visi Misi</a></li>
                    <li><a href="strukturOrganisasi.php">Struktur Organisasi</a></li>
                    <li><a href="../tempat wisata/potensiWisata.php">Potensi Wisata</a></li>
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
                    <a href="https://www.facebook.com/pages/Kantor%20Kelurahan%20Way%20Urang%20Kalianda/1700218406943437/" class="social-link-facebook">
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
        // Navbar scroll behavior
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