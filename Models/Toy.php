
<?php 

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/../Traits/Material.php';


class Toy extends Product{

    public $color;

    use Material;

    function __construct(string $name, Category $category, string $supplier, float $price, string $color, string $material){
        
        parent::__construct($name, $category, $supplier, $price);


        $this->color = $color;
        $this->material = $material;

    }

}