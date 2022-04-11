<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard', [
        "title" => "Dashoard"
    ]);
});

Route::get('/permintaanProduk', function () {
    return view('permintaanProduk', [
        "title" => "Permintaan Produk"
    ]);
});

Route::get('/reseller', function () {
    return view('reseller', [
        "title" => "Reseller"
    ]);
});

Route::get('/pendapatan', function () {
    return view('pencatatanKeuangan.pendapatan', [
        "title" => "Pendapatan"
    ]);
});

Route::get('/pengeluaran', function () {
    return view('pencatatanKeuangan.pengeluaran', [
        "title" => "pengeluaran"
    ]);
});

Route::get('/grafik', function () {
    return view('pencatatanKeuangan.grafik', [
        "title" => "Grafik"
    ]);
});

Route::get('/produk', function () {
    return view('produk', [
        "title" => "Produk"
    ]);
});
