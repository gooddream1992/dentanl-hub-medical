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

// Authentication routes
Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Include Wave Routes
Wave::routes();
//Mail Testing
Route::get('admin/activatecode/{id}', 'MailmanagerController@activation_email');

Route::post('new_user', 'UserController@create')->name('new_user');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade'); 
	 Route::get('map', function () {return view('pages.maps');})->name('map');
	 Route::get('icons', function () {return view('pages.icons');})->name('icons'); 
	 Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});
Route::get('activation', function () {return view('theme::auth.activation');})->name('activation');
Route::post('activation', 'UserController@activate')->name('register_withactive');

// User Activate and Register
Route::get('activate_studio', function () {return view('theme::auth.activate_studio');})->name('activate_studio');
Route::post('studio_register', '\Wave\Http\Controllers\Auth\RegisterController@studio_register')->name('studio_register');
Route::post('employe_register', '\Wave\Http\Controllers\Auth\RegisterController@employe_register')->name('employe_register');
Route::post('patient_register', '\Wave\Http\Controllers\Auth\RegisterController@patient_register')->name('patient_register');

Route::get('activate_patient', function () {return view('theme::auth.activate_patient');})->name('activate_patient'); 
Route::get('activate_dentist', function () {return view('theme::auth.activate_dentist');})->name('activate_dentist'); 
Route::get('activate_assistant', function () {return view('theme::auth.activate_assistant');})->name('assistant'); 
Route::get('activate_secretary', function () {return view('theme::auth.activate_secretary');})->name('activate_secretary'); 

Route::get('dashboard/newemploy', 'UserController@shownew')->name('newemploy'); 
Route::get('dashboard/employ', 'UserController@index')->name('employ'); 