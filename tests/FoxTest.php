<?php

require_once __DIR__.'/TestInterface.php';
require_once __DIR__.'/TestsClient.php';

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use Tests\TestInterface;
use Tests\TestsClient;
use Vibrant\Clients\Client;
use Vibrant\Clients\Fox;
use Vibrant\Random;

#[CoversClass(Fox::class)]
final class FoxTest extends TestCase implements TestInterface
{
    use TestsClient;

    protected $client;

    public function setUp(): void
    {
        $this->client = Random::fox();

        $this->assertTrue($this->client instanceof Client);

        parent::setUp();
    }
}
