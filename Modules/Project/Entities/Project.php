<?php

namespace Modules\Project\Entities;

use Modules\Category\Entities\Category;
use Modules\Media\Eloquent\HasMedia;
use Modules\Media\Entities\File;
use Modules\Meta\Eloquent\HasMetaData;
use Modules\Project\Admin\ProjectTable;
use Modules\Support\Eloquent\Model;
use Modules\Support\Eloquent\Sluggable;
use Modules\Support\Eloquent\Translatable;
use Modules\User\Entities\User;
use TypiCMS\NestableTrait;
use Illuminate\Support\Facades\Request;

class Project extends Model
{
    use Translatable, Sluggable, HasMedia, HasMetaData, NestableTrait;

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = ['translations', 'user'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'is_active',
        'slug',
        'user_id'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * The attributes that are translatable.
     *
     * @var array
     */
    public $translatedAttributes = [
        'title',
        'short_description',
        'body'
    ];

    protected $slugAttribute = 'title';

    protected static function boot()
    {
        parent::boot();

        static::saved(function ($project) {
            if (! empty(request()->all())) {
                $project->saveRelations(request()->all());
            }
        });

        static::addActiveGlobalScope();
    }

    /**
     * Save associated relations for the product.
     *
     * @param array $attributes
     * @return void
     */
    public function saveRelations($attributes = [])
    {
        $this->categories()->sync(array_get($attributes, 'categories', []));
        $this->categoryProducts()->sync(array_get($attributes, 'category_products', []));
    }

    public function getBaseImageAttribute()
    {
        return $this->files->where('pivot.zone', 'base_image')->first() ?: new File;
    }

    public function getAdditionalImagesAttribute()
    {
        return $this->files
            ->where('pivot.zone', 'additional_images')
            ->sortBy('pivot.id');
    }

    public function table()
    {
        return new ProjectTable($this->withoutGlobalScope('active'));
    }

    public function categories()
    {
        return $this->belongsToMany(CategoryProject::class, 'project_categories');
    }

    public function categoryProducts()
    {
        return $this->belongsToMany(Category::class, 'project_category_products', 'project_id', 'category_product_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function filter($filter)
    {
        return $filter->apply($this);
    }

    public static function findBySlug($slug)
    {
        return static::with([
            'files'
        ])->where('slug', $slug)->firstOrFail();
    }
}
