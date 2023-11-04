<?php

namespace Vibrant\Formatters;

use Psr\Http\Message\ResponseInterface;
use Vibrant\Clients\ClientInterface;

class ResponseFormat implements FormatterInterface
{
    public function output(ClientInterface $client)
    {
        [$response, $imgData] = $client->imageContent();

        $this->setHeaders($response);

        echo $imgData;
    }

    private function setHeaders(ResponseInterface $response)
    {
        header('Content-Type: '.$response->getHeader('Content-Type')[0]);
        header('Content-Length: '.$response->getHeader('Content-Length')[0]);
    }
}
