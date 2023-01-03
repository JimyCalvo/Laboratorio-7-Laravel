<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalesController;
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

// Route::get('/locales', function () {
//     return view('Locales.index');
// });
// Route::get('/local/create', [LocalesController::class,'create']);

// Route::get('/local/edit', function () {
//     return view('Locales.editLocal');
// });
Route::resource('locales',LocalesController::class);

