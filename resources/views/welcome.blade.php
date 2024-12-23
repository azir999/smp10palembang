<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <title>Pengenalan Teknologi Web</title>
    <style>
        body {
            scroll-behavior: smooth;
            font-family: Arial, sans-serif;
        }

        .navbar {
            position: sticky;
            top: 0;
            z-index: 100;
            transition: background-color 0.3s ease;
        }

        .hero {
            animation: slideIn 1s ease-out;
        }

        .box {
            transition: transform 0.3s ease;
        }

        .box:hover {
            transform: scale(1.05);
        }

        @keyframes slideIn {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .animate-on-scroll {
            opacity: 0;
            transition: opacity 1s ease-out;
        }

        .animate-on-scroll.visible {
            opacity: 1;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar is-primary" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="#beranda"><strong>Pengenalan Web</strong></a>
        </div>
        <div class="navbar-menu">
            <div class="navbar-start">
                <a href="#pendahuluan" class="navbar-item">Pendahuluan</a>
                <a href="#tinjauan" class="navbar-item">Tinjauan Pustaka</a>
                <a href="#metode" class="navbar-item">Metode</a>
                <a href="#hasil" class="navbar-item">Hasil</a>
                <a href="#tim" class="navbar-item">Tim</a>
                <a href="#kesimpulan" class="navbar-item">Kesimpulan & Saran</a>
                <a href="#video" class="navbar-item">Video</a>
            </div>
        </div>
    </nav>

    <!-- Beranda Section -->
    <section id="beranda" class="hero is-primary is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title">Pengenalan Teknologi Web</h1>
                <h2 class="subtitle">Kegiatan di SMP 10 Palembang</h2>
            </div>
        </div>
    </section></br>

   <!-- Pendahuluan Section -->
<section id="pendahuluan" class="animate-on-scroll">
    <div class="container">
        <h1 class="title has-text-centered">Pendahuluan</h1>
        <p>Teknologi web telah menjadi bagian integral dalam kehidupan modern. Melalui web, individu dapat mengakses informasi, berkomunikasi, dan berkreasi. Di tingkat pendidikan dasar, seperti SMP, pengenalan teknologi web sangat penting untuk membangun fondasi dalam teknologi informasi.</p>
        <p>Kegiatan ini bertujuan untuk memberikan pemahaman dasar teknologi web kepada siswa kelas VIII dan IX SMP 10 Palembang dengan pengenalan HTML dan CSS.</p>
    </div>
</section></br>

<!-- Tinjauan Pustaka Section -->
<section id="tinjauan" class="has-background-light animate-on-scroll">
    <div class="container">
        <h1 class="title has-text-centered">Tinjauan Pustaka</h1>
        <p>Website adalah teknologi yang memungkinkan pertukaran informasi secara global melalui internet. Dengan menggunakan protokol HTTP, web memungkinkan pengguna mengakses berbagai jenis data melalui perangkat digital.</p>
        <p>Menurut penelitian, pengenalan teknologi sejak dini meningkatkan kemampuan kognitif siswa dan mempersiapkan mereka menghadapi revolusi industri 4.0.</p>
    </div>
</section></br>

<!-- Metode Section -->
<section id="metode" class="animate-on-scroll">
    <div class="container">
        <h1 class="title has-text-centered">Materi dan Metode Pelaksanaan</h1>
        <h2 class="subtitle">Materi</h2>
        <ul>
            <li>Pengenalan teknologi web: sejarah dan fungsi.</li>
            <li>Dasar-dasar HTML: struktur halaman web.</li>
            <li>Dasar-dasar CSS: mempercantik tampilan halaman web.</li>
            <li>Praktik membuat halaman web sederhana.</li>
        </ul></br>
        <h2 class="subtitle">Metode</h2>
        <p>Kegiatan dilakukan di Laboratorium Komputer SMP 10 Palembang pada 11 Desember 2024. Metode pelaksanaan meliputi ceramah, diskusi, dan praktik langsung.</p>
        <table class="table is-fullwidth"></br>
            <thead>
                <tr>
                    <th>Waktu</th>
                    <th>Kegiatan</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>08.00-08.30</td><td>Pembukaan dan pengenalan kegiatan</td></tr>
                <tr><td>08.30-10.00</td><td>Materi dasar HTML</td></tr>
                <tr><td>10.30-12.00</td><td>Materi dasar CSS</td></tr>
                <tr><td>13.00-15.00</td><td>Praktik membuat website sederhana</td></tr>
                <tr><td>15.00-16.00</td><td>Penutup dan tanya jawab</td></tr>
            </tbody>
        </table>
    </div>
</section></br>

<!-- Hasil Section -->
<section id="hasil" class="has-background-light animate-on-scroll">
    <div class="container">
        <h1 class="title has-text-centered">Hasil dan Pembahasan</h1>
        <p>Kegiatan ini berhasil memberikan pemahaman dasar kepada siswa SMP 10 Palembang tentang teknologi web. Sebanyak 10 siswa mampu membuat halaman web sederhana menggunakan HTML dan CSS. Antusiasme peserta terlihat dari partisipasi aktif mereka selama kegiatan.</p>
    </div>
</section></br>

<!-- Tim Section -->
<section id="tim" class="animate-on-scroll">
    <div class="container">
        <h1 class="title has-text-centered">Tim Pelaksana</h1>
        <div class="columns is-multiline is-centered">
            <div class="column is-one-third has-text-centered">
                <figure class="image is-128x128 is-inline-block">
                    <img class="is-rounded" src="https://i.ibb.co.com/tskkYrY/Whats-App-Image-2024-12-23-at-22-12-25.jpg" alt="Dinda Despita Sari">
                </figure>
                <p><strong>Dinda Despita Sari</strong><br>Koordinator</p>
            </div>
            <div class="column is-one-third has-text-centered">
                <figure class="image is-128x128 is-inline-block">
                    <img class="is-rounded" src="https://i.ibb.co.com/1rytYRZ/Whats-App-Image-2024-12-23-at-22-03-45.jpg" alt="Indika Ramadani Putri">
                </figure>
                <p><strong>Indika Ramadani Putri</strong><br>Pemateri HTML</p>
            </div>
            <div class="column is-one-third has-text-centered">
                <figure class="image is-128x128 is-inline-block">
                    <img class="is-rounded" src="https://i.ibb.co.com/HXrGmRS/Whats-App-Image-2024-12-23-at-22-03-39.jpg" alt="Poni Cornelia">
                </figure>
                <p><strong>Poni Cornelia</strong><br>Pemateri CSS</p>
            </div>
        </div>
    </div>
</section></br>

<!-- Dokumentasi Kegiatan Section -->
<section id="dokumentasi" class="animate-on-scroll">
    <div class="container">
        <h1 class="title has-text-centered">Dokumentasi Kegiatan</h1>
        <div class="columns is-multiline is-centered">
            <div class="column is-one-third">
                <div class="box">
                    <figure class="image is-4by3">
                        <img class="is-rounded" src="https://i.ibb.co.com/gwg1CfN/Whats-App-Image-2024-12-23-at-21-59-38.jpg" alt="Foto 1">
                    </figure>
                </div>
            </div>
            <div class="column is-one-third">
                <div class="box">
                    <figure class="image is-4by3">
                        <img class="is-rounded" src="https://i.ibb.co.com/QpxYnWz/Whats-App-Image-2024-12-23-at-21-59-37.jpg" alt="Foto 2">
                    </figure>
                </div>
            </div>
            <div class="column is-one-third">
                <div class="box">
                    <figure class="image is-4by3">
                        <img class="is-rounded" src="https://i.ibb.co.com/XFwWHQZ/Whats-App-Image-2024-12-23-at-21-59-40.jpg" alt="Foto 3">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section></br>

<!-- Kesimpulan Section -->
<section id="kesimpulan" class="animate-on-scroll">
    <div class="container">
        <h1 class="title has-text-centered">Kesimpulan</h1>
        <p class="has-text-centered">Kegiatan ini berhasil mengenalkan teknologi web kepada siswa dan diharapkan menjadi bekal mereka dalam bidang teknologi.</p></br>
        <h1 class="title has-text-centered">Saran</h1>
        <p class="has-text-centered">Kegiatan serupa sebaiknya diadakan secara rutin dengan tambahan materi JavaScript untuk memperkaya fungsi web.</p>
    </div>
</section></br>

 <!-- YouTube Video Section -->
 <section id="video" class="has-background-light">
    <div class="container">
        <h1 class="title has-text-centered">Video Pengenalan Sekolah
        </h1>
        <div class="has-text-centered">
            <!-- Embed YouTube Video -->
            <iframe width="100%" height="480" src="https://www.youtube.com/embed/Sa9HClyWgnU?si=ZR14q7UvyEjnpm-g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <p class="has-text-centered is-size-6">
           Video Sekolah SMP 10 Palembang
        </p>
    </div>
</section></br>

<!-- Footer Section -->
<footer>
    <div class="container has-text-centered">
        <p>&copy; 2024 Semua Hak Dilindungi.</p>
    </div>
</footer>

    <script>
        // Smooth scroll for navigation
        document.querySelectorAll('.navbar-item').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({ behavior: 'smooth' });
            });
        });

        // Fade-in animation on scroll
        const sections = document.querySelectorAll('.animate-on-scroll');
        window.addEventListener('scroll', () => {
            sections.forEach(section => {
                const rect = section.getBoundingClientRect();
                if (rect.top <= window.innerHeight && rect.bottom >= 0) {
                    section.classList.add('visible');
                }
            });
        });
    </script>
</body>
</html>
