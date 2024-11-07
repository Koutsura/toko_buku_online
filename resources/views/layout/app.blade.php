<!-- layout.app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Link ke CSS global (tidak menggunakan Bootstrap disini) -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Tempat untuk style tambahan dari view -->
    @stack('styles')
</head>
<body>
    <!-- Menyertakan header -->
    @include('layout.header')

    <!-- Konten utama -->
    @yield('content')

    <!-- Menyertakan footer -->
    @include('layout.footer')

    <!-- Tempat untuk script tambahan dari view -->
    @stack('scripts')
</body>
</html>
