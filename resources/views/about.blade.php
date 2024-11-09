@extends('layout.app')
@section('content')
<head>
<meta charset="UTF-8" />
    <meta name="description" content="Website Buku Bersama" />
    <meta name="keywords" content="HTML,CSS, Javascript,laravel,PHP" />
    <meta name="author" content="Decadev" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
<style>
    .about-us {
        margin-top: 40px;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .about-us h2, .contact-us h2 {
        color: #007bff;
        margin-bottom: 20px;
    }

</style>
</head>

<!-- About Us Section -->
<div class="container about-us">
    <h2>About Us</h2>
    <img src="{{ asset('images/DecaDev.png') }}" alt="Buku Image" class="img-thumbnail mx-auto d-block" width="150">
    <p>
        PM : Della Anissa Putri Widodo
    </p>
    <p>
        UI/UX : Ridhaka Gina Amalia, Gilang Nur Hidayat
    </p>
    <p>
        Front End : Achmad Zainun Qurthubi, Desta Rizky Andhika
    </p>
    <p>
        Back End : M. Denny Tri Lisandi, faqih Rofiqi
    </p>
    <p>
        Data Science : Calvin Alexander, M. Andrian Bhakti Maulana
    </p>
    <p>
        QA : Audry Maharani
    </p>
    <p>
        DecaDev
    </p>
    <p>
        Filosofi: "Deca" berarti sepuluh, mencerminkan jumlah anggota tim. Nama ini juga menekankan bahwa setiap orang dalam tim adalah developer handal yang berkontribusi penuh untuk mencapai kesuksesan bersama.
    </p>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection


