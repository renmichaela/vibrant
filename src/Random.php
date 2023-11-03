<?php

namespace RenMichaela\Vibrant;

use RenMichaela\Vibrant\Clients\Coffee;

class Random
{
  public static function coffee()
  {
    return (new Coffee)->fetch();
  }
}