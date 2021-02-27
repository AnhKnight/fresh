<?php

namespace Modules\Project\Responses;

use Illuminate\Contracts\Support\Responsable;

class CategoryProjectTreeResponse implements Responsable
{
    /**
     * Categories collection.
     *
     * @var \Illuminate\Database\Eloquent\Collection
     */
    private $category_projects;

    /**
     * Create a new instance.
     *
     * @param $category_projects
     */
    public function __construct($category_projects)
    {
        $this->category_projects = $category_projects;
    }

    /**
     * Create an HTTP response that represents the object.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function toResponse($request)
    {
        return response()->json($this->transform());
    }

    /**
     * Transform the category_post.
     *
     * @return \Illuminate\Support\Collection
     */
    private function transform()
    {
        return $this->category_projects->map(function ($category_post) {
            return [
                'id' => $category_post->id,
                'parent' => $category_post->parent_id ?: '#',
                'text' => $category_post->name,
                'data' => [
                    'position' => $category_post->position,
                ],
            ];
        });
    }
}
