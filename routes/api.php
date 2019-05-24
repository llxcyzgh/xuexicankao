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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

//Route::get('/users', function () {
//    if (rand(1, 10) < 5) {
//        abort(500, 'We could not retrieve the users');
//    }
//    return factory('App\Models\User', 10)->make();
//});

Route::namespace('Api')->group(function () {
    Route::get('/users/test', 'UsersController@test');// test

    Route::get('/users', 'UsersController@index');
    Route::get('/users/{user}', 'UsersController@show');
    Route::patch('/users/{user}', 'UsersController@update');
    Route::delete('/users/{user}', 'UsersController@destroy');
});
