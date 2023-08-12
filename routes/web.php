<?php

use App\Http\Controllers\backend\dashboardController;
use App\Http\Controllers\backend\sliderController;
use Illuminate\Support\Facades\Route;


//frontend routes
Route::get('/',function(){
    return view('layouts.frontend');
});

/*bacend routes for practis
Route::get('/admin/dashboard', function(){

return view('backend.dashboard');
});*/

/* Normal routhe
Route::get('/admin/dashboard',[dashboardController::class,'index'])->name('dashboard');

Route::get('/admin/slider',[sliderController::class,'index'])->name('slider.index');
*/

//group route

Route::prefix('admin/')->name('admin.')->group(function(){
    Route::get('dashboard',[dashboardController::class,'index'])->name('dashboard');
//slider route
    Route::get('slider',[sliderController::class,'index'])->name('slider.index');
    Route::get('slider/create',[sliderController::class,'create'])->name('slider.create');
});