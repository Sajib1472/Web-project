<?php

use App\Models\Listing;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;

Route::get('/', [ProductController::class, 'home_page']);

Route::get('/ships/{product}', [ProductController::class, 'show_product']);

//These routes for admin
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');

    // route for customer password update
    Route::put('/admin/customers/{customer}/update-password', 'update_password')->name('updatePassword');

});
  
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
 
    Route::controller(ProductController::class)->prefix('products')->group(function () {
        Route::get('', 'index')->name('products');
        Route::get('create', 'create')->name('products.create');
        Route::post('store', 'store')->name('products.store');
        Route::get('show/{id}', 'show')->name('products.show');
        Route::get('edit/{id}', 'edit')->name('products.edit');
        Route::put('edit/{id}', 'update')->name('products.update');
        Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
    });

    Route::controller(CustomerController::class)->prefix('customers')->group(function () {
        Route::get('', 'customer')->name('customers');
        // Route::put('update_pass/{id}', "update_password")->name('customer.updatePassword');
    });
 
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});

//These routes for buy
Route::get('/checkout', 'App\Http\Controllers\StripeController@checkout')->name('checkout');
// Route::post('/session', 'App\Http\Controllers\StripeController@session')->name('session');
Route::get('/success', 'App\Http\Controllers\StripeController@success')->name('success');
Route::get('/checkout/{product}', [StripeController::class, 'checkout2']);
Route::get('/session/{product}', [StripeController::class, 'session']);

//These routes for customers
Route::get('/customer_register', [CustomerController::class, 'create_customer']);
Route::post('/customers', [CustomerController::class, 'store_customer']);
Route::post('/customer_logout', [CustomerController::class, 'logout_customer']);
Route::get('/customer_login', [CustomerController::class, 'login_customer']);
Route::post('/customer/authenticate', [CustomerController::class, 'authenticate']);

// this routes for cart
Route::get('/customer/cart', [CartController::class, 'showCart'])->name('cust.cart');