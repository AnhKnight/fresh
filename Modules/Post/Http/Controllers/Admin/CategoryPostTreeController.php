<?php

namespace Modules\Post\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use Modules\Post\Entities\CategoryPost;
use Modules\Post\Services\CategoryPostTreeUpdater;
use Modules\Post\Responses\CategoryPostTreeResponse;
class CategoryPostTreeController extends Controller
{
    /**
     * Display category tree in json.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category_posts = CategoryPost::withoutGlobalScope('active')
            ->orderByRaw('-id DESC')
            ->get();
        return new CategoryPostTreeResponse($category_posts);
    }

    /**
     * Update category tree in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        CategoryPostTreeUpdater::update(request('category_tree'));

        return trans('category::messages.category_order_saved');
    }
}
