<?php
/** @file
 * @brief Empty unit testing template
 * @cond 
 * @brief Unit tests for the class 
 */

class SudokuControllerTest extends \PHPUnit_Framework_TestCase
{
	public function test_construct() {
        // Create Test Board (All cells filled except bottom right cell
		$sudoku = new Sudoku('player');
        $controller = new SudokuController($sudoku, array());

        $this->assertInstanceOf('SudokuController', $controller);
        $this->assertFalse($controller->gaveUp());
        $this->assertEquals('game.php', $controller->getPage());
	}

    public function test_insertValue() {
        // Create Test Board (All cells filled except bottom right cell
        $sudoku = new Sudoku('player', false, true);
        $controller = new SudokuController($sudoku, array('pickValue'=>'5', 'row'=>'8', 'column'=>'8'));

        $this->assertFalse($controller->gaveUp());
        $this->assertEquals('game.php', $controller->getPage());

        $cell = $sudoku->getGameBoard()[8][8];
        
        $value = $cell->getGuess();

        $this->assertEquals('5', $value);
    }

    public function test_insertHint() {
        // Create Test Board (All cells filled except bottom right cell
        $sudoku = new Sudoku('player', false, true);
        $controller = new SudokuController($sudoku, array('pickHint'=>'5', 'row'=>'8', 'column'=>'8'));

        $this->assertFalse($controller->gaveUp());
        $this->assertEquals('game.php', $controller->getPage());

        $cell = $sudoku->getGameBoard()[8][8];
        $notes = $cell->getNotes();
        $note = $notes[5];

        $this->assertEquals('1', $note);
    }
}

/// @endcond
?>
