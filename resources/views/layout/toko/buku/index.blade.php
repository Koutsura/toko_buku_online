@extends('layout.app') <!-- Menggunakan layout app -->
@section('contents')
@include('layout.carousel')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Website Buku Bersama" />
    <meta name="keywords" content="HTML,CSS, Javascript,laravel,PHP" />
    <meta name="author" content="Decadev" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>Daftar Buku</title>

    <!-- Tambahkan CDN Bootstrap di sini -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <h2 class="mb-4">Daftar Buku</h2>
        <a href="{{ route('buku.create') }}" class="btn btn-primary mb-3">Tambah Buku</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="row">
            @foreach($buku as $item)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('images/imagess/' . $item->image) }}" alt="Buku Image" class="img-thumbnail" width="150">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <p class="card-text">{{ \Str::limit($item->deskripsi, 100) }}</p>
                        <p class="text-muted">Penulis: {{ $item->name }}</p>
                        <p class="text-muted">Kategori: {{ $item->kategori }}</p>
                        <p class="text-muted">Harga: Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
                        <p class="text-muted">Tanggal Terbit: {{ $item->date->format('d-m-Y H:i') }}</p>
                        <p class="text-muted">Stok: {{ $item->stok }}</p>
                        <a href="{{ route('buku.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('buku.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus buku ini?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach


        </div>
    </div>
    @include('layout.kecil')

    <!-- Tambahkan CDN Bootstrap JS di sini -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection
