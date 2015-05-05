Empty.php<?php
/** @file
 * @brief Empty unit testing template
 * @cond 
 * @brief Unit tests for the class 
 */
class SudokuViewTest extends \PHPUnit_Framework_TestCase
{
	public function test_construct() {
        $sudoku = new Sudoku('');
        $view = new SudokuView($sudoku);

        $this->assertInstanceOf('SudokuView', $view);
	}

    public function test_displayCell() {
        // Create Test Board (All cells filled except bottom right cell
        $sudoku = new Sudoku('player', false, true);
        $view = new SudokuView($sudoku);


        for($i=0; $i<9; $i++) {
            for($j=0; $j<9; $j++) {
                $checkGuess = $view->displayCell($i, $j);
                $cell = $sudoku->getGameBoard()[$i][$j];
                $constant = $cell->getConstant();
                $realGuess = strval($cell->getGuess());
                if($constant == 1) {
                    $answer = strval($cell->getAnswer());
                    $this->assertContains($answer, $checkGuess);
                } else if($realGuess != '0') {
                    $this->assertContains($realGuess, $checkGuess);
                }
                else {
                    $this->assertContains('emptyCell', $checkGuess);
                }
            }
        }
    }

    // FINISH THIS TEST, Not inserting hint
    public function test_displayNotes() {
        // Create Test Board (All cells filled except bottom right cell
        $sudoku = new Sudoku('player', false, true);
        $controller = new SudokuController($sudoku, array('pickHint'=>'5', 'row'=>'8', 'column'=>'8'));
        $view = new SudokuView($sudoku);

        $notes = $view->displayNotes(8, 8);
    }

    public function test_displaySolution() {
        // Create Test Board (All cells filled except bottom right cell
        $sudoku = new Sudoku('player', false, true);
        $view = new SudokuView($sudoku);

        for($i=0; $i<9; $i++) {
            for($j=0; $j<9; $j++) {
                $checkAnswer = $view->displaySolution($i, $j);
                $cell = $sudoku->getGameBoard()[$i][$j];
                $realAnswer = strval($cell->getAnswer());
                $this->assertContains($realAnswer, $checkAnswer);
            }
        }
    }
}

/// @endcond
?>
