<?php

class Dog extends Stock {

private $type;
private Stock $stock;

public function __construct( 
    $name, $cost, $quantity, $score
    $type, Stock $stock
    ) {

        parent :: __construct($name, $cost, $quantity, $score);


    $this -> setType($type);
    $this -> setSize($size);
}

public function getType() {

    return $this -> type;

}
public function setType($type) {

    $this -> type = $type;   
}
public function getSize() {

    return $this -> size;

}
public function setSize($size) {

    $this -> size = $size;
}
}