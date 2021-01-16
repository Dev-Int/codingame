<?php

namespace Tests\Easy\MissingLetter\UseCase;

use CodinGame\Easy\MissingLetter\UseCase\MissingLetter;
use PHPUnit\Framework\TestCase;

final class MissingLetterTest extends TestCase
{
    private MissingLetter $missingLetter;

    public function setUp(): void
    {
        $this->missingLetter = new MissingLetter();
    }

    public function testDescriptionExamples(): void
    {
      self::assertEquals("e", $this->missingLetter->find(['a','b','c','d','f']));
      self::assertEquals("P", $this->missingLetter->find(["O", "Q", "R", "S"]));
    }

    public function testFixed(): void
    {
      self::assertEquals("b", $this->missingLetter->find(["a", "c", "d"]));
      self::assertEquals("c", $this->missingLetter->find(["a", "b", "d", "e"]));
      self::assertEquals("e", $this->missingLetter->find(["a", "b", "c", "d", "f", "g"]));
      self::assertEquals("G", $this->missingLetter->find(["C", "D", "E", "F", "H", "I", "J", "K"]));
      self::assertEquals("J", $this->missingLetter->find(["H", "I", "K", "L", "M", "N", "O", "P", "Q", "R", "S"]));
    }

    /**
     * @throws \Exception
     */
    public function testAdvancedRandomOrder(): void
    {
        foreach ($this->shuffle([
            function () {
                $this->assertEquals("j", $this->missingLetter->find(["c", "d", "e", "f", "g", "h", "i", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v"]));
            },
            function () {
                $this->assertEquals("J", $this->missingLetter->find(["C", "D", "E", "F", "G", "H", "I", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V"]));
            },
            function () {
                $this->assertEquals("e", $this->missingLetter->find(["d", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"]));
            },
            function () {
                $this->assertEquals("E", $this->missingLetter->find(["D", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"]));
            },
            function () {
                $this->assertEquals("y", $this->missingLetter->find(["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "z"]));
            },
            function () {
                $this->assertEquals("Y", $this->missingLetter->find(["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Z"]));
            },
            function () {
                $this->assertEquals("u", $this->missingLetter->find(["t", "v"]));
            },
            function () {
                $this->assertEquals("U", $this->missingLetter->find(["T", "V"]));
            },
            function () {
                $this->assertEquals("b", $this->missingLetter->find(["a", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"]));
            },
            function () {
                $this->assertEquals("B", $this->missingLetter->find(["A", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"]));
            }
            ]) as $assertion) {
                $assertion();
        }
    }

    /**
     * @throws \Exception
     */
    private function shuffle(array $a): array
    {
        for ($i = 0; $i < 2 * count($a); $i++) {
            $j = random_int(0, count($a) - 1);
            $k = random_int(0, count($a) - 1);
            [$a[$j], $a[$k]] = [$a[$k], $a[$j]];
        }
        return $a;
    }
}
