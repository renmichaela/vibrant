<?php

namespace RenMichaela\Vibrant;

use RenMichaela\Vibrant\Clients\{Bacon, Cat, Client, Coffee};

class Random
{
  public static function bacon(int $width = 300, int $height = 200): Client
  {
    return new Bacon($width, $height);
  }

  public static function cat(): Client
  {
    return (new Cat);
  }

  public static function coffee(): Client
  {
    return (new Coffee);
  }
}