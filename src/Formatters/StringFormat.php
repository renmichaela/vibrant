<?php

namespace Vibrant\Formatters;

use Vibrant\Clients\ClientInterface;

class StringFormat implements FormatterInterface
{
    public function output(ClientInterface $client)
    {
        return $client->imageUrl();
    }
}
