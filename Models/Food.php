
<?php 

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';

class Food extends Product{

    public $weight;
    public $ingredients;

    function __construct(string $name, Category $category, string $supplier, float $price, float $weight, array $ingredients){

        parent::__construct($name, $category, $supplier, $price);

        $this->weight = $weight;
        $this->ingredients = $ingredients;

    }

    function getWeight(){
        return $this->weight . "kg";
    }

}