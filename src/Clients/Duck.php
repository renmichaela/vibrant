<?php

namespace RenMichaela\Vibrant\Clients;

class Duck extends Client
{
  public function __construct()
  {
    $this->url = "https://random-d.uk/api/v2/randomimg";
  }
}