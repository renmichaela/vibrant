<?php

namespace RenMichaela\Vibrant\Clients;

use GuzzleHttp\Client as HttpClient;

class Coffee extends Client
{
  public function __construct()
  {
    $this->baseUrl = 'https://coffee.alexflipnote.dev';  
  }

  public function fetch()
  {
    $response = $this->http()->get("/random.json");
    $content = $response->getBody()->getContents();

    $this->data = json_decode($content)->file;

    return $this;
  }

  // public function asResponse()
  // {
  //   $img = end(explode("/", $this->data));
  //   $response = $this->http()->get($this);
  //   $imgData = $response->getBody()->getContents();
    
  //   header("Content-Type: ".$response->getHeader("Content-Type")[0]);
  //   header("Content-Length: ".$response->getHeader('Content-Length')[0]);

  //   echo $imgData;
  // }
}