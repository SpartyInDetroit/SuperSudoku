Empty.php<?php
/** @file
 * @brief Empty unit testing template
 * @cond 
 * @brief Unit tests for the class 
 */
class BoardTest extends \PHPUnit_Framework_TestCase
{
	public function test_construct() {
		$board = new Board();

		$this->assertInstanceOf('Board', $board);
	}
}

/// @endcond
?>
