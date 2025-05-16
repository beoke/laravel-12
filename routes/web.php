<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;


//route resource for products
Route::resource('/products', ProductController::class);
Route::get('/Home', [HomeController::class, 'index'])->name('home.index');

Route::get('/', function () {
    return view('welcome');
});
