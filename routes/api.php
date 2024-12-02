<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


//visualizar todos los Productos
Route::get('/products', [ProductController::class,'index']);

//visualizar un producto en concreto
Route::get('/products/{id}',[ProductController::class,'show']);

//insertar un producto
Route::post('/products', [ProductController::class,'store']);

//actualizar un producto en concreto
Route::put('/products/{id}', action: [ProductController::class,'update']);

//actualizar un producto en concreto pero con algo en especifico
Route::patch('/products/{id}', action: [ProductController::class,'updatePartial']);

//eliminar un producto en concreto
Route::delete('/products/{id}',[ProductController::class,'destroy'] );