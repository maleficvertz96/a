<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/depan', 'FrontController@index');

// Coba Github d