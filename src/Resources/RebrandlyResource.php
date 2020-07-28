<?php

namespace Givebutter\LaravelRebrandly\Resources;

use Givebutter\LaravelRebrandly\RebrandlyClient;

abstract class RebrandlyResource
{
    protected $client;

    public function __construct(RebrandlyClient $client)
    {
        $this->client = $client;
    }
}
