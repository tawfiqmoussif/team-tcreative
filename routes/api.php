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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('personne','PersonneController@store');
//Route::resource('personnes', 'PersonneController');
Route::post('user','UserController@store');
Route::get('personnes','PersonneController@index');
Route::get('users','UserController@index');
Route::get('personne/{id}','PersonneController@show');

// Delete personne
Route::delete('user/{id}', 'UserController@destroy');
// Delete article
Route::delete('personne/{id}', 'PersonneController@destroy');