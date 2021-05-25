<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Use App\Models\Article;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
#Route::apiResource('articles', App\Http\Controllers\ArticleController::class);


Route::get('/articles', [ArticleController::class,'index']);
Route::post('/articles/create', [ArticleController::class,'store']);
Route::put('/articles/edit/{id}', [ArticleController::class,'update']);
Route::delete('/articles/{id}', [ArticleController::class,'delete']);
Route::get('/articles/{id}', [ArticleController::class,'show']);
Route::get('/articles/status/{status}', [ArticleController::class,'count']);