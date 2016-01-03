<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@index');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
	Route::get('/articles',[
		'as' => 'get.articles',
		'uses' => 'ArticlesController@index'
	]);

	Route::post('/articles', [
		'middleware' =>  'auth',
		'as' => 'articles.store',
		'uses' => 'ArticlesController@store'
	]);
	Route::get('articles/create', [
		'middleware' =>  'auth',
		'as' => 'articles.create',
		'uses' => 'ArticlesController@create'
	]);
	Route::get('/articles/{id}',[
		'as' => 'articles.show',
		'uses' => 'ArticlesController@show'
	]);

	Route::get('/artiles/{id}/edit`',[
		'middleware' =>  'auth',
		'as' => 'articles.edit',
		'uses' => 'ArticlesController@edit'
	]);

	Route::put('/artiles/{id}/edit', [
		'middleware' =>  'auth',
		'as' => 'articles.update',
		'uses' => 'ArticlesController@update'
	]);
	Route::get('articles/{id}/delete', [
		'middleware' =>  'auth',
		'as' => 'articles.delete',
		'uses' => 'ArticlesController@delete'
	]);

	Route::get('/facebook',[
		'as'  => 'facebook.login',
		'uses' => 'ApiLoginController@facebook'
	]);

	Route::get('/fbcallback',[
		'as' => 'facebook.callback',
		'uses' => 'ApiLoginController@fbCallback'
	]);
});


Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
