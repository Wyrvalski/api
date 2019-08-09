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

$router->group(['prefix' => 'api'], function() use ($router){
    $router->post('filmes','filmesController@store');
    $router->get('filmes','filmesController@index');
    $router->get('filmes/{id}','filmesController@get');
    $router->put('filmes/{id}','filmesController@update');
    $router->delete('filmes/{id}','filmesController@destroy');

});
