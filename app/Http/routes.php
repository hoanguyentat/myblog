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

	Route::group(['prefix' => '/articles'], function(){

		Route::get('/',[
			'as' => 'get.articles',
			'uses' => 'ArticlesController@index'
		]);

		Route::post('/', [
			'middleware' =>  'auth',
			'as' => 'articles.store',
			'uses' => 'ArticlesController@store'
		]);
		Route::get('/create', [
			'middleware' =>  ['auth'],
			'as' => 'articles.create',
			'uses' => 'ArticlesController@create'
		]);
		Route::get('/{id}',[
			'as' => 'articles.show',
			'uses' => 'ArticlesController@show'
		]);

		Route::post('/{id}',[
			'middleware' => 'auth',
			'as' => 'articles.storecoment',
			'uses' => 'ArticlesController@commentUpdate'
		]);

		Route::get('/{id}/edit`',[
			'middleware' =>  ['auth','admin'],
			'as' => 'articles.edit',
			'uses' => 'ArticlesController@edit'
		]);

		Route::put('/{id}/edit', [
			'middleware' =>  ['auth','admin'],
			'as' => 'articles.update',
			'uses' => 'ArticlesController@update'
		]);
		Route::get('/{id}/delete', [
			'middleware' =>  ['auth','admin'],
			'as' => 'articles.delete',
			'uses' => 'ArticlesController@delete'
		]);
	});

	Route::get('/unauthorized', [
		'as' => 'unauthorized',
		'uses' => 'ArticlesController@unauthorized'
	]);

	Route::get('/auth/facebook',[
		'as'  => 'facebook.login',
		'uses' => 'Auth\AuthController@facebook'
	]);

	Route::get('/fbcallback',[
		'as' => 'facebook.callback',
		'uses' => 'Auth\AuthController@fbCallback'
	]);

	Route::get('/google', [
		'as'  => 'google.login',
		'uses' => 'Auth\AuthController@google'
	]);
	Route::get('/ggcallback',[
		'as' => 'google.callback',
		'uses' => 'Auth\AuthController@ggCallback'
	]);

	Route::get('/aboutme',[
		'as' => 'about.me',
		'uses' => 'InformationMember@aboutme'
	]);
});


Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
