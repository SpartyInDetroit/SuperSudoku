Empty.php<?php
/** @file
 * @brief Empty unit testing template
 * @cond 
 * @brief Unit tests for the class 
 */
class CellTest extends \PHPUnit_Framework_TestCase
{
	public function test_construct() {
		$cell = new Cell(1,1);

		$this->assertInstanceOf('Cell', $cell);
	}
}

/// @endcond
?>
