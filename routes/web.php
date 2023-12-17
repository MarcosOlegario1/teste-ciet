<?php

use App\Http\Controllers\ApiText;
use App\Http\Controllers\ApiTextController;
use App\Http\Controllers\BitesController;
use App\Http\Controllers\extension;
use App\Http\Controllers\ExtensionController;
use App\Http\Controllers\fileCreation;
use App\Http\Controllers\FileCreationController;
use App\Http\Controllers\FileCreationForm;
use App\Http\Controllers\FileCreationFormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\location;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\mordidas;
use App\Http\Controllers\ParserFile;
use App\Http\Controllers\ParserFileController;
use App\Http\Controllers\SelectField;
use App\Http\Controllers\SelectFieldController;
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

Route::get('/questao1', [LocationController::class, 'Location'])->name('location');

Route::get('/questao2', [BitesController::class, 'foiMordido'])->name('mordidas');

Route::get('/questao3', [ExtensionController::class, 'Extension'])->name('extension');

Route::get('/questao4', [FileCreationController::class, 'FileCreation'])->name('fileCreation');
Route::post('/questao4Form', [FileCreationFormController::class, 'store'])->name('fileCreation.Form');

Route::get('/questao5', [ParserFileController::class, 'Parser'])->name('parser');

Route::get('/questao6', [SelectFieldController::class, 'SelectField'])->name('selectField');

Route::get('/questao7', [ApiTextController::class, 'ApiText'])->name('apitext');
