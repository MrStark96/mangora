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

Route::get('/', function () {
    return view('web.v1.home.home');
});

Route::get('lang', 'App\Http\Controllers\LangController@index')->name('lang.index');

Route::get('lang/change', 'App\Http\Controllers\LangController@change')->name('changeLang');

Route::group(array('namespace' => 'App\Http\Controllers\Auth'),function(){
    Route::get('register-restaurant', 'RegisterRestaurantController@RegisterRestaurant')->name('register-restaurant');

	Route::get('register-select-package', 'RegisterRestaurantController@RegisterSelectPackage')->name('register-select-package');

	Route::get('register-payment-info', 'RegisterRestaurantController@RegisterpaymentInfo')->name('register-payment-info');

	Route::get('register-activation', 'RegisterRestaurantController@RegisterActivation')->name('register-activation');
});

Route::get('my-restaurant', function () {
    return view('web.v1.front.restaurant.myRestaurant');
});

Route::get('restaurant-dashboard', function () {
    return view('web.v1.front.restaurant.dashboard');
});

Route::get('restaurant-menu-builder', function () {
    return view('web.v1.front.restaurant.restaurantMenuBuilder');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
