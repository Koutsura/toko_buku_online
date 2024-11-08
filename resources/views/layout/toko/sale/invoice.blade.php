<!-- resources/views/layout/toko/buku/invoice.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Pembelian Buku</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Struk Pembelian Buku</h2>
        <div class="card mt-4">
            <div class="card-body">
                <!-- Informasi Pengguna -->
                <p><strong>Nama Pengguna:</strong> {{ $sale->user->name }}</p>
                <p><strong>Email:</strong> {{ $sale->user->email }}</p>

                <!-- Informasi Buku -->
                <p><strong>Judul Buku:</strong> {{ $sale->book->title }}</p>
                <p><strong>Harga Satuan:</strong> Rp{{ number_format($sale->book->harga, 0, ',', '.') }}</p>

                <!-- Detail Transaksi -->
                <p><strong>Jumlah:</strong> {{ $sale->quantity }}</p>
                <p><strong>Total Harga:</strong> Rp{{ number_format($sale->total_price, 0, ',', '.') }}</p>

            </div>
        </div>

        <!-- Tombol untuk Cetak atau Kembali -->
        <div class="text-center mt-4">
            <button onclick="window.print()" class="btn btn-primary">Cetak Struk</button>
            <a href="{{ route('dashboard') }}" class="btn btn-secondary">Kembali ke dashboard</a>
        </div>
    </div>
</body>
</html>
