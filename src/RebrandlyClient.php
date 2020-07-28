<?php 

namespace Givebutter\LaravelRebrandly;

class RebrandlyClient
{
    public function post($slug, $data = [])
    {
        try {
            $client = new \GuzzleHttp\Client();
            
            $options = [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'apikey'       => config('rebrandly.api_key'),
                ],
                'json' => $data,
            ];
            
            $result = $client->post('https://api.rebrandly.com/v1/'.$slug, $options);
            
        } catch (\Exception $e) {
            return json_decode($e->getResponse()->getBody()->getContents(), true);
        } 
        
        return json_decode($result->getBody()->getContents(), true);
    }
    
    public function get($slug)
    {
        try {
            $client = new \GuzzleHttp\Client();
            
            $options = [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'apikey'       => config('rebrandly.api_key'),
                ],
            ];
            
            $result = $client->get('https://api.rebrandly.com/v1/'.$slug, $options);
            
        } catch (\Exception $e) {
            return json_decode($e->getResponse()->getBody()->getContents(), true);
        } 
        
        return json_decode($result->getBody()->getContents(), true);
    }
    
    public function delete($slug)
    {
        try {
            $client = new \GuzzleHttp\Client();
            
            $options = [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'apikey'       => config('rebrandly.api_key'),
                ],
            ];
            
            $result = $client->delete('https://api.rebrandly.com/v1/'.$slug, $options);
            
        } catch (\Exception $e) {
            return json_decode($e->getResponse()->getBody()->getContents(), true);
        } 
        
        return json_decode($result->getBody()->getContents(), true);
    }
}
