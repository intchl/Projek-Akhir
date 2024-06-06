<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuyerController;

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

Route::get('/master', function () {
    return view('layout.master');
});

Route::get('/contoh', function () {
    return view('contoh.index');
});

Route::get('/add', function () {
    return view('contoh.add');
});

Route::get('/info', function () {
    return view('contoh.info');
});

Route::get('/edit', function () {
    return view('contoh.edit');
});

Route::resource('buyer', BuyerController::class);