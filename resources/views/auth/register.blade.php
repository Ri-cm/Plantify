@extends('layout.auth')

@section('title', 'Register')

@section('content')

<style>
    body {
        background: linear-gradient(135deg, #dff5e5 0%, #c7e9d3 100%);
        font-family: "Poppins", sans-serif;
    }

    .register-container {
        max-width: 440px;
        margin: auto;
        margin-top: 80px;
        padding: 45px 40px;
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(15px);
        border-radius: 20px;
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.12);
        border: 1px solid rgba(255, 255, 255, 0.4);
        animation: fadeIn 0.8s ease forwards;
    }

    .register-logo {
        width: 80px;
        margin: auto;
        display: block;
        margin-bottom: 10px;
        opacity: 0.95;
    }

    .register-title {
        text-align: center;
        font-size: 30px;
        font-weight: 700;
        color: #1b5e20;
        margin-bottom: 8px;
    }

    .register-sub {
        text-align: center;
        color: #555;
        margin-bottom: 30px;
        font-size: 14px;
    }

    .form-control {
        padding: 12px 15px;
        border-radius: 12px;
        border: 1px solid #bcd7c7;
        transition: 0.3s ease;
    }

    .form-control:focus {
        border-color: #2e7d32;
        box-shadow: 0 0 0 3px rgba(46, 125, 50, 0.2);
    }

    .form-label {
        font-weight: 600;
        color: #2f3e2f;
    }

    .btn-plant {
        background: #2e7d32;
        color: #fff;
        padding: 12px;
        font-size: 17px;
        border-radius: 14px;
        border: none;
        transition: 0.3s ease;
        font-weight: 600;
    }

    .btn-plant:hover {
        background: #1b5e20;
        transform: translateY(-2px);
    }

    a {
        color: #2e7d32;
        text-decoration: none;
        font-weight: 500;
    }

    a:hover {
        text-decoration: underline;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @media (max-width: 576px) {
        .register-container {
            padding: 35px 28px;
        }
        .register-title {
            font-size: 27px;
        }
    }
</style>

<div class="register-container">

    <!-- ICON -->
    <img src="https://cdn-icons-png.flaticon.com/512/2906/2906775.png" class="register-logo">

    <h2 class="register-title">Buat Akun Baru</h2>
    <p class="register-sub">Mulai perjalanan Anda bersama Plantify 🌿</p>

    @if (session('error'))
        <div class="alert alert-danger text-center">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('register.process') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button class="btn btn-plant w-100">Daftar Sekarang</button>

        <div class="text-center mt-3">
            <span class="text-muted">Sudah punya akun? </span>
            <a href="{{ route('login') }}">Login</a>
        </div>
    </form>

</div>

@endsection
