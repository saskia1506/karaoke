<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ListProdukController;

// Route Welcome
Route::get('/welcome', function () {
    return view('welcome');
});

// List Barang
Route::get('/listbarang', [ListBarangController::class, 'tampilkan']);

// Home dan lainnya
Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/list-produk', [ProductController::class, 'index']);
Route::get('/home', [HomeController::class, 'home']);
Route::get('/listproduk', [ListProdukController::class, 'show']);
