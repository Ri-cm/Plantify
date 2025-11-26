@extends('layout.main')

@section('title', 'Tambah Tanaman')

@section('content')
<h2>Tambah Tanaman</h2>

<form method="POST" action="/plants/store">
    @csrf

    Nama Tanaman:<br>
    <input type="text" name="name"><br><br>

    Kategori:<br>
    <select name="category_id">
        @foreach($categories as $c)
            <option value="{{ $c->id }}">{{ $c->name }}</option>
        @endforeach
    </select>
    <br><br>

    Harga:<br>
    <input type="number" name="price"><br><br>

    Stok:<br>
    <input type="number" name="stock"><br><br>

    Deskripsi:<br>
    <textarea name="description"></textarea><br><br>

    <button class="btn" type="submit">Simpan</button>
</form>
@endsection
