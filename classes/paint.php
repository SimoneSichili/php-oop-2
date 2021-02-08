<?php

require_once __DIR__ . "/product.php";

class Paint extends Product {
    // attributi
    public $color;

    // costruttore
    function __construct($type, $brand, $price, $color) {
        parent::__construct($type, $brand, $price);
        $this->color = $color;
    }

    // metodi
    public function getFullName() {
        return parent::getFullName() . " " . $this->color;
    }
}

// $paint = new Tech("Vernice", "MaxMeyer", 10, "red");

// var_dump($paint);