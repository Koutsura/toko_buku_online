<!-- resources/views/layout/toko/buku/invoice.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Website Buku Bersama" />
    <meta name="keywords" content="HTML,CSS, Javascript,laravel,PHP" />
    <meta name="author" content="Decadev" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
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
        @if(empty($isPdf) || !$isPdf)
        <div class="text-center mt-4">
            <form action="{{ route('sale.invoice.download', $sale->sale_id) }}" method="GET">
                <button type="submit" class="btn btn-primary">Cetak Struk (PDF)</button>
            </form>
            <a href="{{ route('dashboard') }}" class="btn btn-secondary mt-3">Kembali ke Dashboard</a>
        </div>
        @endif
    </div>
</body>
</html>
