<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Define which assets will be available through the asset manager
    |--------------------------------------------------------------------------
    | These assets are registered on the asset manager
    */
    'all_assets' => [
        'admin.category_project.css' => ['module' => 'project:admin/css/category_project.css'],
        'admin.category_project.js' => ['module' => 'project:admin/js/category_project.js'],
        'admin.category_project.jstree.js' => ['module' => 'project:admin/js/jstree.js'],
        'admin.project.css' => ['module' => 'project:admin/css/project.css'],
        'admin.project.js' => ['module' => 'project:admin/js/project.js'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Define which default assets will always be included in your pages
    | through the asset pipeline
    |--------------------------------------------------------------------------
    */
    'required-assets' => [],
];
