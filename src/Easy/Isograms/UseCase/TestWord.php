<?php

namespace CodinGame\Easy\Isograms\UseCase;

final class TestWord
{
    public function isIsogram(string $word): bool
    {
        $word = strtolower($word);
        for ($i = 0, $iMax = strlen($word); $i < $iMax; $i++) {
            $count = substr_count($word, $word[$i]);
            if (1 < $count) {
                return false;
            }
        }

        return true;

        // Best solution
        // return array_unique(str_split(strtolower($word))) === str_split(strtolower($word));
    }
}
