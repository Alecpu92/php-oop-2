<?php

class Stock {

    private $name;
    private $cost;
    private $quantity;
    private $score;

    public function __construct( $name, $cost, $quantity, $score ) {

        $this -> setName($name);
        $this -> setCost($cost);
        $this -> setQuantity($quantity);
        $this -> setScore(score);

    }



public function getName() {

    return $this -> name;

}
public function setName($name) {

    $this -> name = $name;

}
public function getCost() {

    return $this -> cost;

}
public function setCost($cost) {

    $this -> cost = $cost;
    
}
public function getQuantity() {

    return $this -> quantity;

}
public function setQuantity($quantity) {

    $this -> quantity = $quantity;
    
}
public function getScore() {

    return $this -> score;

}
public function setScore($score) {

    $this -> score = $score;
    
}

}