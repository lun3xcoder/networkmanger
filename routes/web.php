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
    return view('home');
});

Route::get('/api/city/form', function () {
    return view('api.city.form');
});


// CITY
Route::get('/api/city/all',"CityController@ViewAll");
Route::post('/api/city/add',"CityController@add");
Route::post('/api/city/delete',"CityController@delete");
Route::post('/api/city/view',"CityController@view");
Route::post('/api/city/update',"CityController@update");



/// CustomerController
Route::get('/api/customer/all',"CustomerController@ViewAll");
Route::post('/api/customer/add',"CustomerController@add");
Route::post('/api/customer/delete',"CustomerController@delete");
Route::post('/api/customer/view',"CustomerController@view");
Route::post('/api/customer/update',"CustomerController@update");




/// DevicController


Route::get('/api/device/all',"DeviceController@ViewAll");
Route::post('/api/device/add',"DeviceController@add");
Route::post('/api/device/delete',"DeviceController@delete");
Route::post('/api/device/view',"DeviceController@view");
Route::post('/api/device/update',"DeviceController@update");


// INFO

Route::get('/api/info',"InfoController@ALLinfo");
