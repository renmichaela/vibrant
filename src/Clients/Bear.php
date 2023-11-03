<?php

namespace RenMichaela\Vibrant\Clients;

class Bear extends Client
{
    private $width;

    private $height;

    public function __construct(int $width = 300, int $height = 200)
    {
        $baseUrl = 'https://placebear.com';
        $this->width = $width;
        $this->height = $height;

        $this->url = $baseUrl.'/'.$this->width.'/'.$this->height;
    }
}
