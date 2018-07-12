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

/***********************login & home***********************/
Route::post('registerUser','User\RegisterController@register');
Route::post('login', 'User\LoginController@loginall');


Route::get('login',[
        'uses' => 'User\LoginController@login',
        'as' => 'project.login'
    ]);
Route::get('/',[
		'uses' => 'User\LoginController@homepage',
		'as' => 'project.homepage'
	]);
Route::get('logout',[
		'uses' => 'User\LoginController@logout',
		'as' => 'project.logout'
	]);
Route::get('/register', function () {
    return view('user.register');
});


/***************CATEGORY***********************/
/*Route::get('/', function () {
    return view('category.home');
});*/
Route::get('/electronics', function () {
    return view('category.electronics');
});
Route::get('/beautyproducts', function () {
    return view('category.beautyproducts');
});
Route::get('/clothes', function () {
    return view('category.clothes');
});
Route::get('/homeproducts', function () {
    return view('category.homeproducts');
});
/***************ELECTRONICS***********************/
/*Route::get('/mobiles', function () {
    return view('Electronics.mobile.mobiles');
});*/
Route::get('/laptop', function () {
    return view('Electronics.laptop.laptop');
});
Route::get('/tv', function () {
    return view('Electronics.tv.tv');
});
Route::get('/washingmachine', function () {
    return view('Electronics.washingmachine.washingmachine');
});
Route::get('/cctv', function () {
    return view('Electronics.cctv.cctv');
});
Route::get('/ac', function () {
    return view('Electronics.ac.ac');
});
Route::get('/heater', function () {
    return view('Electronics.heater.heater');
});






/***********************Resource Controller**************************/

Route::resource('/mobiles','Electronics\MobileController');
Route::resource('/laptop','Electronics\LaptopController');
Route::resource('/tv','Electronics\TvController');
// Route::resource('washingmachine','Electronics\WashingmachineController');
// Route::resource('cctv','Electronics\CctvController');
// Route::resource('ac','Electronics\AcController');
// Route::resource('heater','Electronics\HeaterController');