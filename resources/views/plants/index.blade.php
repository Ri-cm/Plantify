@extends('layout.main')

@section('title', 'Daftar Tanaman')

@section('content')

<div class="container py-4">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">Daftar Tanaman</h2>
            <p class="text-muted">Kelola data tanaman dengan tampilan premium & modern</p>
        </div>

        <div>
            <a href="/plants/create" class="btn btn-success shadow-sm me-2">
                <i class="fas fa-plus me-2"></i> Tambah Tanaman
            </a>

            <a href="{{ route('plants.export.pdf') }}" class="btn btn-danger shadow-sm me-2">
                <i class="fas fa-file-pdf me-2"></i> Export PDF
            </a>

            <a href="{{ route('plants.export.excel') }}" class="btn btn-primary shadow-sm">
                <i class="fas fa-file-excel me-2"></i> Export Excel
            </a>
        </div>
    </div>


    {{-- SEARCH & FILTER --}}
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body">

            <form method="GET" action="/plants" class="row g-3 align-items-end">

                <div class="form-row">
    <div class="form-group half">
        <label>Nama Tanaman</label>
        <div class="input-wrapper">
            <i class="fas fa-leaf"></i>
            <input type="text" name="name">
        </div>
    </div>

    <div class="form-group half">
        <label>Kategori</label>
        <div class="input-wrapper">
            <select name="category_id" class="no-icon">
                @foreach($categories as $c)
                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>


                <div class="col-md-4">
                    <button class="btn btn-success w-100 shadow-sm">
                        <i class="fas fa-search me-2"></i> Cari
                    </button>
                </div>

            </form>

        </div>
    </div>


    {{-- TABEL DATA TANAMAN --}}
    <div class="card shadow border-0">
        <div class="card-body p-0">

            <table class="table table-hover table-striped mb-0 align-middle">
                <thead class="table-success">
                    <tr>
                        <th class="text-center">ID</th>
                        <th>Nama Tanaman</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($data as $p)
                    <tr>
                        <td class="text-center fw-semibold">{{ $p->id }}</td>
                        <td>
                            <strong>{{ $p->name }}</strong>
                        </td>
                        <td>
                            <span class="badge bg-success">{{ $p->category->name }}</span>
                        </td>
                        <td>Rp {{ number_format($p->price) }}</td>
                        <td>{{ $p->stock }}</td>
                        <td class="text-center">

                            <a href="/plants/{{ $p->id }}/edit" 
                               class="btn btn-warning btn-sm me-2">
                                <i class="fas fa-edit"></i> Edit
                            </a>

                            <a href="/plants/{{ $p->id }}/delete" 
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Hapus tanaman ini?')">
                                <i class="fas fa-trash"></i> Hapus
                            </a>

                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center py-4 text-muted">
                            <i class="fas fa-leaf fa-2x mb-2 d-block"></i>
                            Tidak ada data tanaman ditemukan.
                        </td>
                    </tr>
                    @endforelse
                </tbody>

            </table>

        </div>
    </div>


    {{-- PAGINATION --}}
    <div class="mt-3">
        {{ $data->links('pagination::bootstrap-5') }}
    </div>

</div>

@endsection
