<?php 

namespace Givebutter\LaravelRebrandly\Resources;

class RebrandlyLinks extends RebrandlyResource
{
    public function create($options)
    {
        $defaultOptions = [
            'domain'      => ['fullName' => config('rebrandly.default_domain')],
        ];
        
        $options = array_merge($defaultOptions, $options);
        
        return $this->client->post('links', $options);
    }
    
    public function update($id, $options)
    {
        return $this->client->post('links/'.$id, $options);
    }
    
    public function get($id = '')
    {
        return $this->client->get('links/'.$id);
    }
    
    public function list($options = null)
    {
        $options = http_build_query($options ?? []);
        return $this->client->get('links?'.$options);
    }
    
    public function count($options = null)
    {   
        $options = http_build_query($options ?? []);
        return $this->client->get('links/count?'.$options);
    }
    
    public function attachTag($lid, $tid)
    {
        return $this->client->post('links/'.$lid.'/tags/'.$tid);
    }
    
    public function detachTag($lid, $tid)
    {
        return $this->client->delete('links/'.$lid.'/tags/'.$tid);
    }
    
    public function delete($id)
    {
        return $this->client->delete('links/'.$id);
    }
}
