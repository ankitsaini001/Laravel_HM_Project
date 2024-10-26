<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeController::class, 'user_index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/home', [HomeController::class,'index']);
/*Admin Controller */
Route::get('add_food', [AdminController::class, 'add_food']);
Route::post('upload_food', [AdminController::class, 'upload_food']);
Route::get('view_food', [AdminController::class, 'view_food']);
Route::get('delete_food/{id}', [AdminController::class, 'delete_food']);
Route::get('update_food/{id}', [AdminController::class, 'update_food']);
Route::post('update_process/{id}', [AdminController::class, 'update_process']);
Route::get('order_details', [AdminController::class, 'order_details']);
Route::get('on_way/{id}', [AdminController::class, 'on_way']);
Route::get('deliver_order/{id}', [AdminController::class, 'deliver_order']);
Route::get('cancel_order/{id}', [AdminController::class, 'cancel_order']);
Route::get('/reservations', [AdminController::class, 'reservations']);
/*Home Controller*/
Route::post('add_cart/{id}', [HomeController::class,'add_cart']);
Route::get('/cart_items', [HomeController::class, 'cart_items']);
Route::get('/remove_cart/{id}', [HomeController::class, 'remove_cart']);
Route::post('/confirm_order', [HomeController::class, 'confirm_order']);
Route::post('/book_table', [HomeController::class, 'book_table']);

