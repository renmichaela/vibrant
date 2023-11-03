<?php

namespace Vibrant;

use Vibrant\Clients\Bacon;
use Vibrant\Clients\Bear;
use Vibrant\Clients\Cat;
use Vibrant\Clients\Client;
use Vibrant\Clients\Coffee;
use Vibrant\Clients\Dog;
use Vibrant\Clients\Duck;

class Random
{
    /**
     * Return a random picture of bacon (meat) from https://baconmockup.com
     *
     * @param width
     * @param height
     * @return Vibrant\Clients\Client
     */
    public static function bacon(int $width = 300, int $height = 200): Client
    {
        return new Bacon($width, $height);
    }

    /**
     * Return a random picture of a bear from https://placebear.com
     *
     * @param width
     * @param height
     * @return Vibrant\Clients\Client
     */
    public static function bear(int $width = 300, int $height = 200): Client
    {
        return new Bear($width, $height);
    }

    /**
     * Return a random picture of a cat from https://cataas.com
     *
     * @return Vibrant\Clients\Client
     */
    public static function cat(): Client
    {
        return new Cat;
    }

    /**
     * Return a random picture of coffee from https://coffee.alexflipnote.dev
     *
     * @return Vibrant\Clients\Client
     */
    public static function coffee(): Client
    {
        return new Coffee;
    }

    /**
     * Return a random picture of a dog from https://dog.ceo/dog-api
     *
     * @return Vibrant\Clients\Client
     */
    public static function dog(): Client
    {
        return (new Dog)->fetch();
    }

    /**
     * Return a random picture of a duck from https://random-d.uk/api
     *
     * @return Vibrant\Clients\Client
     */
    public static function duck(): Client
    {
        return new Duck;
    }
}
