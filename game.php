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
    <link rel="stylesheet" href="css/style.css">
    <script src="jquery.min.js"></script>
    <script src="lib/cls/Cell.js"></script>
    <script src="lib/cls/Board.js"></script>
    <script src="lib/cls/Sudoku.js"></script>
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

                <td class="<?php echo $cssClassColumn;?>" id="<?php echo $i,"_",$j;?>">
                    <?php echo $view->displayCell($i, $j); ?>
                    <?php echo $view->displayNotes($i, $j); ?>
                </td>
            <?php } ?>
            </tr>
        <?php } ?>
    </table>
    <?php echo $view->displayForm(); ?>
</div>
</body>
<script>

    $(document).ready(function(){
        $(".chooseCell").click(function() {
            console.log(this);
            $("#popup").show();
            var row = $(this).parent()[0].id[0];
            var column = $(this).parent()[0].id[2];
            $("#popup").data("row",row);
            $("#popup").data("column",column);
        });
        $("#cancelPick").click(function(){
            $("#popup").toggle();
        });
        $("#pickValue").change(function(event) {
            var guess = $("#pickValue").val();
            var row = $("#popup").data("row");
            var column =$("#popup").data("column");
            gameBoard[row][column].setGuess(guess);
            updateBoard();
            $("#popup").hide();
            $("#pickValue").val(0);
        });
        $("#pickHint").change(function(event) {
            event.preventDefault();
            var hint = $("#pickHint").val();
            var row = $("#popup").data("row");
            var column =$("#popup").data("column");
            gameBoard[row][column].setNote(hint);
            updateBoard();
            $("#popup").toggle();
            $("#pickHint").val(0);
        });

    });

    var boards = new Board();
    var gameBoard = boards.boards[1];
    updateBoard();
    function chooseCell(element) {
        console.log(element);
        $("#popup").show();
        var row = $(element).parent()[0].id[0];
        var column = $(element).parent()[0].id[2];
        $("#popup").data("row",row);
        $("#popup").data("column",column);
    }
    function updateBoard() {
        for(var i=0; i<9; i++) {
            for(var j=0; j<9;j++) {
                var cell = gameBoard[i][j];
                var html ="";
                var inserted = "";
                if(cell.constant) {
                    html = '<span class="no-cursor">'+cell.answer+'</span>';
                    $("#"+i+"_"+j).children("span").removeClass("chooseCell");
                    $("#"+i+"_"+j).children("span").removeClass("blue");
                    $("#"+i+"_"+j).children("span").addClass("no-cursor");
                    inserted = cell.answer;
                }
                else if(cell.guess){
                    inserted = cell.guess;
                }
                else {

                    for(var k=0; k<9; k++) {
                        insertedHint = "";
                        if(cell.notes[k]) {
                            insertedHint = k+1;
                        }
                        $("#"+i+"_"+j).children(".hint_"+k).html(insertedHint);

                    }

                }
                $("#"+i+"_"+j).children(".cell").html(inserted);
            }
        }
    }

</script>
</html>
