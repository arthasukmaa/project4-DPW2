<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\ProdukController;
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
    return view('index');
});

Route::get('template', function () {
    return view('template');
});

Route::get('login', [AuthController::class, 'showlogin'] );

Route::get('register', function () {
    return view('register');
});

Route::get('admin/beranda', [HomeController::class, 'showberanda']);
Route::get('admin/kategori', [HomeController::class, 'showkategori']);
Route::get('admin/profil', [HomeController::class, 'showprofil']);

Route::get('admin/produk', [ProdukController::class, 'index']);
Route::get('admin/produk/create', [ProdukController::class, 'create']);
Route::post('admin/produk', [ProdukController::class, 'store']);
Route::get('admin/produk/{produk}', [produkController::class, 'show']);
Route::get('admin/produk/{produk}/edit', [produkController::class, 'edit']);
Route::put('admin/produk/{produk}', [produkController::class, 'update']);
Route::delete('admin/produk/{produk}', [produkController::class, 'destroy']);





Route::get('/computer', [indexController::class, 'showcomputer']);
Route::get('/contact',  [indexController::class, 'showcontact']);
Route::get('/laptop', [indexController::class, 'showlaptop']);
Route::get('/product',  [indexController::class, 'showproduct']);
Route::get('/about',  [indexController::class, 'showabout']);
Route::get('/search',  [indexController::class, 'showsearch']);
Route::get('/keranjang',  [indexController::class, 'showkeranjang']);
Route::get('/checkout',  [indexController::class, 'showcheckout']);