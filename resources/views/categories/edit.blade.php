@extends('layout.main')

@section('title', 'Edit Kategori')

@section('content')
<h2>Edit Kategori</h2>

<form method="POST" action="/categories/{{ $category->id }}/update">
    @csrf

    Nama:<br>
    <input type="text" name="name" value="{{ $category->name }}"><br><br>

    Deskripsi:<br>
    <textarea name="description">{{ $category->description }}</textarea><br><br>

    <button class="btn" type="submit">Update</button>
</form>

@endsection
