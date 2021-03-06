<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('home.gallery');
Route::get('/pricing', [HomeController::class, 'pricing'])->name('home.pricing');
Route::get('/contacts', [HomeController::class, 'contacts'])->name('home.contacts');
