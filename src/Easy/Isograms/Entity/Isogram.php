<?php

namespace CodinGame\Easy\Isograms\Entity;

final class Isogram
{
    private string $word;

    public function __construct(string $word)
    {
        $this->word = $word;
    }

    public function word(): string
    {
        return $this->word;
    }
}
