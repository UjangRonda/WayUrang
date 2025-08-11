<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantai Sanggar - Paradise Beach</title>
    <style>
        /* ================= GLOBAL ================= */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "Montserrat", sans-serif;
            background: #ffffff;
            overflow-x: hidden;
        }

        /* ================= HERO SECTION ================= */
        .hero-section {
            height: 100vh;
            min-height: 600px;
            background:
                linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
                url('../image/sanggar-3.JPG') center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
        }

        /* Floating palm trees */
        .palm-decoration {
            position: absolute;
            font-size: 8em;
            opacity: 0.3;
            z-index: 1;
            animation: sway 6s ease-in-out infinite;
            display: none; /* Hide on mobile */
        }

        .palm-left {
            top: 20%;
            left: 5%;
            transform: rotate(-15deg);
        }

        .palm-right {
            top: 15%;
            right: 5%;
            transform: rotate(15deg);
            animation-delay: -3s;
        }

        @keyframes sway {
            0%, 100% {
                transform: rotate(-15deg) translateY(0px);
            }
            50% {
                transform: rotate(-10deg) translateY(-10px);
            }
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 900px;
            padding: 0 20px;
        }

        .hero-subtitle {
            color: #fff;
            font-size: 1.3em;
            margin-bottom: 15px;
            letter-spacing: 3px;
            text-transform: uppercase;
            opacity: 0.9;
            font-weight: 300;
        }

        .hero-title {
            font-size: 3.5em;
            font-weight: 900;
            color: #fff;
            margin-bottom: 25px;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.5);
            letter-spacing: 4px;
            line-height: 1.1;
        }

        .hero-description {
            font-size: 1.1em;
            color: #fff;
            line-height: 1.6;
            margin-bottom: 40px;
            opacity: 0.95;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            font-weight: 300;
            padding: 0 15px;
        }

        .scroll-indicator {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            color: #fff;
            font-size: 2em;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateX(-50%) translateY(0);
            }
            40% {
                transform: translateX(-50%) translateY(-10px);
            }
            60% {
                transform: translateX(-50%) translateY(-5px);
            }
        }

        /* ================= ABOUT SECTION ================= */
        .about-section {
            background: #fff;
            padding: 80px 0;
        }

        .about-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 1fr;
            gap: 40px;
            align-items: center;
        }

        .about-content h2 {
            font-size: 2.5em;
            color: #0066cc;
            margin-bottom: 25px;
            font-weight: 800;
            line-height: 1.2;
            text-align: center;
        }

        .about-content p {
            font-size: 1em;
            color: #555;
            line-height: 1.8;
            margin-bottom: 20px;
            text-align: center;
        }

        .about-image {
            background: url('../image/sanggar-1.JPG') center/cover;
            height: 300px;
            border-radius: 15px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 180, 216, 0.2);
            order: -1; /* Move image above text on mobile */
        }

        /* ================= GALLERY SECTION ================= */
        .gallery-section {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            padding: 80px 0;
        }

        .gallery-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            text-align: center;
        }

        .gallery-title {
            font-size: 2.5em;
            color: #0066cc;
            margin-bottom: 15px;
            font-weight: 800;
        }

        .gallery-subtitle {
            font-size: 1.1em;
            color: #666;
            margin-bottom: 40px;
            font-style: italic;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 15px;
            margin-bottom: 30px;
        }

        .gallery-item {
            background: linear-gradient(45deg, #87ceeb, #00b4d8, #0066cc);
            height: 200px;
            border-radius: 10px;
            position: relative;
            overflow: hidden;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5em;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .gallery-item:hover {
            transform: scale(1.03);
            box-shadow: 0 10px 20px rgba(0, 180, 216, 0.3);
        }

        .gallery-item.large {
            height: 250px;
            font-size: 3.5em;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* ================= FEATURES SECTION ================= */
        .features-section {
            background: #fff;
            padding: 80px 0;
        }

        .features-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            text-align: center;
        }

        .features-title {
            font-size: 2.5em;
            color: #0066cc;
            margin-bottom: 40px;
            font-weight: 800;
        }

        .features-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .feature-item {
            text-align: center;
            padding: 30px 15px;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: 1px solid #e6f3ff;
        }

        .feature-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 180, 216, 0.15);
            border-color: #00b4d8;
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            background: linear-gradient(135deg, #00b4d8, #0066cc);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2em;
            color: #fff;
            box-shadow: 0 10px 20px rgba(0, 180, 216, 0.3);
        }

        .feature-title {
            font-size: 1.2em;
            font-weight: 700;
            color: #333;
            margin-bottom: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .feature-description {
            color: #666;
            line-height: 1.6;
            font-size: 0.95em;
        }

        /* ================= INFO SECTION ================= */
        .info-section {
            background: linear-gradient(135deg, #0066cc 0%, #00b4d8 50%, #87ceeb 100%);
            padding: 70px 0;
            color: white;
            text-align: center;
        }

        .info-container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .info-title {
            font-size: 2.2em;
            margin-bottom: 25px;
            font-weight: 800;
        }

        .info-description {
            font-size: 1.1em;
            line-height: 1.6;
            opacity: 0.95;
            margin-bottom: 40px;
        }

        .info-stats {
            display: grid;
            grid-template-columns: 1fr;
            gap: 25px;
            margin-top: 40px;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 2.5em;
            font-weight: 900;
            color: #ffcc00;
            display: block;
        }

        .stat-label {
            font-size: 1em;
            opacity: 0.9;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* ================= CONTACT SECTION ================= */
        .contact-section {
            background: #fff;
            padding: 70px 0;
        }

        .contact-container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 20px;
            text-align: center;
        }

        .contact-title {
            font-size: 2.2em;
            color: #0066cc;
            margin-bottom: 40px;
            font-weight: 800;
        }

        .contact-info {
            display: grid;
            grid-template-columns: 1fr;
            gap: 30px;
            margin-bottom: 40px;
        }

        .contact-item {
            background: #f8fafc;
            padding: 30px 20px;
            border-radius: 12px;
            border-left: 5px solid #6DBAB9;
        }

        .contact-item a {
            text-decoration: none;
            color: #0066cc;
        }

        .contact-item h3 {
            color: #58a9a8;
            font-size: 1.2em;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .contact-item p {
            color: #555;
            line-height: 1.6;
            font-size: 0.95em;
        }

        .social-icons-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(50px, 1fr));
            gap: 15px;
            margin-top: 15px;
            justify-items: center;
            max-width: 300px;
            margin-left: auto;
            margin-right: auto;
        }

        .icon-box {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s ease;
            background-color: #ddd;
            overflow: hidden;
        }

        .icon-box img {
            width: 24px;
            height: 24px;
            filter: brightness(0) invert(1);
        }

        .icon-box:hover {
            transform: scale(1.1);
        }

        /* Warna sesuai platform */
        .icon-box.ig {
            background-color: #e1306c;
        }

        .icon-box.tiktok {
            background-color: #000000;
        }

        .icon-box.wa {
            background-color: #25d366;
        }

        .icon-box.email {
            background-color: #0066cc;
        }

        .ticket-info {
            max-width: 800px;
            margin: 30px auto 0 auto;
            background: linear-gradient(135deg, #e0f7fa, #ffffff);
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 8px 20px rgba(0, 102, 204, 0.1);
            color: #333;
        }

        .ticket-info h3 {
            margin-bottom: 20px;
            color: #0066cc;
            font-size: 1.5em;
            text-align: center;
        }

        .ticket-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
        }

        .ticket-card {
            flex: 1 1 100%;
            min-width: 200px;
            background: #ffffff;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 5px 15px rgba(0, 180, 216, 0.15);
            border: 1px solid #cce7ff;
            transition: transform 0.3s ease;
        }

        .ticket-card:hover {
            transform: translateY(-3px);
        }

        .ticket-card h4 {
            font-size: 1.2em;
            margin-bottom: 12px;
            color: #00b4d8;
        }

        .ticket-card ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .ticket-card ul li {
            font-size: 0.95em;
            padding: 5px 0;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .location-section {
            margin: 70px 0;
        }

        .contact-title,
        .gallery-title,
        .features-title,
        .info-title,
        .about-content h2 {
            color: #41fcffff;
        }

        .feature-icon {
            background: linear-gradient(135deg, #6DBAB9, #4A9FA0);
        }

        .feature-item:hover {
            border-color: #6DBAB9;
            box-shadow: 0 15px 25px rgba(109, 186, 185, 0.3);
        }

        .ticket-info h3 {
            color: #6DBAB9;
        }

        .ticket-info {
            box-shadow: 0 3px 10px rgba(109, 186, 185, 0.25);
        }

        /* Info section background (gradient baru) */
        .info-section {
            background: linear-gradient(135deg, #4A9FA0 0%, #6DBAB9 50%, #87ceeb 100%);
        }

        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            background: linear-gradient(135deg, #4A9FA0, #6DBAB9);
            color: #fff;
            padding: 8px 15px;
            border-radius: 25px;
            text-decoration: none;
            font-family: "Montserrat", sans-serif;
            font-weight: 600;
            font-size: 0.9em;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.15);
            transition: background 0.3s ease, transform 0.2s ease;
            z-index: 99;
        }

        .back-button:hover {
            background: linear-gradient(135deg, #3c8b8c, #58a9a8);
            transform: scale(1.05);
        }

        /* Footer */
        .footer {
            font-family: "Montserrat", sans-serif;
            background: linear-gradient(135deg, #4A9FA0 0%, #3c8b8c 20%, #87ceeb 100%);
            color: white;
            padding: 40px 0 0 0;
            margin-top: 40px;
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
            flex-direction: column;
            gap: 30px;
            padding: 0 20px 30px 20px;
            position: relative;
            z-index: 1;
        }

        .footer-column {
            flex: 1;
            max-width: 100%;
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
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 20px;
            color: white;
            position: relative;
            padding-bottom: 8px;
        }

        .footer-column h3::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background: linear-gradient(90deg, #ffffff, #87ceeb);
            border-radius: 2px;
        }

        .footer-column ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-column ul li {
            margin-bottom: 10px;
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
            padding: 6px 0;
            border-radius: 6px;
            position: relative;
        }

        .footer-column ul li a::before {
            content: "▶";
            margin-right: 8px;
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
            width: 180px;
        }

        .footer-column ul li a:hover::before {
            color: #87ceeb;
            transform: scale(1.2);
        }

        /* FIXED: Social media positioning */
        .social-media {
            display: flex;
            justify-content: flex-start; /* Changed from center to flex-start */
            gap: 10px;
            margin-top: 15px;
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

        /* CSS Instagram dengan efek gradient menggunakan filter */
        .social-media a.social-link-instagram:hover {
            background: #ffffff !important;
            transform: translateY(-3px);
        }

        .social-media a.social-link-instagram:hover svg {
            filter: sepia(1) hue-rotate(290deg) saturate(3) brightness(1.2) !important;
        }

        .social-media a.social-link-instagram:active {
            background: #ffffff !important;
            transform: translateY(-1px);
        }

        .social-media a.social-link-instagram:active svg {
            filter: sepia(1) hue-rotate(290deg) saturate(3) brightness(1.2) !important;
        }

        /* FIXED: Map and address alignment */
        .map-container {
            margin-bottom: 15px;
            display: inline-block; /* Make container fit content */
            width: auto; /* Let it size naturally */
        }

        .map-container iframe {
            width: 360px; /* Set specific width to match your image */
            height: 160px;
            border: 0;
            border-radius: 10px;
            display: block;
        }

        /* FIXED: Address styling to match map width exactly */
        .address {
            background: rgba(255, 255, 255, 0.15);
            padding: 15px;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            width: 360px; /* Same width as iframe */
            box-sizing: border-box;
            margin: 0;
        }

        .address p {
            font-size: 13px;
            line-height: 1.6;
            color: #e2e8f0;
            margin: 0;
            font-weight: 400;
        }

        .visitor-stats {
            background: rgba(255, 255, 255, 0.15);
            padding: 20px;
            border-radius: 12px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }

        .stat-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
            padding: 6px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            font-size: 13px;
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
            font-size: 15px;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
        }

        .footer-bottom {
            background: #4A9FA0;
            padding: 20px 0;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            position: relative;
            z-index: 1;
        }

        .footer-bottom-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            text-align: center;
            font-size: 12px;
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

        /* Location Section */
        .location-section iframe {
            width: 100%;
            height: 300px;
            border: 0;
            border-radius: 10px;
        }

        /* ================= MEDIA QUERIES ================= */
        @media (min-width: 576px) {
            .hero-title {
                font-size: 4em;
            }
            
            .gallery-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .ticket-card {
                flex: 1 1 calc(50% - 15px);
            }
            
            .info-stats {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (min-width: 768px) {
            .palm-decoration {
                display: block;
            }
            
            .about-container {
                grid-template-columns: 1fr 1fr;
                gap: 60px;
            }
            
            .about-image {
                order: 1;
            }
            
            .about-content h2,
            .about-content p {
                text-align: left;
            }
            
            .features-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .contact-info {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .footer-container {
                flex-direction: row;
                flex-wrap: wrap;
            }
            
            .footer-column {
                flex: 1 1 calc(50% - 30px);
            }
        }

        @media (min-width: 992px) {
            .hero-title {
                font-size: 5em;
            }
            
            .features-grid {
                grid-template-columns: repeat(4, 1fr);
            }
            
            .footer-column {
                flex: 1 1 calc(25% - 30px);
            }
            
            .location-section iframe {
                height: 450px;
            }
        }

        @media (min-width: 1200px) {
            .about-container {
                gap: 80px;
            }
            
            .about-image {
                height: 400px;
            }
            
            .gallery-item {
                height: 250px;
            }
            
            .gallery-item.large {
                height: 320px;
            }
        }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <a href="potensiWisata.php" class="back-button">← Kembali</a>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="palm-decoration palm-left">🌴</div>
        <div class="palm-decoration palm-right">🌴</div>

        <div class="hero-content">
            <p class="hero-subtitle">Discover Paradise</p>
            <h1 class="hero-title">PANTAI SANGGAR</h1>
            <p class="hero-description">
                Rasakan keindahan pasir putih yang memukau, air laut jernih seperti kristal, dan nuansa tropis yang menenangkan jiwa. Pantai Sanggar menghadirkan pengalaman wisata yang tak terlupakan dengan fasilitas lengkap dan pemandangan yang menawan.
            </p>
        </div>

        <div class="scroll-indicator">⬇</div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="about-container">
            <div class="about-content">
                <h2>Tentang Pantai Sanggar</h2>
                <p>
                    Pantai Sanggar adalah permata tersembunyi di Way Urang yang menawarkan pengalaman wisata pantai yang autentik dan memukau. Dengan pasir putih yang halus dan air laut yang jernih, pantai ini menjadi destinasi favorit untuk berlibur bersama keluarga dan teman.
                </p>
                <p>
                    Dikelilingi oleh pemandangan alam yang asri dan dilengkapi dengan berbagai fasilitas modern, Pantai Sanggar menghadirkan perpaduan sempurna antara keindahan alam dan kenyamanan wisatawan.
                </p>
                <p>
                    Suasana tropis yang menenangkan dan spot foto yang instagramable membuat setiap momen di pantai ini menjadi kenangan yang berharga.
                </p>
            </div>
            <div class="about-image"></div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="gallery-container">
            <h2 class="gallery-title">Galeri Foto</h2>
            <p class="gallery-subtitle">Jelajahi keindahan Pantai Sanggar melalui koleksi foto menawan</p>

            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="../image/sanggar/sanggar (3).JPG" alt="Pantai Sanggar">
                </div>
                <div class="gallery-item">
                    <img src="../image/sanggar/sanggar (1).JPG" alt="Pantai Sanggar">
                </div>
                <div class="gallery-item">
                    <img src="../image/sanggar/sanggar (2).JPG" alt="Pantai Sanggar">
                </div>
                <div class="gallery-item">
                    <img src="../image/sanggar/sanggar (5).JPG" alt="Pantai Sanggar">
                </div>
                <div class="gallery-item">
                    <img src="../image/sanggar/sanggar (4).JPG" alt="Pantai Sanggar">
                </div>
                <div class="gallery-item">
                    <img src="../image/sanggar/sanggar (8).JPG" alt="Pantai Sanggar">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="features-container">
            <h2 class="features-title">Fasilitas & Aktivitas</h2>

            <div class="features-grid">
                <div class="feature-item">
                    <div class="feature-icon">🏖️</div>
                    <h3 class="feature-title">Beach Relaxation</h3>
                    <p class="feature-description">Nikmati suasana pantai yang tenang dengan pasir putih halus dan angin sepoi-sepoi yang menyejukkan.</p>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">☕</div>
                    <h3 class="feature-title">Beach Café</h3>
                    <p class="feature-description">Café tepi pantai dengan berbagai pilihan menu dan minuman segar untuk menemani liburan Anda.</p>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">🏕️</div>
                    <h3 class="feature-title">Camping</h3>
                    <p class="feature-description">Rasakan serunya menginap di tepi pantai dengan fasilitas camping yang aman dan nyaman.</p>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">📸</div>
                    <h3 class="feature-title">Photo Spots</h3>
                    <p class="feature-description">Abadikan momen berharga di berbagai spot foto ikonik yang instagramable di sekitar pantai.</p>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">💍</div>
                    <h3 class="feature-title">Prewedding</h3>
                    <p class="feature-description">Latar pemandangan pantai yang romantis dan eksotis, cocok untuk sesi foto prewedding impian Anda.</p>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">🌇</div>
                    <h3 class="feature-title">Sunset Viewing</h3>
                    <p class="feature-description">Nikmati panorama matahari terbenam yang menakjubkan dengan semburat warna langit yang indah.</p>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">🐎</div>
                    <h3 class="feature-title">Berkuda</h3>
                    <p class="feature-description">Jelajahi bibir pantai dengan menunggang kuda, pengalaman seru dan menyenangkan untuk semua usia.</p>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">🛻</div>
                    <h3 class="feature-title">ATV</h3>
                    <p class="feature-description">Uji adrenalin dengan berkendara ATV menyusuri jalur pantai yang menantang dan seru.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Info Section -->
    <section class="info-section">
        <div class="info-container">
            <h2 class="info-title">Mengapa Memilih Pantai Sanggar?</h2>
            <p class="info-description">
                Pantai Sanggar bukan hanya sekedar destinasi wisata, tetapi sebuah pengalaman yang akan mengisi hati Anda dengan kedamaian dan kebahagiaan. Dengan keindahan alam yang masih asri dan fasilitas yang lengkap, pantai ini menjadi pilihan terbaik untuk melepas penat dari rutinitas sehari-hari.
            </p>

            <div class="info-stats">
                <div class="stat-item">
                    <span class="stat-number">1000+</span>
                    <span class="stat-label">Pengunjung Mingguan</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">4.4/5</span>
                    <span class="stat-label">Rating Google</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">24/7</span>
                    <span class="stat-label">Akses Terbuka</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <!-- SECTION LOKASI & AKSES (BARU) -->
    <section class="location-section">
        <div class="contact-container">
            <h2 class="contact-title">📍 Lokasi & Akses</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3969.8975698436125!2d105.5849988!3d-5.7278915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4111ae978d7b83%3A0x460be26fe2946e61!2sSanggar%20Beach!5e0!3m2!1sen!2sid!4v1754141755109!5m2!1sen!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <!-- SECTION INFORMASI & KONTAK -->
    <section class="contact-section">
        <div class="contact-container">
            <h2 class="contact-title">Informasi & Kontak</h2>

            <div class="contact-info">
                <div class="contact-item">
                    <h3>🕒 Jam Operasional</h3>
                    <p>
                        Senin - Minggu: 08:00 - 20:00 WIB<br>
                        Area Camping: 24 Jam<br>
                        Café: 08:00 - 21:00 WIB
                    </p>
                </div>

                <div class="contact-item">
                    <h3>📞 Kontak Informasi</h3>
                    <div class="social-icons-grid">
                        <a href="https://www.instagram.com/sanggarbeach_lpg" target="_blank" class="icon-box ig" aria-label="Instagram">
                            <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/instagram.svg" alt="Instagram">
                        </a>
                        <a href="https://www.tiktok.com/@sanggarbeach_lpg" target="_blank" class="icon-box tiktok" aria-label="TikTok">
                            <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/tiktok.svg" alt="TikTok">
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=0895601677773" target="_blank" class="icon-box wa" aria-label="WhatsApp">
                            <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/whatsapp.svg" alt="WhatsApp">
                        </a>
                    </div>
                </div>
            </div>

            <!-- Harga Tiket Diletakkan Sendiri -->
            <div class="ticket-info">
                <h3>💰 Harga Tiket</h3>
                <div class="ticket-grid">
                    <div class="ticket-card weekday">
                        <h4>🗓️ Weekday</h4>
                        <ul>
                            <li>👨‍🦱 Dewasa: Rp 15.000</li>
                            <li>🧒 Anak-anak: Rp 10.000</li>
                            <li>🅿️ Parkir: Rp 5.000 / Rp 10.000</li>
                        </ul>
                    </div>
                    <div class="ticket-card weekend">
                        <h4>🌞 Weekend</h4>
                        <ul>
                            <li>👨‍🦱 Dewasa: Rp 20.000</li>
                            <li>🧒 Anak-anak: Rp 10.000</li>
                            <li>🅿️ Parkir: Rp 5.000 / Rp 10.000</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content" id="tentang">
        <footer class="footer">
            <div class="footer-container">
                <div class="footer-column">
                    <h3>Lokasi</h3>
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3969.9174090236666!2d105.58537167474643!3d-5.725036194257011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e411121219caf0d%3A0x29bacdcac4050a82!2sKantor%20Lurah%20Way%20Urang!5e0!3m2!1sen!2sid!4v1753858623359!5m2!1sen!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                        <li><a href="../Tentang/sejarah.php">Sejarah</a></li>
                        <li><a href="../Tentang/visiMisi.php">Visi Misi</a></li>
                        <li><a href="../Tentang/strukturOrganisasi.php">Struktur Organisasi</a></li>
                        <li><a href="potensiWisata.php">Potensi Wisata</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>Temukan kami di sosial media</h3>
                    <div class="social-media">
                        <a href="https://www.instagram.com/kelurahan_wayurang/" class="social-link-instagram">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="https://www.facebook.com/pages/Kantor%20Kelurahan%20Way%20Urang%20Kalianda/1700218406943437/#" class="social-link-facebook">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
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
    </section>

    <script>
        // Parallax effect for hero section
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallax = document.querySelector('.hero-section');
            const speed = scrolled * 0.5;
            parallax.style.transform = `translateY(${speed}px)`;
        });

        // Smooth reveal animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Apply fade-in effect to sections
        document.querySelectorAll('.about-section, .gallery-section, .features-section, .info-section, .contact-section').forEach(section => {
            section.style.opacity = '0';
            section.style.transform = 'translateY(30px)';
            section.style.transition = 'all 0.8s ease';
            observer.observe(section);
        });
    </script>
</body>
</html> 