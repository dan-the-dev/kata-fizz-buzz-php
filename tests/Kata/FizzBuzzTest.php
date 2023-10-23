<?php

namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    private FizzBuzz $main;

    protected function setUp(): void
    {
        $this->main = new FizzBuzz();
    }

    public function testShallPass(): void
    {
        $this->assertEquals(1, 1);
    }

    public function testHandleReturnTrue(): void
    {
        $this->assertEquals(true, $this->main->handle());
    }
}
