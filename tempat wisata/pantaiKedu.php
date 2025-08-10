<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantai Kedu</title>
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
                linear-gradient(rgba(181, 101, 29, 0.4), rgba(139, 69, 19, 0.4)),
                url(../image/Kedu/kedu\ \(7\).JPG) center/cover;
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
            background: linear-gradient(135deg, #b5651d, #d2691e, #cd853f);
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
            background: url('../image/Kedu/kedu\ \(6\).JPG');
            background-size: cover;
            height: 400px;
            border-radius: 20px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(181, 101, 29, 0.3);
        }

        .about-image::before {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 6em;
            opacity: 0.7;
        }

        /* ================= GALLERY SECTION ================= */
        .gallery-section {
            background: linear-gradient(135deg, #faf6f2 0%, #f5e6d3 100%);
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
            background: linear-gradient(135deg, #b5651d, #d2691e, #cd853f);
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

        /* BASE GALLERY ITEM */
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

        /* UKURAN BERVARIASI */
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
            box-shadow: 0 15px 30px rgba(181, 101, 29, 0.4);
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
            background: linear-gradient(135deg, #b5651d, #d2691e, #cd853f);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 60px;
            font-weight: 800;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
        }

        .feature-item {
            text-align: center;
            padding: 40px 20px;
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: 1px solid #f0e6d6;
        }

        .feature-item:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 50px rgba(181, 101, 29, 0.2);
            border-color: #d2691e;
        }

        .feature-icon {
            width: 100px;
            height: 100px;
            margin: 0 auto 25px;
            background: linear-gradient(135deg, #b5651d, #d2691e, #cd853f);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5em;
            color: #fff;
            box-shadow: 0 15px 30px rgba(181, 101, 29, 0.3);
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
            background: linear-gradient(135deg, #b5651d 0%, #8b4513 25%, #d2691e 75%, #daa520 100%);
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
            color: #f5deb3;
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
            background: linear-gradient(135deg, #b5651d, #d2691e, #cd853f);
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
            background: linear-gradient(135deg, #faf6f2, #f5e6d3);
            padding: 40px 30px;
            border-radius: 15px;
            border-left: 5px solid #b5651d;
        }

        .contact-item a {
            text-decoration: none;
            color: #b5651d;
        }

        .contact-item h3 {
            color: #d2691e;
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
            background: linear-gradient(135deg, #b5651d, #d2691e);
            overflow: hidden;
        }

        .icon-box img {
            width: 24px;
            height: 24px;
            filter: brightness(0) invert(1);
        }

        .icon-box:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 25px rgba(181, 101, 29, 0.4);
        }

        /* Platform-specific colors with wood theme */
        .icon-box.ig {
            background: linear-gradient(135deg, #b5651d, #d2691e);
        }

        .icon-box.tiktok {
            background: linear-gradient(135deg, #2f1b14, #8b4513);
        }

        .icon-box.wa {
            background: linear-gradient(135deg, #228b22, #b5651d);
        }

        .icon-box.email {
            background: linear-gradient(135deg, #8b4513, #cd853f);
        }

        .ticket-info {
            max-width: 800px;
            margin: 40px auto 0 auto;
            background: linear-gradient(135deg, #faf6f2, #f5e6d3);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(181, 101, 29, 0.2);
            color: #333;
        }

        .ticket-info h3 {
            margin-bottom: 25px;
            background: linear-gradient(135deg, #b5651d, #d2691e);
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
            text-align: center;
            flex: 1 1 250px;
            background: #ffffff;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 8px 25px rgba(181, 101, 29, 0.15);
            border: 1px solid #e6d7c5;
            transition: transform 0.3s ease;
        }

        .ticket-card:hover {
            transform: translateY(-5px);
            border-color: #d2691e;
        }

        .ticket-card h4 {
            font-size: 1.3em;
            margin-bottom: 15px;
            color: #b5651d;
        }

        .ticket-card ul {
            text-align: center;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .ticket-card ul li {
            justify-content: center;
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
            background: linear-gradient(135deg, #b5651d, #d2691e, #cd853f);
            color: #fff;
            padding: 10px 20px;
            border-radius: 30px;
            text-decoration: none;
            font-family: "Montserrat", sans-serif;
            font-weight: 600;
            font-size: 1em;
            box-shadow: 0 4px 12px rgba(181, 101, 29, 0.3);
            transition: all 0.3s ease;
            z-index: 99;
        }

        .back-button:hover {
            background: linear-gradient(135deg, #a0551a, #bf5f1a, #ba7a3a);
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(181, 101, 29, 0.4);
        }

        /* Footer */
        .footer {
            font-family: "Montserrat", sans-serif;
            background: linear-gradient(135deg, #b5651d 0%, #8b4513 25%, #d2691e 75%, #daa520 100%);
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
            background: linear-gradient(90deg, #ffffff, #f5deb3);
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
            color: #e6d7c5;
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
            color: #f5deb3;
            transform: scale(1.2);
        }

        .social-media {
            width: 160px;
            display: flex;
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
            color: #1d48b5ff;
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

        .map-placeholder {
            width: 100%;
            height: 160px;
            background: linear-gradient(135deg, #ffffff 0%, #faf6f2 100%);
            border: 2px solid rgba(181, 101, 29, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #b5651d;
            font-size: 13px;
            font-weight: 500;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px rgba(181, 101, 29, 0.1);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .map-placeholder:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 40px rgba(181, 101, 29, 0.2);
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
            color: #e6d7c5;
        }

        .stat-row span:last-child {
            font-weight: 600;
            color: #ffffff;
            font-size: 16px;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
        }

        .footer-bottom {
            background: linear-gradient(135deg, #a0551a, #bf5f1a);
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
            color: #e6d7c5;
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

        /* ================= RESPONSIVE STYLES ================= */
        @media (max-width: 1200px) {
            .hero-title {
                font-size: 4em;
            }
            
            .about-container {
                gap: 50px;
            }
            
            .features-grid {
                gap: 30px;
            }
            
            .gallery-grid {
                grid-auto-rows: 240px;
            }
        }

        @media (max-width: 992px) {
            .hero-title {
                font-size: 3.5em;
            }
            
            .hero-description {
                font-size: 1.1em;
            }
            
            .about-container {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            
            .about-image {
                height: 350px;
                order: -1;
            }
            
            .features-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .gallery-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .contact-info {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .footer-container {
                flex-wrap: wrap;
                gap: 40px;
            }
            
            .footer-column {
                min-width: 45%;
            }
        }

        @media (max-width: 768px) {
            .hero-section {
                min-height: 500px;
            }
            
            .hero-title {
                font-size: 3em;
            }
            
            .hero-subtitle {
                font-size: 1.1em;
            }
            
            .about-content h2,
            .gallery-title,
            .features-title,
            .contact-title {
                font-size: 2.5em;
            }
            
            .palm-decoration {
                font-size: 6em;
            }
            
            .gallery-grid {
                grid-auto-rows: 200px;
            }
            
            .feature-item {
                padding: 30px 15px;
            }
            
            .feature-icon {
                width: 80px;
                height: 80px;
                font-size: 2em;
            }
            
            .info-title {
                font-size: 2.2em;
            }
            
            .info-description {
                font-size: 1.1em;
            }
            
            .footer-column {
                min-width: 100%;
            }
            
            iframe {
                width: 100%;
                height: 350px;
            }
        }

        @media (max-width: 576px) {
            .hero-title {
                font-size: 2.5em;
            }
            
            .hero-description {
                font-size: 1em;
                margin-bottom: 30px;
            }
            
            .about-content h2,
            .gallery-title,
            .features-title,
            .contact-title,
            .info-title {
                font-size: 2em;
            }
            
            .about-content p,
            .feature-description,
            .contact-item p {
                font-size: 1em;
            }
            
            .palm-decoration {
                font-size: 4em;
            }
            
            .features-grid {
                grid-template-columns: 1fr;
            }
            
            .gallery-grid {
                grid-template-columns: 1fr;
                grid-auto-rows: 250px;
            }
            
            .info-stats {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .stat-number {
                font-size: 2.5em;
            }
            
            .ticket-card {
                flex: 1 1 100%;
            }
            
            .footer-bottom-content {
                flex-direction: column;
                text-align: center;
                gap: 10px;
            }
            
            iframe {
                height: 300px;
            }
        }

        @media (max-width: 400px) {
            .hero-title {
                font-size: 2em;
            }
            
            .hero-subtitle {
                font-size: 1em;
                letter-spacing: 2px;
            }
            
            .back-button {
                top: 20px;
                left: 20px;
                padding: 8px 15px;
                font-size: 0.9em;
            }
            
            .about-content h2,
            .gallery-title,
            .features-title,
            .contact-title,
            .info-title {
                font-size: 1.8em;
            }
            
            .about-image {
                height: 250px;
            }
            
            .gallery-grid {
                grid-auto-rows: 200px;
            }
            
            .feature-title {
                font-size: 1.2em;
            }
            
            .footer-column h3 {
                font-size: 18px;
                margin-bottom: 15px;
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
        <div class="hero-content">
            <p class="hero-subtitle">Discover Paradise</p>
            <h1 class="hero-title">PANTAI KEDU</h1>
            <p class="hero-description">
                Pantai Kedu menawarkan pengalaman wisata yang seru dengan sensasi sunset spektakuler, suasana asri yang cocok untuk keluarga maupun milenial, serta fasilitas lengkap mulai dari camping hingga hiburan.
            </p>
        </div>

        <div class="scroll-indicator">⬇</div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="about-container">
            <div class="about-content">
                <h2>Tentang Pantai Kedu</h2>
                <p>Pantai Kedu adalah destinasi wisata bahari yang menawan di Kalianda, Lampung Selatan—hanya sekitar 10 menit dari pusat kota. Pantai ini terkenal karena hamparan pasir putih halus, ombak lembut, dan panorama Gunung Rajabasa serta Pulau Krakatau di cakrawala.</p>
                <p>Posisinya yang langsung menghadap barat membuat Pantai Kedu menjadi tempat favorit untuk berburu sunset spektakuler. Spot-spot seperti gazebo kayu, bean bags, lampion, hingga kapal karam di tepi pantai menambah sentuhan estetika khas Instagrammable.</p>
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
                <!-- ROW 1: 1 FOTO PENUH (3 kolom) -->
                <div class="gallery-item hero">
                    <img src="../image/Kedu/kedu (10).JPG" alt="Pemandangan Resort Utama">
                </div>
                <!-- ROW 2: 2 FOTO (2+1 kolom) -->
                <div class="gallery-item wide">
                    <img src="../image/Kedu/kedu (9).JPG" alt="Pantai Alau-Alau">
                </div>
                <div class="gallery-item medium">
                    <img src="../image/Kedu/IMG_3944.JPG" alt="Villa View">
                </div>

                <!-- ROW 3: 1 FOTO PENUH (3 kolom) -->
                <div class="gallery-item medium">
                    <img src="../image/Kedu/IMG_3948.JPG" alt="Cottage Area">
                </div>
                <div class="gallery-item medium">
                    <img src="../image/Kedu/kedu (4).JPG" alt="Sunset di Resort">
                </div>

                <!-- ROW 4: 3 FOTO (1+1+1 kolom) -->
                <div class="gallery-item medium">
                    <img src="../image/Kedu/kedu (3).JPG" alt="Beach Activities">
                </div>
                <div class="gallery-item wide">
                    <img src="../image/Kedu/kedu (1).JPG" alt="Cottage Area">
                </div>
                <div class="gallery-item medium">
                    <img src="../image/Kedu/kedu (6).JPG" alt="Resort Facilities">
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
                    <div class="feature-icon">🍢</div>
                    <h3 class="feature-title">Kios Makanan</h3>
                    <p class="feature-description">Beragam pilihan makanan dan camilan lokal tersedia di kios-kios sekitar pantai untuk mengisi energi Anda.</p>
                </div>

            </div>
        </div>
    </section>


    <!-- Info Section -->
    <section class="info-section">
        <div class="info-container">
            <h2 class="info-title">Mengapa Memilih Pantai Kedu?</h2>
            <p class="info-description">
                Pantai Kedu bukan hanya sekedar destinasi wisata, tetapi sebuah pengalaman yang akan mengisi hati Anda dengan kedamaian dan kebahagiaan. Dengan keindahan alam yang masih asri dan fasilitas yang lengkap, pantai ini menjadi pilihan terbaik untuk melepas penat dari rutinitas sehari-hari.
            </p>

            <div class="info-stats">
                <div class="stat-item">
                    <span class="stat-number">500+</span>
                    <span class="stat-label">Pengunjung Mingguan</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">4.4/5</span>
                    <span class="stat-label">Rating Google</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <!-- SECTION LOKASI & AKSES (BARU) -->
    <section class="location-section">
        <div class="contact-container">
            <h2 class="contact-title">📍 Lokasi & Akses</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15879.732162407709!2d105.57067024424319!3d-5.722785457268113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e411032ea88491f%3A0x59a00a7d266b9b14!2sPantai%20Kedu%20Kalianda!5e0!3m2!1sen!2sid!4v1754252556899!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                        Senin - Minggu: 07:00 - 21:00 WIB<br>
                        Area Camping: 24 Jam
                    </p>
                </div>

                <div class="contact-item">
                    <h3>📞 Kontak Informasi</h3>
                    <div class="social-icons-grid">
                        <a href="https://www.instagram.com/pantaikedu.id/" target="_blank" class="icon-box ig" aria-label="Instagram">
                            <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/instagram.svg" alt="Instagram">
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=0816279855" target="_blank" class="icon-box wa" aria-label="WhatsApp">
                            <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/whatsapp.svg" alt="WhatsApp">
                        </a>
                    </div>
                </div>

            </div>

        </div>

        <!-- Harga Tiket Diletakkan Sendiri -->
        <div class="ticket-info">
            <h3>💰 Harga Tiket</h3>
            <div class="ticket-grid">
                <div class="ticket-card weekday">
                    <h4>🗓️ Weekday / Weekend</h4>
                    <ul>
                        <li>👨‍🦱🧒 Tiket Masuk: Rp 5.000 / orang</li>
                        <li>🛵🚗 Parkir Motor / Mobil: Rp 5.000</li>
                    </ul>
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
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                        <a href="https://www.facebook.com/pages/Kantor%20Kelurahan%20Way%20Urang%20Kalianda/1700218406943437/#" class="social-link-acebook">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
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