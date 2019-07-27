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

//Route::post('all-Users', 'UserController@getAllUsers');

Route::get('district/{id?}' , 'DistrictController@getDistrict');

Route::get('local/{id?}' , 'LocalGovtController@getLocal');

Route::get('state' , 'StateController@GetStates');

Route::post('log', 'UserController@login');
