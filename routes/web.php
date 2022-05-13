<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Models\Discount;
use App\Models\Order;
use App\Models\Price;
use App\Models\User;
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
    return view('index', [
        'prices' => Price::latest()->first(),
    ]);
});

Route::get('/login', [SessionController::class, 'index'])->middleware('guest')->name('session.index');
Route::post('/login', [SessionController::class, 'store'])->middleware('guest')->name('session.store');
Route::post('/logout', [SessionController::class, 'destroy'])->name('session.destroy');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest')->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.store');

Route::get('/cabinet',function() {
    return view('cabinet', [
        'orders' => User::find(auth()->id())->orders,
    ]);
})->middleware('auth');

Route::get('/fuel-order', function() {
    return view('fuel-order', [
        'prices' => Price::latest()->first(),
        'discounts' => Discount::latest()->first(),
    ]);
});

Route::get('/card-order', function() {
    return view('card-order');
});

Route::post('/fuel-order', [OrderController::class, "fuel_store"]);
Route::post('/card-order', [OrderController::class, "card_store"]);
Route::put('/order/{id}', [OrderController::class, "block"]);
Route::get('/invoice/{id}', function($id) {
    $discount = 0;
    $order =Order::find($id)->first();
    return view('invoice',[
        'order' => $order,
    ]);
});
