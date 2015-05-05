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
        this.gameBoard = this.board.getCheatBoard();
    } else {
        this.gameBoard = this.board.getRandomBoard();
    }

    if(test == true) {
        this.gameBoard = this.board.getTestBoard();
    }

    this.playerName = name;
}

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
