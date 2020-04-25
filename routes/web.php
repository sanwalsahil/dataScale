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
    return view('frontend.main');
});

Route::get('/allCompanies', function () {
    return view('frontend.all_companies');
});

Route::get('/companyDetails', function () {
    return view('frontend.company_details');
});

Route::get('/contactUs', function () {
    return view('frontend.contact_us');
});
