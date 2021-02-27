<?php

namespace Modules\Post\Providers;

use Modules\Core\Providers\RouteServiceProvider as ServiceProvider;
use Modules\Post\Listeners\IncrementPostView;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The root namespace to assume when generating URLs to actions.
     *
     * @var string
     */
    protected $namespace = 'Modules\Post\Http\Controllers';

    /**
     * Get admin routes.
     *
     * @return string
     */
    protected function admin()
    {
        return __DIR__ . '/../Routes/admin.php';
    }
    /**
     * @return string
     */
    protected function public()
    {
        return __DIR__ . '/../Routes/public.php';
    }

}
