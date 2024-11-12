<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Website Buku Bersama" />
    <meta name="keywords" content="HTML,CSS, Javascript,laravel,PHP" />
    <meta name="author" content="Decadev" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>Header</title>
    <link rel="stylesheet" href="{{ asset('css/hello.css') }}">
    <style>
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

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropbtn {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 8px 16px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            min-width: 160px;
            z-index: 1;
        }

        .dropdown-content a {
            padding: 10px 14px;
            text-decoration: none;
            display: block;
            color: #333;
        }

        .subMenu {
            display: none;
            padding-left: 20px;
            background-color: #f1f1f1;
            margin-top: 5px;
        }

        .active {
            font-weight: bold;
            color: #007bff;
        }

        .logout-container {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .container h2 {
            font-size: 18px;
            font-weight: 500;
            color: #333;
        }

        .btn-danger {
            padding: 8px 16px;
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
<header>
    <div class="logo">
        <a href="index.php"><span>Buku</span><span class="me">Bersama</span></a>
    </div>
    <nav class="nav">
        <a href="{{ route('dashboard') }}">Home</a>
        <!-- Category Dropdown -->
        <div class="dropdown">
            <button class="dropbtn" onclick="toggleDropdown(event)">Category 🔻</button>
            <div class="dropdown-content" id="categoryDropdown">
                @php
                    $categories = $buku->pluck('kategori')->unique();
                @endphp

                <a href="#" id="showAllCategories" class="category-link" data-kategori="all">All Categories</a>

                @foreach ($categories as $kategori)
                    @php
                        $safeKategori = Str::slug($kategori, '_');
                    @endphp
                    <a href="#" class="category-link" data-kategori="{{ $safeKategori }}">{{ $kategori }}</a>
                @endforeach
            </div>

        </div>

        <a href="{{ route('about') }}">About Us</a>
    </nav>
    <!-- Logout Button -->
    <div class="logout-container">
        <div class="container mt-5">
            <h2>Welcome, {{ Auth::user()->name }}!</h2>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>
    </div>
</header>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Event listener untuk kategori di dropdown
        document.querySelectorAll(".category-link").forEach(link => {
            link.addEventListener("click", function (event) {
                event.preventDefault(); // Mencegah reload halaman
                const selectedCategory = this.dataset.kategori; // Ambil kategori dari atribut data

                // Filter buku berdasarkan kategori
                filterBooksByCategory(selectedCategory);
            });
        });

        // Fungsi untuk memfilter buku berdasarkan kategori
        function filterBooksByCategory(kategori) {
            const bookCards = document.querySelectorAll(".book-card"); // Ambil semua kartu buku
            const categoryTitles = document.querySelectorAll(".category-title"); // Ambil semua judul kategori

            let hasVisibleBooks = false; // Cek apakah ada buku yang terlihat dalam kategori

            // Loop untuk setiap judul kategori
            categoryTitles.forEach(title => {
                const category = title.dataset.kategori;

                if (kategori === "all" || category === kategori) {
                    title.style.display = "block"; // Tampilkan judul kategori
                } else {
                    title.style.display = "none"; // Sembunyikan judul kategori
                }
            });

            // Loop untuk setiap kartu buku
            bookCards.forEach(card => {
                const bookCategory = card.dataset.kategori;

                if (kategori === "all" || bookCategory === kategori) {
                    card.style.display = "block"; // Tampilkan buku yang sesuai
                    hasVisibleBooks = true;
                } else {
                    card.style.display = "none"; // Sembunyikan buku yang tidak sesuai
                }
            });

            // Jika tidak ada buku dalam kategori, tambahkan notifikasi
            if (!hasVisibleBooks && kategori !== "all") {
                alert("Tidak ada buku dalam kategori ini.");
            }
        }

        // Opsi untuk menampilkan semua kategori
        document.getElementById("showAllCategories").addEventListener("click", function (event) {
            event.preventDefault();
            filterBooksByCategory("all"); // Tampilkan semua buku
        });
    });


</script>

</body>
</html>
