<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UnitController;

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

Route::get('/', [LandingPageController::class,"logo"]);
Route::get('/login', [LandingPageController::class,"loginButton"]);
Route::get('/register', [LandingPageController::class,"registerButton"]);

Route::post('/register', [UserController::class,"store"]);
Route::post('/login', [UserController::class,"login"]);

Route::get('/add-property', [PropertyController::class,"view"]);
Route::post('/add-property', [PropertyController::class,"store"]);

Route::get('/property/{id}/add-unit', [UnitController::class,"view"]);
Route::post('/property/{id}/add-unit', [UnitController::class,"store"]);
