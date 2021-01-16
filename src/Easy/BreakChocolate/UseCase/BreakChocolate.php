<?php

namespace CodinGame\Easy\BreakChocolate\UseCase;

use CodinGame\Easy\BreakChocolate\Entity\ChocolateBar;

final class BreakChocolate
{
    public function break(ChocolateBar $chocolateBar): int
    {
        $break = 0;
        if ($chocolateBar->large() === $chocolateBar->long()) {
            $break = ($chocolateBar->large() * $chocolateBar->long()) - 1;
        }
        if (($chocolateBar->large() > $chocolateBar->long()) ||
            ($chocolateBar->large() < $chocolateBar->long())) {
            $break = (($chocolateBar->large() - 1) * $chocolateBar->long()) + ($chocolateBar->long() - 1);
        }

        return $break;
        // Best solution
        // return $chocolateBar->large() * $chocolateBar->long() - 1;
    }
}
