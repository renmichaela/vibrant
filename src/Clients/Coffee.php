<?php

namespace RenMichaela\Vibrant\Clients;

class Coffee extends Client
{
    public function __construct()
    {
        $this->url = 'https://coffee.alexflipnote.dev/random';
    }
}
