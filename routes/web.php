<?php

use App\Http\Controllers\AddKeyboardController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeyboardDetailController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManageCategoryController;
use App\Http\Controllers\MyCartController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TransactionHistoryController;
use App\Http\Controllers\TransactionHistoryDetailController;
use App\Http\Controllers\UpdateCategoryController;
use App\Http\Controllers\UpdateKeyboardController;
use App\Http\Controllers\ViewKeyboardController;
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

// ->name('login'): Will redirect user to the default 'login' route (found in App\Http\Middleware\Authenticate.php) if an un-authenticated user is trying to enter authorized routes

// ->middleware('guest'): Can only be accessed by user who has not logged in
// ->middleware('auth'): Can only be accessed by user who has logged in and have been authorized

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/', [HomeController::class, 'index']);

Route::get('/view_keyboard/{id}', [ViewKeyboardController::class, 'index']);
Route::post('/view_keyboard/delete/{id}', [ViewKeyboardController::class, 'destroy']);

Route::get('/update_keyboard/{id}', [UpdateKeyboardController::class, 'index'])->middleware('auth');
Route::post('/update_keyboard/{id}', [UpdateKeyboardController::class, 'update']);

Route::get('/keyboard_detail/{id}', [KeyboardDetailController::class, 'index']);
Route::post('/keyboard_detail/add_to_cart/{id}', [KeyboardDetailController::class, 'store'])->middleware('auth');

Route::get('/add_keyboard', [AddKeyboardController::class, 'index'])->middleware('auth');
Route::post('/add_keyboard', [AddKeyboardController::class, 'store']);

Route::get('/manage_category', [ManageCategoryController::class, 'index'])->middleware('auth');
Route::post('/manage_category/delete/{id}', [ManageCategoryController::class, 'destroy']);

Route::get('/update_category/{id}', [UpdateCategoryController::class, 'index'])->middleware('auth');
Route::post('/update_category/{id}', [UpdateCategoryController::class, 'update']);

Route::get('/my_cart', [MyCartController::class, 'index'])->middleware('auth');
Route::post('/my_cart/update_quantity/{id}', [MyCartController::class, 'update']);
Route::post('/my_cart/checkout', [MyCartController::class, 'destroy']);

Route::get('/change_password', [ChangePasswordController::class, 'index'])->middleware('auth');
Route::post('/change_password', [ChangePasswordController::class, 'update']);

Route::get('/transaction_history', [TransactionHistoryController::class, 'index'])->middleware('auth');

Route::get('/transaction_history_detail/{id}', [TransactionHistoryDetailController::class, 'index'])->middleware('auth');
