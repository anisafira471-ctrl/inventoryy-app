<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk Baru</title>
    <!-- Bootstrap CDN -->
    <link href="https://jsdelivr.net" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5" style="max-width: 600px;">
        <h2>Tambah Produk Baru</h2>

        <form action="{{ route('products.store') }}" method="POST" class="bg-white p-4 border rounded shadow-sm mt-3">
            @csrf <!-- Keamanan Token Laravel, Wajib Ada! -->

            <!-- Input Pilihan Kategori -->
            <div class="mb-3">
                <label class="form-label">Kategori</label>
                <select name="category_id" class="form-control">
                    <option value="1">Elektronik</option>
                    <option value="2">Alat Tulis</option>
                </select>
            </div>

            <!-- Input Nama Produk -->
            <div class="mb-3">
                <label class="form-label">Nama Produk</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <!-- Input Jumlah Stok -->
            <div class="mb-3">
                <label class="form-label">Jumlah Stok</label>
                <input type="number" name="stock" class="form-control @error('stock') is-invalid @enderror" value="{{ old('stock') }}">
                @error('stock') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <!-- Input Harga -->
            <div class="mb-3">
                <label class="form-label">Harga (Rp)</label>
                <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}">
                @error('price') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <button type="submit" class="btn btn-success">Simpan Data</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>