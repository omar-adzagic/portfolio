<?php

Route::get('/', 'WebsiteController@index')->name('website.index');

/* BLog Routes */
Route::get('blogs', 'BlogsController@index');
Route::get('blogs/{blog}', 'BlogsController@index');

// Blog Get Routes
Route::get('/get-blogs', 'BlogsController@getBlogs');
Route::get('/get-blog/{blog}', 'BlogsController@getBlog');
Route::get('/get-blog-categories', 'BlogsController@getBlogCategories');
Route::post('/get-category-blogs', 'BlogsController@getCategoryBlogs');
Route::post('/get-search-blogs', 'BlogsController@getSearchBlogs');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
