<?php

namespace CodinGame\Easy\MissingLetter\UseCase;

final class MissingLetter
{
    public function find(array $letters): string
    {
        return array_values(array_diff(range($letters[0], end($letters)), $letters))[0];
        // Best solution
        // return implode('', array_diff(range($letters[0], end($letters)), $letters));
    }
}
