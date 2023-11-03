<?php

require_once __DIR__.'/TestInterface.php';
require_once __DIR__.'/TestsClient.php';

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use RenMichaela\Vibrant\Clients\Bear;
use RenMichaela\Vibrant\Clients\Client;
use RenMichaela\Vibrant\Random;
use Tests\TestInterface;
use Tests\TestsClient;

#[CoversClass(Bear::class)]
final class BearTest extends TestCase implements TestInterface
{
    use TestsClient;

    protected $client;

    public function setUp(): void
    {
        $this->client = Random::bear();

        $this->assertTrue($this->client instanceof Client);

        parent::setUp();
    }
}
