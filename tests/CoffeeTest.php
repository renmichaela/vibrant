<?php

require_once __DIR__.'/TestInterface.php';
require_once __DIR__.'/TestsClient.php';

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use Tests\TestInterface;
use Tests\TestsClient;
use Vibrant\Clients\Client;
use Vibrant\Clients\Coffee;
use Vibrant\Random;

#[CoversClass(Coffee::class)]
final class CoffeeTest extends TestCase implements TestInterface
{
    use TestsClient;

    protected $client;

    public function setUp(): void
    {
        $this->client = Random::coffee();

        $this->assertTrue($this->client instanceof Client);

        parent::setUp();
    }
}
