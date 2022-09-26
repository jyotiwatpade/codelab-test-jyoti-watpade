<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;

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

Route::group(['middleware' => 'auth:sanctum'], function(){
	Route::get('getBrandList','App\Http\Controllers\User@getBrandList');
	Route::get('getBrandDetails','App\Http\Controllers\User@getBrandDetails');
	Route::post('createNewModel','App\Http\Controllers\User@createNewModel');

});

Route::post('getToken','App\Http\Controllers\User@index');
//Route::post("login".[User::class,'index']);