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

Route::get('/home', 'HomeController@index');

//users
Route::get('/users', 'UserController@index');
Route::get('/user/{user}', 'UserController@show');

//reports
Route::get('/reports', 'ReportController@index');
Route::get('/report/{report}', 'ReportController@show');
Route::get('/reports/new', 'ReportController@new');
Route::post('/report', 'ReportController@create');

//defects
Route::get('/defects', 'DefectController@index');
Route::get('/defect/{defect}', 'DefectController@show');
Route::get('/defects/new', 'DefectController@new');
Route::post('/defect', 'DefectController@create');

//repairs
Route::get('/repairs', 'RepairController@index');
Route::get('/repair/{repair}', 'RepairController@show');
Route::get('/repairs/new', 'RepairController@new');
Route::post('/repair', 'RepairController@create');
