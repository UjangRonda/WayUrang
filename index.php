<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelurahan Way Urang</title>
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

        /* ================= HERO ================= */
        .hero {
            position: relative;
            height: 100vh;
            min-height: 600px;
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
            padding: 0 20px;
        }

        .hero-container img {
            width: 120px;
            margin-bottom: 15px;
        }

        .hero-text {
            position: relative;
            z-index: 2;
            font-size: clamp(20px, 5vw, 29px);
            color: #ffffff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .hero-text h1 {
            font-size: clamp(1.5em, 4vw, 2.5em);
            margin-bottom: 10px;
            font-weight: 700;
        }

        .hero-text p {
            font-size: clamp(0.9em, 2.5vw, 1.2em);
            margin: 0;
        }

        /* Mobile Hero Responsive */
        @media (max-width: 768px) {
            .hero {
                height: 80vh;
                min-height: 500px;
            }

            .hero-container img {
                width: 80px;
                margin-bottom: 10px;
            }
        }

        @media (max-width: 480px) {
            .hero {
                height: 70vh;
                min-height: 450px;
            }

            .hero-container img {
                width: 70px;
            }
        }

        /* ================= SECTION ================= */
        #section-1 {
            position: relative;
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            padding: 40px 20px;
        }

        #section-1::before,
        #section-1::after {
            content: "";
            position: absolute;
            left: 0;
            width: 100%;
            height: 100px;
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

        .stats-container {
            max-width: 1100px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            z-index: 2;
            position: relative;
        }

        .stat-card {
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
            font-size: clamp(2em, 4vw, 2.5em);
            margin: 0;
            color: #ffffff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .stat-card p {
            margin-top: 10px;
            font-size: clamp(0.9em, 2vw, 1.1em);
            color: rgba(255, 255, 255, 0.9);
        }

        .chart-wrapper {
            max-width: 1100px;
            margin: 40px auto 0;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            padding: 0 20px;
        }

        .chart-box {
            background: #ffffff;
            padding: 30px 20px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 102, 204, 0.1);
            text-align: center;
            border: 1px solid #e0e7ff;
            width: 100%;
        }

        .chart-box h3 {
            color: #0066cc;
            margin-bottom: 20px;
            font-size: clamp(1em, 2.5vw, 1.2em);
            font-weight: 600;
        }

        .chart-box canvas {
            width: 100% !important;
            height: auto !important;
            max-height: 320px;
        }

        @media (max-width: 768px) {
            #section-2 {
                padding: 40px 15px;
            }

            .stats-container {
                grid-template-columns: 1fr;
                gap: 20px;
                max-width: 400px;
            }

            .chart-wrapper {
                grid-template-columns: 1fr;
                gap: 20px;
                margin: 20px auto 0;
                padding: 0 15px;
            }

            .chart-box {
                padding: 20px 15px;
            }
        }

        @media (max-width: 480px) {
            .chart-wrapper {
                grid-template-columns: 1fr;
                gap: 15px;
                padding: 0 10px;
            }

            .stat-card {
                padding: 20px 15px;
            }
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
            flex-wrap: wrap;
        }

        .info {
            flex: 1;
            min-width: 300px;
            font-size: clamp(1em, 2.5vw, 1.2em);
            color: #333;
        }

        .info h2 {
            margin-bottom: 15px;
            font-size: clamp(1.5em, 4vw, 2em);
            color: #0066cc;
        }

        /* ================= MAP ================= */
        .map {
            position: relative;
            flex: 1;
            min-width: 300px;
            width: 500px;
            height: 500px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 102, 204, 0.2);
            z-index: 2;
            border: 2px solid rgba(0, 102, 204, 0.1);
        }

        .map iframe {
            width: 100%;
            height: 100%;
            border: 0;
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

        /* ================= RESPONSIVE CONTENT ================= */
        @media (max-width: 768px) {
            .content-container {
                flex-direction: column;
                text-align: center;
                padding: 40px 15px;
                gap: 25px;
            }

            .map {
                width: 350px;
                height: 350px;
                min-width: auto;
                align-self: center;
            }

            .info {
                min-width: auto;
                width: 100%;
            }
        }

        @media (max-width: 480px) {
            .content-container {
                padding: 30px 10px;
            }

            .map {
                width: 300px;
                height: 300px;
            }

            .nav-container {
                padding: 0 10px;
            }
        }

        /* ========== SECTION 3: WISATA ========== */
        .wisata {
            padding: 60px 20px;
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            color: #333;
            text-align: center;
        }

        .section-title h2 {
            font-size: clamp(1.5em, 4vw, 2em);
            color: #0066cc;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .section-title p {
            color: #666;
            margin-bottom: 40px;
            font-size: clamp(0.9em, 2.5vw, 1em);
        }

        .wisata-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            max-width: 1100px;
            margin: 0 auto;
        }

        .wisata-card {
            background: #ffffff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 102, 204, 0.1);
            transition: all 0.3s ease;
            border: 1px solid #e0e7ff;
        }

        .wisata-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 180, 216, 0.3);
        }

        .wisata-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .wisata-card h3 {
            font-size: clamp(1.1em, 2.5vw, 1.3em);
            color: #0066cc;
            margin: 15px 0 10px 0;
            padding: 0 15px;
        }

        .wisata-card p {
            color: #666;
            font-size: clamp(0.85em, 2vw, 0.95em);
            line-height: 1.6;
            padding: 0 15px 20px 15px;
            margin: 0;
        }

        .info-wisata {
            margin-top: 40px;
        }

        .info-wisata a {
            display: inline-block;
            background: linear-gradient(135deg, #0066cc 0%, #00b4d8 100%);
            color: white;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 25px;
            font-weight: 500;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 102, 204, 0.3);
        }

        .info-wisata a:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 102, 204, 0.4);
        }

        @media (max-width: 768px) {
            .wisata {
                padding: 40px 15px;
            }

            .wisata-gallery {
                grid-template-columns: 1fr;
                gap: 20px;
                max-width: 400px;
            }

            .wisata-card img {
                height: 180px;
            }
        }

        @media (max-width: 480px) {
            .wisata {
                padding: 30px 10px;
            }

            .wisata-card img {
                height: 150px;
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

        /* ================= ADDITIONAL RESPONSIVE IMPROVEMENTS ================= */
        @media (max-width: 1024px) {
            .content-container {
                padding: 50px 25px;
                gap: 25px;
            }

            .chart-wrapper {
                padding: 0 25px;
            }

            .stats-container {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 25px;
            }
        }

        @media (max-width: 480px) {
            body {
                font-size: 14px;
            }

            .hero {
                min-height: 400px;
            }

            #section-1,
            #section-2 {
                padding: 30px 10px;
            }

            .content-container {
                padding: 25px 10px;
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
                <a href="#hero">
                    <img src="image/logo.png" alt="Logo Kelurahan">
                    <span>Way Urang</span>
                </a>
            </div>
            <nav class="nav-links" id="navLinks">
                <a href="#hero">Beranda</a>
                <div class="dropdown">
                    <a href="#tentang">Tentang</a>
                    <div class="dropdown-menu">
                        <a href="tentang/sejarah.php">Sejarah</a>
                        <a href="tentang/visiMisi.php">Visi Misi</a>
                        <a href="tentang/strukturOrganisasi.php">Struktur Organisasi</a>
                    </div>
                </div>
                <a href="tempat wisata/potensiWisata.php">Potensi Wisata</a>
            </nav>
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
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
                <h2>Kelurahan Way Urang</h2>
                <p>Kelurahan Way Urang, yang terletak di jantung Kecamatan Kalianda, Lampung Selatan, merupakan kawasan aktif dan dinamis dengan semangat gotong royong yang kuat. Melalui berbagai program seperti pelatihan kesiapsiagaan bencana, aksi bersih sungai, hingga kegiatan meriah seperti jalan sehat dan peluncuran <span style="font-weight:bold;">Koperasi Desa <span style="color:red;">Merah</span> <span style="color:white; background-color:black;">Putih</span></span>, Way Urang terus tumbuh sebagai kelurahan yang tangguh, peduli lingkungan, dan berdaya secara ekonomi.</p>
            </div>
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31760.367115117562!2d105.58153845!3d-5.7065105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e41103cd936a2d9%3A0x649a075338c4a840!2sWay%20Urang%2C%20Kalianda%2C%20South%20Lampung%20Regency%2C%20Lampung!5e0!3m2!1sen!2sid!4v1753075539861!5m2!1sen!2sid&zoom=15&disableDefaultUI=true&scrollwheel=false"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

    <section id="section-2">
        <div class="stats-container">
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
                <img src="image/senaya/senaya (3).JPG" alt="Pantai Senaya">
                <h3>Senaya Beach</h3>
                <p>Pantai berpasir putih dengan suasana tenang, air jernih dan pemandangan matahari terbenam yang indah.</p>
            </div>
            <div class="wisata-card">
                <img src="image/alau-alau/alau-alau (3).JPG" alt="Pantai Aurora">
                <h3>Alau-alau Resort Beach</h3>
                <p>Resort tepi pantai bernuansa privat dengan vila-vila nyaman, menyuguhkan ketenangan dan panorama laut yang menawan.</p>
            </div>
            <div class="wisata-card">
                <img src="image/sanggar/sanggar (4).JPG" alt="Pantai Sanggar">
                <h3>Sanggar Beach</h3>
                <p>Pantai eksotis dengan pasir putih dan suasana tropis ala Bali, cocok untuk bersantai maupun berfoto.</p>
            </div>

        </div>
        <div class="info-wisata">
            <a href="tempat wisata/potensiWisata.php">Lihat Selengkapnya</a>
        </div>
    </section>

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
                    <li><a href="index.php">Beranda</a></li>
                    <li><a href="tentang/sejarah.php">Sejarah</a></li>
                    <li><a href="tentang/visiMisi.php">Visi Misi</a></li>
                    <li><a href="tentang/strukturOrganisasi.php">Struktur Organisasi</a></li>
                    <li><a href="tempat wisata/potensiWisata.php">Potensi Wisata</a></li>
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

        // Charts
        document.addEventListener('DOMContentLoaded', function() {
            // Gender Chart
            const genderCtx = document.getElementById('genderChart').getContext('2d');
            new Chart(genderCtx, {
                type: 'doughnut',
                data: {
                    labels: ['Perempuan', 'Laki-laki'],
                    datasets: [{
                        data: [7440, 7404],
                        backgroundColor: ['#ff4d6d', '#4d79ff'],
                        borderWidth: 2,
                        borderColor: '#fff'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                color: '#0066cc',
                                padding: 20,
                                font: {
                                    size: 12
                                }
                            }
                        }
                    }
                }
            });

            // Job Chart
            const jobCtx = document.getElementById('jobChart').getContext('2d');
            new Chart(jobCtx, {
                type: 'bar',
                data: {
                    labels: [
                        'Karyawan', 'Wiraswasta', 'Petani', 'Buruh Tani',
                        'Peternak', 'Jasa', 'Pensiunan', 'Lainnya',
                        'Pengangguran', 'Pelajar'
                    ],
                    datasets: [{
                        label: 'Jumlah',
                        data: [1776, 1808, 497, 108, 159, 208, 285, 402, 100, 9501],
                        backgroundColor: '#4bc0c0',
                        borderColor: '#0066cc',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    indexAxis: 'y',
                    scales: {
                        x: {
                            ticks: {
                                color: '#0066cc',
                                font: {
                                    size: 10
                                }
                            },
                            grid: {
                                color: 'rgba(0, 102, 204, 0.1)'
                            }
                        },
                        y: {
                            ticks: {
                                color: '#0066cc',
                                font: {
                                    size: 9
                                }
                            },
                            grid: {
                                color: 'rgba(0, 102, 204, 0.1)'
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
                            bodyColor: '#ffffff'
                        }
                    }
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