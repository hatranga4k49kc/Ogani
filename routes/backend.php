<?php
use App\Http\Controllers\BackendController;
//Route::post('/login', 'BackendController@login')->name('check.login');
//Route::get('/login', 'BackendController@Showlogin')->name('backend.login');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminAuthController@index')->name('backend.index')->middleware('checkadmin');
    Route::get('/create', 'BackendController@createCategory')->name('backend.create');
    Route::post('/create', 'BackendController@storeCategory')->name('backend.store');
    Route::get('/{id}/edit', 'BackendController@editCategory')->name('backend.edit');
    Route::post('/{id}/edit', 'BackendController@updateCategory')->name('backend.update');
    Route::get('/{id}/destroy', 'BackendController@destroyCategory')->name('backend.destroy');
    Route::get('/{id}/showProduct', 'BackendController@getProduct')->name('backend.show.product');
    Route::get('/{id}/showProduct/createProduct', 'BackendController@createProduct')->name('backend.create.product');
    Route::post('/{id}/showProduct/createProduct', 'BackendController@storeProduct')->name('backend.store.product');
    Route::get('/{id}/showProduct/{param}/detailsProduct', 'BackendController@detailsProduct')->name('backend.details.product');
    Route::get('/register', 'AdminAuthController@ShowRegister')->name('backend.admin.register');
    Route::post('/register', 'AdminAuthController@register')->name('backend.admin.check.register');
    Route::get('/login', 'AdminAuthController@ShowLogin')->name('backend.admin.login');
    Route::post('/login', 'AdminAuthController@login')->name('backend.admin.check.login');
    Route::get('/logout', 'AdminAuthController@logout')->name('backend.admin.logout');
//    Route::get('/page-guest', 'AdminAuthController@showPageGuest');
//    Route::get('/page-admin', 'AdminAuthController@showPageAdmin')->name('demo1');


});

 ?>
