<?php

namespace ReesMcIvor\Tags;

use Illuminate\Support\ServiceProvider;

class TagsPackageServiceProvider extends ServiceProvider
{
    protected $namespace = 'ReesMcIvor\Tags\Http\Controllers';

    public function boot()
    {
        if($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../publish/config' => base_path('config'),
                __DIR__ . '/../database/migrations' => class_exists('Stancl\Tenancy\TenancyServiceProvider') ? database_path('migrations/tenant') : database_path('migrations'),
                __DIR__ . '/../publish/tests' => base_path('tests/Tags'),
            ], 'laravel-tags');
        }

        $this->loadViewsFrom(__DIR__.'/resources/views', 'laravel-tags');
    }

    private function modulePath($path)
    {
        return __DIR__ . '/../../' . $path;
    }
}
