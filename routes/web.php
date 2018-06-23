<?php
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/data','DataController');

Route::get('/', 'ClientController@index');

Route::resource('/aboutsection','AboutSectionController');
Route::resource('/videosection','VideoSectionController');
