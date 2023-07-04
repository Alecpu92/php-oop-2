<?php

trait Brand {

    private $brand;

    public function getBrand() {

        return $this -> brand;
    }
    public function setBrand($brand) {

        $this -> brand = $brand;
    }
}



class Food extends Product {

    use Brand;

    private $expireDate;

    public function __construct($name, $weight, $price,
                                 Category $category, $expireDate,
                                 $brand) {

        parent :: __construct($name, $weight, $price, $category);

        $this -> setExpireDate($expireDate);
    }

    public function getExpireDate() {

        return $this -> expireDate;
    }
    public function setExpireDate($expireDate) {

        $this -> expireDate = $expireDate;
    }
}

