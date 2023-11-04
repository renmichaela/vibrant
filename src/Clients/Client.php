<?php

namespace Vibrant\Clients;

use GuzzleHttp\Client as HttpClient;
use Vibrant\Formatters\FormatterInterface;

abstract class Client implements ClientInterface
{
    protected $url;

    protected $dataUrl;

    protected $http;

    public function format(FormatterInterface $formatter)
    {
        return $formatter->output($this);
    }

    protected function http()
    {
        if (! $this->http) {
            $this->http = new HttpClient;
        }

        return $this->http;
    }

    public function imageContent()
    {
        $response = $this->http()->get($this->imageUrl());
        $imgData = $response->getBody()->getContents();

        return [$response, $imgData];
    }

    public function imageUrl()
    {
        return $this->dataUrl ?? $this->url;
    }
}
