@extends('layout.app') <!-- Menggunakan layout app -->

@section('content')
@include('layout.carousel')
    <!-- Menyertakan Bootstrap CSS langsung di sini -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!-- Konten Utama: Daftar Buku -->
    <div class="container mt-4">
        <h1 class="mb-4 text-center">Daftar Buku</h1>
        <div class="row justify-content-center">

            @php
                $currentCategory = '';
            @endphp

            @foreach($buku as $item)
                <!-- Cek jika kategori berubah, tampilkan judul kategori baru -->
                @if($item->kategori != $currentCategory)
                    <div class="col-12">
                        <h3 class="mt-4">{{ $item->kategori }}</h3>
                    </div>
                    @php
                        $currentCategory = $item->kategori;
                    @endphp
                @endif

                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <!-- Gambar Buku -->
                        <img src="{{ asset('images/imagess/' . $item->image) }}" alt="Buku Image" class="img-thumbnail mx-auto d-block" width="150">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text">{{ \Str::limit($item->deskripsi, 100) }}</p>
                            <p class="text-muted">Penulis: {{ $item->name }}</p>
                            <p class="text-muted">Kategori: {{ $item->kategori }}</p>
                            <p class="text-muted">Harga: Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
                            <p class="text-muted">Stok: {{ $item->stok }}</p>

                            <!-- Tombol Cart -->
                            <a href="{{ route('sale.create', ['id' => $item->id]) }}" class="btn btn-primary mt-3 w-100 d-flex align-items-center justify-content-center">
                                <i class="bi bi-cart3 me-2"></i> <!-- Ikon keranjang -->
                                Tambah ke Cart
                            </a>
                        </div>
                    </div>
                </div>


            @endforeach
        </div>
    </div>
@include('layout.kecil')


    <!-- Menyertakan Bootstrap JS langsung di sini -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
