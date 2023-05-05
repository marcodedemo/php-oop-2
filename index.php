

<?php

require_once './Models/Product.php';
require_once './db.php';


?>



<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP2</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <h1 class="text-center pt-3">Animal Products</h1>

    <!-- card container -->
    <div class="container pt-5 d-flex flex-wrap justify-content-center gap-2">

        <?php
        foreach($products as $product){
        ?>



        <!-- card -->
        <div class="card mb-3" style="min-width: 400px;">
            <div class="row g-0">

                <!-- card icon -->
                <div class="col-md-2 fs-1 d-flex flex-wrap justify-content-center align-items-center gap-2">
                    <i class="<?= $product->category->icon; ?>"></i>
                </div>

                <!-- card texts -->
                <div class="col-md-8">

                    <div class="card-body">
                        
                        <!-- title -->
                        <h4 class="card-title"> <?= $product->name ?> </h4>

                        <!-- info -->
                        <div class="card-text d-flex flex-column">
                            
                            <!-- supplier -->
                            <div id="supplier"> <strong>Supplier: </strong> <?= $product->supplier ?> </div>

                    
                            <?php

                            switch( get_class($product)){

                                case 'Toy':
                                    ?>

                                    <!-- material -->
                                    <div id="material"> <strong>Material: </strong> <?= $product->material ?> </div>

                                    <!-- color -->
                                    <div id="color"> <strong>Color: </strong> <?= $product->color ?> </div>

                                    <!-- durability -->
                                    <div id="durability"> <strong>Durability: </strong> <?= $product->getDurability() ?> </div>


                                    <?php break;
                                
                                case 'Utility':

                                    ?>

                                    <!-- material -->
                                    <div id="material"> <strong>Material: </strong> <?= $product->material ?> </div>

                                    <!-- animal age -->
                                    <div id="animal-age"> <strong>Animal Age Range: </strong> <?= $product->animalAge ?> </div>

                                    <!-- durability -->
                                    <div id="durability"> <strong>Durability: </strong> <?= $product->getDurability() ?> </div>
                                    <?php
                                    break;
                                
                                case 'Food':

                                    ?>

                                    <!-- ingredients -->
                                    <div id="ingredients"> <strong>Ingredients: </strong> <?= implode(", ",$product->ingredients) ?> </div>

                                    <!-- weight -->
                                    <div id="weight"> <strong>Weight: </strong> <?= $product->getWeight() ?> </div>

                                    <?php
                                    break;
                            }
                            

                            ?>


                            <!-- price -->
                            <div id="price"> <strong>Price: </strong> <?= $product->getPrice() ?> </div>

                            <!-- discount -->
                            <div id="discount"> <strong>Discount: </strong> <?= $product->getDiscountPercentage() ?> </div>
                            
                            <!-- final Price -->
                            <div id="final-price"> <strong>Final Price: </strong> <?= $product->getFinalPrice() ?> </div>


                        </div>

                        

                    </div>

                </div>
            </div>
        </div>


    <?php
        };
    ?>


    </div>

    

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>