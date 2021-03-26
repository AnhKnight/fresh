<?php

namespace Modules\Media\Admin;

use Modules\Admin\Ui\AdminTable;

class MediaTable extends AdminTable
{
    /**
     * Raw columns that will not be escaped.
     *
     * @var array
     */
    protected $rawColumns = ['action'];

    /**
     * Make table response for the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function make()
    {
        return $this->newTable()
            ->editColumn('thumbnail', function ($file) {
                return view('media::admin.media.partials.table.thumbnail', compact('file'));
            })->editColumn('filename', function ($filename) {
                return str_limit($filename->filename, 15);
            })
            ->addColumn('action', function ($file) {
                $forEditor = request()->for_editor;
                return view('media::admin.media.partials.table.action', compact('file', 'forEditor'));
            });
    }
}
