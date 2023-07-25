<?php

namespace ReesMcIvor\Groups;

use Illuminate\Support\ServiceProvider;

class GroupsPackageServiceProvider extends ServiceProvider
{
    protected $namespace = 'ReesMcIvor\Blog\Http\Controllers';

    public function boot()
    {
        if($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../publish/config' => base_path('config'),
                __DIR__ . '/../database/migrations' => class_exists('Stancl\Tenancy\TenancyServiceProvider') ? database_path('migrations/tenant') : database_path('migrations'),
                __DIR__ . '/../publish/tests' => base_path('tests/Groups'),
            ], 'laravel-groups');
        }

        $this->loadViewsFrom(__DIR__.'/resources/views', 'laravel-groups');
    }

    private function modulePath($path)
    {
        return __DIR__ . '/../../' . $path;
    }
}
