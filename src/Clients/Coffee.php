<?php

namespace RenMichaela\Vibrant\Clients;

use GuzzleHttp\Client as HttpClient;

class Coffee extends Client
{
  public function fetch()
  {
    $response = $this->http()->get("/random.json");
    $content = $response->getBody()->getContents();

    $this->data = json_decode($content)->file;

    return $this;
  }

  protected function http(): HttpClient
  {
    return new HttpClient([
      'base_uri' => 'https://coffee.alexflipnote.dev'
    ]);
  }
}