<?php

namespace Modules\Post\Admin;

use Modules\Admin\Ui\AdminTable;

class PostTable extends AdminTable
{
    /**
     * Make table response for the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function make()
    {
        return $this->newTable()
            ->editColumn('thumbnail', function ($post) {
                $path = optional($post->base_image)->path;

                return view('post::admin.posts.partials.table.thumbnail', compact('path'));
            });
    }
}
