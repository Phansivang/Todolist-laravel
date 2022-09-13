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

Route::get('/','App\Http\Controllers\TodoController@index');
Route::get('test/',function (){
    $data = ['P1'=>'Iphone5','P2'=>'Iphone6s'];
    return view('main')->with('data',$data);
});
Route::get('user',function (){
    $json = response()->json([
        'username' => 'Phansivang',
        'password' => 'blablalblb',
    ]);
    return $json;
});
Route::post('/',[TodoController::class,'store']);
Route::delete('/delete/{todo}',[TodoController::class,'destroy']);

