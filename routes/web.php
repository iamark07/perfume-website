<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Static pages
Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/cart', function () {
    return view('cart');
});
// Register routes
Route::get('/register', [AuthController::class, 'showRegisterForm']);
Route::post('/register', [AuthController::class, 'register']);

// Login routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Logout route
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/search-result', function () {
    return view('search-result');
});

// Admin routes
Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('admin/users/users', function () {
    return view('admin.users.users');
});
Route::get('admin/users/add-users', function () {
    return view('admin.users.add-users');
});
Route::get('admin/users/edit-users', function () {
    return view('admin.users.edit-users');
});
Route::get('admin/users/delete-users', function () {
    return view('admin.users.delete-users');
});
Route::get('admin/products/products', function () {
    return view('admin.products.products');
});
Route::get('admin/products/add-products', function () {
    return view('admin.products.add-products');
});
Route::get('admin/products/edit-products', function () {
    return view('admin.products.edit-products');
});
Route::get('admin/products/delete-products', function () {
    return view('admin.products.delete-products');
});
Route::get('admin/brands/brands', function () {
    return view('admin.brands.brands');
});
Route::get('admin/brands/add-brands', function () {
    return view('admin.brands.add-brands');
});
Route::get('admin/brands/edit-brands', function () {
    return view('admin.brands.edit-brands');
});
Route::get('admin/brands/delete-brands', function () {
    return view('admin.brands.delete-brands');
});
Route::get('admin/order-history', function () {
    return view('admin.order-history');
});
Route::get('admin/payment-history', function () {
    return view('admin.payment-history');
});
Route::get('admin/shipping', function () {
    return view('admin.shipping');
});
Route::get('admin/discount/discount', function () {
    return view('admin.discount.discount');
});
Route::get('admin/discount/add-discount', function () {
    return view('admin.discount.add-discount');
});
Route::get('admin/discount/edit-discount', function () {
    return view('admin.discount.edit-discount');
});
Route::get('admin/discount/delete-discount', function () {
    return view('admin.discount.delete-discount');
});
Route::get('admin/admin-cart', function () {
    return view('admin.admin-cart');
});
