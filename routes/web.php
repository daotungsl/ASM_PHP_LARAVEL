<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('/student/add', 'StudentController@doSave');
Route::post('/student/edit/{id}', 'StudentController@doEit');
Route::get('/student', 'HomeController@register');
Route::get('/', 'HomeController@home');