<?php

use App\Http\Controllers\HewanController;
use App\Http\Controllers\LibraryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard');
});
Route::get('/products', function () {
    return view('pages.products');
});
Route::get('/users', function () {
    return view('pages.users');
});
Route::get('/orders', function () {
    return view('pages.orders');
});
Route::get('/reports', function () {
    return view('pages.reports');
});
