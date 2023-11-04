<?php

namespace Vibrant\Formatters;

use Vibrant\Clients\ClientInterface;

interface FormatterInterface
{
    public function output(ClientInterface $client);
}
