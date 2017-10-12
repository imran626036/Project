<?php


Route::get('/', 'WelcomeController@index');
Route::get('/category', 'WelcomeController@category');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add-category', 'CategoryController@addCategory');
Route::post('/new-category', 'CategoryController@saveCategoryInfo');

Route::get('/manage-category', 'CategoryController@manageCategoryInfo');

Route::get('/unpublished-category/{id}', 'CategoryController@unpublishedCategoryInfo');

Route::get('/published-category/{id}', 'CategoryController@publishedCategoryInfo');


Route::get('/edit-category/{id}', 'CategoryController@editCategoryInfo');

