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

Route::get('/', 'PagesController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Rooms Routes
Route::resource('rooms', 'RoomsController');

// Room Types routes
Route::resource('types', 'TypesController');

// Customers routes
Route::resource('customers', 'CustomersController');

// Reservations routes
Route::resource('reservations', 'ReservationsController');