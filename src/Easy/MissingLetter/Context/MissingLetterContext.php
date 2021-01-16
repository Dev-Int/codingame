<?php

namespace CodinGame\Easy\MissingLetter\Context;

use Behat\Behat\Context\Context;
use CodinGame\Easy\MissingLetter\Entity\LetterArray;
use CodinGame\Easy\MissingLetter\UseCase\MissingLetter;
use PHPUnit\Framework\Assert;

final class MissingLetterContext implements Context
{
    private LetterArray $arrayLetters;
    private MissingLetter $missingLetter;

    public function __construct()
    {
        $this->missingLetter = new MissingLetter();
    }

    /**
     * @Given an array of consecutive and increasing letters
     */
    public function anArrayOfConsecutiveAndIncreasingLetters(): void
    {
    }

    /**
     * @Given only one letter missing
     */
    public function onlyOneLetterMissing(): void
    {
    }

    /**
     * @Given the array length is always at least 2
     */
    public function theArrayLengthIsAlwaysAtLeast(): void
    {
    }

    /**
     * @When pass an :array
     */
    public function passAnArray(string $array): void
    {
        $this->arrayLetters = new LetterArray(explode(',', $array));
    }

    /**
     * @Then return :missing_letter
     */
    public function returnMissingLetter(string $missing): void
    {
        Assert::assertEquals($missing, $this->missingLetter->find($this->arrayLetters->letters()));
    }
}
