<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;

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
    return view('welcome');
});

Auth::routes();
Route::middleware(['auth','isAdmin'])->group(function() {
    // Views
    Route::get('/dashboard',[AdminController::class, 'index']);
    Route::get('/products',[AdminController::class, 'product']);
    Route::get('/categories',[AdminController::class, 'category']);
    Route::get('/users',[AdminController::class, 'user']);
    Route::get('/users',[AdminController::class, 'user']);

    // Add (Opens add form)
    Route::get('/add-product',[ProductController::class, 'add']);
    Route::get('/add-category',[CategoryController::class, 'add']);

    // Edit (opens edit form)
    Route::get('/edit-product/{id}',[ProductController::class, 'edit']);
    Route::get('/edit-category/{id}',[CategoryController::class, 'edit']);
    Route::get('/edit-user/{id}',[UserController::class, 'edit']);

    //Insert
    Route::post('/insert-product',[ProductController::class, 'insert']);
    Route::post('/insert-category',[CategoryController::class, 'insert']);

    //Update
    Route::put('/update-product/{id}',[ProductController::class, 'update']);
    Route::put('/update-category/{id}',[CategoryController::class, 'update']);
    Route::put('/update-user/{id}',[UserController::class, 'update']);

    // Delete
    Route::get('/delete-product/{id}',[ProductController::class, 'destroy']);
    Route::get('/delete-category/{id}',[CategoryController::class, 'destroy']);
    Route::get('/delete-user/{id}',[UserController::class, 'destroy']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
