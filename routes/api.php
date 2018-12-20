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

Route::group(['namespace' => 'Api'], function () {
    Route::post('/comment/show/{id}', 'CommentController@show')->middleware('auth:api');
    Route::post('/comment/create', 'CommentController@create')->middleware('auth:api');
    Route::post('/comment/vote/{type}', 'CommentController@postVoteComment')->middleware('auth:api');
    Route::post('/files/upload', 'FilesController@upload')->middleware('auth:api');
    Route::post('/crop/avatar', 'UserController@cropAvatar')->middleware('auth:api');
    Route::get('/statistics', 'HomeController@statistics')->middleware('auth:api');
    Route::get('/users', 'UserController@index')->middleware('auth:api');
    Route::get('/user/status', 'UserController@status')->middleware('auth:api');
    Route::get('/user/delete/{id}', 'UserController@delete')->middleware('auth:api');
    Route::get('/user/{id}/edit', 'UserController@edit')->middleware('auth:api');
    Route::post('/user/update/{id}', 'UserController@update')->middleware('auth:api');
});
