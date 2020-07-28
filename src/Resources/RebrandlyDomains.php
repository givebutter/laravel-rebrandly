<?php 

namespace Givebutter\LaravelRebrandly\Resources;

class RebrandlyDomains extends RebrandlyResource
{
    public function get($id = '')
    {
        return $this->client->get('domains/'.$id);
    }
    
    public function list($options = null)
    {
        $options = http_build_query($options ?? []);
        return $this->client->get('domains?'.$options);
    }
    
    public function count($options = null)
    {   
        $options = http_build_query($options ?? []);
        return $this->client->get('domains/count?'.$options);
    }
}
