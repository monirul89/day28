<?php

Route::get('/',[
    'uses' => 'BigStoreController@index',
    'as' => '/'
]);
Route::get('/contact-us',[
    'uses' => 'BigStoreController@contactUs',
    'as' => 'contact'
]);

Route::get('/hair-care',[
    'uses'=>'BigStoreController@hairCare',
    'as'=>'care'
]);
Route::get('/care/single',[
    'uses'=>'BigStoreController@singleProduct',
    'as'=>'single'
]);

Route::get('/categorys/add',[
    'uses'=>'CategoryController@index',
    'as'=>'add-categorys'
]);
Route::get('/categorys/manage',[
    'uses'=>'CategoryController@manageCategory',
    'as'=>'manage-category'
]);

Route::post('/categorys/save',[
    'uses'=>'CategoryController@saveCategory',
    'as'=>'new-category'
]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
