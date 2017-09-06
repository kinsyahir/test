<?php


Route::get('/', 'CoursesController@index');

Route::get('/courses/{create}', 'CoursesController@create');

Route::post('/course', 'CoursesController@store');

Route::GET('/courses/{id}', 'CoursesController@edit');

Route::get('/subjects/{create}', 'SubjectsController@create');

Route::post('/subject', 'SubjectsController@store');