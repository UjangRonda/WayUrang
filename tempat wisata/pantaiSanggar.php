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
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
                url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 800"><defs><linearGradient id="ocean" x1="0%" y1="0%" x2="100%" y2="100%"><stop offset="0%" style="stop-color:%2387ceeb;stop-opacity:1" /><stop offset="50%" style="stop-color:%2300b4d8;stop-opacity:1" /><stop offset="100%" style="stop-color:%230066cc;stop-opacity:1" /></linearGradient></defs><rect width="1200" height="500" fill="url(%23ocean)"/><ellipse cx="600" cy="500" rx="600" ry="100" fill="%23f4e4bc"/><path d="M0,400 Q300,380 600,400 T1200,400 L1200,800 L0,800 Z" fill="%23ffffff" opacity="0.1"/></svg>') center/cover;
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
            color: #0066cc;
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
            background: linear-gradient(45deg, #87ceeb, #00b4d8);
            height: 400px;
            border-radius: 20px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 180, 216, 0.2);
        }

        .about-image::before {
            content: "🏖️";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 6em;
            opacity: 0.7;
        }

        /* ================= GALLERY SECTION ================= */
        .gallery-section {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
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
            color: #0066cc;
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
            gap: 20px;
            margin-bottom: 40px;
        }

        .gallery-item {
            background: linear-gradient(45deg, #87ceeb, #00b4d8, #0066cc);
            height: 250px;
            border-radius: 15px;
            position: relative;
            overflow: hidden;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3em;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .gallery-item:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 30px rgba(0, 180, 216, 0.3);
        }

        .gallery-item.large {
            grid-column: span 2;
            height: 320px;
            font-size: 4em;
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
            color: #0066cc;
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
            border: 1px solid #e6f3ff;
        }

        .feature-item:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 50px rgba(0, 180, 216, 0.15);
            border-color: #00b4d8;
        }

        .feature-icon {
            width: 100px;
            height: 100px;
            margin: 0 auto 25px;
            background: linear-gradient(135deg, #00b4d8, #0066cc);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5em;
            color: #fff;
            box-shadow: 0 15px 30px rgba(0, 180, 216, 0.3);
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
            background: linear-gradient(135deg, #0066cc 0%, #00b4d8 50%, #87ceeb 100%);
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
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
            margin-top: 60px;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 3em;
            font-weight: 900;
            color: #ffcc00;
            display: block;
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
            color: #0066cc;
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
            background: #f8fafc;
            padding: 40px 30px;
            border-radius: 15px;
            border-left: 5px solid #00b4d8;
        }

        .contact-item h3 {
            color: #0066cc;
            font-size: 1.3em;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .contact-item p {
            color: #555;
            line-height: 1.6;
        }

        /* Sesuaikan dengan style dua card atas */
        .ticket-info {
            max-width: 600px;
            margin: 40px auto 0 auto;
            background-color: #f4f4f4;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            color: #333;
        }

        .ticket-info h3 {
            margin-bottom: 15px;
            color: #00b4d8;
            font-size: 1.4em;
        }

        .location-section{
            margin: 100px 0;
        }


        /* ================= RESPONSIVE ================= */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 3.5em;
            }

            .about-container {
                grid-template-columns: 1fr;
                gap: 50px;
            }

            .gallery-grid {
                grid-template-columns: 1fr;
            }

            .gallery-item.large {
                grid-column: span 1;
                height: 250px;
                font-size: 3em;
            }

            .features-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 30px;
            }

            .info-stats {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .contact-info {
                grid-template-columns: 1fr;
                gap: 30px;
            }


        }

        @media (max-width: 480px) {
            .features-grid {
                grid-template-columns: 1fr;
            }

            .hero-title {
                font-size: 2.8em;
            }
        }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
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

        <div class="scroll-indicator">⬇️</div>
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
                <div class="gallery-item large">🏖️ Main Beach</div>
                <div class="gallery-item">🌅 Sunset View</div>
                <div class="gallery-item">☕ Beach Café</div>
                <div class="gallery-item">🏕️ Camping Area</div>
                <div class="gallery-item large">🌊 Crystal Waters</div>
                <div class="gallery-item">📸 Photo Spots</div>
                <div class="gallery-item">🥥 Coconut Trees</div>
                <div class="gallery-item">🌺 Tropical Garden</div>
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
                    <p class="feature-description">Nikmati suasana pantai yang tenang dengan pasir putih halus dan pemandangan laut yang memukau</p>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">☕</div>
                    <h3 class="feature-title">Beach Café</h3>
                    <p class="feature-description">Café tepi pantai dengan menu lengkap dan minuman segar untuk menemani waktu santai Anda</p>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">🏕️</div>
                    <h3 class="feature-title">Camping</h3>
                    <p class="feature-description">Area camping yang aman dan nyaman untuk pengalaman bermalam di tepi pantai</p>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">📸</div>
                    <h3 class="feature-title">Photo Spots</h3>
                    <p class="feature-description">Berbagai spot foto instagramable dengan latar belakang pemandangan pantai yang menawan</p>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">🏊</div>
                    <h3 class="feature-title">Swimming</h3>
                    <p class="feature-description">Air laut yang jernih dan ombak yang tenang, cocok untuk berenang dan bermain air</p>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">🌅</div>
                    <h3 class="feature-title">Sunset Viewing</h3>
                    <p class="feature-description">Saksikan matahari terbenam yang spektakuler dengan warna-warni langit yang memukau</p>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">🎣</div>
                    <h3 class="feature-title">Fishing</h3>
                    <p class="feature-description">Aktivitas memancing untuk pengalaman yang menyenangkan bersama keluarga</p>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">🚤</div>
                    <h3 class="feature-title">Water Sports</h3>
                    <p class="feature-description">Berbagai aktivitas olahraga air yang memacu adrenalin dan menyenangkan</p>
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
                    <span class="stat-number">500+</span>
                    <span class="stat-label">Pengunjung Harian</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">4.4/5</span>
                    <span class="stat-label">Rating Pengunjung</span>
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
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3969.8975698436125!2d105.5849988!3d-5.7278915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4111ae978d7b83%3A0x460be26fe2946e61!2sSanggar%20Beach!5e0!3m2!1sen!2sid!4v1754141755109!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                    <p>
                        Telepon: +62 812 3456 7890<br>
                        WhatsApp: +62 812 3456 7890<br>
                        Email: info@pantaisanggar.com
                    </p>
                </div>
            </div>

            <!-- Harga Tiket Diletakkan Sendiri -->
            <div class="ticket-info">
                <h3>💰 Harga Tiket</h3>
                <p>
                    <strong>Weekday</strong><br>
                    - Dewasa: Rp 15.000<br>
                    - Anak-anak: Rp 10.000<br>
                    - Parkir: Rp 5.000
                </p>
                <p>
                    <strong>Weekend</strong><br>
                    - Dewasa: Rp 20.000<br>
                    - Anak-anak: Rp 10.000<br>
                    - Parkir: Rp 5.000
                </p>
            </div>
        </div>
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