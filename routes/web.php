<?php

Route::get('/', function () {
    return view('welcome');
});

Route::namespace('Backend')->prefix('admin')->group(function(){

    Route::get('/' , 'Home@index');
    Route::get('home' , 'Home@index');


    /**Start Route Resource**/

    Route::resource('users' , 'Users');


    /**End   Route Resource**/

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
