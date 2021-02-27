<?php

Route::get('posts', [
    'as' => 'admin.posts.index',
    'uses' => 'PostController@index',
    'middleware' => 'can:admin.posts.index',
]);

Route::get('posts/create', [
    'as' => 'admin.posts.create',
    'uses' => 'PostController@create',
    'middleware' => 'can:admin.posts.create',
]);

Route::post('posts', [
    'as' => 'admin.posts.store',
    'uses' => 'PostController@store',
    'middleware' => 'can:admin.posts.create',
]);

Route::get('posts/{id}/edit', [
    'as' => 'admin.posts.edit',
    'uses' => 'PostController@edit',
    'middleware' => 'can:admin.posts.edit',
]);

Route::put('posts/{id}', [
    'as' => 'admin.posts.update',
    'uses' => 'PostController@update',
    'middleware' => 'can:admin.posts.edit',
]);

Route::delete('posts/{ids?}', [
    'as' => 'admin.posts.destroy',
    'uses' => 'PostController@destroy',
    'middleware' => 'can:admin.posts.destroy',
]);

//Category

Route::get('category_posts/tree', [
    'as' => 'admin.category_posts.tree',
    'uses' => 'CategoryPostTreeController@index',
    'middleware' => 'can:admin.category_posts.index',
]);

Route::put('category_posts/tree', [
    'as' => 'admin.category_posts.tree.update',
    'uses' => 'CategoryPostTreeController@update',
    'middleware' => 'can:admin.category_posts.edit',
]);

Route::get('category-posts', [
    'as' => 'admin.category_posts.index',
    'uses' => 'CategoryPostController@index',
    'middleware' => 'can:admin.category_posts.index',
]);

Route::get('category-posts/create', [
    'as' => 'admin.category_posts.create',
    'uses' => 'CategoryPostController@create',
    'middleware' => 'can:admin.category_posts.create',
]);

Route::post('category-posts', [
    'as' => 'admin.category_posts.store',
    'uses' => 'CategoryPostController@store',
    'middleware' => 'can:admin.category_posts.create',
]);

Route::get('category-posts/{id}', [
    'as' => 'admin.category_posts.show',
    'uses' => 'CategoryPostController@show',
    'middleware' => 'can:admin.category_posts.edit',
]);


Route::put('category-posts/{id}', [
    'as' => 'admin.category_posts.update',
    'uses' => 'CategoryPostController@update',
    'middleware' => 'can:admin.category_posts.edit',
]);

Route::delete('category-posts/{ids?}', [
    'as' => 'admin.category_posts.destroy',
    'uses' => 'CategoryPostController@destroy',
    'middleware' => 'can:admin.category_posts.destroy',
]);

// append


