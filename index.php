
<?php

class Stock {

    private $name;
    private $cost;
    private $quantity;
    private $score;

    public function __construct( $name, $cost, $quantity, $score, ) {

        $this -> name = $name;
        $this -> cost = $cost;
        $this -> quantity = $quantity;
        $this -> score = $score;

    }

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

$stock1 = new Stock("Frontline" , "30$" , "40" , "8");
var_dump($stock1);
   





