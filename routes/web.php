<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@dashboard');
Route::get('users', 'UsersController@index');
Route::get('users/create', 'UsersController@create');
Route::get('articles', 'ArticlesController@index');
Route::get('articles/create', 'ArticlesController@create');
Route::get('discussions', 'DiscussionsController@index');
Route::get('discussions/create', 'DiscussionsController@create');
Route::get('comments', 'CommentsController@index');
Route::get('tags', 'TagsController@index');
Route::get('tags/create', 'TagsController@create');
Route::get('categories', 'CategoriesController@index');
Route::get('categories/create', 'CategoriesController@create');
Route::get('links', 'LinksController@index');
Route::get('links/create', 'LinksController@create');
Route::get('visitors', 'VisitorsController@index');
Route::get('system', 'SystemController@index');
