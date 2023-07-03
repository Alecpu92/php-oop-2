<?php 

class Cat extends Stock {

    private $type;
    private Stock $stock;

    public function __construct(
        $name, $cost, $quantity, $score
        $type, Stock $stock
        ) {
    
            parent :: __construct($name, $cost, $quantity, $score);
         
     

        $this -> setType($type);
        $this -> setStock($stock);

    }

    public function getType() {

        return $this -> type;

    }

    public function setType() {
        $this -> type = $type;

    }

    public function getStock() {

        return $this -> stock;

    }

    public function setStock() {

        $this -> stock = $stock;
    }
}