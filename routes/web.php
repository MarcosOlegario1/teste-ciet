<?php

use App\Http\Controllers\location;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/questao1', [location::class, 'location'])->name('location');
Route::get('/questao2', [location::class, 'location'])->name('location');
Route::get('/questao3', [location::class, 'location'])->name('location');
Route::get('/questao4', [location::class, 'location'])->name('location');
Route::get('/questao5', [location::class, 'location'])->name('location');
Route::get('/questao6', [location::class, 'location'])->name('location');
Route::get('/questao7', [location::class, 'location'])->name('location');