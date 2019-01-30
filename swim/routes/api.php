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

    Route::post('login','Api\AuthController@login');
 
 //Route for authenticated user
    Route::group(['middleware'=>'auth:api'],function(){
		   Route::apiResource('/game','GameController');
		    Route::apiResource('/competition','CompetitionController');
	       Route::apiResource('/swimmer','SwimmerController');
	       Route::apiResource('/group','GroupController');
	       Route::apiResource('/swimmingpool','SwimmingpoolController');
	       Route::post('/logout','Api\AuthController@logout');
    //Route for superadmin
	   Route::group(['middleware'=>'admin'],function(){
           Route::post('/register','Api\AuthController@register');
           Route::apiResource('/useredit','Api\EditUserController');

});
});






