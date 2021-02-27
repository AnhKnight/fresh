<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Define which assets will be available through the asset manager
    |--------------------------------------------------------------------------
    | These assets are registered on the asset manager
    */
    'all_assets' => [
        'admin.category_post.css' => ['module' => 'post:admin/css/category_post.css'],
        'admin.category_post.js' => ['module' => 'post:admin/js/category_post.js'],
        'admin.category_post.jstree.js' => ['module' => 'post:admin/js/jstree.js'],
//        'admin.post.css' => ['module' => 'post:admin/css/post.css'],
//        'admin.post.js' => ['module' => 'post:admin/js/post.js'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Define which default assets will always be included in your pages
    | through the asset pipeline
    |--------------------------------------------------------------------------
    */
    'required-assets' => [],
];
