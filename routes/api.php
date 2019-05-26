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

//Route::namespace('Api')->group(function () {
//    Route::post('/users', 'UsersController@store');
//    Route::post('/authorizations', 'AuthorizationsController@store');
//});

$api = app('Dingo\Api\Routing\Router');


$api->version('v1', [
    'namespace'  => 'App\Http\Controllers\Api\V1',
    'middleware' => [
        'bindings',
    ],
], function ($api) {
    // 无需登录
    $api->group([], function ($api) {
        $api->post('/users', 'UsersController@store');
        $api->post('/authorizations', 'AuthorizationsController@store');
        $api->put('/authorizations','AuthorizationsController@update');

    });

    // 需要登录
    $api->group(['middleware' => 'api.auth'], function ($api) {
        $api->any('/test', 'AuthorizationsController@test');


    });
});

