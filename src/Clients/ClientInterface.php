<?php

namespace RenMichaela\Vibrant\Clients;

interface ClientInterface
{
    public function asHtml();

    public function asString();

    public function asResponse();
}
