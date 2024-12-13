<div class=" col-md-2 col-6 p-0 sidebar">
    <ul class="nav flex-column ">
      @if (auth()->user()->role_id <= 1)
        <li class="nav-item {{Request::is('dashboard/admin') ? 'sidebar-active' : ''}}">
          <a class="nav-link" href="/dashboard/admin">Daftar Admin</a>
        </li>
        <li class="nav-item {{Request::is('dashboard/users') ? 'sidebar-active' : ''}}">
          <a class="nav-link " href="/dashboard/users">Daftar User</a>
        </li>
        <li class="nav-item {{Request::is('dashboard/temporaryRents') ? 'sidebar-active'  : ''}}">
          <a class="nav-link " href="/dashboard/temporaryRents">Daftar Peminjaman Sementara</a>
        </li>
      @endif
      @if (auth()->user()->role_id <= 3)
        <li class="nav-item {{Request::is('dashboard/rents') ? 'sidebar-active' : ''}}">
          <a class="nav-link " href="/dashboard/rents">Daftar Peminjaman</a>
        </li>
      @endif
      <li class="nav-item {{Request::is('dashboard/rooms') ? 'sidebar-active' : ''}}">
        <a class="nav-link" href="/dashboard/rooms">Daftar Ruangan</a>
      </li>
    </ul>
</div>

<style>
/* Sidebar */
.sidebar {
    padding-top: 20px; /* Tambahkan padding atas untuk menggeser konten sidebar ke bawah */
    background: linear-gradient(135deg, #4A90E2, #9B5DE5); /* Gradasi warna biru-ungu */
    color: white;
    min-height: 100vh; /* Pastikan sidebar memiliki tinggi penuh */
    padding-left: 10px;
    padding-right: 10px;
    border-right: 2px solid #007bff; /* Border kanan */
}

/* List Items */
.sidebar ul {
    margin-top: 100px; /* Tambahkan margin untuk menggeser daftar menu ke bawah */
    padding: 0;
    list-style: none; /* Hilangkan bullet point */
}

.sidebar .nav-item {
    margin-bottom: 15px; /* Jarak antar menu */
}

.sidebar .nav-link {
    display: block;
    padding: 10px 15px;
    font-size: 1rem;
    color: white;
    text-decoration: none; /* Hilangkan garis bawah */
    border-radius: 8px; /* Sudut melengkung */
    transition: background 0.3s ease, color 0.3s ease; /* Efek hover */
}

/* Hover Effects */
.sidebar .nav-link:hover {
    background: rgba(255, 255, 255, 0.2); /* Background transparan saat hover */
    color: #FFD700; /* Warna kuning saat hover */
}

/* Active Link */
.sidebar-active {
    background: #F1C40F; /* Warna kuning untuk menu aktif */
    color: #333; /* Teks warna gelap untuk kontras */
    font-weight: bold;
}


/* Responsive Design */
@media (max-width: 768px) {
    .sidebar {
        min-height: auto; /* Tinggi sidebar menyesuaikan konten */
        padding: 15px 5px;
    }

    .sidebar .nav-link {
        font-size: 0.9rem; /* Ukuran font lebih kecil untuk layar kecil */
    }
}

  </style>