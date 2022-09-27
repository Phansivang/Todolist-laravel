<?php

use App\Http\Controllers\TodoController;
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
Route::resource('/',TodoController::class);
Route::post('/',[TodoController::class,'store']);
Route::get('{id}/edit/',[TodoController::class,'edit']);
Route::put('/update/{id}/',[TodoController::class,'update']);
Route::delete('/delete/{todo}',[TodoController::class,'destroy']);

