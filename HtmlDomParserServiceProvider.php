<?php

namespace Ammadeuss\HtmlDomParser;

use Illuminate\Support\ServiceProvider;
use Sunra\HtmlDomParser;

class HtmlDomParserServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('HTMLDomParser', function ($app) {
            return new HtmlDomParser;
        });
    }
}
