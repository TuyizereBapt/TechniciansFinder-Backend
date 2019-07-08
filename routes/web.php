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

/*Route::get('/', 'HomeController@home')->name('home');
Route::get('/register', 'HomeController@registerUserPage')->name('register-page');
Route::get('/login', 'HomeController@loginPage')->name('login-page');
Route::get('/dashboard', 'HomeController@getDashboard')->name('dashboard');
Route::get('/dashboard/technicians', 'HomeController@technicians')->name('dashboard.technicians');
Route::get('/dashboard/technicians/profile', 'HomeController@profilePage')->name('dashboard.profile');
Route::get('/dashboard/technicians/map', 'HomeController@techniciansOnMap')->name('dashboard.technicians.map');
Route::get('/dashboard/technicians/new', 'HomeController@newTechnicianForm')->name('dashboard.newTechnician');
Route::get('/dashboard/post-work', 'HomeController@postWork')->name('dashboard.postWork');*/

//SPA route
Route::get('/{any}', 'HomeController@index')->where('any', '.*');
