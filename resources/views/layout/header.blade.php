<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="{{ asset('css/hello.css') }}">
  <style>
    /* Style for the dropdown menu */
    .sub-menu-wrap {
      position: absolute;
      top: 10%;
      right: 10%;
      width: 320px;
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.5s ease;
    }
    .sub-menu-wrap.open-menu {
      max-height: 400px;
    }
    .sub-menu {
      background: #fff;
      padding: 20px;
      margin: 10px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    .user-info {
      display: flex;
      align-items: center;
    }
    .user-info h3 {
      font-weight: 500;
      margin: 0;
    }
    .user-info img {
      width: 60px;
      border-radius: 50%;
      margin-right: 15px;
    }
    .sub-menu hr {
      border: none;
      height: 1px;
      width: 100%;
      background: #ccc;
      margin: 15px 0;
    }
    .sub-menu-link {
      display: flex;
      align-items: center;
      text-decoration: none;
      color: #525252;
      margin: 12px 0;
      transition: font-weight 0.3s ease;
    }
    .sub-menu-link p {
      flex-grow: 1;
      margin: 0;
    }
    .sub-menu-link img {
      width: 40px;
      background: #e5e5e5;
      border-radius: 50%;
      padding: 8px;
      margin-right: 15px;
    }
    .sub-menu-link span {
      font-size: 22px;
      transition: transform 0.3s ease;
    }
    .sub-menu-link:hover span {
      transform: translateX(5px);
    }
    .sub-menu-link:hover p {
      font-weight: 600;
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">
      <a href="index.php"><span>Read</span><span class="me">Me</span></a>
    </div>
    <nav class="nav">
      <a href="index.php">Home</a>
      <div class="dropdown">
        <button class="dropbtn">Category 🔻</button>
        <div class="dropdown-content">
          <a href="#">IT</a>
          <a href="#">sejarah</a>
          <a href="#">agama</a>
        </div>
      </div>
      <a href="contact-us.php">Contact Us</a>
      <a href="cart.php">Cart</a>
      <a href="orders.php">Orders</a>
    </nav>
    <div class="container mt-5">
        <h2>Welcome, {{ Auth::user()->name }}!</h2>

        <!-- Logout Form -->
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="btn btn-danger">Logout</button>
        </form>
      </div>

  </header>

  <!-- Sub-menu structure -->
  <div class="sub-menu-wrap" id="subMenu">
    <div class="sub-menu">
      <div class="user-info">
        <img src="images/user.png" alt="User Image">
        <h2>James Aldrino</h2>
      </div>
      <hr>
      <a href="#" class="sub-menu-link">
        <p>Edit Profile</p>
        <span>&gt;</span>
      </a>
      <a href="#" class="sub-menu-link">
        <p>Cart</p>
        <span>&gt;</span>
      </a>
      <a href="#" class="sub-menu-link">
        <p>Order History</p>
        <span>&gt;</span>
      </a>
      <a href="#" class="sub-menu-link">
        <p>Logout</p>
        <span>&gt;</span>
      </a>
    </div>
  </div>

  <script>
    const subMenu = document.getElementById("subMenu");

    function toggleMenu() {
      subMenu.classList.toggle("open-menu");
    }
  </script>
</body>
</html>
