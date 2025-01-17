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
    return view('landing.index');
});

Route::post('/', 'Client\PemohonController@store')->name('add.pemohon');

// Login Admin
Route::get('/admin', 'Auth\LoginController@index')->name('admin');

// Dasboard Admin
Route::prefix('/')->group(function () {
    Route::get('/login', function () {
        return redirect()->to('admin');
    })->name('login');
    Route::post('/login', 'Auth\LoginController@login')->name('login');
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'Auth\RegisterController@register');

    // Password Reset Routes...
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
});

Route::group(['middleware' => 'auth'], function () {
    // Dashboard Page
    Route::get('/dashboard', 'Dashboard\DashboardController@index')->name('admin');
    Route::get('/dashboard/list', 'Dashboard\DashboardController@list')->name('admin.list');
});

Route::get('/home', 'HomeController@index')->name('home');
