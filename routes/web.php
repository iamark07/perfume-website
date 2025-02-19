<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;


// frontend pages
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/cart',[HomeController::class,'cart'])->name('cart');
Route::get('/checkout',[HomeController::class,'checkout'])->name('checkout');
Route::get('/login',[HomeController::class,'login'])->name('login');
Route::get('/logout',[HomeController::class,'logout'])->name('logout');
Route::get('/register',[HomeController::class,'register'])->name('register');
Route::get('/product',[HomeController::class,'product'])->name('product');
Route::get('/profile',[HomeController::class,'profile'])->name('profile');
Route::get('/reset_password',[HomeController::class,'reset_password'])->name('reset_password');
Route::get('/forget_password',[HomeController::class,'forget_password'])->name('forget_password');
Route::get('/faqs',[HomeController::class,'faqs'])->name('faqs');

