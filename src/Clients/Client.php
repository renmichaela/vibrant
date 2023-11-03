<?php

namespace RenMichaela\Vibrant\Clients;

use GuzzleHttp\Client as HttpClient;

abstract class Client implements ClientInterface
{
  protected $data;

  abstract protected function http(): HttpClient;

  public function asHtml()
  {
    $class = end(explode("\\", get_called_class()));

    return "<img src='".$this->data."' alt='Random ".$class."' />";
  }

  public function asString()
  {
    return $this->data;
  }

  public function asResponse()
  {
    $img = end(explode("/", $this->data));
    $response = $this->http()->get("/".$img);
    $imgData = $response->getBody()->getContents();
    
    header("Content-Type: ".$response->getHeader("Content-Type")[0]);
    header("Content-Length: ".$response->getHeader('Content-Length')[0]);

    return $imgData;
  }
}