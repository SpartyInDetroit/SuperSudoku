Empty.php<?php
/** @file
 * @brief Unit test for Sudoku
 * @cond 
 * @brief Unit tests for the class 
 */
class SudokuTest extends \PHPUnit_Framework_TestCase
{
	public function test_construct() {
		$sudoku = new Sudoku("Ryan");

		$this->assertInstanceOf('Sudoku', $sudoku);
	}

	public function test_function() {

		$sudoku = new Sudoku("Ryan");

		$this->assertFalse($sudoku->checkIfWon());
	}
}

/// @endcond
?>
