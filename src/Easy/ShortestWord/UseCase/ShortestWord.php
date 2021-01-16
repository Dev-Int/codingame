<?php

namespace CodinGame\Easy\ShortestWord\UseCase;

final class ShortestWord
{
    public function findShort(string $string): int
    {
        $arrayStrings = explode(' ', $string);
        return min(array_map(static function ($val) {
            return strlen($val);
        }, $arrayStrings));

        // Best solution
        // return min(array_map('strlen', (explode(' ', $string))));
    }
}
