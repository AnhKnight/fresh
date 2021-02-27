<?php

namespace Modules\Post\Entities;

use Modules\Support\Eloquent\TranslationModel;

class CategoryPostTranslation extends TranslationModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];
}
