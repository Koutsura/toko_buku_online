<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Website Buku Bersama" />
    <meta name="keywords" content="HTML,CSS, Javascript,laravel,PHP" />
    <meta name="author" content="Decadev" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>Header Admin</title>
    <link rel="stylesheet" href="{{ asset('css/hello.css') }}">
  <style>
    /* Style for the header and navbar */
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 15px; /* Reduced padding */
      background-color: #f8f9fa;
    }

    .logo a {
      font-size: 24px; /* Smaller font size */
      font-weight: bold;
      color: #333;
      text-decoration: none;
    }

    .nav {
      display: flex;
      gap: 15px; /* Reduced gap between items */
      list-style: none;
    }

    .nav a {
      text-decoration: none;
      color: #333;
      font-size: 16px; /* Smaller font size */
      padding: 8px 12px; /* Smaller padding */
      transition: background-color 0.3s ease;
    }

    .nav a:hover {
      background-color: #007bff;
      color: white;
      border-radius: 5px;
    }

    .dropdown {
      position: relative;
    }

    .dropbtn {
      background-color: #fff;
      border: 1px solid #ccc;
      padding: 8px 16px; /* Smaller padding */
      font-size: 16px; /* Smaller font size */
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

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown-content a {
      padding: 10px 14px; /* Smaller padding */
      text-decoration: none;
      display: block;
      color: #333;
    }

    .dropdown-content a:hover {
      background-color: #ddd;
    }

    .logout-container {
      display: flex;
      justify-content: flex-end;
      align-items: center;
    }

    .container h2 {
      font-size: 18px; /* Smaller font size */
      font-weight: 500;
      color: #333;
    }

    .btn-danger {
      padding: 8px 16px; /* Smaller padding */
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
      <a href="{{ route('layout.toko.buku.index') }}">Home</a>
      <a href="{{ route('hakakses.index') }}">Hakakses</a>
      <a href="{{ route('sale.index') }}">Orders</a>
    </nav>

    <!-- Logout button aligned to the right -->
    <div class="logout-container">
      <div class="container mt-5">
        <h2>Welcome, {{ Auth::user()->name }}!</h2>

        <!-- Logout Form -->
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="btn btn-danger">Logout</button>
        </form>
      </div>
    </div>
  </header>

  <script>
    const subMenu = document.getElementById("subMenu");

    function toggleMenu() {
      subMenu.classList.toggle("open-menu");
    }
  </script>
</body>
</html>
