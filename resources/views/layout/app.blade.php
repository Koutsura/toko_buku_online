<!-- layout.app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

</head>
<body>
    <!-- Menyertakan header -->
    @include('layout.header')

    <!-- Konten utama -->
    @yield('content')

    <!-- Menyertakan footer -->
    @include('layout.footer')


</body>
</html>
