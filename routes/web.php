<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// routes/web.php

use App\Http\Controllers\cartController;

Route::get('/cart', [cartController::class, 'index'])->name('cart');
