<?php

require_once __DIR__.'/TestInterface.php';
require_once __DIR__.'/TestsClient.php';

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use RenMichaela\Vibrant\Clients\Bacon;
use RenMichaela\Vibrant\Clients\Client;
use RenMichaela\Vibrant\Random;
use Tests\TestInterface;
use Tests\TestsClient;

#[CoversClass(Bacon::class)]
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
