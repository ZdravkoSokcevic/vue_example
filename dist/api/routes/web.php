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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/test', function () {

	$data= [
		[
			'id' => 1,
			'first_name' => 'Zdravko',
			'last_name' => 'Sokcevic'
		],[
			'id' => 2,
			'first_name' => 'John',
			'last_name' => 'Doe'
		], [
			'id' => 3,
			'first_name' => 'John',
			'last_name' => 'Doe',
		], [
			'id' => 4,
			'first_name' => 'Strahinja',
			'last_name' => 'Milosevic',

		],[
			'id' => 5,
			'first_name' => 'Mirko',
			'last_name' => 'Mijovic'
		],[
			'id' => 6,
			'first_name' => 'Milan',
			'last_name' => 'Krstic'
		], [
			'id' => 7,
			'first_name' => 'Pavle',
			'last_name' => 'Vukovic',
		], [
			'id' => 8,
			'first_name' => 'Vladislav',
			'last_name' => 'Cosic',

		]
	];
	return response()->json($data);
});
