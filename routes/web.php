<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/user', [\App\Http\Controllers\JsonController::class , 'index']);
Route::get('/', [\App\Http\Controllers\JsonController::class , 'index']);
Route::get('/photos', [\App\Http\Controllers\JsonController::class , 'photoCard']);
Route::get('/todos', [\App\Http\Controllers\JsonController::class , 'todos']);

//Route::get('/', function () {
//    return view('welcome');
//});


