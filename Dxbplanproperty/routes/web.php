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

Route::get('/', 'PropertyController@index')->name('property.index');

Route::get('contact', 'PropertyController@contactUs')->name('property.contactUs');

Route::get('about', 'PropertyController@aboutUs')->name('property.aboutUs');

Route::get('properties', 'PropertyController@properties')->name('property.properties');

Route::get('02Tower', 'PropertyController@getAll02TowerProperties')->name('property.02Tower');
Route::get('reginaTower', 'PropertyController@getAllreginaTowerProperties')->name('property.reginaTower');
Route::get('samaya2HotelApartment', 'PropertyController@getAllsamaya2HotelApartmentProperties')->name('property.samaya2HotelApartment');
Route::get('theSquare', 'PropertyController@getAlltheSquareProperties')->name('property.theSquare');

//Route::post('properties/{property}', 'PropertyController@getAllProperties')->name('property.properties');

