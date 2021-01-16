<?php

namespace CodinGame\Easy\ShortestWord\Context;

use Behat\Behat\Context\Context;
use CodinGame\Easy\ShortestWord\Entity\Sentence;
use CodinGame\Easy\ShortestWord\UseCase\ShortestWord;
use PHPUnit\Framework\Assert;

final class ShortestWordContext implements Context
{
    private Sentence $sentence;
    private ShortestWord $shortestWords;

    public function __construct()
    {
        $this->shortestWords = new ShortestWord();
    }

    /**
     * @When given a :string_of_words
     */
    public function givenA(string $string): void
    {
        $this->sentence = new Sentence($string);
    }

    /**
     * @Then return the :length_of_the_shortest_word(s)
     */
    public function returnTheLengthOfTheShortestWords(int $length): void
    {
        Assert::assertEquals($length, $this->shortestWords->find($this->sentence->toString()));
    }
}
