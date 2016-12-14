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

Route::get('/', 'MailerController@index');
Route::get('/create', 'MailerController@create');
Route::post('create-mail', 'MailerController@create_mail');
Route::get('mail', 'MailerController@mail');
Route::get('edit/{id}', 'MailerController@edit');
