<?php

namespace Vibrant;

use Vibrant\Clients\Bacon;
use Vibrant\Clients\Bear;
use Vibrant\Clients\Cat;
use Vibrant\Clients\ClientInterface;
use Vibrant\Clients\Coffee;
use Vibrant\Clients\Dog;
use Vibrant\Clients\Duck;
use Vibrant\Clients\Fox;

class Random
{
    /**
     * Return a random picture of bacon (meat) from https://baconmockup.com
     *
     * @param width
     * @param height
     * @return Vibrant\Clients\ClientInterface
     */
    public static function bacon(int $width = 300, int $height = 200): ClientInterface
    {
        return new Bacon($width, $height);
    }

    /**
     * Return a random picture of a bear from https://placebear.com
     *
     * @param width
     * @param height
     * @return Vibrant\Clients\ClientInterface
     */
    public static function bear(int $width = 300, int $height = 200): ClientInterface
    {
        return new Bear($width, $height);
    }

    /**
     * Return a random picture of a cat from https://cataas.com
     *
     * @return Vibrant\Clients\ClientInterface
     */
    public static function cat(): ClientInterface
    {
        return new Cat;
    }

    /**
     * Return a random picture of coffee from https://coffee.alexflipnote.dev
     *
     * @return Vibrant\Clients\ClientInterface
     */
    public static function coffee(): ClientInterface
    {
        return new Coffee;
    }

    /**
     * Return a random picture of a dog from https://dog.ceo/dog-api
     *
     * @return Vibrant\Clients\ClientInterface
     */
    public static function dog(): ClientInterface
    {
        return (new Dog)->fetch();
    }

    /**
     * Return a random picture of a duck from https://random-d.uk/api
     *
     * @return Vibrant\Clients\ClientInterface
     */
    public static function duck(): ClientInterface
    {
        return new Duck;
    }

    /**
     * Return a random picture of a fox from https://randomfox.ca/floof/
     *
     * @return Vibrant\Clients\ClientInterface
     */
    public static function fox(): ClientInterface
    {
        return (new Fox)->fetch();
    }
}
