<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    * {
      text-decoration: none;
      list-style: none;
      color: black;
      margin: 0;
      padding: 0;
    }

    footer {
      background-color: rgba(0, 0, 0, 0.2);
      padding: 40px;
    }

    h2 {
      font-size: 20px;
      font-weight: 700;
      margin-bottom: 10px;
    }

    .flex {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    ul li:not(:first-child) {
      padding: 5px 0;
    }

    .short_links ul {
      margin: 0 110px;
    }

    .sub_main .dropdown .dropbtn {
      border: none;
      cursor: pointer;
      background: none;
      color: black;
    }

    .sub_main .dropdown {
      position: relative;
      display: inline-block;
    }

    .sub_main .dropdown .dropdown-content {
      display: none;
      position: absolute;
      background-color: #CCCCCC;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .sub_main .dropdown .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .sub_main .dropdown .dropdown-content a:hover {
      background-color: #f1f1f1;
    }

    .sub_main .dropdown:hover .dropdown-content {
      display: flex;
      flex-direction: column;
    }

    .cmsg {
      margin: 20px 0 0;
      text-align: center;
      font-size: 14px;
    }

    .cmsg .logo {
      font-size: 15px;
      margin-left: 5px;
    }
  </style>
</head>
<body>

<footer style="margin: 30px auto 0;">
  <div class="main">
    <div class="sub_main">
      <div class="short_links flex">
        <ul>
          <h2>Quick Links</h2>
          <li><a href="index.php">Home</a></li>
          <li>
            <div class="dropdown">
              <a class="dropbtn">Category 🔻</a>
              <div class="dropdown-content">
                <a href="index.php#Adventure">Adventure</a>
                <a href="index.php#Magical">Magic</a>
                <a href="index.php#Knowledge">Knowledge</a>
              </div>
            </div>
          </li>
          <li><a href="about-us.php">About Us</a></li>
        </ul>

        <!-- Account section (displayed if user is logged in) -->
        <ul class="account">
          <h2>Account</h2>
          <li><a href="#">Profile</a></li>
          <li><a href="cart.php">Cart</a></li>
          <li><a href="orders.php">Order History</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>

        <ul>
          <h2>Contact</h2>
          <li><a href="contact-us.php">Contact Form</a></li>
          <li>+91 5324851596</li>
          <li>contact@bookflix.com</li>
          <li>Address: Mumbai 400065</li>
        </ul>
      </div>
    </div>
    <div class="cmsg flex">
      <p>Designed By Pawan Mishra | Copyright &copy; <script>document.write(new Date().getFullYear())</script> All Rights Reserved by </p>
      <div class="logo">
        <a href="index.php">
          <span> Bookflix &</span>
          <span class="me"> Chill</span>
        </a>
      </div>
    </div>
  </div>
</footer>

</body>
</html>
