<?php

use App\Http\Controllers\BarrioController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\InmuebleController;
use App\Http\Controllers\RolPersonaController;
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

Route::get('/inmuebles/all', [InmuebleController::class, 'index']);
Route::get('/inmuebles/{id}', [InmuebleController::class, 'show']);
Route::post('/inmuebles/add', [InmuebleController::class, 'store']);
Route::put('/inmuebles/{id}', [InmuebleController::class, 'update']);
Route::get('/barrios/all', [BarrioController::class, 'index']);
Route::post('/fotos/add', [FotoController::class, 'store']);
Route::delete('/fotos/{id}', [FotoController::class, 'destroy']);
Route::get('/rolesPersonas/{tipo}', [RolPersonaController::class, 'index']);
