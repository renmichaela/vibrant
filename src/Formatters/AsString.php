<?php

namespace Vibrant\Formatters;

use Vibrant\Clients\Client;

class AsString implements FormatterInterface
{
  private $client;

  public function __construct(Client $client)
  {
    $this->client = $client;
  }

  public function format()
  {
    return $this->client->imageUrl();
  }
}