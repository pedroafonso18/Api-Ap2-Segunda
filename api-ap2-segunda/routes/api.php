<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\VendedorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/vendedores/index', [VendedorController::class, 'index']);
Route::get('/vendedores/{id}/show', [VendedorController::class, 'show']);
Route::get('/vendedores/store', [VendedorController::class, 'store']);
Route::get('/vendedores/{id}/update', [VendedorController::class, 'update']);
Route::get('/vendedores/{id}/destroy', [VendedorController::class, 'destroy']);
Route::get('/produtos/index', [ProdutoController::class, 'index']);
Route::get('/produtos/{id}/show', [ProdutoController::class, 'show']);
Route::get('/produtos/store', [ProdutoController::class, 'store']);
Route::get('/produtos/{id}/update', [ProdutoController::class, 'update']);
Route::get('/produtos/{id}/destroy', [ProdutoController::class, 'destroy']);
