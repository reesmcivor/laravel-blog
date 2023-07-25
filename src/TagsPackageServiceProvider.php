<?php

namespace ReesMcIvor\Labels;

use Illuminate\Support\ServiceProvider;

class LabelsPackageServiceProvider extends ServiceProvider
{
    protected $namespace = 'ReesMcIvor\Labels\Http\Controllers';

    public function boot()
    {
        if($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../database/migrations' => class_exists('Stancl\Tenancy\TenancyServiceProvider') ? database_path('migrations/tenant') : database_path('migrations'),
                __DIR__ . '/../publish/tests' => base_path('tests/Labels'),
            ], 'laravel-labelables');
        }

        $this->loadViewsFrom(__DIR__.'/resources/views', 'laravel-labelables');
    }

    private function modulePath($path)
    {
        return __DIR__ . '/../../' . $path;
    }
}
