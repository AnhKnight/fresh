<?php

namespace Modules\Project\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use Modules\Project\Entities\CategoryProject;
use Modules\Project\Responses\CategoryProjectTreeResponse;
use Modules\Project\Services\CategoryProjectTreeUpdater;

class CategoryProjectTreeController extends Controller
{
    /**
     * Display category tree in json.
     *
     * @return CategoryProjectTreeResponse
     */
    public function index()
    {
        $category_projects = CategoryProject::withoutGlobalScope('active')
            ->orderByRaw('-id DESC')
            ->get();
        return new CategoryProjectTreeResponse($category_projects);
    }

    /**
     * Update category tree in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        CategoryProjectTreeUpdater::update(request('category_tree'));

        return trans('category::messages.category_order_saved');
    }
}
