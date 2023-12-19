<?php

use App\Http\Controllers\Auth\Authcontroller;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\dashboardController;
use App\Http\Controllers\backend\orderController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\sliderController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;


//frontend routes
//basic route
/*
Route::get('/', function () {
    return view('layouts.frontend');
});
*/

/*backend routes for practis
Route::get('/admin/dashboard', function(){

return view('backend.dashboard');
});*/

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/search', [FrontendController::class, 'search'])->name('search');

Route::get('/add-to-cart/{id}', [FrontendController::class, 'addToCart'])->name('addToCart');
Route::get('/cart-remove/{id}', [FrontendController::class, 'cartRemove'])->name('cart.remove');
Route::get('/register', [Authcontroller::class, 'register'])->name('register');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/about', [FrontendController::class, 'about'])->name('about');

Route::middleware(['auth'])->group(function(){
    Route::get('/user/profile', [Authcontroller::class, 'profiles'])->name('profiles');
    Route::get('/user/logout', [Authcontroller::class, 'logout'])->name('logout');
    Route::get('/checkout', [FrontendController::class, 'checkout'])->name('checkout');
    Route::post('/order', [FrontendController::class, 'order'])->name('order');
    Route::get('/order/details', [FrontendController::class, 'order_details'])->name('order_details');

});

Route::middleware(['guest'])->group(function(){

    Route::post('/customer/store', [Authcontroller::class, 'store']);
    Route::get('/login', [Authcontroller::class, 'login'])->name('login');
    Route::post('/logins', [Authcontroller::class, 'logins']);

});


/* Normal routhe
Route::get('/admin/dashboard',[dashboardController::class,'index'])->name('dashboard');

Route::get('/admin/slider',[sliderController::class,'index'])->name('slider.index');
*/

//group route

Route::prefix('admin/')->middleware(['auth' , 'user'])->name('admin.')->group(function () {
    //one line rout
    Route::get('dashboard', [dashboardController::class, 'index'])->name('dashboard');
    //slider route
    Route::resource('slider', sliderController::class);
    /* full route
    Route::get('slider', [sliderController::class, 'index'])->name('slider.index');
    Route::get('slider/create', [sliderController::class, 'create'])->name('slider.create');
    Route::post('slider/store', [sliderController::class, 'store'])->name('slider.store');
    Route::get('slider/{id}', [sliderController::class, 'edit'])->name('slider.edit');
    Route::put('slider/update/{id}', [sliderController::class, 'update'])->name('slider.update');
    Route::delete('slider/delete/{id}', [sliderController::class, 'delete'])->name('slider.delete');
    */
    //category route
    Route::resource('category', CategoryController::class);

    //product route
    Route::resource('product', ProductController::class);
    Route::resource('order', orderController::class);
});
