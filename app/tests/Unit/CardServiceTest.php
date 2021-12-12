<?php

namespace Tests\Unit;

use App\Services\v1\CardService;
use PHPUnit\Framework\TestCase;

class CardServiceTest extends TestCase
{

    // private $cardService;

    protected function setUp(): void
    {
        parent::setUp();

        $this->cardService = new CardService;
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        
        $this->assertTrue(true);
    }
}
