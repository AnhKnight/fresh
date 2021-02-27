<?php
namespace Modules\Post\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Modules\Post\Events\PostViewed;
use Modules\Post\Listeners\IncrementPostView;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        PostViewed::class => [
            IncrementPostView::class,
        ],
    ];
}
