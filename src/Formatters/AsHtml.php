<?php

namespace Vibrant\Formatters;

use Vibrant\Clients\Client;

class AsHtml implements FormatterInterface
{
  private $client;

  public function __construct(Client $client)
  {
    $this->client = $client;
  }

  public function format()
  {
    $classArray = explode('\\', get_class($this->client));
    $class = end($classArray);

    return "<img src='".$this->client->imageUrl()."' alt='Random ".$class."' />";
  }
}