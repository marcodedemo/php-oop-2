<?php

class CatProduct extends Product {

    public $animalType = "Cat";
    public $animalBreed;

    // creo il costruttore dell'elemento che estende l'elemento principale
    function __construct(string $name, string $category, string $supplier, string $animalSize, string $animalAge, int $price, array $animalBreed){

        // eredito il costruttore del genitore
        parent::__construct($name, $category, $supplier, $animalSize, $animalAge, $price);

        // setto le nuove variabili
        $this->animalBreed = $animalBreed;


        
    }
}