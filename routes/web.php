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

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});

Route::get('/employees', 'EmployeeController@getData')->name('employees');
Route::post('/employee/submit', 'EmployeeController@submit')->name('employee-form');


Route::get('/employee/{id}', 'EmployeeController@rename')->name('employee-rename');
Route::post('/employee/{id}', 'EmployeeController@update')->name('employee-update');

Route::post('/employee/{id}/delete', 'EmployeeController@delete')->name('employee-delete');
