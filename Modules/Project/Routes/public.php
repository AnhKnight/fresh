<?php
Route::get('projects', 'ProjectController@index')->name('projects.index');
Route::get('projects/{slug}', 'ProjectController@show')->name('projects.show');
