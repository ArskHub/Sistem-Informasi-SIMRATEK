@extends('layouts.main')

@section('container')
<!-- Start Hero -->
<div class="hero">
    <div class="hero__inner container">
        <div class="row align-items-center">
            <!-- Teks Hero -->
            <div class="col-md-6 text-center text-md-start">
                <h2 class="display-4 font-weight-bold">Mengefektifkan pinjaman, memudahkan Anda untuk terus berkarya dan berkreasi!</h2>
                <p class="lead">Sistem Manajemen Ruangan dan Tempat untuk Event Kampus (SIMRATEK)</p>
                <a href="#daftar-ruangan" class="btn btn-primary mt-4 shadow">Lihat Ruangan</a>
            </div>
            <!-- Ilustrasi Hero -->
            <div class="col-md-6 text-center">
                <img src="img/illustration2.png" alt="Hero Illustration" class="img-fluid" style="max-height: 400px;">
            </div>
        </div>
    </div>
</div>
<!-- End Hero -->


    <!-- Start Daftar Ruangan -->
    <div id="daftar-ruangan" class="daftar-ruangan my-5 container">
        <h3 class="title-daftar-ruangan text-center mb-5">Daftar Ruangan</h3>
        <div class="list-ruangan row justify-content-center">
            <!-- Card 1 -->
            <div class="col-md-4 col-lg-3 mb-4">
                <div class="card hover-effect-rgb h-100">
                    <img src="img/ruang-kelas.jpeg" class="card-img-top" alt="Ruang Kelas" style="height: 250px; object-fit: cover; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Ruang Agrokomplek</h5>
                        <p class="card-text">Ruang ini memiliki kapasitas 50-100 orang dan biasanya digunakan untuk perkuliahan.</p>
                        <button class="btn btn-outline-primary">Lihat Detail</button>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4 col-lg-3 mb-4">
                <div class="card hover-effect-rgb h-100">
                    <img src="img/lab-komputer.jpeg" class="card-img-top" alt="Ruang Lab" style="height: 250px; object-fit: cover; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Ruang Lab FMIPA</h5>
                        <p class="card-text">Lab dengan fasilitas komputer untuk praktikum, kapasitas hingga 20-25 orang.</p>
                        <button class="btn btn-outline-primary">Lihat Detail</button>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4 col-lg-3 mb-4">
                <div class="card hover-effect-rgb h-100">
                    <img src="img/gmbrws.jpg" class="card-img-top" alt="Ruang Widya Saba" style="height: 250px; object-fit: cover; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Ruang Widya Saba</h5>
                        <p class="card-text">Ruang ini digunakan oleh universitas untuk berbagai kegiatan resmi.</p>
                        <button class="btn btn-outline-primary">Lihat Detail</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Daftar Ruangan -->
@endsection

<!-- Additional CSS -->
<style>
    /* Hero Section */
    .hero {
        background: linear-gradient(to right, rgba(0, 123, 255, 0.9), rgba(0, 85, 204, 0.9)), url('img/hero-bg.jpg');
        background-size: cover;
        background-position: center;
        color: white;
        padding: 100px 0;
    }

    .hero__inner {
        max-width: 700px;
        margin: 0 auto;
    }

    .hero-description h2 {
        font-size: 2.8rem;
        font-weight: bold;
    }

    .hero-description p {
        font-size: 1.2rem;
        margin-top: 15px;
    }

    .hero-description .btn {
        padding: 10px 20px;
        font-size: 1.1rem;
        border-radius: 25px;
    }

     .hero {
        background: linear-gradient(to right, rgba(0, 123, 255, 0.1), rgba(0, 85, 204, 0.1));
        padding: 80px 0;
    }

    .hero__inner {
        max-width: 1200px;
        margin: 0 auto;
    }

    .hero h2 {
        font-size: 2.5rem;
        color: #333;
        font-weight: bold;
    }

    .hero p {
        font-size: 1.25rem;
        color: #555;
    }

    .hero img {
        max-width: 100%;
        height: auto;
    }

    @media (max-width: 768px) {
        .hero h2 {
            font-size: 2rem;
        }

        .hero p {
            font-size: 1rem;
        }
    }

    /* Cards Section */
    .hover-effect-rgb {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 10px;
    }

    .hover-effect-rgb:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .card-title {
        font-size: 1.25rem;
        font-weight: bold;
    }

    .btn-outline-primary {
        border-radius: 20px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .btn-outline-primary:hover {
        background-color: #007bff;
        color: white;
    }

    /* Title */
    .title-daftar-ruangan {
        font-size: 2rem;
        font-weight: 700;
        color: #007bff;
    }

    /* Responsive Layout */
    @media (max-width: 768px) {
        .hero-description h2 {
            font-size: 2.2rem;
        }

        .hero-description p {
            font-size: 1rem;
        }
    }
</style>
