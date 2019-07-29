<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you c                   an register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('v1')->group(function () { 
    
    /* Authentication */
    Route::post('login', 'API\UserController@login');
    Route::post('register', 'API\UserController@register');


    /* token middleware */
    Route::group(['middleware' => 'auth:api'], function(){
        Route::post('details', 'API\QuestionAnswerController@details');
    });
});