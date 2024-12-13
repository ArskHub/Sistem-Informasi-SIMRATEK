@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="/css/tentang.css" />
<!-- Start Hero -->
<div class="hero hero-about">
    <div class="hero__inner container">
        <div class="hero-description">
            <h2>TENTANG SIMRATEK</h2>
            <p>
                Aplikasi <span><b>Sistem Manajemen Ruangan dan Tempat untuk Event Kampus (SIMRATEK)</b></span> merupakan aplikasi real-time berbasis website. 
                Aplikasi ini menampilkan ketersediaan ruangan serta informasi mendetail lainnya mengenai ruangan yang sedang dan akan dipinjam dalam suatu gedung. 
                Aplikasi ini ditujukan bagi internal (dosen dan mahasiswa) dan eksternal (tamu/guest).
            </p>
        </div>
        <!-- Ilustrasi Hero -->
        <div class="hero-illustration">
            <img src="img/tentang.png" alt="Hero Illustration" class="img-fluid">
        </div>
    </div>
</div>
<!-- End Hero -->


<!-- Start Description About -->
<div class="description-about container">
    <div class="upper-content d-flex flex-wrap my-4">
        <!-- Kartu Latar Belakang -->
        <div class="card-container mx-3">
            <div class="card card-background">
                <div class="card-body">
                    <h1 class="title-section text-center">LATAR BELAKANG</h1>
                    <div class="section-description">
                        Salah satu sarana dan prasarana di lingkungan kampus adalah ruangan kelas. Namun, penggunaan ruangan kelas yang tersedia sering kali belum optimal dan umumnya hanya terbatas pada jadwal perkuliahan. Untuk meningkatkan efektivitas penjadwalan ruangan dan memperluas penggunaannya untuk berbagai kegiatan, dikembangkanlah aplikasi web bernama Sistem Manajemen Ruangan dan Tempat untuk Event Kampus <span><b>(SIMRATEK)</b></span>. Aplikasi ini memungkinkan peminjaman ruangan di lingkungan kampus, Agar dapat dimanfaatkan secara lebih efisien dan fleksibel.
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Kartu Tujuan -->
        <div class="card-container mx-3">
            <div class="card">
                <div class="card-body">
                    <h1 class="title-section text-center">TUJUAN</h1>
                    <div class="section-description">
                        Tujuan dari pembuatan Sistem Manajemen Ruangan dan Tempat untuk Event Kampus <span><b>(SIMRATEK)</b></span> ini adalah sebagai berikut:
                        <br>1. Mempermudah mahasiswa maupun dosen yang membuat event mencari ruangan atau tempat untuk event.
                        <br>2. Menyediakan sistem yang bisa digunakan dan dimanfaatkan oleh mahasiswa maupun dosen yang membuat event.
                        <br>3. Memastikan dan menyediakan aturan yang jelas untuk peminjaman ruangan atau tempat untuk event.
                        <br>4. Membuat sistem peminjaman gedung yang terstruktur dan terjadwal dengan baik.
                        <br>5. Mengefisiensi waktu dalam pencarian gedung untuk melaksanakan sebuah event.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Description About -->

    <div class="lower-content">
        <h1 class="text-center">LOKASI</h1>
        <div class="mapouter m-auto my-4 mb-5">
            <div class="gmap_canvas">
                <iframe width="600" height="500" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126171.80149798455!2d115.0331620486005!3d-8.798395100435469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd244bc39fb3da7%3A0x6cae8cb2a990cae5!2sRektorat%20Universitas%20Udayana!5e0!3m2!1sid!2sid!4v1719250715110!5m2!1sid!2sid" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>
    </div>
</div>
<!-- End Description About -->
@endsection

<style>

/* About Section */
.description-about {
    padding: 60px 0;
    
}

/* Flexbox container for About Sections */
.upper-content {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    margin-bottom: 40px;
}

/* Card Container */
.card-container {
    width: 45%;
    margin-bottom: 30px;
}

/* Card Styling */
.card {
    background-color: white; /* Latar belakang putih untuk kartu */
    border-radius:10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    overflow: hidden;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.card-body {
    padding: 25px;
    color: #333; /* Warna font gelap agar mudah dibaca */
}

.title-section {
    font-size: 2rem;
    font-weight: 700;
    text-align: center;
    color: #9B5DE5; /* Warna font judul */
    margin-bottom: 20px;
}

.section-description {
    font-size: 1.1rem;
    color: #555; /* Warna font deskripsi */
    line-height: 1.6;
}

/* Lokasi (Google Map) */
.lower-content {
    text-align: center;
    margin-top: 50px;
}

.mapouter {
    position: relative;
    text-align: center;
    height: 500px;
    width: 600px;
    margin: 0 auto;
}

.gmap_canvas {
    overflow: hidden;
    background: none !important;
    height: 500px;
    width: 100%;
}

/* Responsive Styling */
@media (max-width: 768px) {
    .upper-content {
        flex-direction: column;
        align-items: center;
    }

    .card-container {
        width: 100%;
    }

    .title-section {
        font-size: 1.6rem;
    }

    .section-description {
        font-size: 1rem;
    }

    .mapouter {
        width: 100%;
    }
}

</style>
