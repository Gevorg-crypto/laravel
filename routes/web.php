<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/companies', function () {
    return view('companies');
});

Route::get('/employees', function () {
    return view('employees');
});

Route::get('/logout', function () {
    Auth::logout();
    return view('welcome');
});
