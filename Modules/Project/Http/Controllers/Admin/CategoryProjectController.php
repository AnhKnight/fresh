<?php

namespace Modules\Project\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use Modules\Admin\Traits\HasCrudActions;
use Modules\Project\Entities\CategoryProject;
use Modules\Project\Http\Requests\SaveCategoryProjectRequest;

class CategoryProjectController extends Controller
{
    use HasCrudActions;

    /**
     * Model for the resource.
     *
     * @var string
     */
    protected $model = CategoryProject::class;

    /**
     * Label of the resource.
     *
     * @var string
     */
    protected $label = 'project::category_projects.category_project';

    /**
     * View path of the resource.
     *
     * @var string
     */
    protected $viewPath = 'project::admin.category_projects';

    /**
     * Form requests for the resource.
     *
     * @var array
     */
    protected $validation = SaveCategoryProjectRequest::class;

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return CategoryProject::withoutGlobalScope('active')->with('files')->find($id);
    }

    /**
     * Destroy resources by given ids.
     *
     * @param $ids
     * @return \Illuminate\Http\Response
     */
    public function destroy($ids)
    {
        CategoryProject::withoutGlobalScope('active')
            ->findOrFail($ids)
            ->delete();

        return back()->withSuccess(trans('admin::messages.resource_deleted', ['resource' => $this->getLabel()]));
    }
}
