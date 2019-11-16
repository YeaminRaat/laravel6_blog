<?php

Route::get('/', 'FrontController@index')->name('index');
Route::get('/view/{id}', 'FrontController@viewSingleBlog')->name('viewBlog');
Route::get('/c/{id}', 'FrontController@viewBlogByCategory')->name('listBlog');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>'auth'], function(){
    Route::resource('category', 'CategoryController');
    Route::put('category/status/{id}', 'CategoryController@status')->name('category.status');
    Route::resource('blog','BlogController');
    Route::put('blog/status/{id}', 'BlogController@status')->name('blog.status');
});
