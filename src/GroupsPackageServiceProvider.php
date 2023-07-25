<?php

namespace ReesMcIvor\SlotKeeper;

use Illuminate\Support\ServiceProvider;
use ReesMcIvor\SlotKeeper\Console\Commands\ReleaseSlotKeepers;

class GroupsPackageServiceProvider extends ServiceProvider
{
    protected $namespace = 'ReesMcIvor\Blog\Http\Controllers';

    public function boot()
    {
        if($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../publish/config' => base_path('config'),
                __DIR__ . '/../database/migrations' => class_exists('Stancl\Tenancy\TenancyServiceProvider') ? database_path('migrations/tenant') : database_path('migrations'),
                __DIR__ . '/../publish/tests' => base_path('tests/Blog'),
            ], 'laravel-blog');
        }

        $this->loadRoutesFrom(__DIR__.'/routes/api.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'blog');
    }

    private function modulePath($path)
    {
        return __DIR__ . '/../../' . $path;
    }
}
