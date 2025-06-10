<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ShopItemController;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Homepage
Route::get('/', ShopItemController::class)->name('homepage');


Route::get('search', SearchController::class)->name('search');


//Login
Route::get('login', function () {
  return view('auth/login');
})->name('login');

Route::post('login', LoginController::class)->name('loginAttempt');


//Rigister user
Route::get('register', function () {
  return view('auth/register');
})->name('register');

Route::post('register', RegisterController::class)->name('registerAttempt');

Route::resource('cart', CartController::class);

//Logoutclear
Route::get('logout', function (Request $request) {

  Auth::logout();
  $request->session()->invalidate();
  $request->session()->regenerateToken();

  return redirect('/');
})->name('logout');


Route::get('product/{id}', ProductController::class)->name('product');