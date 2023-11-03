<?php

namespace RenMichaela\Vibrant;

use RenMichaela\Vibrant\Clients\{Bacon, Bear, Cat, Client, Coffee, Dog};

class Random
{
  /**
   * Return a random picture of bacon (meat) from https://baconmockup.com
   * 
   * @param width
   * @param height
   * @return RenMichaela\Vibrant\Clients\Client
   */
  public static function bacon(int $width = 300, int $height = 200): Client
  {
    return new Bacon($width, $height);
  }

  /**
   * Return a random picture of bacon (meat) from https://baconmockup.com
   * 
   * @param width
   * @param height
   * @return RenMichaela\Vibrant\Clients\Client
   */
  public static function bear(int $width = 300, int $height = 200): Client
  {
    return new Bear($width, $height);
  }

  /**
   * Return a random picture of a cat from https://cataas.com
   * 
   * @return RenMichaela\Vibrant\Clients\Client
   */
  public static function cat(): Client
  {
    return (new Cat);
  }

  /**
   * Return a random picture of coffee from https://coffee.alexflipnote.dev
   * 
   * @return RenMichaela\Vibrant\Clients\Client
   */
  public static function coffee(): Client
  {
    return (new Coffee);
  }

  /**
   * Return a random picture of a dog from https://dog.ceo/dog-api/
   * 
   * @return RenMichaela\Vibrant\Clients\Client
   */
  public static function dog(): Client
  {
    return (new Dog)->fetch();
  }
}