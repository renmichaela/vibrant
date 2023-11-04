<?php

namespace Vibrant\Clients;

class Fox extends Client
{
    public function __construct()
    {
        $this->url = 'https://randomfox.ca/floof';
    }

    public function fetch()
    {
        $response = $this->http()->get($this->url);

        $this->dataUrl = json_decode($response->getBody()->getContents())->image;

        return $this;
    }
}
