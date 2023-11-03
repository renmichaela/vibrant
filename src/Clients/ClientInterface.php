<?php

namespace RenMichaela\Vibrant\Clients;

interface ClientInterface
{
  public function fetch();

  public function asHtml();
  
  public function asString();
}