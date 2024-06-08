<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\TicketController;


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
    return view('auth.login');
});

Route::get('/master', function () {
    return view('layout.master');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::resource('film', FilmController::class);


Route::middleware(['auth'])->group(function () {
    Route::resource('buyer', BuyerController::class);
});

Route::resource('buyer', BuyerController::class);
Route::resource('ticket', TicketController::class);

Auth::routes();
