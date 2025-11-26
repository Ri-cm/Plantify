@extends('layout.main')

@section('title', 'Daftar Kategori')

@section('content')
<h2>Daftar Kategori Tanaman</h2>

<a href="/categories/create" class="btn">Tambah Kategori</a>

<table class="table">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Deskripsi</th>
        <th>Aksi</th>
    </tr>

    @foreach($data as $c)
    <tr>
        <td>{{ $c->id }}</td>
        <td>{{ $c->name }}</td>
        <td>{{ $c->description }}</td>
        <td>
            <a href="/categories/{{ $c->id }}/edit">Edit</a> |
            <a href="/categories/{{ $c->id }}/delete" onclick="return confirm('Hapus kategori ini?')">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
