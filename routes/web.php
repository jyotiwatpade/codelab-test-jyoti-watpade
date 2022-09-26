<?php

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
    return view('login');
});

Route::get('login','App\Http\Controllers\Login@login');
Route::get('logout','App\Http\Controllers\Login@logout');
Route::post('loginsubmit','App\Http\Controllers\Login@loginsubmit');


Route::group(['middleware'=>['logCheck']],function(){
//car brands
Route::get('createbrand','App\Http\Controllers\Carbrands@createbrand');
Route::post('submitbrand','App\Http\Controllers\Carbrands@submitbrand');
Route::get('editbrand/{id}','App\Http\Controllers\Carbrands@editbrand');
Route::post('updatebrand','App\Http\Controllers\Carbrands@updatebrand');
Route::get('deletebrand/{id}','App\Http\Controllers\Carbrands@deletebrand');
Route::get('listbrands','App\Http\Controllers\Carbrands@listbrands');

// car models
Route::get('createmodel','App\Http\Controllers\Carmodels@createmodel');
Route::post('submitmodel','App\Http\Controllers\Carmodels@submitmodel');
Route::get('editmodel/{id}','App\Http\Controllers\Carmodels@editmodel');
Route::post('updatemodel','App\Http\Controllers\Carmodels@updatemodel');
Route::get('deletemodel/{id}','App\Http\Controllers\Carmodels@deletemodel');
Route::get('listmodels','App\Http\Controllers\Carmodels@listmodels');

	
});