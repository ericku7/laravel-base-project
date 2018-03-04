<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::auth();

Route::get('/', 'ListingsController@index');
Route::get('mens', 'ListingsController@mens');
Route::get('womens', 'ListingsController@womens');
Route::get('kids', 'ListingsController@kids');
Route::get('MadeinAfrica/Rwanda', 'ListingsController@madeinRwanda');
Route::get('MadeinAfrica/Ghana', 'ListingsController@madeinGhana');
Route::get('MadeinAfrica/Kenya', 'ListingsController@madeinKenya');
Route::get('MadeinAfrica/Nigeria', 'ListingsController@madeinNigeria');

Route::group(['middleware' => ['auth']], function () {
	Route::resource('users', 'UsersController');
	Route::get('dashboard-index', 'DashboardController@index');
    Route::get('customers', 'UsersController@customers');
});
Route::get('/login', ['middleware' => 'login', function () {
    return view('auth/login');

}]);
