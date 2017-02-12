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

Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/about' , 'NavController@about');

Route::get('/contact', "NavController@contact");

Route::get('/FAQ', 'NavController@FAQ');

Route::get('/universities', "FilterController@school");

Route::get('/professors', 'FilterController@professors');

Route::get('/universities/create', "CreateController@school");

Route::get('/professors/create', "CreateController@professor");

Route::get('/university/{id}' , "UniversityController@show");

Route::get('/professor/{id}', "ProfessorController@show");

Route::get('/user/{user}', "UserController@show");
