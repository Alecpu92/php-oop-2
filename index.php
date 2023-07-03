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

public function __construct( $name, $cost, $quantity, $score, )