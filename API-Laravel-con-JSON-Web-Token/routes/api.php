<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('profile', [AuthController::class, 'profile']);
    Route::get('products', [ProductController::class, 'allProducts']);
    Route::post('createProduct', [ProductController::class, 'createProduct']);
    Route::get('findProduct/{id}', [ProductController::class, 'findProduct']);
    Route::put('editProduct/{id}', [ProductController::class, 'editProduct']);
    Route::delete('deleteProduct/{id}', [ProductController::class, 'destroyProduct']);

});

