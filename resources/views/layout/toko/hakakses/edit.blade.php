<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Website Buku Bersama" />
    <meta name="keywords" content="HTML,CSS, Javascript,laravel,PHP" />
    <meta name="author" content="Decadev" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>Daftar Hak Akses</title>
    <!-- Bootstrap CSS versi 5.3.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Data Hak Akses</h1>
        </div>
        <form action="{{ route('hakakses.update', $hakakses->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="role">Hak Akses</label>
                    <select name="role" id="role" class="form-control">
                        <option value="customer" {{ $hakakses->role == 'customer' ? 'selected' : '' }}>Customer</option>
                        <option value="admin" {{ $hakakses->role == 'admin' ? 'selected' : '' }}>Admin</option>
                    </select>
                </div>


                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </section>
</div>
<!-- Bootstrap JS dan Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>
