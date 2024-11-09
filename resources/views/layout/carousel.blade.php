<html>
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
   body {
            background-color: #f8f9fa;
        }
        .carousel-item {
            border-radius: 15px;
            overflow: hidden;
        }
        .promo-card {
            border-radius: 15px;
            overflow: hidden;
            color: white;
            padding: 20px;
            position: relative;
            margin-bottom: 20px;
        }
        .promo-card img {
            width: 100%;
            border-radius: 15px;
        }
        .small-card img {
            width: 100%;
            height: auto;
            border-radius: 15px;
        }
        .small-card {
            max-width: 300px;
            margin: 0 auto;
        }
  </style>
 </head>
 <body>
  <div class="container mt-5">
   <div class="row">
    <div class="col-md-6">
     <div class="carousel slide" data-bs-ride="carousel" id="promoCarousel">
      <div class="carousel-inner">
       <div class="carousel-item active">
        <div class="promo-card">
         <img alt="Promo image showing books and reading kit" class="img-fluid" src="https://assets.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2022/10/29/565165154.png"/>
        </div>
       </div>
       <div class="carousel-item">
        <div class="promo-card">
         <img alt="Promo image showing Frieren Vol. 10 book and poster" class="img-fluid" src="https://bacanovelcabaca.id/content/images/2024/05/2983571224.webp"/>
        </div>
       </div>
       <div class="carousel-item">
        <div class="promo-card">
         <img alt="Promo image showing Eighty Six Ep. 3 book and bonus" class="img-fluid" src="https://jbr.id/wp-content/uploads/Novel-Suluh-Rindu-750x500.jpg"/>
        </div>
       </div>
      </div>
      <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#promoCarousel" type="button">
       <span aria-hidden="true" class="carousel-control-prev-icon">
       </span>
       <span class="visually-hidden">
        Previous
       </span>
      </button>
      <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#promoCarousel" type="button">
       <span aria-hidden="true" class="carousel-control-next-icon">
       </span>
       <span class="visually-hidden">
        Next
       </span>
      </button>
     </div>
    </div>
    <div class="col-md-6 d-flex flex-column align-items-center">
     <div class="promo-card small-card">
      <img alt="Promo image showing Frieren Vol. 10 book and poster" class="img-fluid" src="https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p2/100/2024/10/10/ft-novel-2319122415.jpg"/>
     </div>
     <div class="promo-card small-card">
      <img alt="Promo image showing Eighty Six Ep. 3 book and bonus" class="img-fluid" src="https://asset.kompas.com/crops/bppDYQmgyj7WyZhkOpSJfo4t4AE=/0x0:0x0/750x500/data/photo/buku/6674f09f4f739.jpg"/>
     </div>
    </div>
   </div>
  </div>
  <script crossorigin="anonymous" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+eIksQ1Kz5i5qDye5Y1p6LJ6w5n6b" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
  </script>
 </body>
</html>
