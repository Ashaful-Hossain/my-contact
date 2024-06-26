<?php

namespace Ashumizi\ContactPackage;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Route::middleware(['middleware-name'])->group(function () {
            $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        });
        $this->loadViewsFrom(__DIR__ . '/resources/views','contact');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->mergeConfigFrom(
            __DIR__ . '/config/contact.php',
            'ContactInformationPackage'
        );
        $this->publishes([
            __DIR__ . '/config/contact.php' => config_path('contact.php'),
        ]);
        $this->publishesMigrations([
            __DIR__ . '/database/migrations' => database_path('migrations'),
        ]);
        // $this->publishes([
        //     __DIR__ . '/resources/views' => resource_path('views/vendor/contact'),
        // ]);
    }

    public function register()
    {
        Route::middleware(['middleware-name'])->group(function () {
            $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        });
    }
}
