<?php

namespace Tests\Easy\BreakChocolate;

use PHPUnit\Framework\TestCase;
use CodinGame\Easy\BreakChocolate\BreakChocolate;

final class BreakChocolateTest extends TestCase
{
    private BreakChocolate $breakChocolate;

    public function setUp(): void
    {
        $this->breakChocolate = new BreakChocolate();
    }

    public function testResultBreakChocolate(): void {
      self::assertEquals(24, $this->breakChocolate->breakChocolate(5, 5));
      self::assertEquals(27, $this->breakChocolate->breakChocolate(7, 4));
      self::assertEquals(0, $this->breakChocolate->breakChocolate(1, 1));
      self::assertEquals(5, $this->breakChocolate->breakChocolate(6, 1));
      self::assertEquals(116, $this->breakChocolate->breakChocolate(9, 13));
    }

    /**
     * @throws \Exception
     */
    public function testRandomTests(): void
    {
         for($i = 0; $i < 10; $i++) {
            [$n, $m] = $this->generateRandomBars();
            self::assertEquals($this->breakChocolate->breakChocolate($n, $m), $n*$m-1);
         }
    }

    /**
     * @throws \Exception
     */
    private function generateRandomBars(): array
    {
        $n = random_int(1, 30);
        $m = random_int(1, 30);
        return [$n, $m, $n*$m-1];
    }

}
