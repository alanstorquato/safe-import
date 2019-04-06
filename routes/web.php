<?php

Route::get('/','PostsController@index')->name('home');

Route::get('/posts/create','PostsController@create');

Route::post('/posts','PostsController@store');

Route::get('/posts/{post}','PostsController@show');

Route::delete('/posts/{id}','PostsController@destroy');

Route::get('/posts/edit/{id}','PostsController@edit');

Route::patch('/posts/edit/{id}','PostsController@update');

Route::post('posts/{post}/comments', 'CommentsController@store');


Route::get('/register','RegistrationController@create');

Route::post('/register','RegistrationController@store');


Route::get('/admin','SessionsController@create');

Route::post('/admin','SessionsController@store');

Route::get('/logout','SessionsController@destroy');

