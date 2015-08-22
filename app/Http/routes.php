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

$app->get('/', function () use ($app) {
    return "{ 'message':'hapi'}";
//    return $app->welcome();
});

$app->get('/test', 'TestController@index');

$app->get('/test_parse_sms', 'SmsController@storeAndParseSMS');
