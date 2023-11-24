<?php

use App\Http\Controllers\ProductAssetController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('products', [ProductController::class, 'index']);
Route::post('products', [ProductController::class, 'store']);
Route::get('products/{id}', [ProductController::class, 'show']);
Route::delete('products/{id}', [ProductController::class, 'destroy']);
Route::put('products/{id}', [ProductController::class, 'update']);


Route::get('products_assets', [ProductAssetController::class, 'index']);
Route::post('products_assets', [ProductAssetController::class, 'store']);