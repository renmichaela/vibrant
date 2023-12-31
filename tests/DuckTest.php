<?php

require_once __DIR__.'/TestInterface.php';
require_once __DIR__.'/TestsClient.php';

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use Tests\TestInterface;
use Tests\TestsClient;
use Vibrant\Clients\Client;
use Vibrant\Clients\Duck;
use Vibrant\Random;

#[CoversClass(Duck::class)]
final class DuckTest extends TestCase implements TestInterface
{
    use TestsClient;

    protected $client;

    public function setUp(): void
    {
        $this->client = Random::duck();

        $this->assertTrue($this->client instanceof Client);

        parent::setUp();
    }
}
