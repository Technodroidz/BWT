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



// custom route for form

Route::post('/updateAcct', function(){
        return 'updated';
})->name('updateAcct');

// end form


Route::post('login', 'Api\UserController@login');
Route::post('otp', 'Api\UserController@getOtp');
Route::post('register', 'Api\UserController@register');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Backend URLS
// Route::group(['as' => 'user.', 'middleware' => ['auth:api'], 'prefix' => 'user'], function () {
Route::middleware('auth:api')->group( function () {
    Route::get('user/{id?}', 'Api\UserController@index')->where('id', '[0-9]+');
    Route::post('user/update_basic_details', 'Api\UserController@updateBasicDetails');
});
// HINDI VERSION
Route::group(['as' => 'v1.','middleware' => ['auth:api'], 'prefix' => 'v1'], function () {
	Route::get('user/course','Api\UserController@getAllCourse');
	Route::get('user/state','Api\UserController@getAllState');
	// Route::get('banner', 'Api\UserController@getAllBanner');
    Route::get('banner',        'Api\HomeController@getHome');
    Route::get('home',        'Api\HomeController@getHomeData');
    Route::get('home_next/{id}','Api\HomeController@get_chiled_cat')->where('id', '[0-9]+');
});
// ENGLISH VERSION
Route::group(['as' => 'v2.','middleware' => ['auth:api'], 'prefix' => 'v2'], function () {
	Route::get('user/course','Api\UserController@getAllCourse');
	Route::get('user/state','Api\UserController@getAllState');
	Route::get('user/city/{id}','Api\UserController@getAllCity');
});

Route::any('{path}', function() {
    return response()->json([
        'status'  => false,
        'code'    => 404,
        'data'    => [],
        'message' => 'OPPS! Resource not found'
    ], 404);
})->where('path', '.*');

