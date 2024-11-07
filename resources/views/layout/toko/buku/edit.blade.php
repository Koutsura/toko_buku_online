<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>

    <!-- Tambahkan CDN Bootstrap di sini -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Edit Buku</h2>

        <form action="{{ route('buku.update', $buku->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card shadow-sm p-4">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Penulis</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $buku->name }}" required>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $buku->title }}" required>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga" value="{{ $buku->harga }}" required>
                </div>
                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <input type="text" class="form-control" id="kategori" name="kategori" value="{{ $buku->kategori }}" required>
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required>{{ $buku->deskripsi }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar Buku</label>
                    <input type="file" class="form-control" id="image" name="image">
                    @if($buku->image)
                        <div class="mt-2">
                            <label>Gambar Saat Ini:</label>
                            <img src="{{ asset('images/imagess/' . $buku->image) }}" alt="Current Image" class="img-thumbnail" width="150">
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Tanggal</label>
                    <input type="datetime-local" class="form-control" id="date" name="date" value="{{ $buku->date->format('Y-m-d\TH:i') }}" required>
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok</label> <!-- Tambahkan label stok -->
                    <input type="number" class="form-control" id="stok" name="stok" value="{{ $buku->stok }}" required> <!-- Tambahkan input stok -->
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Tambahkan CDN Bootstrap JS di sini -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
