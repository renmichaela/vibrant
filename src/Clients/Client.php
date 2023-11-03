<?php

namespace Vibrant\Clients;

use GuzzleHttp\Client as HttpClient;

abstract class Client implements ClientInterface
{
    protected $url;

    protected $dataUrl;

    protected $http;

    public function asHtml()
    {
        $classArray = explode('\\', get_called_class());
        $class = end($classArray);

        return "<img src='".$this->imageUrl()."' alt='Random ".$class."' />";
    }

    public function asString()
    {
        return $this->imageUrl();
    }

    public function asResponse()
    {
        $response = $this->http()->get($this->imageUrl());
        $imgData = $response->getBody()->getContents();

        header('Content-Type: '.$response->getHeader('Content-Type')[0]);
        header('Content-Length: '.$response->getHeader('Content-Length')[0]);

        echo $imgData;
    }

    protected function http()
    {
        if (! $this->http) {
            $this->http = new HttpClient;
        }

        return $this->http;
    }

    public function imageUrl()
    {
        return $this->dataUrl ?? $this->url;
    }
}
