<?php
/**
 * Created by Carl Johnson
 * Date: 2/25/2015
 * Time: 6:34 PM
 */
require __DIR__ . "/autoload.inc.php";
// Start the PHP session system
session_start();
define("SUDOKU_SESSION", 'sudoku');
// If there is a Wumpus session, use that. Otherwise, create one
if(!isset($_SESSION[SUDOKU_SESSION])) {
    $_SESSION[SUDOKU_SESSION] = new Sudoku("");
}

$sudoku = $_SESSION[SUDOKU_SESSION];