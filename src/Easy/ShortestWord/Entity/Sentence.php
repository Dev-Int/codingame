<?php

namespace CodinGame\Easy\ShortestWord\Entity;

final class Sentence
{
    private string $string;

    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function toString(): string
    {
        return $this->string;
    }
}
