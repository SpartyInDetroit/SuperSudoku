<?php
/**
 * Created by PhpStorm.
 * User: ryanswitzer
 * Date: 2/23/15
 * Time: 4:34 PM
 */
require 'Cell.php';

class Board {
    public function __construct() {
        $this->boardOne = array(
            0 => array(
                0 => new Cell(6,1),
                1 => new Cell(5,1),
                2 => new Cell(4,0),
                3 => new Cell(8,0),
                4 => new Cell(7,0),
                5 => new Cell(9,0),
                6 => new Cell(2,0),
                7 => new Cell(3,1),
                8 => new Cell(1,1),
            ),
            1 => array(
                0 => new Cell(7,1),
                1 => new Cell(2,0),
                2 => new Cell(9,0),
                3 => new Cell(3,1),
                4 => new Cell(6,0),
                5 => new Cell(1,0),
                6 => new Cell(5,0),
                7 => new Cell(8,1),
                8 => new Cell(4,1),
            ),
            2 => array(
                0 => new Cell(1,1),
                1 => new Cell(8,0),
                2 => new Cell(3,0),
                3 => new Cell(4,0),
                4 => new Cell(2,1),
                5 => new Cell(5,1),
                6 => new Cell(7,0),
                7 => new Cell(9,0),
                8 => new Cell(6,0),
            ),
            3 => array(
                0 => new Cell(5,0),
                1 => new Cell(4,0),
                2 => new Cell(7,0),
                3 => new Cell(2,0),
                4 => new Cell(1,0),
                5 => new Cell(8,1),
                6 => new Cell(9,0),
                7 => new Cell(6,1),
                8 => new Cell(3,0),
            ),
            4 => array(
                0 => new Cell(3,0),
                1 => new Cell(9,1),
                2 => new Cell(2,1),
                3 => new Cell(5,0),
                4 => new Cell(4,0),
                5 => new Cell(6,0),
                6 => new Cell(8,1),
                7 => new Cell(1,1),
                8 => new Cell(7,0),
            ),
            5 => array(
                0 => new Cell(8,0),
                1 => new Cell(6,1),
                2 => new Cell(1,0),
                3 => new Cell(9,1),
                4 => new Cell(3,0),
                5 => new Cell(7,0),
                6 => new Cell(4,0),
                7 => new Cell(2,0),
                8 => new Cell(5,0),
            ),
            6 => array(
                0 => new Cell(9,0),
                1 => new Cell(1,0),
                2 => new Cell(5,0),
                3 => new Cell(6,1),
                4 => new Cell(8,1),
                5 => new Cell(4,0),
                6 => new Cell(3,0),
                7 => new Cell(7,0),
                8 => new Cell(2,1),
            ),
            7 => array(
                0 => new Cell(2,1),
                1 => new Cell(7,1),
                2 => new Cell(8,0),
                3 => new Cell(1,0),
                4 => new Cell(5,0),
                5 => new Cell(3,1),
                6 => new Cell(6,0),
                7 => new Cell(4,0),
                8 => new Cell(9,1),
            ),
            8 => array(
                0 => new Cell(4,1),
                1 => new Cell(3,1),
                2 => new Cell(6,0),
                3 => new Cell(7,0),
                4 => new Cell(9,0),
                5 => new Cell(2,0),
                6 => new Cell(1,0),
                7 => new Cell(5,1),
                8 => new Cell(8,1),
            ),
        );

        // load board 2
        $this->loadBoard($this->boardTwo,0,array(9,0,1,1,4,1,6,1,7,1,8,0,2,0,3,0,5,0));
        $this->loadBoard($this->boardTwo,1,array(2,1,5,0,3,0,4,0,9,0,1,1,8,1,6,0,7,1));
        $this->loadBoard($this->boardTwo,2,array(6,0,7,0,8,0,3,0,5,0,2,1,4,1,9,0,1,0));
        $this->loadBoard($this->boardTwo,3,array(5,0,4,1,7,0,2,0,6,0,3,0,1,1,8,1,9,1));
        $this->loadBoard($this->boardTwo,4,array(3,1,9,0,1,0,8,0,4,0,7,0,6,0,5,0,2,1));
        $this->loadBoard($this->boardTwo,5,array(8,1,6,1,2,1,5,0,1,0,9,0,3,0,7,1,4,0));
        $this->loadBoard($this->boardTwo,6,array(1,0,3,0,6,1,9,1,2,0,5,0,7,0,4,0,8,0));
        $this->loadBoard($this->boardTwo,7,array(7,1,8,0,5,1,1,1,3,0,4,0,9,0,2,0,6,1));
        $this->loadBoard($this->boardTwo,8,array(4,0,2,0,9,0,7,0,8,1,6,1,5,1,1,1,3,0));

        // load board 3
        $this->loadBoard($this->boardThree,0,array(8,0,9,1,4,0,3,0,2,0,6,0,5,1,1,0,7,0));
        $this->loadBoard($this->boardThree,1,array(6,1,1,0,5,0,7,1,4,1,8,0,9,0,2,0,3,1));
        $this->loadBoard($this->boardThree,2,array(3,1,2,1,7,1,9,0,1,0,5,0,4,0,6,0,8,0));
        $this->loadBoard($this->boardThree,3,array(9,1,8,1,1,0,5,0,7,0,2,0,6,0,3,1,4,0));
        $this->loadBoard($this->boardThree,4,array(4,1,3,0,2,1,6,1,8,0,1,0,7,1,5,0,9,1));
        $this->loadBoard($this->boardThree,5,array(7,0,5,1,6,0,4,0,9,0,3,0,2,0,8,1,1,1));
        $this->loadBoard($this->boardThree,6,array(2,0,6,0,9,0,8,0,3,0,4,0,1,1,7,1,5,1));
        $this->loadBoard($this->boardThree,7,array(1,1,4,0,3,0,2,0,5,1,7,1,8,0,9,0,6,1));
        $this->loadBoard($this->boardThree,8,array(5,0,7,0,8,1,1,0,6,0,9,0,3,0,4,1,2,0));

        // load board 4
        $this->loadBoard($this->boardFour,0,array(5,0,8,0,6,0,2,0,1,1,9,0,3,0,4,1,7,0));
        $this->loadBoard($this->boardFour,1,array(7,1,2,1,9,0,3,1,4,1,5,0,1,0,6,0,8,1));
        $this->loadBoard($this->boardFour,2,array(1,0,3,1,4,0,7,0,8,1,6,0,9,0,2,1,5,0));
        $this->loadBoard($this->boardFour,3,array(4,1,6,0,3,0,9,0,7,1,8,0,5,0,1,1,2,0));
        $this->loadBoard($this->boardFour,4,array(9,1,1,0,5,1,6,0,3,0,2,0,8,1,7,0,4,0));
        $this->loadBoard($this->boardFour,5,array(8,0,7,1,2,0,4,0,4,1,1,0,6,0,3,0,9,1));
        $this->loadBoard($this->boardFour,6,array(3,1,4,0,1,0,5,0,9,1,7,0,2,0,8,1,6,0));
        $this->loadBoard($this->boardFour,7,array(6,1,5,0,8,0,1,0,2,1,4,1,7,0,9,1,3,1));
        $this->loadBoard($this->boardFour,8,array(2,0,9,1,7,0,8,0,6,1,3,0,4,0,5,0,1,0));

        // load board 5 (this is the sample board, load this for 'cheat')
        $this->loadBoard($this->boardFive,0,array(2,0,6,0,3,0,7,0,5,1,8,0,4,0,1,1,9,1));
        $this->loadBoard($this->boardFive,1,array(8,0,1,0,7,0,4,0,2,1,9,0,6,1,3,1,5,1));
        $this->loadBoard($this->boardFive,2,array(5,0,4,0,9,1,1,1,6,0,3,0,7,1,8,0,2,0));
        $this->loadBoard($this->boardFive,3,array(7,0,3,0,8,1,5,0,4,1,2,0,9,1,6,0,1,1));
        $this->loadBoard($this->boardFive,4,array(6,1,9,0,4,0,8,0,3,0,1,0,2,0,5,0,7,1));
        $this->loadBoard($this->boardFive,5,array(1,1,2,0,5,1,6,0,9,1,7,0,8,1,4,0,3,0));
        $this->loadBoard($this->boardFive,6,array(9,0,8,0,6,1,3,0,7,0,5,1,1,1,2,0,4,0));
        $this->loadBoard($this->boardFive,7,array(4,1,5,1,2,1,9,0,1,1,6,0,3,0,7,0,8,0));
        $this->loadBoard($this->boardFive,8,array(3,1,7,1,1,0,2,0,8,1,4,0,5,0,9,0,6,0));

        $this->loadBoard($this->boardSix,0,array(5,1,3,1,4,0,6,0,7,1,8,0,9,0,1,0,2,0));
        $this->loadBoard($this->boardSix,1,array(6,1,7,0,2,0,1,1,9,1,5,1,3,0,4,0,8,0));
        $this->loadBoard($this->boardSix,2,array(1,0,9,1,8,1,3,0,4,0,2,0,5,0,6,1,7,0));
        $this->loadBoard($this->boardSix,3,array(8,1,5,0,9,0,7,0,6,1,1,0,4,0,2,0,3,1));
        $this->loadBoard($this->boardSix,4,array(4,1,2,0,6,0,8,1,5,0,3,1,7,0,9,0,1,1));
        $this->loadBoard($this->boardSix,5,array(7,1,1,0,3,0,9,0,2,1,4,0,8,0,5,0,6,1));
        $this->loadBoard($this->boardSix,6,array(9,0,6,1,1,0,5,0,3,0,7,0,2,1,8,1,4,0));
        $this->loadBoard($this->boardSix,7,array(2,0,8,0,7,0,4,1,1,1,9,1,6,0,3,0,5,1));
        $this->loadBoard($this->boardSix,8,array(3,0,4,0,5,0,2,0,8,1,6,0,1,0,7,1,9,1));

        $this->loadBoard($this->boardSeven,0,array(5,1,8,0,3,0,1,0,7,0,2,0,4,0,6,1,9,0));
        $this->loadBoard($this->boardSeven,1,array(7,1,9,1,1,0,2,1,3,0,4,0,6,0,8,0,5,0));
        $this->loadBoard($this->boardSeven,2,array(1,0,6,0,7,1,4,0,5,1,9,0,3,0,2,0,8,0));
        $this->loadBoard($this->boardSeven,3,array(7,1,9,1,1,0,2,1,3,0,4,0,6,0,8,0,5,0));
        $this->loadBoard($this->boardSeven,4,array(4,0,5,0,8,1,6,0,1,1,7,0,2,0,9,0,3,1));
        $this->loadBoard($this->boardSeven,5,array(2,0,3,1,6,1,8,0,9,0,5,0,7,1,1,0,4,1));
        $this->loadBoard($this->boardSeven,6,array(3,1,1,1,4,0,7,0,6,1,8,0,9,0,5,1,2,1));
        $this->loadBoard($this->boardSeven,7,array(8,0,7,0,9,0,5,1,2,0,3,1,1,0,4,1,6,1));
        $this->loadBoard($this->boardSeven,8,array(6,0,2,0,5,1,9,1,4,0,1,0,8,0,3,0,7,0));

        $this->loadBoard($this->boardEight,0,array(1,0,7,1,3,1,8,0,9,1,2,0,6,0,4,1,5,0));
        $this->loadBoard($this->boardEight,1,array(9,1,8,0,6,0,4,1,5,0,3,1,2,0,1,0,7,1));
        $this->loadBoard($this->boardEight,2,array(4,0,5,0,2,0,6,1,1,0,7,0,9,0,3,0,8,1));
        $this->loadBoard($this->boardEight,3,array(8,0,4,1,1,0,2,0,7,0,5,0,3,1,6,1,9,0));
        $this->loadBoard($this->boardEight,4,array(7,1,6,0,5,0,9,0,3,0,4,0,8,0,2,0,1,1));
        $this->loadBoard($this->boardEight,5,array(3,0,2,1,9,1,1,0,8,0,6,0,7,0,5,1,4,0));
        $this->loadBoard($this->boardEight,6,array(5,1,9,0,7,0,3,0,6,0,1,1,4,0,8,0,2,0));
        $this->loadBoard($this->boardEight,7,array(6,1,1,0,4,0,7,1,2,0,8,1,5,0,9,0,3,1));
        $this->loadBoard($this->boardEight,8,array(2,0,3,1,8,0,5,0,4,1,9,0,1,1,7,1,6,0));

        $this->loadBoard($this->boardNine,0,array(7,1,2,0,5,0,3,0,8,1,6,0,9,0,1,1,4,1));
        $this->loadBoard($this->boardNine,1,array(8,0,4,1,3,0,1,1,2,0,9,0,7,0,5,0,6,0));
        $this->loadBoard($this->boardNine,2,array(9,0,6,0,1,0,5,0,7,1,4,0,3,1,8,1,2,1));
        $this->loadBoard($this->boardNine,3,array(4,0,3,0,9,0,2,1,5,0,1,0,8,0,6,1,7,0));
        $this->loadBoard($this->boardNine,4,array(1,0,7,0,2,1,4,1,6,1,8,1,5,1,3,0,9,0));
        $this->loadBoard($this->boardNine,5,array(6,0,5,1,8,0,7,0,9,0,3,1,2,0,4,0,1,0));
        $this->loadBoard($this->boardNine,6,array(5,1,9,1,6,1,8,0,4,1,7,0,1,0,2,0,3,0));
        $this->loadBoard($this->boardNine,7,array(3,0,8,0,7,0,6,0,1,0,2,1,4,0,9,1,5,0));
        $this->loadBoard($this->boardNine,8,array(2,1,1,1,4,0,9,0,3,1,5,0,6,0,7,0,8,1));

        $this->loadBoard($this->boardTen,0,array(4,0,3,0,5,0,2,1,6,1,9,0,7,1,8,0,1,1));
        $this->loadBoard($this->boardTen,1,array(6,1,8,1,2,0,5,0,7,1,1,0,4,0,9,1,3,0));
        $this->loadBoard($this->boardTen,2,array(1,1,9,1,7,0,8,0,3,0,4,1,5,1,6,0,2,0));
        $this->loadBoard($this->boardTen,3,array(8,1,2,1,6,0,1,1,9,0,5,0,3,0,4,1,7,0));
        $this->loadBoard($this->boardTen,4,array(3,0,7,0,4,1,6,1,8,0,2,1,9,1,1,0,5,0));
        $this->loadBoard($this->boardTen,5,array(9,0,5,1,1,0,7,0,4,0,3,1,6,0,2,1,8,1));
        $this->loadBoard($this->boardTen,6,array(5,0,1,0,9,1,3,1,2,0,6,0,8,0,7,1,4,1));
        $this->loadBoard($this->boardTen,7,array(2,0,4,1,8,0,9,0,5,1,7,0,1,0,3,1,6,1));
        $this->loadBoard($this->boardTen,8,array(7,1,6,0,3,1,4,0,1,1,8,1,2,0,5,0,9,0));

        $this->loadBoard($this->boardTest,0,array(4,1,3,1,5,1,2,1,6,1,9,1,7,1,8,1,1,1));
        $this->loadBoard($this->boardTest,1,array(6,1,8,1,2,1,5,1,7,1,1,1,4,1,9,1,3,1));
        $this->loadBoard($this->boardTest,2,array(1,1,9,1,7,1,8,1,3,1,4,1,5,1,6,1,2,1));
        $this->loadBoard($this->boardTest,3,array(8,1,2,1,6,1,1,1,9,1,5,1,3,1,4,1,7,1));
        $this->loadBoard($this->boardTest,4,array(3,1,7,1,4,1,6,1,8,1,2,1,9,1,1,1,5,1));
        $this->loadBoard($this->boardTest,5,array(9,1,5,1,1,1,7,1,4,1,3,1,6,1,2,1,8,1));
        $this->loadBoard($this->boardTest,6,array(5,1,1,1,9,1,3,1,2,1,6,1,8,1,7,1,4,1));
        $this->loadBoard($this->boardTest,7,array(2,1,4,1,8,1,9,1,5,1,7,1,1,1,3,1,6,1));
        $this->loadBoard($this->boardTest,8,array(7,1,6,1,3,1,4,1,1,1,8,1,2,1,5,1,9,0));

        $this->boards = array(
            $this->boardOne,
            $this->boardTwo,
            $this->boardThree,
            $this->boardFour,
            $this->boardFive,
            $this->boardSix,
            $this->boardSeven,
            $this->boardEight,
            $this->boardNine,
            $this->boardTen
        );
    }

    public function getRandomBoard() {
        return $this->boards[rand(0, 9)];
    }

    public function getCheatBoard() {
        return $this->boardTest;
    }

    public function getTestBoard() {
        return $this->boardTest;
    }

    private function loadBoard(&$board,$row,$tempArray) {
        $board[$row] = array(
            0 => new Cell($tempArray[0],$tempArray[1]),
            1 => new Cell($tempArray[2],$tempArray[3]),
            2 => new Cell($tempArray[4],$tempArray[5]),
            3 => new Cell($tempArray[6],$tempArray[7]),
            4 => new Cell($tempArray[8],$tempArray[9]),
            5 => new Cell($tempArray[10],$tempArray[11]),
            6 => new Cell($tempArray[12],$tempArray[13]),
            7 => new Cell($tempArray[14],$tempArray[15]),
            8 => new Cell($tempArray[16],$tempArray[17]),
        );
    }

    private $boards;
    private $boardOne;
    private $boardTwo;
    private $boardThree;
    private $boardFour;
    private $boardFive;
    private $boardSix;
    private $boardSeven;
    private $boardEight;
    private $boardNine;
    private $boardTen;
    private $boardTest;
}