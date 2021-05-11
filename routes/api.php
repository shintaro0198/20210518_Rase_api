<?php

use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\EvaluationSortController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ReserveController;
use App\Http\Controllers\ReserveSortController;
use App\Http\Controllers\TestController;

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
Route::post('/test',[TestController::class,'test']);
Route::post('/register',[RegisterController::class,'register']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LogoutController::class, 'logout']);
Route::apiResource('/user', UserController::class);
Route::apiResource('/restaurant',RestaurantController::class);
Route::get('/favorite/{user_id}',[FavoriteController::class,'show']);
Route::get('/favorite',[FavoriteController::class,'sort']);
Route::post('/favorite',[FavoriteController::class,'store']);
Route::apiResource('/reservation', ReserveController::class);
Route::get('/reservesort/{user_id}',[ReserveSortController::class,'show']);
Route::get('/reservesort',[ReserveSortController::class,'sort']);
Route::apiResource('/location',LocationController::class);
Route::apiResource('/genre',GenreController::class);
Route::apiResource('/evaluation',EvaluationController::class);
Route::get('/evaluationsort/{restaurant_id}',[EvaluationSortController::class],'showRestaurant');