@extends('layout.main')

@section('title', 'Tambah Tanaman')

@section('content')

<div class="form-container">
    <h2>➕ Tambah Tanaman Baru</h2>

    <form method="POST" action="/plants/store">
        @csrf

        <div class="form-group">
            <label>Nama Tanaman</label>
            <div class="input-wrapper">
                <i class="fas fa-leaf"></i>
                <input type="text" name="name">
            </div>
        </div>

        <div class="form-group">
            <label>Kategori</label>
            <div class="input-wrapper">
                <select name="category_id" class="no-icon">
                    @foreach($categories as $c)
                        <option value="{{ $c->id }}">{{ $c->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label>Harga</label>
            <div class="input-wrapper">
                <i class="fas fa-tag"></i>
                <input type="number" name="price">
            </div>
        </div>

        <div class="form-group">
            <label>Stok</label>
            <div class="input-wrapper">
                <i class="fas fa-box"></i>
                <input type="number" name="stock">
            </div>
        </div>

        <div class="form-group">
            <label>Deskripsi</label>
            <div class="input-wrapper">
                <textarea name="description" rows="4" class="no-icon"></textarea>
            </div>
        </div>

        <button class="btn-submit" type="submit">Simpan Tanaman</button>
    </form>
</div>


@endsection
