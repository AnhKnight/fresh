<?php

namespace Modules\Project\Providers;

use Modules\Admin\Ui\Facades\TabManager;
use Modules\Project\Admin\ProjectTabs;
use Modules\Support\Traits\AddsAsset;
use Illuminate\Support\ServiceProvider;
use Modules\Support\Traits\LoadsConfig;

class ProjectServiceProvider extends ServiceProvider
{
    use AddsAsset, LoadsConfig;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        TabManager::register('projects', ProjectTabs::class);
        $this->addAdminAssets('admin.projects.(create|edit)', [
            'admin.media.css', 'admin.media.js', 'admin.project.css', 'admin.project.js'
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
