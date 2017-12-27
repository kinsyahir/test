<?php

Route::get('/', 'CoursesController@index');

Route::get('/courses/{create}', 'CoursesController@create');

Route::post('/course', 'CoursesController@store');

Route::get('/courses/{id}', 'CoursesController@edit');

Route::get('/subjects/{create}', 'SubjectsController@create');

Route::post('/subject', 'SubjectsController@store');

Route::get('/contents/{create}', 'ContentController@create');

Route::post('/content', 'ContentController@store');

Route::get('/shop', [
	'uses' => 'SubjectsController@getIndex',
	'as' => 'shop.index'
]); 

/////////////////////////////ROUTE FOR EMAIL////////////////////////////////

Route::get('send', 'mailcontroller@send');

Route::group(['middleware' => 'web'], function() {
	Route::post('/email', 'subjectsController@requestEmail');
});	

/////////////////////ROUTE FOR REQUIREMENT(SUBJECT)/////////////////////////

Route::get('/requirement-requirement', 'RequirementsController@getCourses');

Route::get('/findSubjectTitle', 'RequirementsController@findSubjectTitle');

Route::post('/requirement', 'RequirementsController@store');

/////////////////////ROUTE FOR DESCRIPTION(SUBJECT)/////////////////////////

Route::get('/description-description', 'DescriptionsController@getCourses');

Route::get('/findSubjectTitleDesc', 'DescriptionsController@findSubjectTitleDesc');

Route::post('/description', 'DescriptionsController@store');

	
//////////////////////NEW INTERFACE (UDEMY) ////////////////////////////////

Route::get('/landingpage', [
	'uses' => 'subjectsController@getLandingPage',
	'as' => 'udemy.landingpage',
]);

Route::get('/course-content', [
	'uses' => 'subjectsController@getCourses',
	'as' => 'udemy.course',
]);

Route::get('/content', [
	'uses' => 'subjectsController@getContent',
	'as' => 'udemy.content',
]);

Route::get('/subject-content/{id}', [
	'uses' => 'ContentController@getContentDetails',
	'as' => 'udemy.contentDetails',
]);

Route::get('/udemy/content{id}', [
	'uses' => 'ContentController@getSubjectTitle',
	'as' => 'subject.content',
]);

Route::get('/nazrol.shoppingcart/{id}', [
	'uses' => 'SubjectsController@getAddToCart',
	'as' => 'udemy.shoppingcart',
]);

Route::get('/shopping-cart', [
	'uses' => 'SubjectsController@getCart', 
	'as' => 'udemy.cart'
]);

Route::get('/checkout', [
	'uses' => 'SubjectsController@getCheckout', 
	'as' => 'udemy.checkout'
]);

Route::post('/checkout', [
	'uses' => 'SubjectsController@postCheckout', 
	'as' => 'checkout'
]);

Route::get('/balance/{id}', [
	'uses' => 'BankController@getAmountBalance',
	'as' => 'balance'
]);

Route::get('/exit', [
	'uses' => 'BookingController@getExit',
	'as' => 'shop.exit'
]);

Route::get('/booking', [
	'uses' => 'BookingController@postBookingDetails',
	'as' => 'payment'
]);

Route::post('/signup', [ 
	'uses' => 'RegistersController@store',
	'as' => 'signup',
]);

Route::post('/signin', [
	'uses' => 'SessionsController@store',
	'as' => 'signin',
	]);

Route::get('login', [
	'uses' => 'SubjectsController@getlogin',
	'as' => 'login',
]);

Route::get('/logout', [
	'uses' => 'SessionsController@destroy',
	'as' => 'logout',
]);

Route::get('/homepage', [
	'uses' => 'subjectsController@getHomepage',
	'as' => 'udemy.newhomepage',
]);


////////////////////////////login and register////////////////////

// Route::get('/login', [
// 	'uses' => 'SessionsController@create',
// 	'as' => 'login',
// ]);
// Route::get('/register', [
// 	'uses' => 'RegisterController@create',
// 	'as' => 'register',
// ]);
/////////////////////////////////////


// Route::get('/add-to-cart/{id}', [
// 	'uses' => 'SubjectsController@getAddToCart', 
// 	'as' => 'shop.addToCart'
// 	]);

// Route::get('/exit/{id}', [
// 	'uses' => 'BankController@getAmountBalance',
// 	'as' => 'shop.balance'
// 	]);

// Route::post('/payment', [
// 	'uses' => 'BookingController@postBookingDetails',
// 	'as' => 'shop.booking'
// ]);

// Route::post('/booking', [
// 	'uses' => 'BookingController@postBookingDetails',
// 	'as' => 'shop.addbooking'
// ]);

// Route::post('/checkout', [
// 	'uses' => 'SubjectsController@postCheckout', 
// 	'as' => 'checkout'
// 	]);

// Route::group(['prefix' => 'user'], function() {

// 	Route::group(['middleware' => 'web'], function() {

// // 		// Route::get('/signup/{getSignup}', [
// // 		// 	'uses' => 'UserController@getSignup',
// // 		// 	'as' => 'user.signup',
// // 		// ]);

// // 		// Route::post('/signup', [
// // 		// 	'uses' => 'UserController@postSignup',
// // 		// 	'as' => 'user.signup'
// // 		// ]);

// 		Route::get('/signin/{getSignin}', [
// 			'uses' => 'UserController@getSignin',
// 			'as' => 'user.signin',
// 		]);

// 		Route::post('/signin', [
// 			'uses' => 'UserController@postSignin',
// 			'as' => 'user.signin',
// 		]);
// 	});
// });

// 	Route::group(['middleware' => 'auth'], function() {

// 		Route::get('/profile', [
// 			'uses' => 'UserController@getProfile',
// 			'as' => 'user.profile',
// 		]);

// 		Route::get('/logout', [
// 			'uses' => 'UserController@getLogout',
// 			'as' => 'user.logout',
// 		]);

// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
