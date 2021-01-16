<?php

namespace CodinGame\Easy\Isograms\Context;

use Behat\Behat\Context\Context;
use CodinGame\Easy\Isograms\Entity\Isogram;
use CodinGame\Easy\Isograms\UseCase\TestWord;
use PHPUnit\Framework\Assert;

final class IsogramContext implements Context
{
    private Isogram $word;
    private TestWord $testWord;

    public function __construct()
    {
        $this->testWord = new TestWord();
    }

    /**
     * @Given an isogram is a word that has no repeating letters, consecutive or non-consecutive
     */
    public function isogramDefinition(): void
    {
    }

    /**
     * @When I write a :word
     */
    public function iWriteA(string $word): void
    {
        $this->word = new Isogram($word);
    }

    /**
     * @Then the result is :result
     *
     * @throws \Exception
     */
    public function theResultIs(string $result): void
    {
        if ('true' === $result) {
            Assert::assertTrue($this->testWord->isIsogram($this->word->word()));
        }
        if ('false' === $result) {
            Assert::assertFalse($this->testWord->isIsogram($this->word->word()));
        }
    }
}
