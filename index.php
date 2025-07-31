<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelurahan Contoh</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
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
                        <a href="#web">Sejarah</a>
                        <a href="#desa">Visi Misi</a>
                        <a href="#data">Struktur Organisasi</a>
                    </div>
                </div>
                <a href="#layanan">Publikasi</a>
                <a href="#layanan">Potensi Wisata</a>   
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
                <h2>Kelurahan Way Urang</h2>
                <p>Website resmi Kelurahan Way Urang sebagai pusat informasi dan pelayanan masyarakat.</p>
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
                <h3>Profil Kelurahan</h3>
                <ul>
                    <li><a href="#">Struktur Organisasi</a></li>
                    <li><a href="#">Visi Misi</a></li>
                    <li><a href="#">Sejarah</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Publikasi</h3>
                <ul>
                    <li><a href="#">Kegiatan KMP</a></li>
                </ul>
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


</body>

</html>