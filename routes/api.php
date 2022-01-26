<?php

use App\Http\Controllers\BarrioController;
use App\Http\Controllers\InmuebleController;
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
Route::get('/barrios/all', [BarrioController::class, 'index']);
