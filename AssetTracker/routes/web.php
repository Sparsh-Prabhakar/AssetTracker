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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout');

route::get('/home/issue','DashboardController@issue'); //issue asset
route::get('/home/create','DashboardController@create'); //create asset
route::get('/home/requests','DashboardController@requests'); //view the asset request
route::get('/home/fine','DashboardController@fine'); //fine users
route::get('/home/file','DashboardController@file'); //file issues
route::get('/home/viewissues','DashboardController@viewissues'); //view issues
route::get('/home/history','DashboardController@history'); //view history
route::get('/home/otherDepartmentDetails','DashboardController@otherDepartmentDetails'); //view other dept details
route::get('/home/purchase','DashboardController@purchase'); //purchase assets
route::get('/home/edit','DashboardController@edit'); //edit profile
route::get('/home/requestnewasset','DashboardController@newasset'); //request for a new asset
route::get('/home/newassetrequests','DashboardController@assetrequests'); //see the new asset requests

route::post('/home/issue/store','AssetsController@store'); //issue asset
route::post('home/create/store','AssetsController@create'); //create asset 
route::post('/home/purchase/index','AssetsController@index'); //order asset 