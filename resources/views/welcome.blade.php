<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Website Buku Bersama" />
    <meta name="keywords" content="HTML,CSS, Javascript,laravel,PHP" />
    <meta name="author" content="Decadev" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('css/hello.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <style>
    /* Style for the header and navbar */
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 15px;
      background-color: #f8f9fa;
    }

    .logo a {
      font-size: 24px;
      font-weight: bold;
      color: #333;
      text-decoration: none;
    }

    .nav {
      display: flex;
      gap: 15px;
      list-style: none;
    }

    .nav a {
      text-decoration: none;
      color: #333;
      font-size: 16px;
      padding: 8px 12px;
      transition: background-color 0.3s ease;
    }

    .nav a:hover {
      background-color: #007bff;
      color: white;
      border-radius: 5px;
    }

    .welcome-message {
      font-size: 18px;
      color: #333;
      font-weight: 500;
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">
      <a href="index.php"><span>Buku</span><span class="me">Bersama</span></a>
    </div>

    <div class="welcome-message">
        Welcome, Guest!
        @if (Route::has('login'))
          <nav class="d-flex justify-content-end gap-2">
            @auth
              <a href="{{ url('/dashboard') }}" class="btn btn-dark">
                Dashboard
              </a>
            @else
              <a href="{{ route('login') }}" class="btn btn-primary">
                Log in
              </a>

              @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn btn-secondary">
                  Register
                </a>
              @endif
            @endauth
          </nav>
        @endif
      </div>
  </header>

  <!-- Konten Utama: Daftar Buku -->
<div class="container mt-4">
    <h1 class="mb-4 text-center">Daftar Buku</h1>
    <div class="row justify-content-center">
        @foreach ($items as $item) <!-- Looping untuk setiap item buku -->
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

                        <!-- Jika pengguna belum login, arahkan ke halaman login -->
                        <a href="{{ route('login') }}" class="btn btn-primary mt-3 w-100 d-flex align-items-center justify-content-center">
                            <i class="bi bi-cart3 me-2"></i> <!-- Ikon keranjang -->
                                Tambah ke Cart
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@include('layout.footer')

  <script>
    const subMenu = document.getElementById("subMenu");

    function toggleMenu() {
      subMenu.classList.toggle("open-menu");
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
