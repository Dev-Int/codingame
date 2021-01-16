<?php

namespace CodinGame\Easy\BreakChocolate;

final class BreakChocolate
{
    public function breakChocolate (int $n, int $m): int
    {
        if ($n === $m) {
          return ($n * $m) - 1;
        }
        if (($n > $m) || ($n < $m)) {
          return (($n -1) * $m) + ($m - 1);
        }

        return 0;
        // Best solution
        // return $n * $m - 1;
    }
}
