<?php

use App\Http\Controllers\ActividadController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\CuidadorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('animales', [AnimalController::class, 'index']);
Route::get('animales/{id}', [AnimalController::class, 'show']);
Route::post('animales', [AnimalController::class, 'store']);
Route::patch('animales/{id}', [AnimalController::class, 'update']);
Route::delete('animales/{id}', [AnimalController::class, 'destroy']);

Route::get('cuidador', [CuidadorController::class, 'index']);
Route::get('cuidador/{id}', [CuidadorController::class, 'show']);
Route::post('cuidador', [CuidadorController::class, 'store']);
Route::patch('cuidador/{id}', [CuidadorController::class, 'update']);
Route::delete('cuidador/{id}', [CuidadorController::class, 'destroy']);

Route::get('actividad', [ActividadController::class, 'index']);
Route::get('actividad/{id}', [ActividadController::class, 'show']);
Route::post('actividad', [ActividadController::class, 'store']);
Route::patch('actividad/{id}', [ActividadController::class, 'update']);
Route::delete('actividad/{id}', [ActividadController::class, 'destroy']);

