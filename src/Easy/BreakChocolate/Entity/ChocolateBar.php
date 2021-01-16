<?php

namespace CodinGame\Easy\BreakChocolate\Entity;

final class ChocolateBar
{
    private int $large;
    private int $long;

    public function __construct(int $large, int $long)
    {
        $this->large = $large;
        $this->long = $long;
    }

    public function large(): int
    {
        return $this->large;
    }

    public function long(): int
    {
        return $this->long;
    }
}
