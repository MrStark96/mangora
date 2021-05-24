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

	Route::post('post-register-restaurant', 'RegisterRestaurantController@PostRegisterRestaurant')->name('post-register-restaurant');

	Route::post('post-register-select-package', 'RegisterRestaurantController@PostRegisterSelectPackage')->name('post-register-select-package');

	Route::post('post-register-payment-info', 'RegisterRestaurantController@PostRegisterPaymentInfo')->name('post-register-payment-info');
});

Route::group(array('namespace' => 'App\Http\Controllers'),function(){
	Route::post('getStateByCountry', 'CommonController@GetStateByCountry')->name('GetStateByCountry');
	Route::post('getCityByState', 'CommonController@GetCityByState')->name('GetCityByState');
	Route::get('logout', 'CommonController@logout')->name('logout');
});

Route::get('my-restaurant', function () {
    return view('web.v1.front.restaurant.myRestaurant');
})->name('my-restaurant');

Route::get('restaurant-dashboard', function () {
    return view('web.v1.front.restaurant.dashboard');
})->name('restaurant-dashboard');

Route::get('restaurant-menu-builder', function () {
    return view('web.v1.front.restaurant.restaurantMenuBuilder');
})->name('restaurant-menu-builder');


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
