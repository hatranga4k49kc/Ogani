<?php
Route::get('/','FrontendController@index')->name('home');
Route::get('/contact','FrontendController@contact')->name('contact');
Route::get('/blog_detail','FrontendController@blog_details')->name('blog_detail');
Route::get('/blog', 'FrontendController@blog')->name('blog');
Route::get('/shop_grid', 'FrontendController@shop_grid')->name('shop_grid');
Route::get('/shoping_cart', 'CartController@gio_hang')->name('shoping_cart');
Route::get('/checkout','FrontendController@checkout')->name('checkout');
Route::get('/shop_details','FrontendController@shop_details')->name('shop_details');
//Route::get('/Add-Cart/{id}','FrontendController@add_cart' )->name('add-cart');
//Route::post('add-cart', 'CartController@save_cart')->name('addCart');
//Route::post('update-qty-cart{id}', 'CartController@update_quantity')->name('updateCart');
//Route::get('delete-cart/{rowId}', 'CartController@delete_cart')->name('deleteCart');
//Route::get('/AddCart/{id}', 'CartController@AddCart')->name('add-cart');
Route::post('/add-cart-ajax', 'CartController@add_cart_ajax');
Route::get('/delete_cart/{session_id}','CartController@delete_cart');
//Route::get('/gio-hang','CartController@gio_hang');
 ?>
