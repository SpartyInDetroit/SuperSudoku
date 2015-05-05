<?php
/**
 * Created by PhpStorm.
 * User: VinnySabatini
 * Date: 2/25/15
 * Time: 6:26 PM
 */

class SudokuView {
    // display hints and cell numbers
    public function __construct(Sudoku $sudoku) {
        $this->sudoku = $sudoku;
    }

    public function displayCell($row, $column) {
        $cell = $this->sudoku->getGameBoard()[$row][$column];
        $answer = $cell->getAnswer();
        $guess = $cell->getGuess();
        $constant = $cell->getConstant();
        if($constant) {
            $html =  '<span class="chooseCell no-cursor blue">'.$answer.'</span>';
        }
        else if($guess != '0') {
            $html = <<<HTML
                <a class="chooseCell" href="put-number.php?row=$row&column=$column"></a>
                $guess
HTML;
        } else {
            $html = <<<HTML
                <a class="chooseCell" id="emptyCell" href="put-number.php?row=$row&column=$column"></a>
HTML;
        }
        return $html;
    }

    public function displayNotes($row, $column) {
        $cell = $this->sudoku->getGameBoard()[$row][$column];
        $constant = $cell->getConstant();
        $notes = $cell->getNotes();
        $guess = $cell->getGuess();
        $html = '';
        if(!$constant && $guess == 0) {
            for($i=0; $i<9; $i++) {
                if($notes[$i] == 1) {
                    $j = $i+1;
                    $html .= <<<HTML
<span class="hint hint_$i" id="hint_$i _0_$column">$j </span>
HTML;

                }
            }
        }
        return $html;
    }
    public function displayWinMessage() {
        $html = "You won with ".$this->sudoku->getMoves()." moves!";
        return $html;
    }

    public function displaySolution($row, $column) {
        $cell = $this->sudoku->getGameBoard()[$row][$column];
        $answer = $cell->getAnswer();
        return  '<span class="chooseCell no-cursor"></span>'.$answer;
    }

    private $sudoku;    // The sudoku object
}