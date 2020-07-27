<?php

namespace Givebutter\LaravelRebrandly;

class Rebrandly
{
    protected $links;
    
    function __construct()
    {
        $this->links = new RebrandlyLinks(new RebrandlyClient());
    }
    
    function links()
    {
        return new RebrandlyLinks(new RebrandlyClient());
    }
}
