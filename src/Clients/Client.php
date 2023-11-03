<?php

namespace RenMichaela\Vibrant\Clients;

use GuzzleHttp\Client as HttpClient;

abstract class Client implements ClientInterface
{
  protected $url;

  public function asHtml()
  {
    $class = end(explode("\\", get_called_class()));

    return "<img src='".$this->url."' alt='Random ".$class."' />";
  }

  public function asString()
  {
    return $this->url;
  }

  public function asResponse()
  {
    $response = (new HttpClient)->get($this->url);
    $imgData = $response->getBody()->getContents();
    
    header("Content-Type: ".$response->getHeader("Content-Type")[0]);
    header("Content-Length: ".$response->getHeader('Content-Length')[0]);

    echo $imgData;
  }
}