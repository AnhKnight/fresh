<?php

namespace Modules\Project\Admin;

use Modules\Admin\Ui\AdminTable;

class ProjectTable extends AdminTable
{
    /**
     * Make table response for the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function make()
    {
        return $this->newTable()
            ->editColumn('thumbnail', function ($project) {
                $path = optional($project->base_image)->path;

                return view('project::admin.projects.partials.table.thumbnail', compact('path'));
            });
    }
}
