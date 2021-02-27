<?php

namespace Modules\Project\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use Modules\Admin\Traits\HasCrudActions;
use Modules\Project\Entities\Project;
use Modules\Project\Http\Requests\SaveProjectRequest;

class ProjectController extends Controller
{
    use HasCrudActions;

    /**
     * Model for the resource.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Label of the resource.
     *
     * @var string
     */
    protected $label = 'project::projects.project';

    /**
     * View path of the resource.
     *
     * @var string
     */
    protected $viewPath = 'project::admin.projects';

    /**
     * Form requests for the resource.
     *
     * @var array
     */
    protected $validation = SaveProjectRequest::class;

    public function store(SaveProjectRequest $request)
    {
        $this->disableSearchSyncing();
        $data = $request->all();
        $data['user_id'] = auth()->user()->id;
        $entity = Project::create($data);
        $entity->save();

        $this->searchable($entity);

        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo($entity);
        }

        return redirect()->route("{$this->getRoutePrefix()}.index")
            ->withSuccess(trans('admin::messages.resource_saved', ['resource' => $this->getLabel()]));
    }
}
