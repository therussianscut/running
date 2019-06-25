<?php

use App\greeting;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'welcomeController@index');




Route::get('/create-greeting', function () {

    $greeting= new greeting();
    $greeting->body='random body';
    $greeting->save();

});

Route::get('/first-greeting', function () {

    return greeting::first()->body;

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/posts', 'welcomeController');
