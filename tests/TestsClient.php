<?php

namespace Tests;

trait TestsClient
{
  public function test_it_can_return_a_string()
  {
    $string = $this->client->asString();

    $this->assertIsString($string);
  }

  public function test_it_can_return_html()
  {
    $html = $this->client->asHtml();
    $class = end(explode("\\", get_class($this->client)));

    $this->assertStringContainsString("<img src", $html);
    $this->assertStringContainsString("Random ".$class, $html);
  }
}
