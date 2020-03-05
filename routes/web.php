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

Route::get('/','Controller@showHomepage')->name('homepage');

Route::get('register','Controller@showRegister')->name('register');
Route::post('register','Controller@postRegister')->name('register');

Route::get('login', 'Controller@showLogin')->name('login');
Route::post('login', 'Controller@checklogin')->name('login');

Route::get('homepage','Controller@showHomepage')->name('homepage');

Route::get('/mail','Controller@sendMail')->name('mail');;

Route::get('about', 'Controller@showAbout')->name('about');

Route::get('contact', 'Controller@showContact')->name('contact');

Route::get('patientDetails', 'Controller@showPatientDetails')->name('patientDetails');

