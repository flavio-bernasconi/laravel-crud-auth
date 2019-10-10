<?php

Auth::routes();

Route::get('/home', function(){
  return redirect('/');
});

Route::get('/', 'CatController@index')->name('home');
Route::get('/cat/{id}', 'CatAuthController@show')->name('showCat');

Route::get('/add', 'CatAuthController@create')->name('createCat');
Route::post('/store', 'CatAuthController@store')->name('storeCat');

Route::get('/cat/edit/{id}', 'CatAuthController@edit')->name('editCat');
Route::post('/cat/store/{id}', 'CatAuthController@update')->name('updateCat');

Route::get('/cat/remove/{id}', 'CatAuthController@destroy')->name('deleteCat');
