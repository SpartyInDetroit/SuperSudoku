<?php
/**
 * Created by PhpStorm.
 * User: ryanswitzer
 * Date: 2/25/15
 * Time: 7:09 PM
 */
require 'Board.php';

class Sudoku {

    public function __construct($name, $cheat=false, $test=false) {
        $this->moves = 0;
        $this->board = new Board();
        if($cheat == true) {
            $this->gameBoard = $this->board->getCheatBoard();
        } else {
            $this->gameBoard = $this->board->getRandomBoard();
        }
        if($test == true) {
            $this->gameBoard = $this->board->getTestBoard();
        }
        $this->playerName = $name;
    }

    public function getPlayerName() {
        return $this->playerName;
    }

    public function getMoves() {
        return $this->moves;
    }

    public function incrementMoves() {
        $this->moves++;
    }

    public function getGameBoard() {
        return $this->gameBoard;
    }

    public function checkIfWon() {
        for($i = 0; $i<9; $i++) {
            for($j = 0; $j<9; $j++) {
                if(($this->gameBoard[$i][$j]->getConstant() == 0)&&
                    (!$this->gameBoard[$i][$j]->isRight())){
                    return false;
                }
            }
        }
        return true;
    }

    private $moves;
    private $board;
    private $gameBoard;
    private $playerName;
}