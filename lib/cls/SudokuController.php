<?php
/**
 * Created by PhpStorm.
 * User: VinnySabatini
 * Date: 2/25/15
 * Time: 6:26 PM
 */

class SudokuController {
    // logic - Submit value or hint, Check if board is won, Check if user gave up

    public function __construct(Sudoku $sudoku, $request) {
        if(isset($_REQUEST['cheat'])) {
            $this->sudoku = new Sudoku($_REQUEST['playerName'], true);
        }
        else if(isset($_REQUEST['playerName'])) {
            $this->sudoku = new Sudoku($_REQUEST['playerName']);
        }
        else {
            $this->sudoku = $sudoku;
        }
        if(isset($_REQUEST['giveUp'])) {
            $this->giveUp = true;
        }
        if(isset($_REQUEST['pickValue'])) {
            $this->insertValue($_REQUEST['pickValue'], $_REQUEST['row'], $_REQUEST['column']);
            if($this->checkWin()) {
                $this->page = 'win.php';
            };
        }
        if(isset($_REQUEST['pickHint'])) {
            $this->insertHint($_REQUEST['pickHint'], $_REQUEST['row'], $_REQUEST['column']);
        }

    }

    public function getPage() {
        return $this->page;
    }

    public function gaveUp() {
        return $this->giveUp;
    }

    public function getSudoku() {
        return $this->sudoku;
    }

    private function insertValue($value, $row, $column) {
        $this->getSudoku()->incrementMoves();
        $this->getSudoku()->getGameBoard()[$row][$column]->setGuess($value);
    }

    private function insertHint($value, $row, $column) {
        $this->getSudoku()->getGameBoard()[$row][$column]->setNote($value);
    }

    private function checkWin() {
        return $this->getSudoku()->checkIfWon();
    }

    private $sudoku;            // Sudoku object
    private $page = 'game.php'; // The next page to go to
    private $giveUp = false;    // Did the user give up
}