@extends('layouts.main')

@section('container')

<div class="hero hero-about">
    <div class="hero__inner container">
      <div class="hero-description text-center">
          <h2>TENTANG SIMRATEK</h2>
          <p>
            Aplikasi <span><b>Sistem Manajemen Ruangan dan Tempat untuk Event Kampus (SIMRATEK)</b></span> merupakan aplikasi real-time berbasis website. 
            Aplikasi ini menampilkan ketersediaan ruangan serta informasi mendetail lainnya mengenai ruangan yang sedang dan akan dipinjam dalam suatu gedung. 
            Aplikasi ini ditujukan bagi internal (dosen dan mahasiswa) dan eksternal (tamu/guest).
          </p>
      </div>
    </div>
  </div>
  <!-- End Hero -->
  <!-- Start Description About -->
  <div class="description-about container">
      <div class="upper-content d-flex flex-wrap my-4">
          <div class="section section-1 mx-3" style="width: 30vw;">
              <h1 class="title-section text-center">LATAR BELAKANG</h1>
              <div class="section-description">
                Salah satu sarana dan prasarana di lingkungan kampus adalah ruangan kelas. Namun, penggunaan ruangan kelas yang tersedia sering kali belum optimal dan umumnya hanya terbatas pada jadwal perkuliahan. Untuk meningkatkan efektivitas penjadwalan ruangan dan memperluas penggunaannya untuk berbagai kegiatan, dikembangkanlah aplikasi web bernama Sistem Manajemen Ruangan dan Tempat untuk Event Kampus (SIMRATEK). Aplikasi ini memungkinkan peminjaman ruangan di lingkungan kampus, khususnya di gedung FPMIPA, agar dapat dimanfaatkan secara lebih efisien dan fleksibel.
              </div>
          </div>
          <div class="section mx-3" style="width: 40vw;">
              <h1 class="title-section text-center">TUJUAN</h1>
              <div class="section-description">
                Tujuan dari pembuatan Sistem Manajemen Ruangan dan Tempat untuk Event Kampus (SIMRATEK) ini adalah sebagai berikut:
                <br>1. Mempermudah mahasiswa maupun dosen yang membuat event mencari ruangan atau tempat untuk event.
                <br>2. Menyediakan sistem yang bisa digunakan dan dimanfaatkan oleh mahasiswa maupun dosen yang membuat event.
                <br>3. Memastikan dan menyediakan aturan yang jelas untuk peminjaman ruangan atau tempat untuk event.
                <br>4. Membuat sistem peminjaman gedung yang terstruktur dan terjadwal dengan baik.
                <br>5. Mengefisiensi waktu dalam pencarian gedung untuk melaksanakan sebuah event.
              </div>
          </div>
      </div>
      <div class="lower-content">
          <h1 class="text-center">LOKASI</h1>
          <div class="mapouter m-auto my-4 mb-5">
            <div class="gmap_canvas">
              <iframe width="600" height="500" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126171.80149798455!2d115.0331620486005!3d-8.798395100435469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd244bc39fb3da7%3A0x6cae8cb2a990cae5!2sRektorat%20Universitas%20Udayana!5e0!3m2!1sid!2sid!4v1719250715110!5m2!1sid!2sid" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
              <a href="https://123movies-to.org"></a><br>
              <style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style>
              <a href="https://www.embedgooglemap.net">google map website</a>
              <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style>
            </div>
          </div>
      </div>
  </div>
  <!-- End Description About -->
  <!-- Start Our Team -->
  <div class="bg-light">
    <h1 class="text-center p-4">TIM KAMI</h1>
    <div class="row px-5 pb-5">
      <div class="col-sm">
        <div class="card">
          <div class="card-body">
            <img class="card-img-top rounded-circle" src="img/jek.jpg" alt="Ardi">
            <h5 class="text-center mt-2">Putu Ardi Sudarmika   </h5>
            <p class="text-center">(2208561028)</p>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card">
          <div class="card-body">
            <img class="card-img-top rounded-circle" src="img/rahma.jpeg" alt="Wipra">
            <h5 class="text-center mt-2">N.M. Wipra Ranum Ratnayu</h5>
            <p class="text-center">(2208561042)</p>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card">
          <div class="card-body">
            <img class="card-img-top rounded-circle" src="img/azar.jpg" alt="Mahendra">
            <h5 class="text-center mt-2">I.N. Adi Mahendra Putra</h5>
            <p class="text-center">(2208561054)</p>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card">
          <div class="card-body">
            <img class="card-img-top rounded-circle" src="img/azar.jpg" alt="Dominggo">
            <h5 class="text-center mt-2">Dominggo Pratama Sidauruk</h5>
            <p class="text-center">(2208561092)</p>
          </div>
        </div>
      </div>
      
      <div class="col-sm">
        <div class="card">
          <div class="card-body">
            <img class="card-img-top rounded-circle" src="img/sekar.jpg" alt="Amsal">
            <h5 class="text-center mt-2">Amsal Hamonangan Butarbutar</h5>
            <p class="text-center">(2208561134)</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Our Team -->
    
@endsection