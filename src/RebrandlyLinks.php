<?php 

namespace Givebutter\LaravelRebrandly;

class RebrandlyLinks extends RebrandlyResource
{
    public function create($options)
    {
        $defaultOptions = [
            'domain'      => ['fullName' => config('rebrandly.default_domain')],
        ];
        
        $options = array_merge($defaultOptions, $options);
        
        return $this->client->post('links', $options);
        
        /*$data = [
            'destination' => 'https://www.almogcohen.com',
            'domain'      => ['fullName' => config('rebrandly.default_domain')],
            'title'       => 'test2',
            'slashtag'    => 'api',        ];
        return self::postRequest($data);*/
    }
    
    public function update($id, $options)
    {
        return $this->client->post('links/'.$id, $options);
    }
    
    public function get($id = '')
    {
        return $this->client->get('links/'.$id);
    }
    
    public function delete($id)
    {
        return $this->client->delete('links/'.$id);
    }
}
