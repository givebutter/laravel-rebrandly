<?php

namespace Givebutter\LaravelRebrandly;

use Givebutter\LaravelRebrandly\Resources\RebrandlyLinks;
use Givebutter\LaravelRebrandly\Resources\RebrandlyDomains;
use Givebutter\LaravelRebrandly\Resources\RebrandlyTags;

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
    
    public function tags()
    {
        return new RebrandlyTags(new RebrandlyClient());
    }
}
