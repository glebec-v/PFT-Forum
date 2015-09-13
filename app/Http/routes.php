<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'CategoriesController@index'); // TODO временное решение!!!
Route::get('/home', 'CategoriesController@index'); // TODO временное решение!!!

Route::resource('categories', 'CategoriesController');
Route::resource('post', 'PostController');

Route::controllers([
    'posts' => 'PostsThreadsController'
]);
