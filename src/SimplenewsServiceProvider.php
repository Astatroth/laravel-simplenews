<?php

namespace Astatroth\LaravelSimplenews;

use Illuminate\Support\ServiceProvider;

class SimplenewsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/lang', 'simplenews');

        $this->loadViewsFrom(__DIR__.'/views', 'simlenews');

        $this->publishes([
            __DIR__.'/database/migrations' => base_path('database/migrations')
        ]);
    }

    public function register()
    {
        $this->app->bind(
            'simplenews',
            SimplenewsManager::class
        );
    }
}