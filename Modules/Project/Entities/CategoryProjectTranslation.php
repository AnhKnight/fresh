<?php

namespace Modules\Project\Entities;

use Modules\Support\Eloquent\TranslationModel;

class CategoryProjectTranslation extends TranslationModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];
}
