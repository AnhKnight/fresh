<?php

namespace Modules\Post\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Traits\HasCrudActions;
use Modules\Post\Entities\Post;
use Modules\Post\Http\Requests\SavePostRequest;

class PostController extends Controller
{
    use HasCrudActions;

    /**
     * Model for the resource.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Label of the resource.
     *
     * @var string
     */
    protected $label = 'post::posts.post';

    /**
     * View path of the resource.
     *
     * @var string
     */
    protected $viewPath = 'post::admin.posts';

    /**
     * Form requests for the resource.
     *
     * @var array
     */
    protected $validation = SavePostRequest::class;

    public function store(Request $request)
    {
        $this->disableSearchSyncing();
        $data = $request->all();
        $data['user_id'] = auth()->user()->id;
        $entity = Post::create($data);
        $entity->save();

        $this->searchable($entity);

        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo($entity);
        }

        return redirect()->route("{$this->getRoutePrefix()}.index")
            ->withSuccess(trans('admin::messages.resource_saved', ['resource' => $this->getLabel()]));
    }
}
