<?php


Route::get('/', 'CoursesController@index');

Route::get('/courses/{create}', 'CoursesController@create');

Route::post('/course', 'CoursesController@store');

Route::GET('/courses/{id}', 'CoursesController@edit');

Route::get('/subjects/{create}', 'SubjectsController@create');

Route::post('/subject', 'SubjectsController@store');

Route::get('/contents/{create}', 'ContentController@create');

Route::post('/content', 'ContentController@store');

Route::get('/shop', [
	'uses' => 'SubjectsController@getIndex',
	'as' => 'shop.index'
	]); 

Route::get('/add-to-cart/{id}', [
	'uses' => 'SubjectsController@getAddToCart', 
	'as' => 'shop.addToCart'
	]);

/*Route::get('/shopping-cart', [
	'uses' => 'SubjectsController@getCart', 
	'as' => 'shop.shoppingCart'
	]);
*/

Route::get('/shopping-cart', [
	'uses' => 'SubjectsController@getCart', 
	'as' => 'shop.shoppingCartTry'
	]);

Route::get('/checkout', [
	'uses' => 'SubjectsController@getCheckout', 
	'as' => 'checkout'
	]);

Route::post('/checkout', [
	'uses' => 'SubjectsController@postCheckout', 
	'as' => 'checkout'
	]);

Route::group(['prefix' => 'user'], function() {

	Route::group(['middleware' => 'web'], function() {

		Route::get('/signup/{getSignup}', [
			'uses' => 'UserController@getSignup',
			'as' => 'user.signup',
		]);

		Route::post('/signup', [
			'uses' => 'UserController@postSignup',
			'as' => 'user.signup'
		]);

		Route::get('/signin/{getSignin}', [
			'uses' => 'UserController@getSignin',
			'as' => 'user.signin',
		]);

		Route::post('/signin', [
			'uses' => 'UserController@postSignin',
			'as' => 'user.signin',
		]);
	});

	Route::group(['middleware' => 'auth'], function() {

		Route::get('/profile', [
			'uses' => 'UserController@getProfile',
			'as' => 'user.profile',
		]);

		Route::get('/logout', [
			'uses' => 'UserController@getLogout',
			'as' => 'user.logout',
		]);

	});	

});



