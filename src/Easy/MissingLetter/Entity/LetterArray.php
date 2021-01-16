<?php

namespace CodinGame\Easy\MissingLetter\Entity;

final class LetterArray
{
    private array $letters;

    public function __construct(array $letters)
    {
        $this->letters = $letters;
    }

    public function letters(): array
    {
        return $this->letters;
    }
}
