<?php

namespace Tests\Easy\Isograms\UseCase;

use CodinGame\Easy\Isograms\UseCase\TestWord;
use PHPUnit\Framework\TestCase;

final class TestWordTest extends TestCase
{
    public function testIsIsogram(): void
    {
        $testWord = new TestWord();
        self::assertEquals(true, $testWord->isIsogram("Dermatoglyphics"));
        self::assertEquals(true, $testWord->isIsogram("isogram"));
        self::assertEquals(false, $testWord->isIsogram("aba"), "same chars may not be adjacent");
        self::assertEquals(false, $testWord->isIsogram("moOse"), "same chars may not be same case");
        self::assertEquals(false, $testWord->isIsogram("isIsogram"));
        self::assertEquals(true, $testWord->isIsogram(""), "an empty string is a valid isogram");
    }
}
