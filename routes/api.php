<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/news', [\App\Http\Controllers\Api\V1\NewsApiController::class, 'getAllNews']);
Route::get('/news/{id}', [\App\Http\Controllers\Api\V1\NewsApiController::class, 'getNews']);
Route::patch('/news/{id}', [\App\Http\Controllers\Api\V1\NewsApiController::class, 'changeNewsState']);
