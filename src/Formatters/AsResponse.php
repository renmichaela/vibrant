<?php

namespace Vibrant\Formatters;

use Psr\Http\Message\ResponseInterface;
use Vibrant\Clients\ClientInterface;

class AsResponse implements FormatterInterface
{
  private $client;

  public function __construct(ClientInterface $client)
  {
    $this->client = $client;
  }

  public function format()
  {
    list($response, $imgData) = $this->client->imageContent();

    $this->setHeaders($response);

    echo $imgData;
  }

  private function setHeaders(ResponseInterface $response)
  {
    header('Content-Type: '.$response->getHeader('Content-Type')[0]);
    header('Content-Length: '.$response->getHeader('Content-Length')[0]);
  }
}