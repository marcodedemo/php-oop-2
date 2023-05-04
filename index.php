

<?php

require_once './Models/Product.php';
require_once './Models/DogProduct.php';
require_once './Models/CatProduct.php';
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
                    <?php 
                    if($product->animalType == "Dog"){

                        ?> <i class="fa-solid fa-dog text-success"></i> <?php

                    }else if($product->animalType == "Cat"){

                        ?> <i class="fa-solid fa-cat text-primary"></i> <?php

                    }else{
                        ?> <i class="fa-solid fa-dog text-danger"></i> <i class="fa-solid fa-cat text-danger"></i> <?php
                    }
                    
                    ?>
                </div>

                <!-- card texts -->
                <div class="col-md-8">

                    <div class="card-body">
                        
                        <!-- title -->
                        <h4 class="card-title"><?= $product->name ?><small class="fs-5"> (<?= $product->category ?>)</small></h4>

                        <!-- info -->
                        <div class="card-text d-flex flex-column">
                            
                            <!-- fornitore -->
                            <div id="supplier"><strong>Supplier: </strong><?= $product->supplier?></div>

                            <!-- taglia animale -->
                            <div id="size"><strong>Animal Size: </strong><?= $product->animalSize ?></div>

                            <!-- età animale -->
                            <div id="size"><strong>Animal Age: </strong><?= $product->getAnimalAge() ?></div>

                            <div id="price"><strong>Price: </strong><?= $product->getFinalPrice() ?></div>

                            <!-- sconto  -->
                            <div id="supplier-discount"><strong>Sconto: </strong><?= $product->getDiscountPercentage()?></div>


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