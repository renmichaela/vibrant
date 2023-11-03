<?php

namespace RenMichaela\Vibrant\Clients;

class Bacon extends Client
{
    private $width;

    private $height;

    public function __construct(int $width = 300, int $height = 200)
    {
        $baseUrl = 'https://baconmockup.com';
        $this->width = $width;
        $this->height = $height;

        $this->url = $baseUrl.'/'.$this->width.'/'.$this->height;
    }
}
