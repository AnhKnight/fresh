<?php

Route::get('projects', [
    'as' => 'admin.projects.index',
    'uses' => 'ProjectController@index',
    'middleware' => 'can:admin.projects.index',
]);

Route::get('projects/create', [
    'as' => 'admin.projects.create',
    'uses' => 'ProjectController@create',
    'middleware' => 'can:admin.projects.create',
]);

Route::post('projects', [
    'as' => 'admin.projects.store',
    'uses' => 'ProjectController@store',
    'middleware' => 'can:admin.projects.create',
]);

Route::get('projects/{id}/edit', [
    'as' => 'admin.projects.edit',
    'uses' => 'ProjectController@edit',
    'middleware' => 'can:admin.projects.edit',
]);

Route::put('projects/{id}', [
    'as' => 'admin.projects.update',
    'uses' => 'ProjectController@update',
    'middleware' => 'can:admin.projects.edit',
]);

Route::delete('projects/{ids?}', [
    'as' => 'admin.projects.destroy',
    'uses' => 'ProjectController@destroy',
    'middleware' => 'can:admin.projects.destroy',
]);
//Category

Route::get('category_projects/tree', [
    'as' => 'admin.category_projects.tree',
    'uses' => 'CategoryProjectTreeController@index',
    'middleware' => 'can:admin.category_projects.index',
]);

Route::put('category_projects/tree', [
    'as' => 'admin.category_projects.tree.update',
    'uses' => 'CategoryProjectTreeController@update',
    'middleware' => 'can:admin.category_projects.edit',
]);

Route::get('category-projects', [
    'as' => 'admin.category_projects.index',
    'uses' => 'CategoryProjectController@index',
    'middleware' => 'can:admin.category_projects.index',
]);

Route::get('category-projects/create', [
    'as' => 'admin.category_projects.create',
    'uses' => 'CategoryProjectController@create',
    'middleware' => 'can:admin.category_projects.create',
]);

Route::post('category-projects', [
    'as' => 'admin.category_projects.store',
    'uses' => 'CategoryProjectController@store',
    'middleware' => 'can:admin.category_projects.create',
]);

Route::get('category-projects/{id}', [
    'as' => 'admin.category_projects.show',
    'uses' => 'CategoryProjectController@show',
    'middleware' => 'can:admin.category_projects.edit',
]);


Route::put('category-projects/{id}', [
    'as' => 'admin.category_projects.update',
    'uses' => 'CategoryProjectController@update',
    'middleware' => 'can:admin.category_projects.edit',
]);

Route::delete('category-projects/{ids?}', [
    'as' => 'admin.category_projects.destroy',
    'uses' => 'CategoryProjectController@destroy',
    'middleware' => 'can:admin.category_projects.destroy',
]);

// append



