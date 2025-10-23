<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Api\ReviewController;

Route::apiResource('products', ProductController::class);
Route::apiResource('reviews', ReviewController::class);


Route::get('/test', function () {
    return response()->json(['message' => 'API working!']);
});
