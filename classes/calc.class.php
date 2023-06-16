<?php
class Calc {
    private $operator;
    private $numberOne;
    private $numberTwo;


    public function __construct(string $operator, int $numberOne, int $numberTwo) {
        $this->operator = $operator;
        $this->numberOne = $numberOne;
        $this->numberTwo = $numberTwo;
    }

    public function getOperator() {
        return $this->operator;
    }

    public function setOperator($operator) {
        $this->operator=$operator;
    }
    public function getNumberOne() {
        return $this->numberOne;
    }

    public function setNumberOne($numberOne) {
        $this->numberOne=$numberOne;
    }
    public function getNumberTwo() {
        return $this->numberTwo;
    }

    public function setNumberTwo($numberTwo) {
        $this->numberTwo=$numberTwo;
    }

    public function calculator() {
        switch($this->operator) {
            case 'add':
                $result = $this->getNumberOne() + $this->getNumberTwo();
                return $result;
                break;
            case '';
        }
    }

}

?>