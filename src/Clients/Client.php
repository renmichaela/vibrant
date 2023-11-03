<?php

namespace RenMichaela\Vibrant\Clients;

use GuzzleHttp\Client as HttpClient;

abstract class Client implements ClientInterface
{
  protected $baseUrl;
  protected $data;

  protected function http(): HttpClient
  {
    return new HttpClient(['base_uri' => $this->baseUrl]);
  }

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
    $response = $this->http()->get($this->data);
    $imgData = $response->getBody()->getContents();
    
    header("Content-Type: ".$response->getHeader("Content-Type")[0]);
    header("Content-Length: ".$response->getHeader('Content-Length')[0]);

    echo $imgData;
  }
}