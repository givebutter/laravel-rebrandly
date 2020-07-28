<?php

namespace Givebutter\LaravelRebrandly;

use Givebutter\LaravelRebrandly\Resources\RebrandlyLinks;
use Givebutter\LaravelRebrandly\Resources\RebrandlyDomains;

class Rebrandly
{
    public function links()
    {
        return new RebrandlyLinks(new RebrandlyClient());
    }
    
    public function domains()
    {
        return new RebrandlyDomains(new RebrandlyClient());
    }
}
