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
    /* Basic styling for the header and dropdown */
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
              $item = $buku->pluck('kategori')->unique(); // Ambil kategori unik
          @endphp

          @foreach ($item as $kategori)
              <a href="#" onclick="toggleSubmenu('{{ $kategori }}', event)">{{ $kategori }}</a>
              <div id="subMenu_{{ $kategori }}" class="subMenu">
                  <!-- Konten sesuai kategori akan dimuat di sini -->
              </div>
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
    // Toggle dropdown visibility when clicking "Category"
    function toggleDropdown(event) {
        event.stopPropagation(); // Prevents event from propagating to window.onclick
        const dropdown = document.getElementById("categoryDropdown");
        dropdown.style.display = (dropdown.style.display === "block") ? "none" : "block";
    }

    // Toggle submenu visibility when clicking a category
    function toggleSubmenu(kategori, event) {
        event.stopPropagation(); // Prevent event from propagating to the dropdown toggle
        const subMenu = document.getElementById(`subMenu_${kategori}`);

        // Toggle the submenu visibility
        subMenu.style.display = (subMenu.style.display === 'block') ? 'none' : 'block';

        // Optionally, you can add active class for clicked category
        document.querySelectorAll('.dropdown-content a').forEach(a => a.classList.remove('active'));
        event.target.classList.add('active');
    }

    // Close dropdown if clicked outside of it
    window.onclick = function(event) {
        const dropdown = document.getElementById("categoryDropdown");
        if (!event.target.matches('.dropbtn') && !event.target.closest('.dropdown')) {
            dropdown.style.display = "none"; // Hide dropdown if clicked outside
        }
    }
  </script>

</body>
</html>
