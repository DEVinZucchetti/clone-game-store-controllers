<?php

use App\Http\Controllers\MarkerController;
use Illuminate\Support\Facades\Route;

//Routes MarkerController
Route::post('markers', [MarkerController::class, 'store']);
Route::get('markers', [MarkerController::class, 'index']);
Route::delete('markers/{id}', [MarkerController::class, 'destroy']);

//Routes ProductMarkerController
Route::post('products_markers', [MarkerController::class, 'store']);
Route::get('products_markers', [MarkerController::class, 'index']);
Route::delete('products_markers/{id}', [MarkerController::class, 'destroy']);