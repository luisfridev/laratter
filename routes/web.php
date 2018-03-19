<?php

Route::get('/', 'PagesController@home');

Route::get('messages/{message}', 'MessagesController@show');

Route::post('messages/create', 'MessagesController@create');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
