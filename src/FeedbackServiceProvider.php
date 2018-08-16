<?php

namespace Wti\FeedbackForm;

use Illuminate\Support\ServiceProvider;

class FeedbackServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'feedbackform');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');   
        $this->mergeConfigFrom(
            __DIR__ . '/config/feedback.php',
            'feedback'
        );
        $this->publishes([
            __DIR__ . '/config/feedback.php' => config_path('feedback.php'),
            __DIR__ . '/resources' => resource_path('resources/views/feedback')
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
