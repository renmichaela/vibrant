<?php

require_once(__DIR__."/TestInterface.php");
require_once(__DIR__."/TestsClient.php");

use RenMichaela\Vibrant\Random;
use RenMichaela\Vibrant\Clients\Client;
use PHPUnit\Framework\Attributes\{CoversClass, CoversFunction};
use PHPUnit\Framework\TestCase;
use RenMichaela\Vibrant\Clients\Bacon;
use Tests\TestInterface;
use Tests\TestsClient;

#[CoversClass(Bacon::class)]
#[CoversFunction('asHtml')]
#[CoversFunction('asString')]
final class BaconTest extends TestCase implements TestInterface
{
  use TestsClient;

  protected $client;

  public function setUp(): void
  {
    $this->client = Random::bacon();

    $this->assertTrue($this->client instanceof Client);
    
    parent::setUp();
  }
}