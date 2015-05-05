<?php
require_once("lib/nav.inc.php");
?>
<!DOCTYPE html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Super Sudoku</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="wrap">
        <?php echo print_nav(); ?>
        <img id="game_board_static" alt="game-board" src="img/game1.png" width="448" height="448">
        <div>
        <form id="playForm" method="POST" autocomplete="off" name="playerName" action="game-post.php">
            <input class="text" type="text" name="playerName" placeholder="Enter your name...">
            <input class="button" type="submit" value="Play">
        </form>
        <form id="cheatForm" method="POST" autocomplete="off" name="cheat" action="game-post.php">
            <input type="hidden" name="cheat" value="cheating">
            <input class="button" type="submit" value="Cheat">
        </form>
        </div>
    </div>
</body>
</hmtl>