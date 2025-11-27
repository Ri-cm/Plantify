@extends('layout.main')

@section('title', 'Daftar Kategori')

@section('content')

<div class="container py-4">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">Daftar Kategori Tanaman</h2>
            <p class="text-muted">Kelola kategori tanaman dengan tampilan yang lebih modern & premium</p>
        </div>

        <a href="/categories/create" class="btn btn-success shadow-sm">
            <i class="fas fa-plus me-2"></i> Tambah Kategori
        </a>
    </div>

    {{-- TABEL --}}
    <div class="card shadow border-0">
        <div class="card-body p-0">

            <table class="table table-hover table-striped mb-0 align-middle">
                <thead class="table-success">
                    <tr>
                        <th class="text-center">ID</th>
                        <th>Nama Kategori</th>
                        <th>Deskripsi</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($data as $c)
                    <tr>
                        <td class="text-center fw-semibold">{{ $c->id }}</td>
                        <td>{{ $c->name }}</td>
                        <td class="text-muted">{{ $c->description }}</td>
                        <td class="text-center">

                            <a href="/categories/{{ $c->id }}/edit" 
                               class="btn btn-warning btn-sm me-2">
                                <i class="fas fa-edit"></i> Edit
                            </a>

                            <a href="/categories/{{ $c->id }}/delete" 
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Hapus kategori ini?')">
                                <i class="fas fa-trash"></i> Hapus
                            </a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
    </div>

</div>

@endsection
