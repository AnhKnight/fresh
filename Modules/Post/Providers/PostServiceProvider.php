<?php

namespace Modules\Post\Providers;

use Modules\Admin\Ui\Facades\TabManager;
use Modules\Post\Admin\CategoryTabs;
use Modules\Post\Admin\PostTabs;
use Modules\Support\Traits\AddsAsset;
use Illuminate\Support\ServiceProvider;
use Modules\Support\Traits\LoadsConfig;

class PostServiceProvider extends ServiceProvider
{
    use AddsAsset, LoadsConfig;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        TabManager::register('posts', PostTabs::class);
        TabManager::register('category_posts', CategoryTabs::class);
        $this->addAdminAssets('admin.posts.(create|edit)', [
            'admin.media.css', 'admin.media.js',
        ]);
        $this->addAdminAssets('admin.category_posts.(create|edit)', [
            'admin.media.css', 'admin.media.js',
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->loadConfigs(['assets.php', 'permissions.php']);
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }
}
