/**
 * Created by VinnySabatini on 5/5/15.
 */

function Cell(answer, constant) {
    this.answer = answer;
    this.constant = constant;
    this.guess = 0;
    this.notes = [0, 0, 0, 0, 0, 0, 0, 0, 0];
}

Cell.prototype.getAnswer = function() {
    return this.answer;
};

Cell.prototype.isRight = function() {
    if(this.answer == this.guess) {
        return true;
    } else {
        return false;
    }
};

Cell.prototype.getConstant = function() {
    return this.constant;
};

Cell.prototype.setGuess = function(number) {
    this.guess = number;
};

Cell.prototype.getGuess = function() {
    return this.guess;
};

Cell.prototype.setNote = function(key) {
    if(this.notes[key-1] == 1) {
        this.notes[key-1] = 0;
    } else {
        this.notes[key-1] = 1;
    }
};

Cell.prototype.getNotes = function() {
    return this.notes;
};
