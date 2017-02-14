<?php

namespace Ammadeuss\HtmlDomParser;

use Illuminate\Support\ServiceProvider;
use Sunra\PhpSimple\HtmlDomParser;

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
        $this->app->bind('HTML2DomParser', function ($app) {
            return new HtmlDomParser;
        });
    }
}
