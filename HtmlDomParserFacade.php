<?php

namespace Ammadeuss\HtmlDomParser;

use Illuminate\Support\Facades\Facade;

class HtmlDomParserFacade extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
        return 'HTML2DomParser';
    }
}
