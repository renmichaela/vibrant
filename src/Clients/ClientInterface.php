<?php

namespace Vibrant\Clients;

use Vibrant\Formatters\FormatterInterface;

interface ClientInterface
{
    public function format(FormatterInterface $formatter);

    public function imageContent();

    public function imageUrl();
}
