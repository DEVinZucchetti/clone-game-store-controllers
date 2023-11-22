<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AvaliationController;

// implemente sua rota;

Route::post('/avaliations', [AvaliationController::class, 'store']);
Route::get('/avaliations', [AvaliationController::class, 'index']);
Route::get('/avaliations/{id}', [AvaliationController::class, 'show']);
Route::put('/avaliations/{id}', [AvaliationController::class, 'update']);
Route::delete('/avaliations/{id}', [AvaliationController::class, 'destroy']);