<?php

namespace Modules\Contact\Entities;

use Modules\Contact\Admin\ContactTable as ContactTableAlias;
use Modules\Support\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = ['id'];

    public function table()
    {
        return new ContactTableAlias($this->withoutGlobalScope('active'));
    }
}
