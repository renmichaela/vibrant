<?php

namespace RenMichaela\Vibrant\Clients;

use GuzzleHttp\Client as HttpClient;

class Bacon extends Client
{
  private $width;
  private $height;
  
  public function __construct(int $width = 300, int $height = 200)
  {
    $this->baseUrl = 'https://baconmockup.com';
    $this->width = $width;
    $this->height = $height;  

    $this->data = $this->baseUrl."/".$this->width."/".$this->height;
  }
}