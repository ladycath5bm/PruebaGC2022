<?php

use App\Http\Controllers\Api\Gce_caracteristicasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaracteristicasController;

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

Route::get('characteristics/getAll', [Gce_caracteristicasController::class, 'getAll'])->name('api.characteristics.getAll');
Route::get('characteristics/getOne/{id}', [Gce_caracteristicasController::class, 'getOne'])->name('api.characteristics.getOne');
Route::post('characteristics/addOne', [Gce_caracteristicasController::class, 'addOne'])->name('api.characteristics.addOne');

