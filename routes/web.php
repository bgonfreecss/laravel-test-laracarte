<?php

Route::get('/', 'PagesController@home')->name('rootPath');

Route::get('/about', 'PagesController@about')->name('aboutPath');

Route::get('/contact', 'ContactsController@create')->name('contactPath');

