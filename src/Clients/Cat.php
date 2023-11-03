<?php

namespace Vibrant\Clients;

class Cat extends Client
{
    public function __construct()
    {
        $this->url = 'https://cataas.com/cat';
    }
}
