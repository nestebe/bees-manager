<?php

use Illuminate\Http\Request;
Use App\Rucher;
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

//api/ruchers
Route::middleware('auth:api')->get('/ruchers', 'RucherController@list');
Route::middleware('auth:api')->post('/ruchers', 'RucherController@create');
Route::middleware('auth:api')->get('/ruchers/{id}', 'RucherController@show');
Route::middleware('auth:api')->put('/ruchers/{id}', 'RucherController@update');
Route::middleware('auth:api')->delete('/ruchers/{id}', 'RucherController@delete');

//api/ruches
Route::middleware('auth:api')->get('/ruches', 'RucheController@list');
Route::middleware('auth:api')->post('/ruches', 'RucheController@create');
Route::middleware('auth:api')->get('/ruches/{id}', 'RucheController@show');
Route::middleware('auth:api')->put('/ruches/{id}', 'RucheController@update');
Route::middleware('auth:api')->delete('/ruches/{id}', 'RucheController@delete');

//api/colonies
Route::middleware('auth:api')->get('/colonies', 'ColonieController@list');
Route::middleware('auth:api')->post('/colonies', 'ColonieController@create');
Route::middleware('auth:api')->get('/colonies/{id}', 'ColonieController@show');
Route::middleware('auth:api')->put('/colonies/{id}', 'ColonieController@update');
Route::middleware('auth:api')->delete('/colonies/{id}', 'ColonieController@delete');

//api/recoltes
Route::middleware('auth:api')->get('/recoltes', 'RecolteController@list');
Route::middleware('auth:api')->post('/recoltes', 'RecolteController@create');
Route::middleware('auth:api')->get('/recoltes/{id}', 'RecolteController@show');
Route::middleware('auth:api')->put('/recoltes/{id}', 'RecolteController@update');
Route::middleware('auth:api')->delete('/recoltes/{id}', 'RecolteController@delete');

//api/inspections
Route::middleware('auth:api')->get('/inspections', 'InspectionController@list');
Route::middleware('auth:api')->post('/inspections', 'InspectionController@create');
Route::middleware('auth:api')->get('/inspections/{id}', 'InspectionController@show');
Route::middleware('auth:api')->put('/inspections/{id}', 'InspectionController@update');
Route::middleware('auth:api')->delete('/inspections/{id}', 'InspectionController@delete');

Route::group([

    'middleware' => 'api',
    'namespace' => 'API\V1\Auth',
    'prefix' => 'v1/auth'

], function ($router) {
    Route::group(['middleware' => 'guest:api'], function () {
        Route::post('login', 'LoginController@login');
        Route::post('register', 'RegisterController@register');
        Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail');
        Route::post('password/reset', 'ResetPasswordController@reset');
    });

    Route::group(['middleware' => 'auth:api'], function () {
        Route::post('logout', 'AuthController@logout');
        Route::post('refresh', 'AuthController@refresh');
        Route::post('me', 'AuthController@me');
        Route::get('me', 'AuthController@me');
    });
});
