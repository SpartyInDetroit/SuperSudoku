/**
 * Created by VinnySabatini on 5/5/15.
 */

function Sudoku(name, cheat, test) {
    if(cheat === undefined) {
        cheat = false;
    }

    if(test === undefined) {
        test = false
    }

    this.moves = 0;
    this.board = new Board();
    if(cheat == true) {
        this.gameBoard = this.getCheatBoard();
    } else {
        this.gameBoard = this.getRandomBoard();
    }

    this.playerName = name;
}

Sudoku.prototype.getCheatBoard = function() {
    var boards = new Board();
    return boards.boards[10];
};

Sudoku.prototype.getRandomBoard = function() {
    var rand = Math.floor(Math.random()*10);
    var boards = new Board();
    return boards.boards[rand];
};

Sudoku.prototype.getPlayerName = function() {
    return this.playerName;
};

Sudoku.prototype.getMoves = function() {
    return this.moves;
};

Sudoku.prototype.incrementMoves = function() {
    this.moves++;
};

Sudoku.prototype.getGameBoard = function() {
    return this.gameBoard;
};

Sudoku.prototype.checkIfWon = function() {
    for(var i = 0; i<9; i++) {
        for(var j = 0; j<9; j++) {
            if((this.gameBoard[i][j].getConstant() == 0) &&
                (!this.gameBoard[i][j].isRight())){
                return false;
            }
        }
    }
    return true;
};
