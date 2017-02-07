<?php namespace Oozman\Docmail;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class DocmailServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/docmail.php' => config_path('docmail.php'),
        ]);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('docmail', function ($app) {
            return new DocmailService();
        });

        $this->mergeConfigFrom(
            __DIR__.'/config/docmail.php', 'docmail'
        );
    }
}