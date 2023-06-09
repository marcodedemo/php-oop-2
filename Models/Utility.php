
<?php 

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/../Traits/Material.php';
require_once __DIR__ . '/../Traits/Durability.php';



class Utility extends Product{

    public $animalAge;

    use Material;
    use Durability;

    function __construct(string $name, Category $category, string $supplier, float $price, string $animalAge, string $material){
        parent::__construct($name, $category, $supplier, $price);

        $this->animalAge = $animalAge;
        $this->material = $material;

    }


}