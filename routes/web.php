<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FromController;
use Illuminate\Support\Facades\Route;


Route::middleware(['loggedIn'])->group(function () {

    Route::get('/admin', [HomeController::class, 'dashboard'])->name('admin');
    Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');
    Route::get('/users', [HomeController::class, 'users'])->name('users');
    Route::get('/orders', [HomeController::class, 'orders'])->name('orders');
    Route::get('/messages', [HomeController::class, 'messages'])->name('messages');


    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

});
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home#blogs', [HomeController::class, 'index'])->name('home#blogs');
Route::get('/author', [HomeController::class, 'author'])->name('author');

Route::get('sitemap.xml',[HomeController::class,'sitemap'])->name('sitemap');

Route::get('/doc', function() {
return response()->file(public_path() . '/doc.pdf');
})->name('doc');


Route::get('/contacthome', [ContactController::class, 'index'])->name('contacthome');
Route::post('/contact', [ContactController::class, 'contact'])->name('contact');

Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/addtocart/{product}', [CartController::class, 'addtocart'])->name('addtocart');
Route::get('/delfromcart/{id}', [CartController::class, 'delfromcart'])->name('delfromcart');
Route::get('/makeorder', [CartController::class, 'makeorder'])->name('makeorder');

Route::get('/logout', [FromController::class, 'logout'])->name('logout');
Route::get('/loginhome', [FromController::class, 'loginhome'])->name('loginhome');
Route::post('/login', [FromController::class, 'login'])->name('login');
Route::get('/error', [FromController::class,'error'])->name('error');

Route::get('/registerhome', [FromController::class, 'registerhome'])->name('registerhome');
Route::post('/register', [FromController::class, 'register'])->name('register');

Route::get('/store', [ProductController::class, 'index'])->name('store');
Route::get('/store/{product}', [ProductController::class, 'show'])->name('show');





