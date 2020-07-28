<?php

namespace Givebutter\LaravelRebrandly;

use Givebutter\LaravelRebrandly\Resources\RebrandlyLinks;

class Rebrandly
{
    public function links()
    {
        return new RebrandlyLinks(new RebrandlyClient());
    }
}
