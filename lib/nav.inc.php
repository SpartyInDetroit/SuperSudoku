<?php
/**
 * Created by Carl Johnson
 * Date: 2/25/2015
 * Time: 6:24 PM
 */

function print_nav() {

    $html = <<<HTML
    <h1>Super Sudoku</h1>
        <ul class="nav">
            <li><a href="index.php">New Game</a></li>
            <li><a href="game.php">Game</a></li>
            <li><a id="giveUp" href="">Give Up</a></li>
        </ul>
HTML;
    return $html;


}