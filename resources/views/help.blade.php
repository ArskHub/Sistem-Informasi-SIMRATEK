@extends('layouts.main')
<link rel="stylesheet" href="/css/bantuan.css" />
@section('container')
    <!-- Start Hero -->
    <div class="hero hero-bantuan">
        <div class="hero__inner container">
            <div class="hero-description m-auto p-5">
                <h2>PETUNJUK PENGGUNAAN SIMRATEK</h2>
            </div>
        </div>
    </div>
    <!-- End Hero -->

<!-- Start How To Use SIMRATEX -->
<div class="how-use-simratek my-4 container">
    <h2 class="title">TAHAPAN PEMINJAMAN RUANGAN</h2>
    <div class="list-tahapan">
        <div class="custom-list-item step-1">
            <span>Untuk melakukan peminjaman, Anda diharuskan melakukan login terlebih dahulu sesuai dengan username yang telah disediakan oleh admin pada saat sosialisasi SIMRATEK.</span>
            <span class="arrow">❯</span>
        </div>
        <div class="custom-list-item step-2">
            <span>Jika ingin mengetahui ruangan yang tersedia, silakan menuju ke menu Daftar Ruangan. Secara default, tampilan akan langsung ke menu Daftar Ruangan.</span>
            <span class="arrow">❯</span>
        </div>
        <div class="custom-list-item step-3">
            <span>Jika ingin meminjam ruangan, silakan menuju ke menu Daftar Ruangan. Cek ketersediaan ruangan dan daftar peminjam pada sub-menu Daftar Ruangan dan Daftar Peminjam. Jika ruangan tersedia, silakan klik tombol Pinjam dan isi form peminjaman.</span>
            <span class="arrow">❯</span>
        </div>
        <div class="custom-list-item step-4">
            <span>Pastikan data yang Anda masukkan sudah sesuai. Jika sudah sesuai, klik Kirim.</span>
            <span class="arrow">❯</span>
        </div>
        <div class="custom-list-item step-5">
            <span>Proses pengajuan peminjaman sedang diproses, silakan tunggu pemberitahuan lebih lanjut.</span>
            <span class="arrow">❯</span>
        </div>
        <div class="custom-list-item step-6">
            <span>Untuk mengecek status peminjaman apakah diterima atau ditolak, silakan menuju sub-menu Daftar Peminjaman.</span>
            <span class="arrow">❯</span>
        </div>
    </div>
</div>
<!-- End How to use -->


@endsection
