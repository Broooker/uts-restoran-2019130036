<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\IndexController::class,'home'])->name('index');

Route::get('about', [App\Http\Controllers\AboutController::class,'profil'])->name('about');

Route::get('product', [App\Http\Controllers\ProductController::class,'menu'])->name('product');

Route::get('testimonials', [App\Http\Controllers\TestimonialsController::class,'test'])->name('testimonials');

Route::get('contact', [App\Http\Controllers\ContactController::class,'telpon'])->name('contact');

// Route::get('/product', IndexController::class)->name('product');
