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
    <div class="hero__inner container d-flex flex-wrap justify-content-center">
        <div class="left-login text-center text-white">
            <img src="img/logotext.png" alt="logo">
            <h4 class="mt-3 mb-4">Sistem Manajemen Ruangan dan Tempat untuk Event Kampus</h4>
        </div>
        <div class="right-login">
            <div class="form">
                <h3 class="title-form text-center">Login</h3>
                <form action="/login" method="post" class="form-input">
                    @csrf
                    <input type="email" placeholder="Email" autofocus required value="{{ old('email') }}" class="input-form @error('email') is-invalid @enderror" name="email" id="email" />
                    @error('email')
                    <div class="invalid-feedback" style="display: block">
                        {{ $message }}
                    </div>
                    @enderror
                    <input type="password" placeholder="Password" autofocus required value="{{ old('password') }}" class="input-form @error('password') is-invalid @enderror" name="password" id="password" />
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
<!-- End Hero -->
@endsection

