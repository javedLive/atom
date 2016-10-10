<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('courses');
});

Route::get('/registration/{course_id}',[
   'uses'=>'AppController@getregistration',
    'as'=>'registration'
]);

Route::post('/postRegistration',[
    'uses'=>'AppController@postRegistration',
    'as'=>'postRegistration'
]);
    
Route::get('/success',[
    'uses'=>'AppController@success',
    'as'=>'success'
]);


/*
Route::get('/registration',[
   'uses'=>'AppController@getregistration',
    'as'=>'registration'
]);*/