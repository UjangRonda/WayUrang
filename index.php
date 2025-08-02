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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    canvas {
      max-width: 500px;
      margin: 20px;
    }
  </style>
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
                        <a href="sejarah.php">Sejarah</a>
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
                <h2>Kelurahan Way Urang</h2>Kelurahan Way Urang, yang terletak di jantung Kecamatan Kalianda, Lampung Selatan, merupakan kawasan aktif dan dinamis dengan semangat gotong royong yang kuat. Melalui berbagai program seperti pelatihan kesiapsiagaan bencana, aksi bersih sungai, hingga kegiatan meriah seperti jalan sehat dan peluncuran <span style="font-weight:bold;">Koperasi Desa <span style="color:red;">Merah</span> <span style="color:white; background-color:black;">Putih</span></span>, Way Urang terus tumbuh sebagai kelurahan yang tangguh, peduli lingkungan, dan berdaya secara ekonomi.
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

<section id="section-2">
  <div class="stats-container">
    <!-- Statistik singkat -->
    <div class="stat-card">
      <h3>5.842</h3>
      <p>Jumlah Penduduk</p>
    </div>
    <div class="stat-card">
      <h3>22</h3>
      <p>Jumlah RT</p>
    </div>
    <div class="stat-card">
      <h3>57%</h3>
      <p>Usia Produktif</p>
    </div>
    <div class="stat-card">
      <h3>12</h3>
      <p>UMKM Aktif</p>
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
      <img src="image/wisata-1.jpg" alt="Pantai Way Urang">
      <h3>Pantai Way Urang</h3>
      <p>Destinasi favorit warga lokal dengan pemandangan matahari terbenam yang indah.</p>
    </div>
    <div class="wisata-card">
      <img src="image/wisata-2.jpg" alt="Air Terjun Talang Gulo">
      <h3>Air Terjun Talang Gulo</h3>
      <p>Tersembunyi di balik perbukitan, tempat ini cocok untuk hiking ringan.</p>
    </div>
    <div class="wisata-card">
      <img src="image/wisata-3.jpg" alt="Taman Edukasi Way Urang">
      <h3>Taman Edukasi</h3>
      <p>Ruang terbuka hijau untuk edukasi anak dan kegiatan masyarakat.</p>
    </div>
  </div>
  <div class="info-wisata">
    <a href="">Lihat Selengkapnya</a>
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

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const genderCtx = document.getElementById('genderChart').getContext('2d');
  new Chart(genderCtx, {
    type: 'doughnut',
    data: {
      labels: ['Perempuan', 'Laki-laki'],
      datasets: [{
        data: [4200, 4320],
        backgroundColor: ['#ff4d6d', '#4d79ff'],
      }]
    },
    options: {
      plugins: {
        legend: {
          position: 'bottom',
          labels: { color: '#fff' }
        }
      }
    }
  });

  const jobCtx = document.getElementById('jobChart').getContext('2d');
  new Chart(jobCtx, {
    type: 'bar',
    data: {
      labels: [
        'Karyawan (PNS, TNI, Swasta)', 'Wiraswasta / Pedagang', 'Petani', 'Buruh Tani',
        'Peternak', 'Jasa', 'Pensiunan', 'Lainnya', 'Pengangguran', 'Pelajar'
      ],
      datasets: [{
        label: 'Jumlah',
        data: [1776, 1808, 497, 108, 159, 208, 285, 402, 100, 9501],
        backgroundColor: '#4bc0c0',
      }]
    },
    options: {
      indexAxis: 'y',
      scales: {
        x: {
          ticks: { color: '#fff' },
          grid: { color: '#444' }
        },
        y: {
          ticks: { color: '#fff' },
          grid: { color: '#444' }
        }
      },
      plugins: {
        legend: {
          display: false
        },
        tooltip: {
          backgroundColor: '#333',
          titleColor: '#ffcc00',
          bodyColor: '#fff'
        }
      }
    }
  });
</script>

</body>

</html>