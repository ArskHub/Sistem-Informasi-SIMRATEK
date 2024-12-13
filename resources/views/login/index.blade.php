@extends('layouts.main')

@section('container')
<!-- Start Hero -->
<div class="hero hero-login">
    @if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="ineer  d-flex justify-content-between align-items-center">
        <!-- Left Side -->
        <div class="left-login text-center">
            <img src="img/forum.png" alt="logo" class="logo-img">
            <h4 class="mt-3">Sistem Manajemen Ruangan dan Tempat untuk Event Kampus</h4>
        </div>
        <!-- Right Side -->
        <div class="right-login">
            <div class="form">
                <h3 class="title-form text-center">Login</h3>
                <form action="/login" method="post" class="form-input">
                    @csrf
                    <input type="email" placeholder="Email" required value="{{ old('email') }}" class="input-form @error('email') is-invalid @enderror" name="email" id="email" />
                    @error('email')
                    <div class="invalid-feedback" style="display: block">
                        {{ $message }}
                    </div>
                    @enderror
                    <input type="password" placeholder="Password" required class="input-form @error('password') is-invalid @enderror" name="password" id="password" />
                    @error('password')
                    <div class="invalid-feedback" style="display: block">
                        {{ $message }}
                    </div>
                    @enderror
                    <button type="submit" class="button-submit mt-3">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
<br/>
<br/>
<br/>
<!-- End Hero -->
@endsection



<style>
/* Hero Section */
.hero-login {
    background: white;
    color: white;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px 0;
}

/* Hero Content */
.ineer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    width: 100%;
    flex-wrap: wrap; /* Membuat elemen bisa berpindah baris */
    gap: 20px;
}

/* Left Side (Logo & Text) */
.left-login {
    text-align: center;
    flex: 1;
    max-width: 500px;
    padding: 10px;
}

.left-login img {
    max-width: 150px;
    margin-bottom: 10px;
}

.left-login h4 {
    font-size: 1.3rem;
    line-height: 1.5;
    font-weight: bold;
    color: #007bff;
    margin-top: 10px;
}

/* Right Side (Form) */
.right-login {
    flex: 1;
    max-width: 400px;
    background-color: white;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

/* Form Title */
.title-form {
    font-size: 1.5rem;
    font-weight: bold;
    color: #9B5DE5;
    margin-bottom: 20px;
}

/* Form Input Fields */
.form-input {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.input-form {
    width: 100%;
    padding: 12px 15px;
    font-size: 1rem;
    border: 1px solid #007bff;
    border-radius: 8px;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

.input-form:focus {
    border-color: #9B5DE5;
    box-shadow: 0 0 5px rgba(155, 93, 229, 0.5);
}

.input-form.is-invalid {
    border-color: #FF4444;
}

.invalid-feedback {
    font-size: 0.9rem;
    color: #FF4444;
}

/* Submit Button */
.button-submit {
    background: linear-gradient(135deg, #4A90E2, #9B5DE5);
    color: white;
    font-size: 1rem;
    font-weight: bold;
    padding: 12px 20px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.button-submit:hover {
    background: linear-gradient(135deg, #9B5DE5, #4A90E2);
    transform: translateY(-2px);
}

/* Alert Styling */
.alert {
    max-width: 400px;
    margin: 20px auto;
    font-size: 1rem;
    border-radius: 10px;
    text-align: center;
}

.alert-danger {
    background-color: #FF4444;
    color: white;
    border: none;
}

/* Responsive Design */
@media (max-width: 768px) {
    .hero__inner {
        flex-direction: column; /* Elemen bergeser menjadi vertikal */
        text-align: center;
    }

    .left-login {
        max-width: 100%; /* Mengambil seluruh lebar */
        margin-bottom: 20px; /* Tambahkan jarak bawah */
    }

    .right-login {
        max-width: 100%; /* Mengambil seluruh lebar */
        padding: 20px; /* Kurangi padding agar tidak terlalu besar */
        margin: 0 auto;
    }

    .left-login img {
        max-width: 100px; /* Perkecil ukuran logo */
    }

    .left-login h4 {
        font-size: 1.1rem; /* Kurangi ukuran font */
    }

    .form-input {
        gap: 15px; /* Kurangi jarak antar input */
    }

    .button-submit {
        font-size: 0.9rem; /* Kurangi ukuran font pada tombol */
    }
}

@media (max-width: 480px) {
    .left-login img {
        max-width: 80px; /* Perkecil logo lebih jauh di layar kecil */
    }

    .left-login h4 {
        font-size: 1rem; /* Ukuran font lebih kecil */
    }

    .button-submit {
        padding: 10px 15px; /* Kurangi padding tombol */
    }

    .right-login {
        padding: 15px; /* Kurangi padding untuk layar kecil */
    }
}

</style>


