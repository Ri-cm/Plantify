@extends('layout.main')

@section('title', 'Edit Tanaman')

@section('content')
<h2>Edit Tanaman</h2>

<form method="POST" action="/plants/{{ $plant->id }}/update">
    @csrf

    Nama Tanaman:<br>
    <input type="text" name="name" value="{{ $plant->name }}"><br><br>

    Kategori:<br>
    <select name="category_id">
        @foreach($categories as $c)
            <option value="{{ $c->id }}" @if($c->id == $plant->category_id) selected @endif>
                {{ $c->name }}
            </option>
        @endforeach
    </select>
    <br><br>

    Harga:<br>
    <input type="number" name="price" value="{{ $plant->price }}"><br><br>

    Stok:<br>
    <input type="number" name="stock" value="{{ $plant->stock }}"><br><br>

    Deskripsi:<br>
    <textarea name="description">{{ $plant->description }}</textarea><br><br>

    <button class="btn" type="submit">Update</button>
</form>

@endsection
