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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group([
    'namespace' => 'App\Http\Controllers',
	'prefix'	=> '/'
], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::get('/master', 'DashboardController@master');
    Route::get('/alert', 'DashboardController@alert');
    Route::get('/button', 'DashboardController@button');
    Route::get('/card', 'DashboardController@card');
    Route::get('/dropdown', 'DashboardController@dropdown');
    Route::get('/form', 'DashboardController@form');
    Route::get('/list', 'DashboardController@list');
    Route::get('/modal', 'DashboardController@modal');
    Route::get('/blank', 'DashboardController@blank');
    Route::get('/404', 'DashboardController@not_found');
});
