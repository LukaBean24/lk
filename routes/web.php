<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/login', [SessionController::class, 'index'])->middleware('guest')->name('session.index');
Route::post('/login', [SessionController::class, 'store'])->middleware('guest')->name('session.store');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest')->name('register.index');
Route::post('/register', [RegisterController::class, 'store']);
