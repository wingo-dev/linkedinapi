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

Route::get('/', function () {
    return \Redirect::route('login');
});

Auth::routes();
// admin part
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
// end admin part

// user part
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/newcampain', 'HomeController@newCampain')->name('campain');
Route::get('/newcampain/next', 'HomeController@saveCampain')->name('savecampain');
Route::get('/managecampain', 'HomeController@manageCampains')->name('managecampains');
Route::get('/manageconnections', 'HomeController@manageConnections')->name('manageconnections');
Route::get('/follow-up', 'HomeController@followUp')->name('follow');
Route::get('/linkedin', 'HomeController@linkedinDetail')->name('linkedin');
Route::get('/account', 'HomeController@account')->name('account');
Route::get('/faq', 'HomeController@faq')->name('faq');
// end user part

//Clear Config cache:
Route::get('/config-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});
