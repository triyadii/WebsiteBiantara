<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('Katalog', function () {
    return view('katalog');
});
Route::get('KatalogDetail', function () {
    return view('katalogDetail');
});
Route::get('TentangKami', function () {
    return view('tentangKami');
});
Route::get('Portfolio', function () {
    return view('portfolio');
});
Route::get('Kontak', function () {
    return view('kontak');
});

Route::get('/Dashboard', function () {
    return view('dashboard');
});
