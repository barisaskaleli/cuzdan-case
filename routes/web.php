<?php

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

Route::get('/', [\App\Http\Controllers\UserController::class, 'getFullPositionList']);
Route::get('junior-position-list', [\App\Http\Controllers\UserController::class, 'getJuniorPositionList']);
Route::get('get-users-count', [\App\Http\Controllers\UserController::class, 'getUsersCount']);
Route::get('get-repeated-letter-counts', [\App\Http\Controllers\UserController::class, 'getWordsCount']);
