<?php

namespace RenMichaela\Vibrant\Clients;

class Dog extends Client
{
  public function __construct()
  {
    $this->url = 'https://dog.ceo/api/breeds/image/random';  
  }

  public function fetch()
  {
    $response = $this->http()->get($this->url);

    $this->dataUrl = json_decode($response->getBody()->getContents())->message;

    return $this;
  }
}