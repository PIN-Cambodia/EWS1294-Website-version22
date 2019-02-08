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

Route::get('first_api',function(){
	return response()->json(['name'=>'sopheak','mobile'=>'888888','email'=>'sopheakyong@gmail.com','status'=>0]);
});



/*

Route::prefix('v1')->namespace('Api')->group(function(){

	Route::get('location.geojson','v1\SensorInfoController@getLocation');
	Route::get('sensors/{external_id}/datapoints','v1\SensorInfoController@getSensorDatapoint');
	Route::post('sensors/{external_id}/datapoints','v1\SensorInfoController@create');
	Route::put('sensors/{external_id}/datapoints','v1\SensorInfoController@create');

});

*/
//,'middleware'=>['auth:api']

Route::prefix('v1')->namespace('Api')->group(function(){

	Route::get('location.geojson','v1\SensorInfoController@getLocation');
	Route::get('sensors/{external_id}/datapoints','v1\SensorInfoController@getSensorDatapoint');
});


Route::group(['namespace'=>'Api','prefix'=>'v1','middleware'=>['auth:api']],function(){
	Route::post('sensors/{external_id}/datapoints','v1\SensorInfoController@create');
	Route::put('sensors/{external_id}/datapoints','v1\SensorInfoController@create');


});


/*
-	GET /api/v1/locations.geojson?type=(“Air”, “River”, “Groundwater”) (returns as geojson that can be read easily by Leaflet maps)
-	PUT /api/v1/sensors/{external_id} (with JSON body to update parameters)
-	POST /api/v1/sensors/{external_id}/datapoints (with JSON body)
-	GET /api/v1/sensors/{external_id}/datapoints?fromdate=yyyy-mm-dd-hh:mm:ss&todate= yyyy-mm-dd-hh:mm:ss 
 

*/
