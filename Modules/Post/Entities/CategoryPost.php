<?php

namespace Modules\Post\Entities;

use Illuminate\Support\Facades\Cache;
use Modules\Post\Admin\CategoryTable;
use Modules\Media\Eloquent\HasMedia;
use Modules\Media\Entities\File;
use Modules\Support\Eloquent\Model;
use Modules\Support\Eloquent\Sluggable;
use Modules\Support\Eloquent\Translatable;
use TypiCMS\NestableTrait;

class CategoryPost extends Model
{
    use Translatable, Sluggable, NestableTrait, HasMedia;

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = ['translations', 'parent'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['slug', 'is_active', 'parent_id'];

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
        'name', 'header_description',
    ];

    protected $slugAttribute = 'name';

    public static function tree()
    {
        return Cache::tags(['category_posts'])->rememberForever('category_posts.tree:' . locale(), function () {
            return static::orderByRaw('-id DESC')->get()->nest();
        });
    }

    public static function treeList()
    {
        return Cache::tags(['category_posts'])->rememberForever('category_posts.tree_list:' . locale(), function () {
            return static::orderByRaw('-id DESC')
                ->get()
                ->nest()
                ->setIndent('¦–– ')
                ->listsFlattened('name');
        });
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function posts()
    {
        return $this->belongsTo(Post::class, 'category_id', 'id');
    }


    public function parent()
    {
        return $this->belongsTo(CategoryPost::class, 'parent_id', 'id');
    }

    public function children()
    {
        return $this->hasMany(CategoryPost::class, 'parent_id', 'id');
    }

    /**
     * @return CategoryTable
     */
    public function table()
    {
        return new CategoryTable($this->with('posts')->withoutGlobalScope('active'));
    }

    public function url()
    {
        return route('posts.index', ['category' => $this->slug]);
    }
}
