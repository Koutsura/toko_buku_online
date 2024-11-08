<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Transaksi</title>
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
                <input type="text" id="user_name" class="form-control" value="{{ $user->name }}" disabled>
                <input type="hidden" name="user_id" value="{{ $user->id }}">
            </div>

            <!-- Pilih Buku -->
            <div class="form-group">
                <label for="book_id">Judul Buku</label>
                <select name="book_id" id="book_id" class="form-control @error('book_id') is-invalid @enderror" required>
                    <option value="">Pilih Buku</option>
                    @foreach($books as $book)
                        <!-- Menyimpan harga buku di data-price untuk dipakai di JavaScript -->
                        <option value="{{ $book->id }}" data-price="{{ $book->harga }}">{{ $book->title }}</option>
                    @endforeach
                </select>
                @error('book_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Harga Satuan Buku -->
            <div class="form-group">
                <label for="unit_price">Harga Satuan</label>
                <input type="text" id="unit_price" class="form-control" value="Rp 0" readonly>
            </div>

            <!-- Jumlah Buku -->
            <div class="form-group">
                <label for="quantity">Jumlah</label>
                <input type="number" name="quantity" id="quantity" class="form-control @error('quantity') is-invalid @enderror" value="{{ old('quantity', 1) }}" min="1" required>
                @error('quantity')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Total Harga -->
            <div class="form-group">
                <label for="total_price">Total Harga</label>
                <input type="text" name="total_price" id="total_price" class="form-control" value="Rp 0" readonly>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Simpan Transaksi</button>
        </form>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const bookSelect = document.getElementById('book_id');
            const quantityInput = document.getElementById('quantity');
            const unitPriceInput = document.getElementById('unit_price');
            const totalPriceInput = document.getElementById('total_price');

            // Fungsi untuk update harga saat buku dipilih
            bookSelect.addEventListener('change', function() {
                const selectedOption = bookSelect.options[bookSelect.selectedIndex];
                const price = parseFloat(selectedOption.getAttribute('data-price')) || 0;  // Ambil harga dari data-price

                // Update harga satuan
                unitPriceInput.value = 'Rp ' + new Intl.NumberFormat('id-ID').format(price);

                // Update total harga saat buku dipilih
                updateTotalPrice(price);
            });

            // Fungsi untuk update total harga saat jumlah diubah
            quantityInput.addEventListener('input', function() {
                const price = parseFloat(unitPriceInput.value.replace('Rp ', '').replace(',', '').replace('.', '')) || 0;  // Ambil harga dari input
                updateTotalPrice(price);
            });

            // Fungsi untuk mengupdate total harga
            function updateTotalPrice(price) {
                const quantity = parseInt(quantityInput.value) || 0;
                const totalPrice = price * quantity;

                // Tampilkan total harga dengan format mata uang Indonesia
                totalPriceInput.value = 'Rp ' + new Intl.NumberFormat('id-ID').format(totalPrice);
            }
        });
        </script>
</body>
</html>
