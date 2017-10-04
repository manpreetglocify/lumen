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

$router->group(['prefix' => 'api/v1/customer'], function ($router) {
    $router->get('/','CustomerController@index'); //get all the routes	
    $router->post('/','CustomerController@store'); //store single route
    $router->get('/{id}/', 'CustomerController@show'); //get single route
    $router->put('/{id}/','CustomerController@update'); //update single route
    $router->delete('/{id}/','CustomerController@destroy'); //delete single route 
});

$router->group(['prefix' => 'api/v1/country'], function ($router) {
    $router->get('/','CountryController@index'); //get all the countries	
    $router->get('/{id}/', 'CountryController@show'); //get single country
	$router->get('region/{id}/', 'CountryController@region'); //get regions
});

