<?php

use App\Http\Controllers\AdminCarouselController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminNotificationController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\AdminStationController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\AdminVacancyController;
use App\Http\Controllers\AdminPriceController;
use App\Http\Controllers\CabinetController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Models\Price;
use Illuminate\Support\Facades\Artisan;
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

// Lang Change Route
Route::get('/lang/{locale}',[LangController::class, 'change']);

// Main Pages Routes
Route::get('/', [IndexController::class, "index"]);
Route::get('/posts/{id}', [IndexController::class, 'singlePost']);
Route::get('/vacancies', [IndexController::class, 'vacancies']);
Route::get('/vacancies/{vacancy}', [IndexController::class, "singleVacancy"]);
Route::get('/news', [IndexController::class, 'news']);
Route::get('/stations', [IndexController::class, 'stations']);
Route::get('/management', [IndexController::class, 'management']);
Route::get('/contact', [IndexController::class, 'contact']);
Route::get('/prices-history', [IndexController::class, 'priceHistory']);
Route::get('/cards', [IndexController::class, 'cards']);
Route::get('/about-us', [IndexController::class, 'aboutUs']);


// Login and Logout Routes
Route::get('/login', [SessionController::class, 'index'])->middleware('guest')->name('session.index')->middleware('guest');
Route::post('/login', [SessionController::class, 'store'])->middleware('guest')->name('session.store')->middleware('guest');
Route::post('/logout', [SessionController::class, 'destroy'])->name('session.destroy')->middleware('auth');

// Register Routes
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest')->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.store');

// Cabinet Routes
Route::get('/cabinet',[CabinetController::class, 'index'])->middleware('auth');
Route::get('/fuel-order', [OrderController::class, 'fuel_view'])->middleware('auth');
Route::get('/card-order',[OrderController::class, 'card_view'])->middleware('auth');
Route::post('/fuel-order', [OrderController::class, "fuel_store"])->middleware('auth');
Route::post('/card-order', [OrderController::class, "card_store"])->middleware('auth');
Route::put('/order/{order}', [OrderController::class, "block"])->middleware('auth');
Route::get('/invoice/{order}', [InvoiceController::class, 'index'])->middleware('auth');
Route::get('/invoice1/{order}', [InvoiceController::class, 'index1'])->middleware('auth');
Route::put('/order/{order}/paycheck', [OrderController::class, "uploadPaycheck"])->middleware('auth');

// Admin Routes
Route::get('/admin', [AdminController::class, 'index'])->middleware('admin');
Route::post('/admin/order-change', [AdminOrderController::class, 'update'])->middleware('admin');
Route::post('/admin/posts/create',[AdminPostController::class, "store"])->middleware('admin');
Route::get('/admin/posts',[AdminPostController::class, "index"])->middleware('admin');
Route::post('/admin/posts/{id}',[AdminPostController::class, "remove"])->middleware('admin');
Route::get('/admin/posts/create',[AdminPostController::class, "create"])->middleware('admin');
Route::get('/admin/users', [AdminUsersController::class, 'index'])->middleware('admin');
Route::get('/admin/users/{user}', [AdminUsersController::class, 'edit'])->middleware('admin');
Route::put('/admin/users/{user}', [AdminUsersController::class, 'update'])->middleware('admin');
Route::get('/admin/users/{user}/delete', [AdminUsersController::class, 'delete'])->middleware('admin');
Route::get('/admin/users/make-admin/{user}', [AdminUsersController::class, 'makeAdmin'])->middleware('admin');
Route::get('/admin/users/block-admin/{user}', [AdminUsersController::class, 'blockAdmin'])->middleware('admin');
Route::get('/admin/vacancies', [AdminVacancyController::class, 'index'])->middleware('admin');
Route::get('/admin/vacancies/{vacancy}/delete', [AdminVacancyController::class, 'delete'])->middleware('admin');
Route::get('/admin/vacancies/{vacancy}/edit', [AdminVacancyController::class, 'edit'])->middleware('admin');
Route::put('/admin/vacancies/{vacancy}/edit', [AdminVacancyController::class, 'update'])->middleware('admin');
Route::get('/admin/vacancies/create', [AdminVacancyController::class, 'create'])->middleware('admin');
Route::post('/admin/vacancies/create', [AdminVacancyController::class, 'store'])->middleware('admin');
Route::get('/admin/stations', [AdminStationController::class, 'index'])->middleware('admin');
Route::post('/admin/stations/create', [AdminStationController::class, 'store'])->middleware('admin');
Route::get('/admin/prices', [AdminPriceController::class, 'index'])->middleware('admin');
Route::get('/admin/notification', [AdminNotificationController::class, 'index'])->middleware('admin');
Route::get('/admin/notification/delete/{notification}', [AdminNotificationController::class, 'delete'])->middleware('admin');
Route::post('/admin/notification/create', [AdminNotificationController::class, 'store'])->middleware('admin');
Route::post('/admin/prices/update', [AdminPriceController::class, 'storePrices'])->middleware('admin');
Route::put('/admin/discounts/update', [AdminPriceController::class, 'storeDiscounts'])->middleware('admin');
Route::post('/admin/discount-block/{user}', [AdminUsersController::class, 'discountBlock'])->middleware('admin');
Route::get('/admin/carousel', [AdminCarouselController::class, 'index'])->middleware('admin');
Route::post('/admin/carousel/create', [AdminCarouselController::class, 'store'])->middleware('admin');
Route::delete('/admin/carousel/{id}/delete', [AdminCarouselController::class, 'delete'])->middleware('admin');
Route::post('/admin/passive', [AdminController::class, 'passive'])->middleware('admin');
Route::post('/admin/active', [AdminController::class, 'active'])->middleware('admin');
Route::get('/test', function() {
    return view("test");
});
