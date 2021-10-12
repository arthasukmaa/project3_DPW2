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
    return view('index');
});
Route::get('admin/template', function () {
    return view('admin.template');
});

Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});

Route::get('admin/profil', function () {
    return view('admin.profil.index');
});

Route::get('admin/produk', function () {
    return view('admin.produk.index');
});

Route::get('admin/beranda', function () {
    return view('admin.beranda');
});

Route::get('admin/kategori', function () {
    return view('admin.kategori.index');
});






Route::get('/computer', function () {
    return view(' computer');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/laptop', function () {
    return view('laptop');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('/keranjang', function () {
    return view('keranjang');
});

Route::get('/checkout', function () {
    return view('checkout');
});