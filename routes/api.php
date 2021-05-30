<?php

use App\Http\Controllers\courseMenuController;
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
use App\Http\Controllers\mapController;
use App\Http\Controllers\ReserveController;
use App\Http\Controllers\ReserveSortController;
use App\Http\Controllers\ExpiredReservationController;



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
/**_______________________________registe___r___________________ */
Route::post('/register',[RegisterController::class,'register']);
/**_______________________________login,logout___________________ */
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LogoutController::class, 'logout']);
Route::apiResource('/user', UserController::class);
/**______________________________restaurant______________________ */
Route::apiResource('/restaurant',RestaurantController::class);
/**___________________________________favorite____________________ */
Route::get('/favorite/{user_id}',[FavoriteController::class,'show']);
Route::get('/favorite',[FavoriteController::class,'sort']);
Route::post('/favorite',[FavoriteController::class,'store']);
/**________________________________reservation_______________________ */
Route::apiResource('/reservation', ReserveController::class);
Route::get('/reservesort/{user_id}',[ReserveSortController::class,'show']);
Route::get('/reservesort',[ReserveSortController::class,'sort']);
/**_______________________________expired_reservation________________ */
Route::get('/expired',[ExpiredReservationController::class,'index']);
/**________________________________location__________________________ */
Route::apiResource('/location',LocationController::class);
/**___________________________________genre__________________________ */
Route::apiResource('/genre',GenreController::class);
/**_________________________________evaluation_______________________ */
Route::apiResource('/evaluation',EvaluationController::class);
Route::get('/evaluationsort/{restaurant_id}',[EvaluationSortController::class,'restaurantSort']);
Route::get('/evaluationsort',[EvaluationSortController::class,'userSort']);
/**________________________________map__________________________________ */
Route::get('/map',[mapController::class,'index']);
Route::post('/map', [mapController::class, 'store']);
Route::get('/map/{restaurant_id}', [mapController::class, 'show']);
Route::put('/map/{id}', [mapController::class, 'update']);
Route::delete('/map/{id}', [mapController::class, 'destroy']);
/**______________________________courseMenu____________________________ */
Route::get('/coursemenu',[courseMenuController::class,'index']);
Route::post('/coursemenu', [courseMenuController::class, 'store']);
Route::get('/coursemenu/{restaurant_id}', [courseMenuController::class, 'show']);
Route::put('/coursemenu/{id}', [courseMenuController::class, 'update']);
Route::delete('/coursemenu/{id}', [courseMenuController::class, 'destroy']);