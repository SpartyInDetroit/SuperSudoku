<?php
/**
 * Created by Carl Johnson
 * Date: 2/25/2015
 * Time: 7:43 PM
 */
require 'lib/game.inc.php';
$controller = new SudokuController($sudoku, $_REQUEST);
$_SESSION[SUDOKU_SESSION] = $controller->getSudoku();
//if($controller->isReset()) {
//    unset($_SESSION[SUDOKU_SESSION]);
//}
header('Location: ' . $controller->getPage());