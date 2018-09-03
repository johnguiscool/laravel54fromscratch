<?php

Route::get('/tasks','TasksController@index');

Route::get('/about', function () {
    return view('about');
});


Route::get('/tasks/{task}', 'TasksController@show');