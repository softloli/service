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

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function($api){
    $api->get('user', ['as' => 'uesr.show', 'uses' => 'App\Api\V1\Controllers\UserController@show']);
});

$api->version('v2', function($api){
    $api->get('collections', function(){
        return 'v2';
    });
});
