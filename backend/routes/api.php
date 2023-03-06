<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlanteController;
use App\Http\Controllers\ConseilController;
use Illuminate\Routing\Route as RoutingRoute;

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

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
// Route::middleware('auth:sanctum')->get('/user', [UserController::class, 'user']); 

Route::get('/plante', [PlanteController::class, 'index']);
Route::post('/plante', [PlanteController::class, 'store']);
Route::get('/plante/{id}', [PlanteController::class, 'show']);
Route::put('/plante/{id}', [PlanteController::class, 'update']);
Route::delete('/plante/{id}', [PlanteController::class, 'destroy']);

Route::get('/conseil', [ConseilController::class, 'index']);
Route::post('/conseil', [ConseilController::class, 'store']);
Route::get('/conseil/{id}', [ConseilController::class, 'show']);
Route::put('/conseil/{id}', [ConseilController::class, 'update']);
Route::delete('/conseil/{id}', [ConseilController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

