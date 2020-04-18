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

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/
//Ussd Session Route
Route::post('ussd-session', 'UssdController@session');

//User Related Routes
Route::post('add_user','User@createUser');
Route::post('update_user/{id}','User@updateUser');

//Driver Related Routes
Route::get('drivers','Driver@getDrivers');
Route::post('add_driver','Driver@createDriver');
Route::post('update_driver/{id}','Driver@updateDriver');
Route::get('parcel_requests','Driver@getParcelRequests');
Route::post('confirm_parcel/{driver_id}','Driver@setParcelRequest');
Route::post('update_order/{parcel_detail_id}','Driver@updateOrderStatus');

//Parcel routes
Route::post('parcel_request','Parcel@addParcelRequest');
Route::post('parcel_details/{parcel_id}','Parcel@addParcelDetails');
Route::get('parcel_drivers','Parcel@getDrivers');
Route::post('rate_order/{parcel_id}','Parcel@rateOrder');
