<?php
namespace Puzzle;

class Game
{
    private $range;

    public function __construct(array $range)
    {
        $this->range = $range;
    }

    public function play() : array
    {
        return array_map(function ($number) {

            if ($this->isMultipleOfBoth($number))
                return GameOutputs::MULTIPLE_BOTH;

            if ($this->isMultipleOfThree($number))
                return GameOutputs::MULTIPLE_THREE;

            if ($this->isMultipleOfFive($number))
                return GameOutputs::MULTIPLE_FIVE;

            return $number;

        }, $this->range);
    }

    private function isMultipleOfBoth($number)
    {
        return ($number % 3 == 0 && $number % 5 == 0);
    }

    private function isMultipleOfThree($number)
    {
        return $number % 3 == 0;
    }

    private function isMultipleOfFive($number)
    {
        return $number % 5 == 0;
    }

}
