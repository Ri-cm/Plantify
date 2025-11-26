@extends('layout.main')

@section('title', 'Tambah Kategori')

@section('content')
<h2>Tambah Kategori</h2>

<form method="POST" action="/categories/store">
    @csrf

    Nama:<br>
    <input type="text" name="name"><br><br>

    Deskripsi:<br>
    <textarea name="description"></textarea><br><br>

    <button class="btn" type="submit">Simpan</button>
</form>

@endsection
