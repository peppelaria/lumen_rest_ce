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
	return "<div>Aestiquatsi_API</div>";
});

$app->group(['prefix' => 'api/v1','namespace' => 'App\Http\Controllers'], function($app)
{

    //user

	//$app->get('user','UserController@index');

	$app->get('user/{id}','UserController@getUser');
	$app->get('user/me/profile/{access_token}','MeController@getMe');

	//$app->post('user','UserController@createUser');

	//$app->put('user/{id}','UserController@updateUser');

	//$app->delete('user/{id}','UserController@deleteUser');

    //Tests
	//$app->get('test','TestListController@index');

	//$app->post('test','TestListController@createTest');

	//$app->put('test/{cf_id}','TestListController@updateTest');

	//$app->delete('test/{cf_id}','TestListController@deleteTest');

	//tests
	$app->get('testinfo/{test_uid}','TestController@getTest');
	$app->put('user/{student_id}/test/{test_uid}','TestController@updateTest');
	$app->get('user/{student_id}/test_list','UserTestListController@getTest');

	$app->get('question/{cf_uid}','QuestionController@getQuestion');

	//authorization
	$app->post('/oauth/access_token', function() use ($app) {
		return response()->json($app->make('oauth2-server.authorizer')->issueAccessToken());
	});
});
