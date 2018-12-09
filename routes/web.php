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

Route::get('/', 'PagesController@getHome')->name('home');

Route::get('/movies', 'PagesController@getMovies')->name('movies');

Route::get('/contact', 'PagesController@getContact');

Route::get('/messages', 'MessagesController@getMessages');


Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register');

Route::post('/contact/submit', 'MessagesController@submit');


Route::get('/login', 'Auth\LoginController@login')->name('login');
Route::post('/login', 'Auth\LoginController@authenticate');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');


Route::get('/movies', 'MovieController@index')->name('movies');


Route::get('/reservations/{id}', 'ReservationController@index');
Route::post('/reservation/create', 'ReservationController@create');
Route::post('/reservation/step2', 'ReservationController@addReservation');



