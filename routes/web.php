<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestController;

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

// Users Routes
Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/register', [UserController::class, 'create']);
Route::post('/users', [UserController::class, 'store']);

// Test Routes
Route::post('/test-user', [TestController::class, 'index']);
Route::post('/test', [TestController::class, 'grade']);