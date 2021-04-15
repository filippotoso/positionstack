<?php

namespace FilippoToso\PositionStack;

class Client
{
    protected $key;

    protected const BASE_URL = 'http://api.positionstack.com/v1/';

    public function __construct($key)
    {
        $this->key = $key;
    }

    public function forward($query, $options = [])
    {
        $params = array_merge(
            [
                'access_key' => $this->key,
                'query' => $query,
            ],
            $options
        );

        $url = static::BASE_URL . 'forward?' . http_build_query($params);

        return $this->get($url);
    }

    public function reverse($query, $options = [])
    {
        $params = array_merge(
            [
                'access_key' => $this->key,
                'query' => $query,
            ],
            $options
        );

        $url = static::BASE_URL . 'reverse?' . http_build_query($params);

        return $this->get($url);
    }

    protected function get($url)
    {
        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', $url, [
            'headers' => [
                'Accept' => 'application/json'
            ],
        ]);

        return json_decode($response->getBody(), true);
    }
}
