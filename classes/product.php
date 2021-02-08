<?php 

class Product {

    // attributi
    private $type;
    private $brand;
    public $price;

    // costruttore
    function __construct($type, $brand, $price) {
        $this->type = $type;
        $this->brand = $brand;
        $this->price = $price;
    }
    
    // metodi
    public function getType() {
        return $this->type;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getFullName() {
        return $this->type . " " . $this->brand;
    }
}

// $product = new Product("Tipo Prodotto", "Marca", 1);

// echo $product->getFullName();