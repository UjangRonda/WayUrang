<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alau-Alau Boutique Resort Hotel</title>
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
            min-height: 500px;
            background:
                linear-gradient(rgba(14, 211, 79, 0.4), rgba(13, 109, 226, 0.4)),
                url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwIiBoZWlnaHQ9IjEwMCIgdmlld0JveD0iMCAwIDEwMCAxMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSIxMDAiIGhlaWdodD0iMTAwIiBmaWxsPSIjNDBBMjc4Ii8+Cjwvc3ZnPg==') center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
        }

        /* Floating palm trees */
        .palm-decoration {
            position: absolute;
            font-size: clamp(3em, 8vw, 8em);
            opacity: 0.3;
            z-index: 1;
            animation: sway 6s ease-in-out infinite;
            color: rgba(255, 255, 255, 0.6);
        }

        .palm-left {
            top: 20%;
            left: 2%;
            transform: rotate(-15deg);
        }

        .palm-right {
            top: 15%;
            right: 2%;
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
            max-width: 90%;
            width: 100%;
            padding: 0 20px;
        }

        .hero-subtitle {
            color: #fff;
            font-size: clamp(0.9em, 2.5vw, 1.3em);
            margin-bottom: 15px;
            letter-spacing: 2px;
            text-transform: uppercase;
            opacity: 0.9;
            font-weight: 300;
        }

        .hero-title {
            font-size: clamp(2.5em, 8vw, 5em);
            font-weight: 900;
            color: #fff;
            margin-bottom: 25px;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.5);
            letter-spacing: clamp(1px, 0.5vw, 4px);
            line-height: 1.1;
        }

        .hero-description {
            font-size: clamp(1em, 2.5vw, 1.2em);
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
            font-size: clamp(1.5em, 3vw, 2em);
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
            padding: clamp(60px, 10vw, 120px) 0;
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
            font-size: clamp(2em, 5vw, 3em);
            background: linear-gradient(135deg, #0ed34f, #0d6de2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 30px;
            font-weight: 800;
            line-height: 1.2;
            text-align: center;
        }

        .about-content p {
            font-size: clamp(1em, 2.5vw, 1.1em);
            color: #555;
            line-height: 1.8;
            margin-bottom: 20px;
            text-align: justify;
        }

        .about-image {
            background: url('../image/alau-alau/alau-alau\ \(8\).JPG');
            background-size: cover;
            height: 400px;
            border-radius: 20px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(181, 101, 29, 0.3);
        }

        .about-image {
            order: -1;
        }

        /* ================= GALLERY SECTION ================= */
        .gallery-section {
            background: linear-gradient(135deg, #f0fff4 0%, #e1f5fe 100%);
            padding: clamp(60px, 10vw, 120px) 0;
        }

        .gallery-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            text-align: center;
        }

        .gallery-title {
            font-size: clamp(2em, 5vw, 3em);
            background: linear-gradient(135deg, #0ed34f, #0d6de2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 20px;
            font-weight: 800;
        }

        .gallery-subtitle {
            font-size: clamp(1em, 2.5vw, 1.2em);
            color: #666;
            margin-bottom: 40px;
            font-style: italic;
        }

        /* GRID LAYOUT - Responsif */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            grid-auto-rows: 250px;
            gap: 20px;
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

        /* HOVER EFFECTS */
        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(14, 211, 79, 0.3);
        }

        .gallery-item:hover img {
            transform: scale(1.05);
        }

        /* ================= FEATURES SECTION ================= */
        .features-section {
            background: #fff;
            padding: clamp(60px, 10vw, 120px) 0;
        }

        .features-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            text-align: center;
        }

        .features-title {
            font-size: clamp(2em, 5vw, 3em);
            background: linear-gradient(135deg, #0ed34f, #0d6de2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 40px;
            font-weight: 800;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .feature-item {
            text-align: center;
            padding: 30px 20px;
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: 1px solid #e8f5e8;
        }

        .feature-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(14, 211, 79, 0.2);
            border-color: #0d6de2;
        }

        .feature-icon {
            width: clamp(60px, 15vw, 100px);
            height: clamp(60px, 15vw, 100px);
            margin: 0 auto 25px;
            background: linear-gradient(135deg, #0ed34f, #0d6de2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: clamp(1.5em, 4vw, 2.5em);
            color: #fff;
            box-shadow: 0 15px 30px rgba(14, 211, 79, 0.3);
        }

        .feature-title {
            font-size: clamp(1.1em, 3vw, 1.4em);
            font-weight: 700;
            color: #333;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .feature-description {
            color: #666;
            line-height: 1.6;
            font-size: clamp(0.9em, 2vw, 1em);
        }

        /* ================= INFO SECTION ================= */
        .info-section {
            background: linear-gradient(135deg, #0ed34f 0%, #00bcd4 25%, #0d6de2 75%, #3f51b5 100%);
            padding: clamp(60px, 10vw, 100px) 0;
            color: white;
            text-align: center;
        }

        .info-container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .info-title {
            font-size: clamp(2em, 5vw, 2.8em);
            margin-bottom: 30px;
            font-weight: 800;
        }

        .info-description {
            font-size: clamp(1em, 2.5vw, 1.3em);
            line-height: 1.8;
            opacity: 0.95;
            margin-bottom: 40px;
            text-align: justify;
        }

        .info-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: clamp(2em, 5vw, 3em);
            font-weight: 900;
            color: #e8f5fd;
            display: block;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .stat-label {
            font-size: clamp(0.9em, 2.5vw, 1.1em);
            opacity: 0.9;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* FIXED: Map and address alignment */
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

        /* ================= CONTACT SECTION ================= */
        .contact-section {
            background: #fff;
            padding: clamp(60px, 10vw, 100px) 0;
        }

        .contact-container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 20px;
            text-align: center;
        }

        .contact-title {
            font-size: clamp(2em, 5vw, 2.8em);
            background: linear-gradient(135deg, #0ed34f, #0d6de2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 40px;
            font-weight: 800;
        }

        .contact-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .contact-item {
            background: linear-gradient(135deg, #f0fff4, #e1f5fe);
            padding: 30px 20px;
            border-radius: 15px;
            border-left: 5px solid #0ed34f;
        }

        .contact-item a {
            text-decoration: none;
            color: #0d6de2;
        }

        .contact-item h3 {
            color: #0ed34f;
            font-size: clamp(1.1em, 3vw, 1.3em);
            margin-bottom: 15px;
            font-weight: 700;
        }

        .contact-item p {
            color: #555;
            line-height: 1.6;
            font-size: clamp(0.9em, 2vw, 1em);
        }

        .social-icons-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(50px, 1fr));
            gap: 15px;
            margin-top: 15px;
            justify-items: center;
            max-width: 200px;
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
            background: linear-gradient(135deg, #0ed34f, #0d6de2);
            overflow: hidden;
        }

        .icon-box img {
            width: 24px;
            height: 24px;
            filter: brightness(0) invert(1);
        }

        .icon-box:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 25px rgba(14, 211, 79, 0.4);
        }

        /* Platform-specific colors */
        .icon-box.ig {
            background: linear-gradient(135deg, #0ed34f, #00bcd4);
        }

        .icon-box.tiktok {
            background: linear-gradient(135deg, #000000, #0d6de2);
        }

        .icon-box.wa {
            background: linear-gradient(135deg, #0ed34f, #00a693);
        }

        .icon-box.email {
            background: linear-gradient(135deg, #0d6de2, #3f51b5);
        }

        .ticket-info {
            max-width: 800px;
            margin: 40px auto 0 auto;
            background: linear-gradient(135deg, #f0fff4, #e1f5fe);
            border-radius: 15px;
            padding: 30px 20px;
            box-shadow: 0 10px 30px rgba(14, 211, 79, 0.2);
            color: #333;
        }

        .ticket-info h3 {
            margin-bottom: 25px;
            background: linear-gradient(135deg, #0ed34f, #0d6de2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-size: clamp(1.3em, 3vw, 1.8em);
            text-align: center;
        }

        .ticket-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .ticket-card {
            flex: 1 1 100%;
            max-width: 100%;
            background: #ffffff;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 8px 25px rgba(14, 211, 79, 0.15);
            border: 1px solid #c8e6c9;
            transition: transform 0.3s ease;
        }

        .ticket-card:hover {
            transform: translateY(-5px);
            border-color: #0d6de2;
        }

        .ticket-card h4 {
            font-size: clamp(1.1em, 2.5vw, 1.3em);
            margin-bottom: 15px;
            color: #0ed34f;
        }

        .ticket-card ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .ticket-card ul li {
            font-size: clamp(0.9em, 2vw, 1em);
            padding: 6px 0;
            display: flex;
            align-items: center;
            gap: 8px;
            justify-content: center;
            margin-bottom: 10px;
        }

        .location-section {
            margin: clamp(40px, 8vw, 100px) 0;
        }

        .location-section iframe {
            width: 100%;
            max-width: 100%;
            height: clamp(300px, 50vw, 450px);
            border: 0;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(14, 211, 79, 0.2);
        }

        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            background: linear-gradient(135deg, #0ed34f, #0d6de2);
            color: #fff;
            padding: clamp(8px, 2vw, 10px) clamp(15px, 3vw, 20px);
            border-radius: 30px;
            text-decoration: none;
            font-family: "Montserrat", sans-serif;
            font-weight: 600;
            font-size: clamp(0.8em, 2vw, 1em);
            box-shadow: 0 4px 12px rgba(14, 211, 79, 0.3);
            transition: all 0.3s ease;
            z-index: 99;
        }

        .back-button:hover {
            background: linear-gradient(135deg, #0bc947, #0b5dd9);
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(14, 211, 79, 0.4);
        }

        /* Footer */
        .footer {
            font-family: "Montserrat", sans-serif;
            background: linear-gradient(135deg, #0ed34f 0%, #00bcd4 25%, #0d6de2 75%, #3f51b5 100%);
            color: white;
            padding: clamp(30px, 6vw, 50px) 0 0 0;
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
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            padding: 0 20px clamp(30px, 6vw, 40px) 20px;
            position: relative;
            z-index: 1;
        }

        .footer-column {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.6s ease forwards;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .footer-column h3 {
            font-size: clamp(16px, 3vw, 20px);
            font-weight: 600;
            margin-bottom: 20px;
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
            background: linear-gradient(90deg, #ffffff, #e8f5fd);
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

        @keyframes slideInLeft {
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .footer-column ul li a {
            color: #c8e6c9;
            text-decoration: none;
            font-size: clamp(12px, 2.5vw, 14px);
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
            font-size: 8px;
            color: #ffffff;
            transition: all 0.3s ease;
        }

        .footer-column ul li a:hover {
            color: white;
            transform: translateX(5px);
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }

        .social-media {
            display: flex;
            justify-content: flex-start;
            gap: 10px;
            margin-top: 15px;
        }

        .social-media a {
            display: flex;
            width: clamp(35px, 8vw, 40px);
            height: clamp(35px, 8vw, 40px);
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            align-items: center;
            justify-content: center;
            color: #fff;
            transition: all 0.3s ease;
        }

        .social-media a:hover {
            background: #ffffff;
            color: #0e3fd3ff;
            transform: translateY(-3px);
        }

        .map-placeholder {
            width: 100%;
            height: clamp(120px, 30vw, 160px);
            background: linear-gradient(135deg, #ffffff 0%, #f0fff4 100%);
            border: 2px solid rgba(14, 211, 79, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #0d6de2;
            font-size: clamp(11px, 2.5vw, 13px);
            font-weight: 500;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px rgba(14, 211, 79, 0.1);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .address {
            background: rgba(255, 255, 255, 0.15);
            padding: 15px;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .address p {
            font-size: clamp(12px, 2.5vw, 14px);
            line-height: 1.7;
            color: #c8e6c9;
            margin: 0;
            font-weight: 400;
        }

        .footer-bottom {
            background: linear-gradient(135deg, #0bc947, #0b5dd9);
            padding: clamp(15px, 4vw, 25px) 0;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
        }

        .footer-bottom-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            gap: 10px;
            font-size: clamp(11px, 2.5vw, 13px);
            color: #c8e6c9;
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

        /* ================= RESPONSIVE BREAKPOINTS ================= */

        /* Tablet dan Desktop Kecil */
        @media (min-width: 768px) {
            .about-container {
                grid-template-columns: 1fr 1fr;
                gap: 60px;
            }

            .about-content {
                text-align: left;
            }

            .about-content h2 {
                text-align: left;
            }

            .info-description {
                text-align: center;
            }

            .footer-bottom-content {
                flex-direction: row;
                justify-content: space-between;
                text-align: left;
            }
        }

        /* Desktop */
        @media (min-width: 1024px) {
            .gallery-grid {
                grid-template-columns: repeat(3, 1fr);
                grid-auto-rows: 280px;
                gap: 25px;
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

            .features-grid {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        /* Mobile Landscape dan Tablet Portrait */
        @media (max-width: 1023px) {

            .palm-left,
            .palm-right {
                display: none;
            }
        }

        /* Mobile */
        @media (max-width: 767px) {
            .hero-section {
                min-height: 400px;
            }

            .back-button {
                position: fixed;
                top: 10px;
                left: 10px;
                z-index: 999;
            }

            .gallery-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .gallery-item.large,
            .gallery-item.wide,
            .gallery-item.tall,
            .gallery-item.hero,
            .gallery-item.hero1 {
                grid-column: span 1;
                grid-row: span 1;
            }

            .features-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .info-stats {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .contact-info {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .ticket-info {
                padding: 20px 15px;
            }
        }

        /* Ultra Small Mobile */
        @media (max-width: 480px) {
            .hero-content {
                padding: 0 15px;
            }

            .footer-container {
                max-width: 1200px;
                margin: 0 auto;
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 30px;
                padding: 0 20px clamp(30px, 6vw, 40px) 20px;
                position: relative;
                z-index: 1;
                margin-bottom: 20px;
            }

            .about-container,
            .gallery-container,
            .features-container,
            .info-container,
            .contact-container,
            .footer-container {
                padding: 0 15px;
            }

            .feature-item {
                padding: 20px 15px;
            }

            .ticket-card {
                padding: 15px;
            }
        }

        /* Ultra Wide Desktop */
        @media (min-width: 1400px) {
            .gallery-grid {
                grid-auto-rows: 320px;
            }
        }

        /* Print Styles */
        @media print {

            .back-button,
            .scroll-indicator,
            .social-media {
                display: none;
            }

            .hero-section {
                height: auto;
                min-height: 300px;
                background: #40A278;
                color: white;
                padding: 40px 0;
            }

            .gallery-grid {
                grid-template-columns: repeat(2, 1fr);
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
            <h1 class="hero-title">ALAU ALAU RESORT</h1>
            <p class="hero-description">
                Pantai Alau-Alau adalah destinasi wisata dengan pasir putih bersih dan ombak tenang. Dikelilingi pepohonan rindang dan batu karang, pantai ini cocok untuk bersantai, bermain air, atau menikmati matahari terbenam.
            </p>
        </div>

        <div class="scroll-indicator">⬇</div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="about-container">
            <div class="about-content">
                <h2>Tentang Alau-Alau Boutique Resort</h2>
                <p>Alau-Alau Boutique Resort adalah penginapan eksklusif tepi pantai privat di Way Urang, Kalianda, Lampung Selatan, yang menyajikan suasana tenang dan romantis. Cocok untuk pasangan, keluarga, maupun tamu yang ingin melepas penat dari hiruk-pikuk kota.</p>
                <p>Resort ini menawarkan pilihan villa modern dan cottage kayu panggung dengan teras pribadi menghadap laut. Banyak kamar telah dilengkapi AC, TV, dan kamar mandi dalam, meski beberapa area sengaja didesain tanpa Wi-Fi untuk menciptakan suasana alami yang sesungguhnya.</p>
                <p>Pengunjung dapat menikmati pasir putih lembut, batu karang estetik, dan suara deburan ombak sambil duduk di tepi pantai atau berswafoto dengan latar Gunung Krakatau dan Gunung Rajabasa. Tersedia juga area untuk bercengkrama malam dan membuat api unggun.</p>
            </div>
            <div class="about-image"></div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="gallery-container">
            <h2 class="gallery-title">Galeri Foto</h2>
            <p class="gallery-subtitle">Jelajahi keindahan Alau-Alau Resort melalui koleksi foto menawan</p>

            <div class="gallery-grid">
                <!-- ROW 1: 1 FOTO PENUH (3 kolom) -->
                <div class="gallery-item hero1">
                    <img src="../image/alau-alau/alau-alau (3).JPG" alt="Pemandangan Resort Utama">
                </div>

                <!-- ROW 2: 2 FOTO (2+1 kolom) -->
                <div class="gallery-item wide">
                    <img src="../image/alau-alau/alau-alau (5).JPG" alt="Pantai Alau-Alau">
                </div>
                <div class="gallery-item medium">
                    <img src="../image/alau-alau/alau-alau (8).JPG" alt="Villa View">
                </div>

                <!-- ROW 3: 1 FOTO PENUH (3 kolom) -->
                <div class="gallery-item hero">
                    <img src="../image/alau-alau/alau-alau (7).JPG" alt="Sunset di Resort">
                </div>

                <!-- ROW 4: 3 FOTO (1+1+1 kolom) -->
                <div class="gallery-item medium">
                    <img src="../image/alau-alau/alau-alau (10).JPG" alt="Cottage Area">
                </div>
                <div class="gallery-item medium">
                    <img src="../image/alau-alau/alau-alau (11).JPG" alt="Beach Activities">
                </div>
                <div class="gallery-item medium">
                    <img src="../image/alau-alau/alau-alau (14).JPG" alt="Resort Facilities">
                </div>

                <!-- ROW 5: 2 FOTO (1+2 kolom) -->
                <div class="gallery-item medium">
                    <img src="../image/alau-alau/alau-alau (4).JPG" alt="Dining Area">
                </div>
                <div class="gallery-item wide">
                    <img src="../image/alau-alau/alau-alau (9).JPG" alt="Beach Panorama">
                </div>
                <div class="gallery-item medium">
                    <img src="../image/alau-alau/alau-alau (15).JPG" alt="Beach Panorama">
                </div>
                <div class="gallery-item medium">
                    <img src="../image/alau-alau/alau-alau (12).JPG" alt="Beach Panorama">
                </div>
                <div class="gallery-item medium">
                    <img src="../image/alau-alau/alau-alau (2).JPG" alt="Beach Panorama">
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
                    <div class="feature-icon">🏡</div>
                    <h3 class="feature-title">Villa & Cottage</h3>
                    <p class="feature-description">Tersedia penginapan nyaman seperti villa dan cottage dengan pemandangan langsung ke pantai.</p>
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
            <h2 class="info-title">Mengapa Memilih Alau-Alau Resort?</h2>
            <p class="info-description">
                Pantai Senaya bukan hanya sekedar destinasi wisata, tetapi sebuah pengalaman yang akan mengisi hati Anda dengan kedamaian dan kebahagiaan. Dengan keindahan alam yang masih asri dan fasilitas yang lengkap, pantai ini menjadi pilihan terbaik untuk melepas penat dari rutinitas sehari-hari.
            </p>

            <div class="info-stats">
                <div class="stat-item">
                    <span class="stat-number">Full Bundling</span>
                    <span class="stat-label">Penginapan, ATV, Makan, dsb</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">4.1/5</span>
                    <span class="stat-label">Rating Google</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section class="location-section">
        <div class="contact-container">
            <h2 class="contact-title">📍 Lokasi & Akses</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.0905066793084!2d105.55685567477667!3d-5.700063056378764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e411013fc2daf27%3A0xa22c45d7e60c3bd4!2sAlau%20Alau%20Boutique%20Resort%20Hotel!5e0!3m2!1sen!2sid!4v1754253206716!5m2!1sen!2sid"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
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
                        Senin - Minggu: 00.00 - 24.00 <br>
                        Area Camping: 24 Jam
                    </p>
                </div>

                <div class="contact-item">
                    <h3>📞 Kontak Informasi</h3>
                    <div class="social-icons-grid">
                        <a href="https://www.instagram.com/alaualauboutiqueresort/" target="_blank" class="icon-box ig" aria-label="Instagram">
                            <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/instagram.svg" alt="Instagram">
                        </a>
                        <a href="https://wa.me/62811727638" target="_blank" class="icon-box wa" aria-label="WhatsApp">
                            <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/whatsapp.svg" alt="WhatsApp">
                        </a>
                    </div>
                </div>
            </div>

            <!-- Ticket Price Info -->
            <div class="ticket-info">
                <h3>💰 Harga Tiket</h3>
                <div class="ticket-grid">
                    <div class="ticket-card weekday">
                        <h4>🗓️ Range Tiket Villa / Cottage</h4>
                        <ul>
                            <li>Rp 350.000 - Rp 1.500.000</li>
                        </ul>
                        <h4>🗓️ Tiket Masuk</h4>
                        <ul>
                            <li>Rp 50.000</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
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
        // Parallax effect for hero section
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallax = document.querySelector('.hero-section');
            const speed = scrolled * 0.3; // Reduced for mobile performance
            parallax.style.transform = `translateY(${speed}px)`;
        });

        // Smooth reveal animations with improved performance
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                    observer.unobserve(entry.target); // Stop observing after animation
                }
            });
        }, observerOptions);

        // Apply fade-in effect to sections
        document.addEventListener('DOMContentLoaded', () => {
            const sections = document.querySelectorAll('.about-section, .gallery-section, .features-section, .info-section, .contact-section');

            sections.forEach(section => {
                section.style.opacity = '0';
                section.style.transform = 'translateY(30px)';
                section.style.transition = 'all 0.8s ease';
                observer.observe(section);
            });
        });

        // Improved mobile touch interactions
        if ('ontouchstart' in window) {
            document.body.classList.add('touch-device');
        }

        // Lazy loading for images (optional enhancement)
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.style.opacity = '1';
                        imageObserver.unobserve(img);
                    }
                });
            });

            document.querySelectorAll('.gallery-item img').forEach(img => {
                imageObserver.observe(img);
            });
        }

        // Handle window resize for better responsive behavior
        let resizeTimer;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(() => {
                // Recalculate any dynamic styles if needed
                console.log('Window resized, recalculating layouts...');
            }, 250);
        });
    </script>
</body>

</html>