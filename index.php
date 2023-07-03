<?php

require_once("./models/Stock.php");
require_once("./models/Dog.php");

class Cat {

    private $type;
    private Stock $stock;

    public function __construct($type, Stock $stock) {

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
    

$stock1 = new Stock("Frontline" , "30$" , "40" , "8");
var_dump($stock1);

echo "<br>--------------------------<br>";

$dog1 = new Dog("giocattolo" , "media");
var_dump($dog1);
   





