<?php

require_once __DIR__.'/TestInterface.php';
require_once __DIR__.'/TestsClient.php';

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use RenMichaela\Vibrant\Clients\Cat;
use RenMichaela\Vibrant\Clients\Client;
use RenMichaela\Vibrant\Random;
use Tests\TestInterface;
use Tests\TestsClient;

#[CoversClass(Cat::class)]
final class CatTest extends TestCase implements TestInterface
{
    use TestsClient;

    protected $client;

    public function setUp(): void
    {
        $this->client = Random::cat();

        $this->assertTrue($this->client instanceof Client);

        parent::setUp();
    }
}
