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

//Route::get('/testhome', 'HomeController@test')->name('testhome');



Route::get('contracts', 'ContractController@create')->name('contracts.create');
Route::post('contracts', 'ContractController@store')->name('contracts.store');
Route::get('listcontract', 'ContractController@index')->name('contracts.listcontract');
Route::get('/downloadContractPDF/{id}','ContractController@downloadPDF');

Route::get('/edit-profil/{id}','ProfileController@getEditprofil');
Route::get('/update-profil/{id}','ProfileController@getupdateprofil');
Route::get('/role-register','Admin\DashboardController@registered');
Route::get('/role-edit/{id}','Admin\DashboardController@registeredit');
Route::get('/role-show/{id}','Admin\DashboardController@registershow');
Route::put('/role-register-update/{id}','Admin\DashboardController@registerupdate');

Route::delete('/role-delete/{id}','Admin\DashboardController@registerdelete');

