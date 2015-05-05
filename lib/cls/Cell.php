<?php
/**
 * Created by PhpStorm.
 * User: ryanswitzer
 * Date: 2/23/15
 * Time: 4:07 PM
 */

class Cell {
    public function __construct($answer, $constant) {
        $this->answer = $answer;
        $this->constant = $constant;
        $this->guess = 0;
        $this->notes = array(0, 0, 0, 0, 0, 0, 0, 0, 0);
    }

    public function getAnswer() {
        return $this->answer;
    }

    public function isRight() {
        if ($this->answer == $this->guess) {
            return true;
        } else {
            return false;
        }
    }

    public function getConstant() {
        return $this->constant;
    }

    public function setGuess($guess) {
        $this->guess = $guess;
    }

    public function getGuess() {
        return $this->guess;
    }

    public function setNote($key) {
        if($this->notes[$key-1] == 1) {
            $this->notes[$key-1] = 0;
        } else {
            $this->notes[$key-1] = 1;
        }
    }

    public function getNotes() {
        return $this->notes;
    }

    private $answer;
    private $guess;
    private $notes;
    private $constant;
}