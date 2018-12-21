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

Route::group(['namespace' => 'Api', 'middleware' => ['auth:api']], function () {
    Route::post('/comment/show/{id}', 'CommentController@show');
    Route::post('/comment/create', 'CommentController@create');
    Route::post('/comment/vote/{type}', 'CommentController@postVoteComment');
    Route::post('/files/upload', 'FilesController@upload');
    Route::post('/crop/avatar', 'UserController@cropAvatar');
    Route::get('/statistics', 'HomeController@statistics');
    Route::get('/users', 'UserController@index');
    Route::get('/user/status', 'UserController@status');
    Route::get('/user/delete/{id}', 'UserController@delete');
    Route::get('/user/{id}/edit', 'UserController@edit');
    Route::post('/user/update/{id}', 'UserController@update');
    Route::post('/user/create', 'UserController@create');
    Route::get('/articles', 'ArticlesController@index');
    Route::post('/article/create', 'ArticlesController@create');
    Route::get('/article/delete/{id}', 'ArticlesController@delete');
    Route::get('/categories', 'CategoryController@getList');
    Route::get('/tags', 'TagController@getList');
});
