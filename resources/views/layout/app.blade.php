<!-- layout.app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Website Buku Bersama" />
    <meta name="keywords" content="HTML,CSS, Javascript,laravel,PHP" />
    <meta name="author" content="Decadev" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>Dashboard</title>

</head>
<body>
    <!-- Menyertakan header -->
    @if (auth()->user()->role == 'admin')
    @include('layout.headerA')
    @endif
    @if (auth()->user()->role == 'customer')
    @include('layout.header')
    @endif
    @if (auth()->user()->role == 'customer')
    <!-- Konten utama -->
    @yield('content')
    @endif
    @if (auth()->user()->role == 'admin')
    @yield('contents')
    @endif


    <!-- Menyertakan footer -->
    @include('layout.footer')


</body>
</html>
