<?php

Route::get('/','PostsController@index')->name('home');

Route::get('/posts/create','PostsController@create');

Route::post('/posts','PostsController@store');

Route::get('/posts/{post}','PostsController@show');

//Route::post('posts/{post}/comments', 'CommentsController@store');


Route::get('/register','RegistrationController@create');

Route::post('/register','RegistrationController@store');


Route::get('/admin','SessionsController@create');

Route::post('/admin','SessionsController@store');

Route::get('/logout','SessionsController@destroy');


// GET /posts 

// GET /posts/create

// POST /posts

// GET /posts/{id}/edit 

// GET /posts/{id}

// PATCH /posts/{id}

// DELETE /posts/{id}

