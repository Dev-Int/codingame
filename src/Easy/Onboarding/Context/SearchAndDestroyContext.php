<?php

namespace CodinGame\Easy\Onboarding\Context;

use Assert\Assertion;
use Assert\AssertionFailedException;
use Behat\Behat\Context\Context;
use CodinGame\Easy\Onboarding\Entity\Ship;
use CodinGame\Easy\Onboarding\UseCase\SearchAndDestroy;

final class SearchAndDestroyContext implements Context
{
    private array $ships = [];
    private SearchAndDestroy $searchAndDestroy;

    public function __construct()
    {
        $this->searchAndDestroy = new SearchAndDestroy();
    }

    /**
     * @Given /^a cannon has to defend itself from attacking ships$/
     */
    public function aCannonHasToDefend(): void
    {
    }

    /**
     * @When /^the (.*) ship at (.*) meters$/
     */
    public function enemyShipArrives(string $enemy1, int $dist1): void
    {
        $this->ships[] = new Ship($enemy1, $dist1);
    }

    /**
     * @Then /^the cannon need to destroy (.*) because it's the closest one to him$/
     *
     * @throws AssertionFailedException
     */
    public function targetAndDestroyTheClosestShip(string $ship): void
    {
        Assertion::eq($ship, $this->searchAndDestroy->execute($this->ships)->getName());
    }
}
