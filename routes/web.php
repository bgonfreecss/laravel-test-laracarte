<?php

#General Using
use App\Mail\ContactMailSended;

#HomeRoute
Route::get('/', 'PagesController@home')->name('rootPath');

#AboutRoute
Route::get('/about', 'PagesController@about')->name('aboutPath');

#ContactRoute
Route::get('/contact', 'ContactsController@create')->name('contactPath');
Route::post('/contact', 'ContactsController@store')->name('contactPath');
#__testMailRoute
Route::get('/testMail', function() {
	return new ContactMailSended('Truc', 'truc@truc.com', 'Message');
});