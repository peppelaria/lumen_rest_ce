<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function() use ($app) {
	return "Lumen RESTful API By CoderExample (http://coderexample.com)";
});

$app->group(['prefix' => 'api/v1','namespace' => 'App\Http\Controllers'], function($app)
{

    //user

	$app->get('user','UserController@index');

	$app->get('user/{id}','UserController@getUser');

	$app->post('user','UserController@createUser');

	$app->put('user/{id}','UserController@updateUser');

	$app->delete('user/{id}','UserController@deleteUser');

    //Tests
	$app->get('test','TestListController@index');

	$app->get('test/{cf_id}','TestListController@getTest');

	$app->post('test','TestListController@createTest');

	$app->put('test/{cf_id}','TestListController@updateTest');

	$app->delete('test/{cf_id}','TestListController@deleteTest');
});
