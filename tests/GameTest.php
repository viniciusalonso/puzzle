<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use Puzzle\Game;
use Puzzle\GameOutputs;

class GameTest extends TestCase
{
    /**
     * @test
     **/
    public function whenNumberIsMultipleOfThreeShouldPrintResearch()
    {
        $range = [1, 2, 3];
        $game = new Game($range);

        $result = $game->play();

        $expectedResult = [1, 2, GameOutputs::MULTIPLE_THREE];

        $this->assertEquals($expectedResult, $result);
    }

    /**
     * @test
     **/
    public function whenNumberIsMultipleOfFiveShouldPrintSquare()
    {
        $range = [1, 2, 5];
        $game = new Game($range);

        $result = $game->play();
        $expectedResult = [1, 2, GameOutputs::MULTIPLE_FIVE];

        $this->assertEquals($expectedResult, $result);
    }

    /**
     * @test
     **/
    public function whenNumberIsMultipleOfBothShouldPrintResearch_Square()
    {
        $range = [1, 2, 15];
        $game = new Game($range);

        $result = $game->play();

        $expectedResult = [1, 2, GameOutputs::MULTIPLE_BOTH];

        $this->assertEquals($expectedResult, $result);
    }

}
