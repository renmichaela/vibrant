<?php

namespace Vibrant\Clients;

class Cat extends Client
{
    const BASE_URL = 'https://cataas.com/cat';

    public function __construct()
    {
        $this->url = self::BASE_URL;
    }

    /**
     * Return a random cat gif
     * 
     * @return Cat
     */
    public function gif()
    {
        $this->url = self::BASE_URL."/gif";

        return $this;
    }

    /**
     * Return a random cat captioned with the provided text
     * 
     * @param text
     * @return Cat
     */
    public function says(string $text)
    {
        $this->url = self::BASE_URL."/says/".$text;

        return $this;
    }

    /**
     * Return a random cat with the provided tag
     * 
     * @param tag
     * @return Cat
     */
    public function tag(string $tag)
    {
        $this->url = self::BASE_URL."/".$tag;

        return $this;
    }
}
