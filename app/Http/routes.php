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

use ShawnSandy\SimplePack\SimpleTest;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function(){
    $test = new SimpleTest();
    return $test->echoPhrase("test class");
});

Route::auth();

Route::get('/home', 'HomeController@index');
