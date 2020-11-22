<?php

namespace CodinGame\Easy\Onboarding\UseCase;

use CodinGame\Easy\Onboarding\Entity\Ship;

final class SearchAndDestroy
{
    /**
     * @param Ship[] $ships
     */
    public function execute(array $ships): Ship
    {
        usort($ships, static function (Ship $ship1, Ship $ship2) {
            return $ship1->getDistance() <=> $ship2->getDistance();
        });

        return $ships[0];
    }
}
