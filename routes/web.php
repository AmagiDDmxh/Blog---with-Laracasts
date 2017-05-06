<?php

Route::get('/', 'PostsController@index')->name('home');

// posts
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts', 'PostsController@store');
Route::post('/posts/{post}/comments', 'CommentsController@store');


// Register
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');


// Login
Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

// Tasks
Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');
