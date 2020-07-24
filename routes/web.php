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

Route::get('/', function () {

    

    return view('welcome');
});

Auth::routes();

//Route nak ke home (lepas login or register)
Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/treatments/create','TreatmentController@create');

Route::resource('treatments', 'TreatmentController');

Route::resource('companies', 'CompaniesController');
