<?php

use App\Http\Controllers\concontroller;
use App\Http\Controllers\Contohcontroller;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('tes', function () {
//     return view('tes');
// });

Route::get('/tes',  [Contohcontroller::class, 'TampilContoh']);
// Route::get('/produk', function () {return view('produk');
// });
Route::get('/produk', [produkcontroller::class,'ViewProduk']);
