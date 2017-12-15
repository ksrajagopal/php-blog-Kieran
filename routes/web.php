<?php
Route::get('/', 'PostControllers@index');

Route::get('/posts/create', 'PostControllers@create');

Route::post('/posts', 'PostControllers@store');

Route::get('/posts/{post}', 'PostControllers@show');

//controller

//Eloquent model

//migration
