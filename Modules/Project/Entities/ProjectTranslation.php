<?php

namespace Modules\Project\Entities;

use Modules\Support\Eloquent\TranslationModel;

class ProjectTranslation extends TranslationModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];
}
