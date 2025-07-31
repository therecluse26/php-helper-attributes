<?php

namespace TheRecluse26\LaravelAttributes;

use Illuminate\Support\ServiceProvider;
use TheRecluse26\LaravelAttributes\Services\AttributeProcessor;

class LaravelAttributesServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(AttributeProcessor::class, function ($app) {
            return new AttributeProcessor(
                $app['cache'],
                $app['log'],
                $app['db']
            );
        });
    }

    public function boot(): void
    {
        // Register any global bindings or middleware here
    }
}