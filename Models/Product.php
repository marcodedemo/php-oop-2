<?php

require_once __DIR__ . '/Category.php';
class Product {
    
    public $name;
    public $category;
    public $supplier;
    public $price;
    public $discount = 0;


    function __construct(string $name, Category $category, string $supplier, float $price){

        $this->name = $name;
        $this->category = $category;
        $this->supplier = $supplier;
        $this->price = $price;

        $this->setSupplierDiscount();
    }
    

    // funzione che calcola lo sconto in base al fornitore
    public function setSupplierDiscount(){
        if($this->supplier == "Supplier - 1"){
            $this->discount = 30;

        }else if($this->supplier == "Supplier - 2"){
            $this->discount = 15;

        }else {
            $this->discount = 0;
        }
    }

    // funzione che restituisce lo sconto in percentuale

    public function getDiscountPercentage(){
        return $this->discount . "%";
    }


    public function getPrice(){
        return $this->price . "€";
    }

    // funzione che restituisce il prezzo con lo sconto applicato
    public function getFinalPrice(){

        $finalPrice = $this->price - ($this->price * $this->discount) / 100;

        return round($finalPrice, 2) . "€";
    }
}