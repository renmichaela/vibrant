<?php

require_once __DIR__.'/TestInterface.php';
require_once __DIR__.'/TestsClient.php';

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use Tests\TestInterface;
use Tests\TestsClient;
use Vibrant\Clients\Client;
use Vibrant\Clients\Dog;
use Vibrant\Random;

#[CoversClass(Dog::class)]
final class DogTest extends TestCase implements TestInterface
{
    use TestsClient;

    protected $client;

    public function setUp(): void
    {
        $this->client = Random::dog();

        $this->assertTrue($this->client instanceof Client);

        parent::setUp();
    }
}
