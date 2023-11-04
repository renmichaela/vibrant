<?php

namespace Vibrant\Clients;

interface ClientInterface
{
    public function asHtml();

    public function asString();

    public function asResponse();

    public function imageContent();

    public function imageUrl();
}
