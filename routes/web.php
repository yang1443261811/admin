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
Route::post('users/store', 'UsersController@store');
Route::get('users/edit/{id}', 'UsersController@edit');
Route::post('users/update/{id}', 'UsersController@update');
Route::get('users/delete/{id}', 'UsersController@delete');
Route::get('articles', 'ArticlesController@index');
Route::get('articles/create', 'ArticlesController@create');
Route::post('articles/store', 'ArticlesController@store');
Route::get('articles/delete/{id}', 'ArticlesController@delete');
Route::get('articles/edit/{id}', 'ArticlesController@edit');
Route::post('articles/update/{id}', 'ArticlesController@update');
Route::get('discussions', 'DiscussionsController@index');
Route::get('discussions/create', 'DiscussionsController@create');
Route::post('discussions/store', 'DiscussionsController@store');
Route::get('discussions/edit/{id}', 'DiscussionsController@edit');
Route::post('discussions/update/{id}', 'DiscussionsController@update');
Route::get('discussions/delete/{id}', 'DiscussionsController@delete');
Route::get('comments', 'CommentsController@index');
Route::get('comments/edit/{id}', 'CommentsController@edit');
Route::any('comments/update/{id}', 'CommentsController@update');
Route::get('comments/delete/{id}', 'CommentsController@delete');
Route::get('comments', 'CommentsController@index');
Route::get('comments', 'CommentsController@index');
Route::get('tags', 'TagsController@index');
Route::get('tags/create', 'TagsController@create');
Route::post('tags/store', 'TagsController@store');
Route::get('tags/delete/{id}', 'TagsController@delete');
Route::any('tags/update/{id}', 'TagsController@update');
Route::get('categories', 'CategoriesController@index');
Route::get('categories/create', 'CategoriesController@create');
Route::post('categories/store', 'CategoriesController@store');
Route::any('categories/update/{id}', 'CategoriesController@update');
Route::get('categories/delete/{id}', 'CategoriesController@delete');
Route::get('links', 'LinksController@index');
Route::any('links/create', 'LinksController@create');
Route::get('links/edit/{id}', 'LinksController@edit');
Route::get('links/delete/{id}', 'LinksController@delete');
Route::post('links/update/{id}', 'LinksController@update');
Route::get('visitors', 'VisitorsController@index');
Route::get('system', 'SystemController@index');
Route::post('files/upload', 'FilesController@upload');
