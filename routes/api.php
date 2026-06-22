<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//authintication
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth:sanctum');

//category CRUD
Route::post('/category', [CategoryController::class, 'store']);
Route::get('/category', [CategoryController::class, 'index']);
Route::put('/category/{id}', [CategoryController::class, 'update']);
Route::get('/category/{id}', [CategoryController::class, 'show']);
Route::delete('/category/{id}', [CategoryController::class, 'delete']);

Route::middleware('auth:sanctum')->group(
    function () {
//Order CRUD
Route::prefix('/order')->group(function(){
Route::post('', [OrderController::class, 'store']);
Route::get('', [OrderController::class, 'index']);
Route::put('/{id}', [OrderController::class, 'update']);
//Route::get('/{id}', [OrderController::class, 'show']);
//Route::delete('/{id}', [OrderController::class, 'delete']);
});
        Route::get('/allorders', [OrderController::class, 'getallorders'])->middleware('is_admin');
    });



#Route::apiResource('/product', [ProductController::class]);
Route::get('/product', [ProductController::class, 'index']);
Route::post('/product', [ProductController::class, 'store']);
Route::get('/product/{id}', [productController::class, 'show']);

route::get('/category/{id}/products', [CategoryController::class, 'getproducts']);
route::get('/product/{id}/category', [ProductController::class, 'getcategory']);
