<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('login', 'api\\AuthController@login');

Route::post('con', function (Request $request) {
    return json_encode($request->all());
});
    // Route::post('refresh', 'AuthController@refresh');
    // Route::post('me', 'AuthController@me');


Route::group([
     'middleware' => 'apiJwt',
], function () {
Route::post('logout', 'api\\AuthController@logout');
Route::get('users','UserController@index');   
});
