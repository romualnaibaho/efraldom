<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'EfraldomController@login')->middleware('guest')->name('/');

Route::get('/login', 'EfraldomController@login')->middleware('guest')->name('login');

Route::get('/logout', 'EfraldomController@logout')->name('logout')->middleware('auth');

Route::post('/login', 'EfraldomController@postLogin')->name('login.attemp')->middleware('guest');

Route::get('/home', 'EfraldomController@home')->middleware('auth')->name('home');

Route::get('/profile', 'EfraldomController@profile')->middleware('auth')->name('profile');

Route::post('/profile/update-data', 'EfraldomController@update_data')->middleware('auth');

Route::get('/register', 'EfraldomController@register')->name('register')->middleware('guest');

Route::post('/register', 'EfraldomController@makeregister')->middleware('guest');

Route::get('/reset', 'EfraldomController@reset')->middleware('guest')->name('reset');

Route::get('/reset/password/update', 'EfraldomController@resetPassword')->name('update')->middleware('guest');

Route::post('/reset/password/update', 'EfraldomController@updatePassword')->name('update.password')->middleware('guest');

Route::get('/profile/edit/{email}','EfraldomController@edit')->middleware('auth');

Route::get('/profile/delete/{email}','EfraldomController@hapus')->middleware('auth');

Route::get('/polahidupsehat', 'EfraldomController@goToPHS')->middleware('auth')->name('polahidupsehat');

Route::get('/greenzone', 'EfraldomController@goToGreen')->middleware('auth')->name('greenzone');

Route::get('/greenzone/search', 'EfraldomController@searchGreen')->middleware('auth');

Route::get('/yellowzone', 'EfraldomController@goToYellow')->middleware('auth')->name('yellowzone');

Route::get('/yellowzone/search', 'EfraldomController@searchYellow')->middleware('auth');

Route::get('/orangezone', 'EfraldomController@goToOrange')->middleware('auth')->name('orangezone');

Route::get('/orangezone/search', 'EfraldomController@searchOrange')->middleware('auth');

Route::get('/redzone', 'EfraldomController@goToRed')->middleware('auth')->name('redzone');

Route::get('/redzone/search', 'EfraldomController@searchRed')->middleware('auth');
