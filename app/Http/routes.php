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

Route::get('/', 'PageController@index');

Route::get('/portfolio', 'PageController@portfolio');

Route::get('/contacts', 'PageController@contacts');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::post('/contacts', 'PageController@message');

Route::get('/add-work', 'WorkController@create');

Route::post('/add-work', 'WorkController@add');

Route::get('/work-images/{filename}/tn', [
    'uses' => 'WorkController@getPreviewTn',
    'as' => 'work_images'
]);

Route::get('/work-images/{filename}', [
    'uses' => 'WorkController@getPreview',
    'as' => 'work_images'
]);