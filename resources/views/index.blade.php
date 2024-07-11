@extends('layouts.main')

@section('container')
    <!-- Start Hero -->
    <div class="hero">
        <div class="hero__inner container">
            <div class="hero-description text-center">
                <h2>Mengefektifkan pinjaman, memudahkan Anda untuk terus berkarya dan berkreasi!</h2>
                <p>Sistem Manajemen Ruangan dan Tempat untuk Event Kampus (SIMRATEK)</p>
            </div>
        </div>
    </div>
    <!-- End Hero -->

    <!-- Start Daftar Ruangan -->
    <div class="daftar-ruangan my-5 container">
        <h3 class="title-daftar-ruangan text-center">Daftar Ruangan</h3>
        <div class="list-ruangan d-flex flex-wrap justify-content-center">
            <div class="card m-3 hover-effect-rgb" style="width: 18rem;">
                <img src="img/ruang-kelas.jpeg" style="height: 250px" class="card-img-top" alt="Ruang Kelas">
                <div class="card-body">
                    <h5 class="card-title text-center">Ruang Agrokomplek</h5>
                    <p class="card-text">Ruang agrokomplek ini memiliki kapasitas 50-100 orang dan biasanya dipakai untuk perkuliahan.</p>
                </div>
            </div>
            <div class="card m-3 hover-effect-rgb" style="width: 18rem;">
                <img src="img/lab-komputer.jpeg" style="height: 250px" class="card-img-top" alt="Ruang Lab">
                <div class="card-body">
                    <h5 class="card-title text-center">Ruang Lab FMIPA</h5>
                    <p class="card-text">Ruang lab berisi komputer yang biasanya dipakai untuk praktikum. Kapasitas ruangan ini biasanya mencapai 20-25 orang.</p>
                </div>
            </div>
            <div class="card m-3 hover-effect-rgb" style="width: 18rem;">
                <img src="img/gmbrws.jpg" style="height: 250px" class="card-img-top" alt="Ruang Dosen">
                <div class="card-body">
                    <h5 class="card-title text-center">Ruang Widya Saba</h5>
                    <p class="card-text">Ruang ini digunakan oleh universitas untuk berkegiatan.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Daftar Ruangan -->

    <!-- Start Denah -->
    <!-- <div class="denah my-4 container">
        <h2 class="title-denah text-center">Denah</h2>
        <select class="form-select denah-select d-block mx-auto" id="denah-select" style="width: 50%" aria-label="Default select example">
            <option selected>Pilih Denah</option>
            <option value="1">FPMIPA C - Lantai 1</option>
            <option value="2">FPMIPA C - Lantai 2</option>
            <option value="3">FPMIPA C - Lantai 3</option>
        </select>
        <div class="denah-images text-center my-4">
            <img src="/img/denah_lt1.png" class="denah-img d-none" id="denah-lt1" alt="Denah Lantai 1">
            <img src="/img/denah_lt2.png" class="denah-img d-none" id="denah-lt2" alt="Denah Lantai 2">
            <img src="/img/denah_lt3.png" class="denah-img d-none" id="denah-lt3" alt="Denah Lantai 3">
        </div>
    </div> -->
    <!-- End Denah -->

@endsection

<style>
    .hover-effect-rgb {
        background: linear-gradient(135deg, rgba(0, 158, 247, 0.1), rgba(0, 130, 204, 0.1), rgba(0, 100, 160, 0.1));
        transition: all 0.3s ease-in-out;
        border: none;
    }

    .hover-effect-rgb:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        background: linear-gradient(135deg, rgba(0, 158, 247, 0.2), rgba(0, 130, 204, 0.2), rgba(0, 100, 160, 0.2));
    }

    .hover-effect-rgb:hover .card-title {
        color: rgb(0, 123, 255);
        transition: color 0.3s ease-in-out;
    }

    /* .denah {
        margin-top: 40px;
    } */

    /* .denah-select {
        margin-bottom: 20px;
    }

    .denah-images img {
        max-width: 100%;
        height: auto;
    } */
</style>
