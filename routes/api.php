<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\PropertyController;
use App\Http\Controllers\Api\UnitController;
use App\Http\Controllers\Api\UnitFacilitiesController;
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
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::resource('property', PropertyController::class);
    Route::resource('unit', UnitController::class);
    Route::resource('unit-facilities', UnitFacilitiesController::class);
});

Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'store']);
Route::put('update-profile/{id}', [UserController::class, 'update']);
