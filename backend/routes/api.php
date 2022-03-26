<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\UserProductController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Api\UserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Auth::routes();
Route::get('prod/', [UserProductController::class, 'index']);
Route::get('prod/{id}', [UserProductController::class, 'single']);
Route::post('log/', [UserController::class, 'login']);
