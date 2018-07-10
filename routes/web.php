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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/complaints','ComplaintController@addComplaint')->name('complaints.add');
Route::post('/complaints','ComplaintController@storeComplaint')->name('complaints.store');

Route::group(['prefix' => 'products'],function() {
	Route::get('/','ProductController@index')->name('products.index');
	Route::get('/live','ProductController@liveProducts')->name('products.live');
	Route::post('/live','ProductController@filterLiveProducts')->name('products.searchLive');

	Route::get('/category/{category}','ProductController@getProductsByCategory')->name('products.getByCategory');
	Route::get('/my_products','ProductController@getMyProducts')->name('products.myProducts');
	Route::get('/delete/{product_id}','ProductController@deleteProduct')->name('products.delete');
	Route::get('/add','ProductController@addProduct')->name('products.add');
	Route::get('/edit/{id}','ProductController@editProduct')->name('products.edit');
	Route::post('/update/{id}','ProductController@updateProduct')->name('products.update');
	Route::get('/{id}','ProductController@show')->name('products.show');

	Route::post('/store','ProductController@storeProduct')->name('products.store');
	Route::post('/','ProductController@filterProducts')->name('products.search');


});

Route::group(['prefix' => 'bids'],function() {
	Route::post('/expire','BidController@OnExpire')->name('bids.expire');
	Route::post('/addBid','BidController@addBid')->name('bids.addBid');
	});

Route::group(['prefix' => 'profile'],function() {
	Route::get('/','UserController@getProfile')->name('users.profile');
	Route::get('/view_notifications','UserController@viewNotifications')->name('users.viewNotifications');
	Route::post('/update','UserController@updateProfile')->name('users.updateProfile');
	});
