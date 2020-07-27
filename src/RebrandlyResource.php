<?php

namespace Givebutter\LaravelRebrandly;

abstract class RebrandlyResource
{
    protected $client;

    public function __construct(RebrandlyClient $client)
    {
        $this->client = $client;
    }
}
