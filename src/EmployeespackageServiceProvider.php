<?php

namespace Profnadir\Employeespackage;

use Illuminate\Support\ServiceProvider;
use Profnadir\Employeespackage\Console\Commands\InspireCommand;

class EmployeespackageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */

        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'employeespackage');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'employeespackage');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('employeespackage.php'),
            ], 'employeespackage-config');

            // Publishing the views.
            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/employeespackage'),
            ], 'employeespackage-views');

            // Publishing assets.
            $this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/employeespackage'),
            ], 'employeespackage-assets');

            // Publishing the translation files.
            $this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/employeespackage'),
            ], 'employeespackage-lang');

            // Registering package commands.
            $this->commands([InspireCommand::class]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'employeespackage');

        // Register the main class to use with the facade
        $this->app->singleton('employeespackage', function () {
            return new Employeespackage;
        });
    }
}
