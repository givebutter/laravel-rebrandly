<?php

namespace Givebutter\LaravelRebrandly;

class Rebrandly
{
    public function links()
    {
        return new RebrandlyLinks(new RebrandlyClient());
    }
}
