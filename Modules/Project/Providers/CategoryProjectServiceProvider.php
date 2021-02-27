<?php

namespace Modules\Project\Providers;

use Modules\Admin\Ui\Facades\TabManager;
use Modules\Menu\Admin\CategoryTabs;
use Modules\Support\Traits\AddsAsset;
use Illuminate\Support\ServiceProvider;
use Modules\Support\Traits\LoadsConfig;

class CategoryProjectServiceProvider extends ServiceProvider
{
    use AddsAsset, LoadsConfig;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
//        TabManager::register('category_post', CategoryTabs::class);

        $this->addAdminAssets('admin.category_projects.index', ['admin.category_project.css', 'admin.category_project.jstree.js', 'admin.category_project.js']);
        $this->addAdminAssets('admin.category_projects.index', ['admin.media.css', 'admin.media.js']);
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
