<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

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


// login
Route::get('/{any}', function () {
    return view('login');
})->where('any','.*');

Route::post('/login/confirm',[LoginController::class,'confirm'])->name('confirm');

// // dashboard
// Route::get('/dashboard',[DashboardController::class,'create'])->name('dashboard');
