<?php

Route::get('contacts', [
    'as' => 'admin.contacts.index',
    'uses' => 'ContactController@index',
    'middleware' => 'can:admin.contacts.index',
]);

Route::get('contacts/create', [
    'as' => 'admin.contacts.create',
    'uses' => 'ContactController@create',
    'middleware' => 'can:admin.contacts.create',
]);

Route::post('contacts', [
    'as' => 'admin.contacts.store',
    'uses' => 'ContactController@store',
    'middleware' => 'can:admin.contacts.create',
]);

Route::get('contacts/{id}/edit', [
    'as' => 'admin.contacts.edit',
    'uses' => 'ContactController@edit',
    'middleware' => 'can:admin.contacts.edit',
]);

Route::put('contacts/{id}', [
    'as' => 'admin.contacts.update',
    'uses' => 'ContactController@update',
    'middleware' => 'can:admin.contacts.edit',
]);

Route::delete('contacts/{ids?}', [
    'as' => 'admin.contacts.destroy',
    'uses' => 'ContactController@destroy',
    'middleware' => 'can:admin.contacts.destroy',
]);

// append

