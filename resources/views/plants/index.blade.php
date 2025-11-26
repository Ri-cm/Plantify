@extends('layout.main')

@section('title', 'Daftar Tanaman')

@section('content')

<h2>Daftar Tanaman</h2>

<!-- Tombol Tambah + Export PDF + Export Excel -->
<a href="/plants/create" class="btn" 
   style="background:#43a047; color:white; padding:8px 14px; border-radius:5px; text-decoration:none;">
    Tambah Tanaman
</a>

<a href="{{ route('plants.export.pdf') }}" 
   class="btn" 
   style="background:#e53935; color:white; padding:8px 14px; border-radius:5px; text-decoration:none; margin-left:10px;">
    Export PDF
</a>

<a href="{{ route('plants.export.excel') }}" 
   class="btn" 
   style="background:#1e88e5; color:white; padding:8px 14px; border-radius:5px; text-decoration:none; margin-left:10px;">
    Export Excel
</a>

<br><br>

<!-- Search & Filter Form -->
<div class="card">
    <form method="GET" action="/plants">

        <label>Cari Nama:</label><br>
        <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Cari tanaman...">
        <br><br>

        <label>Filter Kategori:</label><br>
        <select name="category_id">
            <option value="">-- Semua Kategori --</option>
            @foreach($categories as $c)
                <option value="{{ $c->id }}" 
                    @if(isset($category_id) && $category_id == $c->id) selected @endif>
                    {{ $c->name }}
                </option>
            @endforeach
        </select>
        <br><br>

        <button class="btn" type="submit">Cari</button>
    </form>
</div>

<br>

<table class="table">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Kategori</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>

    @foreach($data as $p)
    <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->name }}</td>
        <td>{{ $p->category->name }}</td>
        <td>Rp {{ number_format($p->price) }}</td>
        <td>{{ $p->stock }}</td>
        <td>
            <a href="/plants/{{ $p->id }}/edit">Edit</a> |
            <a href="/plants/{{ $p->id }}/delete" onclick="return confirm('Hapus tanaman ini?')">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>

<!-- =============================== -->
<!-- PAGINATION LINK (STEP 2)        -->
<!-- =============================== -->
<br>
{{ $data->links() }}

@endsection
