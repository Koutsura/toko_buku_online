@extends('layout.app') <!-- Menggunakan layout app -->
@section('contents')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Transaksi</title>

    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Custom CSS untuk memberikan sedikit styling tambahan */
        .container {
            margin-top: 20px;
        }

        h1 {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1 class="text-center">Daftar Transaksi</h1>
        <div class="row mb-4 justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('sale.index') }}" method="GET" class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Cari Berdasarkan Judul Buku...">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </div>
        </div>

        <!-- Tabel Bootstrap untuk menampilkan daftar transaksi -->
        <table class="table table-bordered table-hover table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama Pengguna</th>
                    <th>Judul Buku</th>
                    <th>Jumlah</th>
                    <th>Total Harga</th>
                    <th>Tanggal Transaksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sale as $transaction)
    <tr>
        <td>{{ $transaction->sale_id }}</td>
        <td>{{ $transaction->user->name }}</td>
        <td>{{ $transaction->book->title }}</td>
        <td>{{ $transaction->quantity }}</td>
        <td>Rp {{ number_format($transaction->total_price, 0, ',', '.') }}</td>
        <td>{{ $transaction->sale_date }}</td>
    </tr>
@endforeach

            </tbody>
        </table>
    </div>

    <!-- Link Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection
