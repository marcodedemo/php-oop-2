<?php

class Product {
    
    public $name;
    public $category;
    public $animalType = "Any";
    public $supplier;
    public $animalSize;
    public $animalAge;
    public $price;
    public $discount = 0;


    function __construct(string $name, string $category, string $supplier, string $animalSize, string $animalAge, int $price){

        $this->name = $name;
        $this->category = $category;
        $this->supplier = $supplier;
        $this->animalSize = $animalSize;
        $this->animalAge = $animalAge;
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

    public function getAnimalAge(){
        if($this->animalAge != "Any"){
            
            return $this->animalAge . " years";

        }else{
            return "Any";
        }
    }

    // funzione che restituisce il prezzo con lo sconto applicato
    public function getFinalPrice(){

        $finalPrice = $this->price - ($this->price * $this->discount) / 100;

        return $finalPrice . "€";
    }
}