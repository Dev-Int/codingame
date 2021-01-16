<?php

namespace CodinGame\Easy\BreakChocolate\Context;

use Assert\Assertion;
use Assert\AssertionFailedException;
use Behat\Behat\Context\Context;
use CodinGame\Easy\BreakChocolate\UseCase\BreakChocolate;
use CodinGame\Easy\BreakChocolate\Entity\ChocolateBar;

final class BreakChocolateContext implements Context
{
    private ChocolateBar $chocolateBar;
    private BreakChocolate $breakChocolate;

    public function __construct()
    {
        $this->breakChocolate = new BreakChocolate();
    }

    /**
     * @Given /^a chocolate bar you have to split$/
     */
    public function aChocolateBarYouHaveToSplit(): void
    {
    }

    /**
     * @When the chocolate bar has dimensions :large x :long
     */
    public function theChocolateBarHasDimensions(int $large, int $long): void
    {
        $this->chocolateBar = new ChocolateBar($large, $long);
    }

    /**
     * @Then the minimum breaks is :breaks
     *
     * @throws AssertionFailedException
     */
    public function theMinimumBreaksIs(int $breaks): void
    {
        Assertion::eq($breaks, $this->breakChocolate->break($this->chocolateBar));
    }
}
