<?php

namespace Modules\Post\Responses;

use Illuminate\Contracts\Support\Responsable;

class CategoryPostTreeResponse implements Responsable
{
    /**
     * Categories collection.
     *
     * @var \Illuminate\Database\Eloquent\Collection
     */
    private $category_posts;

    /**
     * Create a new instance.
     *
     * @param $category_posts
     */
    public function __construct($category_posts)
    {
        $this->category_posts = $category_posts;
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
        return $this->category_posts->map(function ($category_post) {
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
