<?php

use App\Http\Controllers\Imports\ImportsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/import', [ImportsController::class,'import'])->name('import');
Route::post('/upload', [ImportsController::class,'upload'])->name('upload');

