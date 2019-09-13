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
    return view('welcome');
});
Route::get('login','UserLoginController@userLogin')->name('user.loginForm');
Route::post('login','UserLoginController@login')->name('admin.user.login');
Route::middleware('auth')->group(function ()
{
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::get('profile','UserProfileController@profile')->name('user.profile');
});

Route::get('emergency-logout',function () {
    auth()->logout();
    return redirect()->route('user.loginForm');
});










































































































































































































































































































