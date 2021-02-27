<?php

namespace Modules\Post\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use Modules\Admin\Traits\HasCrudActions;
use Modules\Post\Entities\CategoryPost;
use Modules\Post\Http\Requests\SaveCategoryPostRequest;

class CategoryPostController extends Controller
{
    use HasCrudActions;

    /**
     * Model for the resource.
     *
     * @var string
     */
    protected $model = CategoryPost::class;

    /**
     * Label of the resource.
     *
     * @var string
     */
    protected $label = 'post::category_posts.category_post';

    /**
     * View path of the resource.
     *
     * @var string
     */
    protected $viewPath = 'post::admin.category_posts';

    /**
     * Form requests for the resource.
     *
     * @var array
     */
    protected $validation = SaveCategoryPostRequest::class;

    public function store(SaveCategoryPostRequest $request)
    {
        $this->disableSearchSyncing();
        $data = $request->all();
        $entity = CategoryPost::create($data);
        if (!isset($data['parent_id'])){
            $entity->id_path = $entity->id;
            $entity->level = 1;
        }else{
            $entity->id_path = $entity->parent->id_path.'/'.$entity->id;
            $entity->level = $entity->parent->level+1;
        }
        $entity->save();

        $this->searchable($entity);

        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo($entity);
        }

        return redirect()->route("{$this->getRoutePrefix()}.index")
            ->withSuccess(trans('admin::messages.resource_saved', ['resource' => $this->getLabel()]));
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return CategoryPost::withoutGlobalScope('active')->with('files')->find($id);
    }

    /**
     * Destroy resources by given ids.
     *
     * @param $ids
     * @return \Illuminate\Http\Response
     */
    public function destroy($ids)
    {
        CategoryPost::withoutGlobalScope('active')
            ->findOrFail($ids)
            ->delete();

        return back()->withSuccess(trans('admin::messages.resource_deleted', ['resource' => $this->getLabel()]));
    }
}
