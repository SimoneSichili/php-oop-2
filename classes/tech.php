<?php

require_once __DIR__ . "/product.php";

class Tech extends Product {
    // attributi
    public $model;

    // costruttore
    function __construct($type, $brand, $price, $model) {
        parent::__construct($type, $brand, $price);
        $this->model = $model;
    }
    
    // metodi
    public function getFullName() {
        return parent::getFullName() . " " . $this->model;
    }

}

// $tech = new Tech("Smartphone", "Samsung", 200, "S20");

// var_dump($tech);