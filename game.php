<?php
/**
 * Created by Carl Johnson
 * Date: 2/14/2015
 * Time: 11:23 AM
 */
require_once("lib/nav.inc.php");
require 'lib/game.inc.php';
$view = new SudokuView($sudoku);
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
    <table class="game_board">
        <?php for($i=0; $i<9; $i++) { ?>
            <?php $cssClassRow = "";
                if($i==2 || $i == 5) {
                $cssClassRow = "border-bottom";
            }
            ?>
            <tr id="row<?php echo $i;?>" class="<?php echo $cssClassRow;?>">
            <?php for($j=0; $j<9; $j++) { ?>
                <?php $cssClassColumn = "";
                if($j == 2 || $j == 5) {
                    $cssClassColumn = "border-right";
                }
                ?>

                <td class="<?php echo $cssClassColumn;?>" id="column<?php echo $i,"_0";?>">
                    <?php echo $view->displayCell($i, $j); ?>
                    <?php echo $view->displayNotes($i, $j); ?>
                </td>
            <?php } ?>
            </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>
