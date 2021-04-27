<?php

namespace Modules\Post\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Request;
use Modules\Media\Eloquent\HasMedia;
use Modules\Media\Entities\File;
use Modules\Meta\Eloquent\HasMetaData;
use Modules\Post\Admin\PostTable;
use Modules\Support\Eloquent\Model;
use Modules\Support\Eloquent\Sluggable;
use Modules\Support\Eloquent\Translatable;
use Modules\User\Entities\User;
use TypiCMS\NestableTrait;

class Post extends Model
{
    use Translatable, Sluggable, HasMedia, HasMetaData, NestableTrait, SoftDeletes;

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = ['translations', 'user'];
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'is_active',
        'slug',
        'user_id',
        'viewed'
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
        'body',
        'header_description',
    ];

    protected $slugAttribute = 'title';

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($post) {
            Request::merge(['files' => [
                'base_image' => request()->input('files.base_image', []),
            ]]);
        });

        static::saved(function ($post) {
            if (! empty(request()->all())) {
                $post->saveRelations(request()->all());
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
        return new PostTable($this->withoutGlobalScope('active'));
    }

    public function categories()
    {
        return $this->belongsToMany(CategoryPost::class, 'post_categories');
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
