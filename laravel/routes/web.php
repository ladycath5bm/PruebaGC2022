<?php

use App\Http\Controllers\Gce_caracteristicasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/addOne', [Gce_caracteristicasController::class, 'addOne'])
    ->name('characteristic.addOne');
Route::get('/getOne/{id}', [Gce_caracteristicasController::class, 'getOne'])
    ->name('characteristic.getOne');
Route::get('/getAll', [Gce_caracteristicasController::class, 'getAll'])
    ->name('characteristic.getAll');

