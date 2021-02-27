<?php

namespace Modules\Contact\Admin;

use Modules\Admin\Ui\AdminTable;

class ContactTable extends AdminTable
{
    /**
     * Make table response for the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function make()
    {
        return $this->newTable();
    }
}
