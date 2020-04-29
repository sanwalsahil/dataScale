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

Route::get('/', 'MainController@mainPage');
Route::post('/saveCompany','CompanyDetailController@store');

Route::get('/allCompanies', 'CompanyDetailController@index');

Route::get('/companyDetails/{id}','CompanyDetailController@showDetail');

Route::get('/contactUs', function () {

    return view('frontend.contact_us');
});


/***************************** REGISTER COMPANIES ***********************/
Route::group(['middleware'=>['auth']],function() {
    Route::get('/registerCompanies', 'CompanyDetailController@create');
});

Auth::routes();

Auth::routes();



Route::group(['middleware' => ['auth','can:backend.user.check']], function () {

    Route::get('/home', 'HomeController@index')->name('home');

    /***** company lists ******/
    Route::get('/all_companies',function(){
        return view('pages.all_companies');
    });

    /***** user lists ******/
    Route::get('/all_users',function(){
        return view('pages.all_users');
    });

	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

