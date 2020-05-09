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

Route::get('/', 'HomeController@index');

Route::get('/dashboard', 'DashboardController@index');

Route::resource('/assets', 'AssetController');

Route::resource('/employees', 'employeeController');

Route::resource('/purchases', 'purchaseController');

Route::resource('/providers', 'providersController');

Route::get('/assets/{id}/confirmDelete', 'AssetController@ConfirmDelete');
Route::get('/employees/{id}/confirmDelete', 'EmployeeController@ConfirmDelete');
Route::get('/providers/{id}/confirmDelete', 'ProviderController@ConfirmDelete');
Route::get('/purchases/{id}/confirmDelete', 'PurchaseController@ConfirmDelete');