<?php
/**
 * Created by Carl Johnson
 * Date: 2/14/2015
 * Time: 11:35 AM
 */
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
    <?php
        $row = htmlspecialchars($_REQUEST['row']);
        $column = htmlspecialchars($_REQUEST['column']);
    ?>
    <h2>Enter value for row <?php echo $row+1;?> column <?php echo $column+1;?></h2>
    <form method="post" action="game-post.php">
        <input type="hidden" name="row" value="<?php echo $row;?>">
        <input type="hidden" name="column" value="<?php echo $column;?>">
        <select id="pickValue" name="pickValue">
            <option value="0"></option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
        </select>
        <input type="submit" class="button">
    </form>
    <h2>Enter hint for row <?php echo $row+1;?> column <?php echo $column+1;?></h2>
    <form method="post" action="game-post.php">
        <input type="hidden" name="row" value="<?php echo $row;?>">
        <input type="hidden" name="column" value="<?php echo $column;?>">
        <select id="pickHint" name="pickHint">
            <option value="0"></option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
        </select>
        <input type="submit" class="button">
    </form>
    <a href="game.php">Go Back</a>
</div>
</body>
</html>