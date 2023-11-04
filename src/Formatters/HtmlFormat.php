<?php

namespace Vibrant\Formatters;

use Vibrant\Clients\ClientInterface;

class HtmlFormat implements FormatterInterface
{
    public function output(ClientInterface $client)
    {
        $classArray = explode('\\', get_class($client));
        $class = end($classArray);

        return "<img src='".$client->imageUrl()."' alt='Random ".$class."' />";
    }
}
