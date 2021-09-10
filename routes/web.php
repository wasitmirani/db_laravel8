<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('/', function () {
    return view('layouts.frontend.master');
});


Route::get('/',[FrontendController::class,'index'])->name('home');
Route::get('/about-us',[FrontendController::class,'aboutUs'])->name('about');
Route::prefix('services')->name('services.')->group(function () {
    Route::get('/',[ServiceController::class,'index'])->name('home');
    Route::get('/b2b',[ServiceController::class,'b2B'])->name('b2b');
    Route::get('/cms',[ServiceController::class,'cms'])->name('cms');
    Route::get('/e-commerce',[ServiceController::class,'eCommerce'])->name('ecommerce');
    Route::get('/custom-website-development',[ServiceController::class,'eCommerce'])->name('custom.website');
});


Route::get('/protfolio',[FrontendController::class.'protfolio'])->name('protfolio');
Route::get('/contact/',[FrontendController::class.'contact'])->name('contact');
