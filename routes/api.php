<?php


use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductAssetController;
use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AvaliationController;

Route::get('products', [ProductController::class, 'index']);
Route::post('products', [ProductController::class, 'store']);
Route::get('products/{id}', [ProductController::class, 'show']);
Route::delete('products/{id}', [ProductController::class, 'destroy']);
Route::put('products/{id}', [ProductController::class, 'update']);

Route::post('/avaliations', [AvaliationController::class, 'store']);
Route::get('/avaliations', [AvaliationController::class, 'index']);
Route::get('/avaliations/{id}', [AvaliationController::class, 'show']);
Route::put('/avaliations/{id}', [AvaliationController::class, 'update']);
Route::delete('/avaliations/{id}', [AvaliationController::class, 'destroy']);

Route::get('products_assets', [ProductAssetController::class, 'index']);
Route::post('products_assets', [ProductAssetController::class, 'store']);
Route::get('products_assets/{id}', [ProductAssetController::class, 'show']);
Route::delete('products_assets/{id}', [ProductAssetController::class, 'destroy']);
Route::put('products_assets/{id}', [ProductAssetController::class, 'update']);

Route::post('/categories', [CategoryController::class, 'store']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{id}', [CategoryController::class, 'show']);
Route::put('/categories/{id}', [CategoryController::class, 'update']);
Route::delete('/categories/{id}', [CategoryController::class, 'destroy']);
