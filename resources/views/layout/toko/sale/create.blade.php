<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container mt-4">
        <h1>Tambah Transaksi</h1>
        <form action="{{ route('sale.store') }}" method="POST">
            @csrf

            <!-- Nama Pengguna (tidak bisa dipilih) -->
            <div class="form-group">
                <label for="user_name">Nama Pengguna</label>
                <input type="text" id="user_name" class="form-control" value="{{ auth()->user()->name }}" disabled>
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
            </div>

            <div class="form-group">
                <label for="book_id">Judul Buku</label>
                <select name="book_id" id="book_id" class="form-control @error('book_id') is-invalid @enderror">
                    <option value="">Pilih Buku</option>
                    @foreach($books as $book)
                        <option value="{{ $book->id }}" {{ old('book_id') == $book->id ? 'selected' : '' }}>{{ $book->title }}</option>
                    @endforeach
                </select>
                @error('book_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="quantity">Jumlah</label>
                <input type="number" name="quantity" id="quantity" class="form-control @error('quantity') is-invalid @enderror" value="{{ old('quantity') }}" min="1" required>
                @error('quantity')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-3">Simpan Transaksi</button>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
