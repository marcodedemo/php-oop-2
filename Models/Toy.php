
<?php 

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/../Traits/Material.php';
require_once __DIR__ . '/../Traits/Durability.php';



class Toy extends Product{

    public $color;

    use Material;
    use Durability;


    function __construct(string $name, Category $category, string $supplier, float $price, string $color, string $material){
        
        parent::__construct($name, $category, $supplier, $price);


        $this->color = $color;
        $this->material = $material;

    }

}