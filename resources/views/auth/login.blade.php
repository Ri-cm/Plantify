@extends('layout.auth')

@section('title', 'Login')

@section('content')

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<form action="{{ route('login.process') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control" required>
    </div>

    <button class="btn btn-primary w-100">Login</button>

    <div class="text-center mt-3">
        <a href="{{ route('register') }}">Tidak punya akun? Daftar</a>
    </div>
</form>

@endsection
