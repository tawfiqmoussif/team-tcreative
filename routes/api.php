<?php

use Illuminate\Http\Request;

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
//personnes
Route::post('personne','PersonneController@store');
Route::get('personnes','PersonneController@index');
//employes
Route::get('employe/{id}','EmployeController@show');
Route::get('employes','EmployeController@index');
Route::post('employe','EmployeController@store');
Route::delete('employe/{id}', 'EmployeController@destroy');
Route::get('employe/{id}','EmployeController@show');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
