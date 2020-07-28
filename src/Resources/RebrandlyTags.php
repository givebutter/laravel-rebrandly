<?php 

namespace Givebutter\LaravelRebrandly\Resources;

class RebrandlyTags extends RebrandlyResource
{
    public function create($options)
    {
        return $this->client->post('tags', $options);
    }
    
    public function update($id, $options)
    {
        return $this->client->post('tags/'.$id, $options);
    }
    
    public function get($id = '')
    {
        return $this->client->get('tags/'.$id);
    }
    
    public function list($options = null)
    {
        $options = http_build_query($options ?? []);
        return $this->client->get('tags?'.$options);
    }
    
    public function count($options = null)
    {   
        $options = http_build_query($options ?? []);
        return $this->client->get('tags/count?'.$options);
    }
    
    public function delete($id)
    {
        return $this->client->delete('tags/'.$id);
    }
}
