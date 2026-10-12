<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Mengarahkan halaman awal website langsung ke daftar produk
Route::get('/', function () {
    return redirect()->route('products.index');
});

// Mendaftarkan seluruh alamat CRUD produk secara otomatis
Route::resource('products', ProductController::class);