<?php

namespace ReesMcIvor\Labels;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Nova;
use ReesMcIvor\Labels\Nova\Labels;

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

        Blade::componentNamespace('ReesMcIvor\\Labels\\View\\Components', 'labels');

        Nova::resources([
            Labels::class,
        ]);
    }

    private function modulePath($path)
    {
        return __DIR__ . '/../../' . $path;
    }
}
