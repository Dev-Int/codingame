<?php

namespace CodinGame\Easy\OnBoarding\Entity;

final class Ship
{
    private string $name;
    private int $distance;

    public function __construct(string $name, int $distance)
    {
        $this->name = $name;
        $this->distance = $distance;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDistance(): int
    {
        return $this->distance;
    }
}
