<?php

use App\Http\Controllers\Api\V1\NewsApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/news', [NewsApiController::class, 'getAllNews']);
Route::get('/news/{id}', [NewsApiController::class, 'getNews']);
Route::patch('/news/state', [NewsApiController::class, 'changeNewsState']);
