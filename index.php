<?php

require_once("./models/Stock.php");

class Dog {

    private $type;
    private $size;

    public function __construct($type, $size) {

        $this -> setType($type);
        $this -> setSize($size);
    }
}

$stock1 = new Stock("Frontline" , "30$" , "40" , "8");
var_dump($stock1);
   





