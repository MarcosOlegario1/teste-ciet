<?php

use App\Http\Controllers\ApiText;
use App\Http\Controllers\extension;
use App\Http\Controllers\fileCreation;
use App\Http\Controllers\FileCreationForm;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\location;
use App\Http\Controllers\mordidas;
use App\Http\Controllers\ParserFile;
use App\Http\Controllers\SelectField;
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

Route::get('/', [HomeController::class, 'Home'])->name('Home');

Route::get('/questao1', [location::class, 'location'])->name('location');

Route::get('/questao2', [mordidas::class, 'foiMordido'])->name('mordidas');

Route::get('/questao3', [extension::class, 'extension'])->name('extension');

Route::get('/questao4', [fileCreation::class, 'fileCreation'])->name('fileCreation');
Route::post('/questao4Form', [FileCreationForm::class, 'store'])->name('fileCreation.Form');

Route::get('/questao5', [ParserFile::class, 'parser'])->name('parser');

Route::get('/questao6', [SelectField::class, 'selectField'])->name('selectField');

Route::get('/questao7', [ApiText::class, 'ApiText'])->name('apitext');
