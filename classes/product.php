<?php 

class Product {

    // attributi
    private $type;
    private $brand;
    protected $price;

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

    public function getPrice() {
        return $this->price;
    }

    public function getFullName() {
        return $this->type . " " . $this->brand;
    }

    public function getDiscountPrice($discount) {
        return $this->price - ($this->price * ($discount / 100));
    }
}

// $product = new Product("Tipo Prodotto", "Marca", 1);

// echo $product->getFullName();