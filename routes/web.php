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
route::get('/rating',function(){
  return view('rating');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/aboutus',function(){
  return view('aboutus');
});
Route::resource('service', 'ServiceController');
// Route that shows an individual product by its ID
// Route::get('services/{id}', function($id)
// {
// 	$service = Service::find($id);
// 	// Get all reviews that are not spam for the product and paginate them
// 	$reviews = $service->reviews()->with('user')->approved()->notSpam()->orderBy('created_at','desc')->paginate(100);
// 	return View::make('SingleService', array('services'=>$services,'reviews'=>$reviews));
//
// });
route::get('service/{id}','ServiceController@show');
Route::get('/logout',function(){
    Auth::logout();
    return view('welcome');
});
