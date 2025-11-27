@extends('layout.auth')

@section('title', 'Login')

@section('content')

<style>
    body {
        background: linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 100%);
        font-family: "Poppins", sans-serif;
    }

    .login-container {
        max-width: 420px;
        margin: auto;
        padding: 40px 35px;
        background: rgba(255, 255, 255, 0.75);
        backdrop-filter: blur(12px);
        border-radius: 18px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        margin-top: 70px;
        border: 1px solid rgba(255,255,255,0.4);
        animation: fadeInUp 0.8s ease forwards;
    }

    .login-title {
        text-align: center;
        font-size: 32px;
        font-weight: 700;
        color: #1b5e20;
        margin-bottom: 5px;
    }

    .login-sub {
        text-align: center;
        color: #4b4b4b;
        margin-bottom: 25px;
    }

    .btn-plant {
        background: #2e7d32;
        color: white;
        padding: 12px;
        font-size: 17px;
        border-radius: 12px;
        transition: 0.3s ease;
        border: none;
    }

    .btn-plant:hover {
        background: #1b5e20;
        transform: translateY(-3px);
    }

    .plant-icon {
        width: 90px;
        display: block;
        margin: auto;
        margin-bottom: 15px;
        opacity: 0.9;
    }

    a {
        color: #2e7d32;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    /* Fade-in Animation */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* RESPONSIVE */
    @media (max-width: 576px) {
        .login-container {
            padding: 30px 25px;
        }

        .login-title {
            font-size: 28px;
        }
    }


</style>

<div class="login-container">

    <!-- ICON TANAMAN -->
    <img src="https://cdn-icons-png.flaticon.com/512/2906/2906775.png"
         class="plant-icon">

    <h2 class="login-title">Selamat Datang</h2>
    <p class="login-sub">Kelola tanaman Anda dengan cara modern 🌿</p>

    @if (session('error'))
        <div class="alert alert-danger text-center">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('login.process') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label fw-semibold">Email</label>
            <input type="email" name="email" class="form-control form-control-lg" required>
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Password</label>
            <input type="password" name="password" class="form-control form-control-lg" required>
        </div>

        <button class="btn btn-plant w-100">Login</button>

        <div class="text-center mt-3">
            <a href="{{ route('register') }}">Belum punya akun? Daftar</a>
        </div>
    </form>
</div>

@endsection
