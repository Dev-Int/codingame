<?php

namespace Tests\Easy\ShortestWord\UseCase;

use CodinGame\Easy\ShortestWord\UseCase\ShortestWord;
use PHPUnit\Framework\TestCase;

final class ShortestWordTest extends TestCase
{
    private ShortestWord $shortWord;

    public function setUp(): void
    {
        $this->shortWord = new ShortestWord();
    }

    public function testBasics(): void
    {
      self::assertEquals(3, $this->shortWord->find("bitcoin take over the world maybe who knows perhaps"));
      self::assertEquals(3, $this->shortWord->find("turns out random test cases are easier than writing out basic ones"));
      self::assertEquals(3, $this->shortWord->find("lets talk about javascript the best language"));
      self::assertEquals(1, $this->shortWord->find("i want to travel the world writing code one day"));
      self::assertEquals(2, $this->shortWord->find("Lets all go on holiday somewhere very cold"));
    }

}
