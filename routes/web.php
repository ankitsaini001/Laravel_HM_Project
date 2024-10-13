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

Route::get('add_food', [AdminController::class, 'add_food']);
Route::post('upload_food', [AdminController::class, 'upload_food']);
Route::get('view_food', [AdminController::class, 'view_food']);
Route::get('delete_food/{id}', [AdminController::class, 'delete_food']);
Route::get('update_food/{id}', [AdminController::class, 'update_food']);
Route::post('update_process/{id}', [AdminController::class, 'update_process']);
/*Home Controller*/
Route::post('add_cart/{id}', [HomeController::class,'add_cart']);
