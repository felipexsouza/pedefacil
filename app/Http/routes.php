<?php

Route::get('/', 'PagesController@home');

Route::resource('products', 'ProductsController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
