<?php

namespace Givebutter\LaravelRebrandly;

use Illuminate\Support\Facades\Facade;

class RebrandlyFacade extends Facade
{
    /**
    * Get the registered name of the component.
    *
    * @return string
    */
    protected static function getFacadeAccessor() { return 'rebrandly'; }
}
