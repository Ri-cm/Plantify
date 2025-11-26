@extends('layout.auth')

@section('title', 'Register')

@section('content')

<form action="{{ route('register.process') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control" required>
    </div>

    <button class="btn btn-success w-100">Register</button>

    <div class="text-center mt-3">
        <a href="{{ route('login') }}">Sudah punya akun? Login</a>
    </div>
</form>

@endsection
