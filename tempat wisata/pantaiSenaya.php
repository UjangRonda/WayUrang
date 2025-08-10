<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantai Senaya</title>
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
            background:
                linear-gradient(rgba(38, 79, 226, 0.4), rgba(207, 108, 10, 0.4)),
                url('../image/senaya-1.JPG') center/cover;
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
            color: rgba(255, 255, 255, 0.6);
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

            0%,
            100% {
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
            font-size: 5em;
            font-weight: 900;
            color: #fff;
            margin-bottom: 25px;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.5);
            letter-spacing: 4px;
            line-height: 1.1;
        }

        .hero-description {
            font-size: 1.2em;
            color: #fff;
            line-height: 1.8;
            margin-bottom: 50px;
            opacity: 0.95;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            font-weight: 300;
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

            0%,
            20%,
            50%,
            80%,
            100% {
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
            padding: 120px 0;
        }

        .about-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 30px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
        }

        .about-content h2 {
            font-size: 3em;
            background: linear-gradient(135deg, #e91e63, #ff5722, #ff9800);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 30px;
            font-weight: 800;
            line-height: 1.2;
        }

        .about-content p {
            font-size: 1.1em;
            color: #555;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .about-image {
            background: url('../image/senaya/senaya-1.JPG');
            background-size: cover;
            height: 400px;
            border-radius: 20px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(181, 101, 29, 0.3);
        }

        /* ================= GALLERY SECTION ================= */
        .gallery-section {
            background: linear-gradient(135deg, #fff5f5 0%, #ffeaa7 100%);
            padding: 120px 0;
        }

        .gallery-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 30px;
            text-align: center;
        }

        .gallery-title {
            font-size: 3em;
            background: linear-gradient(135deg, #e91e63, #ff5722, #ff9800);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 20px;
            font-weight: 800;
        }

        .gallery-subtitle {
            font-size: 1.2em;
            color: #666;
            margin-bottom: 60px;
            font-style: italic;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-auto-rows: 280px;
            gap: 25px;
            margin-bottom: 40px;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(14, 211, 79, 0.2);
            transition: all 0.3s ease;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.3s ease;
        }

        .gallery-item.hero {
            grid-column: span 3;
            grid-row: span 1;
        }

        .gallery-item.hero1 {
            grid-column: span 3;
            grid-row: span 2;
        }

        .gallery-item.large {
            grid-column: span 2;
            grid-row: span 2;
        }

        .gallery-item.wide {
            grid-column: span 2;
            grid-row: span 1;
        }

        .gallery-item.tall {
            grid-row: span 2;
        }

        .gallery-item:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 30px rgba(233, 30, 99, 0.4);
        }

        /* ================= FEATURES SECTION ================= */
        .features-section {
            background: #fff;
            padding: 120px 0;
        }

        .features-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 30px;
            text-align: center;
        }

        .features-title {
            font-size: 3em;
            background: linear-gradient(135deg, #e91e63, #ff5722, #ff9800);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 60px;
            font-weight: 800;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 40px;
        }

        .feature-item {
            text-align: center;
            padding: 40px 20px;
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: 1px solid #ffe0e6;
        }

        .feature-item:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 50px rgba(233, 30, 99, 0.2);
            border-color: #ff5722;
        }

        .feature-icon {
            width: 100px;
            height: 100px;
            margin: 0 auto 25px;
            background: linear-gradient(135deg, #e91e63, #ff5722, #ff9800);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5em;
            color: #fff;
            box-shadow: 0 15px 30px rgba(233, 30, 99, 0.3);
        }

        .feature-title {
            font-size: 1.4em;
            font-weight: 700;
            color: #333;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .feature-description {
            color: #666;
            line-height: 1.6;
            font-size: 1em;
        }

        /* ================= INFO SECTION ================= */
        .info-section {
            background: linear-gradient(135deg, #129fd7ff 0%, #126cdbff 25%, #ff9800 75%, #ffc107 100%);
            padding: 100px 0;
            color: white;
            text-align: center;
        }

        .info-container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 30px;
        }

        .info-title {
            font-size: 2.8em;
            margin-bottom: 30px;
            font-weight: 800;
        }

        .info-description {
            font-size: 1.3em;
            line-height: 1.8;
            opacity: 0.95;
            margin-bottom: 50px;
        }

        .info-stats {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
            margin-top: 60px;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 3em;
            font-weight: 900;
            color: #fff3cd;
            display: block;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .stat-label {
            font-size: 1.1em;
            opacity: 0.9;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* ================= CONTACT SECTION ================= */
        .contact-section {
            background: #fff;
            padding: 100px 0;
        }

        .contact-container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 30px;
            text-align: center;
        }

        .contact-title {
            font-size: 2.8em;
            background: linear-gradient(135deg, #e91e63, #ff5722, #ff9800);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 50px;
            font-weight: 800;
        }

        .contact-info {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 50px;
            margin-bottom: 50px;
        }

        .contact-item {
            background: linear-gradient(135deg, #fff5f5, #ffeaa7);
            padding: 40px 30px;
            border-radius: 15px;
            border-left: 5px solid #ff6b6b;
        }

        .contact-item a {
            text-decoration: none;
            color: #e91e63;
        }

        .contact-item h3 {
            color: #ff5722;
            font-size: 1.3em;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .contact-item p {
            color: #555;
            line-height: 1.6;
        }

        .social-icons-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(50px, 1fr));
            gap: 20px;
            margin-top: 15px;
            justify-items: center;
        }

        .icon-box {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s ease;
            background: linear-gradient(135deg, #e91e63, #ff5722);
            overflow: hidden;
        }

        .icon-box img {
            width: 24px;
            height: 24px;
            filter: brightness(0) invert(1);
        }

        .icon-box:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 25px rgba(233, 30, 99, 0.4);
        }

        .icon-box.ig {
            background: linear-gradient(135deg, #e91e63, #ff5722);
        }

        .icon-box.tiktok {
            background: linear-gradient(135deg, #000000, #ff5722);
        }

        .icon-box.wa {
            background: linear-gradient(135deg, #25d366, #ff9800);
        }

        .ticket-info {
            max-width: 800px;
            margin: 40px auto 0 auto;
            background: linear-gradient(135deg, #fff5f5, #ffeaa7);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(233, 30, 99, 0.2);
            color: #333;
        }

        .ticket-info h3 {
            margin-bottom: 25px;
            background: linear-gradient(135deg, #e91e63, #ff5722);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-size: 1.8em;
            text-align: center;
        }

        .ticket-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .ticket-card {
            flex: 1 1 250px;
            background: #ffffff;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 8px 25px rgba(233, 30, 99, 0.15);
            border: 1px solid #ffd6cc;
            transition: transform 0.3s ease;
        }

        .ticket-card:hover {
            transform: translateY(-5px);
            border-color: #ff5722;
        }

        .ticket-card h4 {
            font-size: 1.3em;
            margin-bottom: 15px;
            color: #ff5722;
        }

        .ticket-card ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .ticket-card ul li {
            font-size: 1em;
            padding: 6px 0;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .location-section {
            margin: 100px 0;
        }

        .back-button {
            position: absolute;
            top: 30px;
            left: 30px;
            background: linear-gradient(135deg, #e91e63, #ff5722, #ff9800);
            color: #fff;
            padding: 10px 20px;
            border-radius: 30px;
            text-decoration: none;
            font-family: "Montserrat", sans-serif;
            font-weight: 600;
            font-size: 1em;
            box-shadow: 0 4px 12px rgba(233, 30, 99, 0.3);
            transition: all 0.3s ease;
            z-index: 99;
        }

        .back-button:hover {
            background: linear-gradient(135deg, #d81b60, #f4511e, #f57c00);
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(233, 30, 99, 0.4);
        }

        /* ================= NEW RESPONSIVE FOOTER ================= */
        .footer {
            font-family: "Montserrat", sans-serif;
            background: linear-gradient(135deg, #56c0ad 0%, #4db3a6 100%);
            color: white;
            padding: 60px 0 30px 0;
            margin-top: 50px;
            position: relative;
            overflow: hidden;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 30px;
            display: flex;
            grid-template-columns: 1fr;
            gap: 50px;
            position: relative;
            z-index: 1;
        }

        .footer-section {
            text-align: left;
        }

        .footer-section h3 {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 30px;
            color: white;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-section h3::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 2px;
        }

        /* Location Section Styling */
        .location-content {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .map-container {
            margin-bottom: 15px;
            display: inline-block;
            /* Make container fit content */
            width: auto;
            /* Let it size naturally */
        }

        .map-container iframe {
            width: 360px;
            /* Set specific width to match your image */
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
            width: 360px;
            /* Same width as iframe */
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

        /* Navigation Section */
        .nav-links {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .nav-links li a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            font-size: 15px;
            font-weight: 400;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            padding: 8px 0;
            position: relative;
            text-align: left;
        }

        .nav-links li a::before {
            content: "▶";
            margin-right: 10px;
            font-size: 10px;
            color: rgba(255, 255, 255, 0.6);
            transition: all 0.3s ease;
        }

        .nav-links li a:hover {
            color: white;
            transform: translateX(10px);
        }

        .nav-links li a:hover::before {
            color: white;
            transform: scale(1.2);
        }

        /* Social Media Section */
        .social-media-section {
            text-align: left;
        }

        .social-media-grid {
            display: flex;
            justify-content: flex-start;
            gap: 20px;
            margin-top: 20px;
        }

        .social-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .social-link:hover {
            background: white;
            color: #56c0ad;
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }

        /* Footer Bottom */
        .footer-bottom {
            background: rgba(0, 0, 0, 0.2);
            margin-top: 50px;
            padding: 20px 0;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
        }

        .footer-bottom-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
            color: rgba(255, 255, 255, 0.8);
        }

        /* ================= RESPONSIVE DESIGN ================= */
        @media (max-width: 1200px) {

            .about-container,
            .gallery-container,
            .features-container,
            .info-container,
            .contact-container {
                padding: 0 20px;
            }

            .features-grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 30px;
            }
        }

        @media (max-width: 992px) {
            .hero-title {
                font-size: 4em;
            }

            .about-container {
                grid-template-columns: 1fr;
                gap: 50px;
                text-align: center;
            }

            .about-image {
                order: -1;
            }

            .features-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 25px;
            }

            .gallery-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
            }

            .gallery-item.hero,
            .gallery-item.hero1,
            .gallery-item.large,
            .gallery-item.wide {
                grid-column: span 2;
            }

            .contact-info {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            /* Footer responsive adjustments */
            .footer-container {
                grid-template-columns: repeat(2, 1fr);
                gap: 40px;
            }
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 3.5em;
                letter-spacing: 2px;
            }

            .hero-subtitle {
                font-size: 1.1em;
                letter-spacing: 2px;
            }

            .hero-description {
                font-size: 1.1em;
            }

            .about-content h2,
            .gallery-title,
            .features-title,
            .contact-title {
                font-size: 2.5em;
            }

            .info-title {
                font-size: 2.2em;
            }

            .features-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .gallery-grid {
                grid-template-columns: 1fr;
                gap: 15px;
            }

            .gallery-item.hero,
            .gallery-item.hero1,
            .gallery-item.large,
            .gallery-item.wide,
            .gallery-item.tall {
                grid-column: span 1;
                grid-row: span 1;
            }

            .info-stats {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .back-button {
                top: 20px;
                left: 20px;
                padding: 8px 16px;
                font-size: 0.9em;
            }

            /* Footer mobile layout */
            .footer-container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 30px;
                display: flex;
                grid-template-columns: 1fr;
                gap: 50px;
                position: relative;
                z-index: 1;
            }

            .footer-section h3::after {
                left: 0;
                transform: none;
            }

            .nav-links {
                align-items: flex-start;
            }

            .social-media-section {
                text-align: left;
            }

            .social-media-grid {
                justify-content: flex-start;
            }

            .footer-bottom-content {
                flex-direction: column;
                gap: 10px;
                text-align: center;
            }
        }

        @media (max-width: 576px) {
            .hero-title {
                font-size: 2.8em;
                letter-spacing: 1px;
            }

            .hero-content {
                padding: 0 15px;
            }

            .about-section,
            .gallery-section,
            .features-section,
            .info-section,
            .contact-section {
                padding: 80px 0;
            }

            .about-content h2,
            .gallery-title,
            .features-title,
            .contact-title {
                font-size: 2.2em;
            }

            .info-title {
                font-size: 2em;
            }

            .feature-item {
                padding: 30px 15px;
            }

            .feature-icon {
                width: 80px;
                height: 80px;
                font-size: 2em;
            }

            .stat-number {
                font-size: 2.5em;
            }

            .footer {
                padding: 40px 0 20px 0;
            }

            .footer-container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 30px;
                display: grid;
                grid-template-columns: 1fr;
                gap: 50px;
                position: relative;
                z-index: 1;
            }

            .map-container {
                height: 150px;
            }

            .social-media-grid {
                gap: 15px;
            }

            .social-link {
                width: 45px;
                height: 45px;
            }
        }

        @media (max-width: 480px) {
            .hero-title {
                font-size: 2.5em;
            }

            .palm-decoration {
                font-size: 6em;
            }

            .footer-container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 30px;
                display: grid;
                grid-template-columns: 1fr;
                gap: 50px;
                position: relative;
                z-index: 1;
            }

            .about-content h2,
            .gallery-title,
            .features-title,
            .contact-title {
                font-size: 2em;
            }

            .ticket-card {
                flex: 1 1 100%;
            }

            .footer-section h3 {
                font-size: 18px;
            }
        }

        /* Animation improvements */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .footer-section {
            animation: fadeInUp 0.6s ease forwards;
        }

        .footer-section:nth-child(1) {
            animation-delay: 0.1s;
        }

        .footer-section:nth-child(2) {
            animation-delay: 0.2s;
        }

        .footer-section:nth-child(3) {
            animation-delay: 0.3s;
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
        <div class="hero-content">
            <p class="hero-subtitle">Discover Paradise</p>
            <h1 class="hero-title">PANTAI SENAYA</h1>
            <p class="hero-description">
                Pantai Senaya menawarkan hamparan pasir putih, panorama Gunung Rajabasa, dan spot sunset yang menawan. Dengan tiket masuk terjangkau, pengunjung bebas menikmati berbagai fasilitas seperti gazebo, bean bag, dan area bermain anak.
            </p>
        </div>
        <div class="scroll-indicator">⬇</div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="about-container">
            <div class="about-image"></div>
            <div class="about-content">
                <h2>Tentang Pantai Senaya</h2>
                <p>Pantai Senaya adalah destinasi wisata bahari yang menawan di pesisir Lampung, dikenal dengan air lautnya yang jernih, hamparan pasir putih yang luas, serta suasana yang tenang dan alami. Cocok untuk liburan keluarga, camping, atau sekadar bersantai menikmati senja.
                </p>
                <p>Pantai ini menawarkan keindahan alam yang masih asri, jauh dari hiruk-pikuk kota. Wisatawan dapat menikmati pemandangan laut biru, pepohonan rindang di tepi pantai, serta berbagai spot foto Instagramable yang tersebar di sepanjang kawasan.
                </p>
                <p> Fasilitas seperti tempat duduk, gazebo, toilet, musala, dan warung makanan juga tersedia untuk mendukung kenyamanan pengunjung. Selain itu, Pantai Senaya juga cocok untuk kegiatan seperti snorkeling ringan, bermain pasir, hingga piknik bersama teman dan keluarga
                </p>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="gallery-container">
            <h2 class="gallery-title">Galeri Foto</h2>
            <p class="gallery-subtitle">Jelajahi keindahan Pantai Sanggar melalui koleksi foto menawan</p>

            <div class="gallery-grid">
                <!-- ROW 1: 1 FOTO PENUH (3 kolom) -->
                <div class="gallery-item hero">
                    <img src="../image/senaya/senaya (5).JPG" alt="Pemandangan Resort Utama">
                </div>
                <!-- ROW 2: 2 FOTO (2+1 kolom) -->
                <div class="gallery-item wide">
                    <img src="../image/senaya/senaya (3).JPG" alt="Pantai Alau-Alau">
                </div>
                <div class="gallery-item medium">
                    <img src="../image/senaya/IMG_4226.JPG" alt="Villa View">
                </div>

                <!-- ROW 3: 1 FOTO PENUH (3 kolom) -->
                <div class="gallery-item medium">
                    <img src="../image/senaya/IMG_4220.JPG" alt="Cottage Area">
                </div>
                <div class="gallery-item wide">
                    <img src="../image/senaya/IMG_4242.JPG" alt="Sunset di Resort">
                </div>

                <!-- ROW 4: 3 FOTO (1+1+1 kolom) -->
                <div class="gallery-item medium">
                    <img src="../image/senaya/senaya (5).JPG" alt="Cottage Area">
                </div>
                <div class="gallery-item medium">
                    <img src="../image/senaya/senaya (6).JPG" alt="Beach Activities">
                </div>
                <div class="gallery-item medium">
                    <img src="../image/senaya/IMG_4195.JPG" alt="Resort Facilities">
                </div>

                <!-- ROW 5: 2 FOTO (1+2 kolom) -->
                <div class="gallery-item wide">
                    <img src="../image/senaya/IMG_4191.JPG" alt="Dining Area">
                </div>
                <div class="gallery-item medium">
                    <img src="../image/senaya/senaya (2).JPG" alt="Beach Panorama">
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
            <h2 class="info-title">Mengapa Memilih Pantai Senaya?</h2>
            <p class="info-description">
                Pantai Senaya bukan hanya sekedar destinasi wisata, tetapi sebuah pengalaman yang akan mengisi hati Anda dengan kedamaian dan kebahagiaan. Dengan keindahan alam yang masih asri dan fasilitas yang lengkap, pantai ini menjadi pilihan terbaik untuk melepas penat dari rutinitas sehari-hari.
            </p>

            <div class="info-stats">
                <div class="stat-item">
                    <span class="stat-number">800+</span>
                    <span class="stat-label">Pengunjung Mingguan</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">4.7/5</span>
                    <span class="stat-label">Rating Google</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section class="location-section">
        <div class="contact-container">
            <h2 class="contact-title">📍 Lokasi & Akses</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3969.9818422389394!2d105.57319927498645!3d-5.715752994266214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e411100685c7d4f%3A0x7d4799d174a4131a!2sSENAYA%20BEACH!5e0!3m2!1sen!2sid!4v1754244332349!5m2!1sen!2sid" width="100%" height="450" style="border:0; border-radius: 15px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="contact-container">
            <h2 class="contact-title">Informasi & Kontak</h2>

            <div class="contact-info">
                <div class="contact-item">
                    <h3>🕒 Jam Operasional</h3>
                    <p>
                        Senin - Minggu: 08:00 - 20:00 WIB<br>
                        Area Camping: Batas Hingga Malam
                    </p>
                </div>

                <div class="contact-item">
                    <h3>📞 Kontak Informasi</h3>
                    <div class="social-icons-grid">
                        <a href="https://www.instagram.com/senayabeach/?hl=en" target="_blank" class="icon-box ig" aria-label="Instagram">
                            <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/instagram.svg" alt="Instagram">
                        </a>
                        <a href="https://www.tiktok.com/@senayabeach" target="_blank" class="icon-box tiktok" aria-label="TikTok">
                            <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/tiktok.svg" alt="TikTok">
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=082183419098" target="_blank" class="icon-box wa" aria-label="WhatsApp">
                            <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/whatsapp.svg" alt="WhatsApp">
                        </a>
                    </div>
                </div>
            </div>

            <!-- Harga Tiket -->
            <div class="ticket-info">
                <h3>💰 Harga Tiket</h3>
                <div class="ticket-grid">
                    <div class="ticket-card weekday">
                        <h4>🗓️ Weekday / Weekend</h4>
                        <ul>
                            <li>👨‍🦱🧒 Segala Umur: Rp 35.000</li>
                            <li>Lengkap Payung Pantai, Ayunan, Parkir, Toilet, dsb</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- New Responsive Footer -->
    <footer class="footer">
        <div class="footer-container">
            <!-- Lokasi Section -->
            <div class="footer-section">
                <h3>Lokasi</h3>
                <div class="location-content">
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
            </div>

            <!-- Navigasi Section -->
            <div class="footer-section">
                <h3>Navigasi</h3>
                <ul class="nav-links">
                    <li><a href="../index.php">Beranda</a></li>
                    <li><a href="../Tentang/sejarah.php">Sejarah</a></li>
                    <li><a href="../Tentang/visiMisi.php">Visi Misi</a></li>
                    <li><a href="../Tentang/strukturOrganisasi.php">Struktur Organisasi</a></li>
                    <li><a href="potensiWisata.php">Potensi Wisata</a></li>
                </ul>
            </div>

            <!-- Social Media Section -->
            <div class="footer-section social-media-section">
                <h3>Temukan kami di sosial media</h3>
                <div class="social-media-grid">
                    <a href="https://www.instagram.com/kelurahan_wayurang/" class="social-link" target="_blank">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>
                    <a href="https://www.facebook.com/pages/Kantor%20Kelurahan%20Way%20Urang%20Kalianda/1700218406943437/#" class="social-link" target="_blank">
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

        // Footer animation on scroll
        const footerObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                }
            });
        }, {
            threshold: 0.1
        });

        const footer = document.querySelector('.footer');
        if (footer) {
            footerObserver.observe(footer);
        }
    </script>
</body>

</html>