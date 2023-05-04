<?php

$products = [

    new Product("Anti Tick","Health","Supplier - 1", "Medium", "0-5", 5),
    new Product("Anti Tick","Health","Supplier - 2", "Large", "Any", 3),
    new Product("Bowl", "Utility", "Supplier - 2", "Any", "Any", 6.00),
    new Product("Food Dispenser", "Utility", "Supplier - 1", "Large", "Any", 12),
    new Product("Brush", "Utility", "Supplier - 3", "Any", "Any", 3),
    new Product("Ball", "Toy", "Supplier - 1", "Any", "Any", 3),
    new DogProduct("Collar", "Utility", "Supplier - 4", "Small", "5-10", 7, ["Any"]),
    new DogProduct("Biscuits", "Food", "Supplier - 1", "Small", "5-10",  15, ["Any"]),
    new DogProduct("Biscuits", "Food", "Supplier - 2", "Large", "Any", 12, ["Dobermann","Labrador"]),
    new DogProduct("Dry Food", "Food", "Supplier - 2", "Small", "Any", 7, ["Chihuahua","Fox Terrier"]),
    new DogProduct("Ball", "Toy", "Supplier - 4", "Small", "0-5", 5, ["Any"]),
    new DogProduct("Dry Food", "Food", "Supplier - 1", "Medium", "Any", 11, ["Any"]),
    new CatProduct("Biscuits", "Food", "Supplier - 1", "Any", "Any", 4, ["Any"]),
    new CatProduct("Brush", "Utility", "Supplier - 2", "Any", "5-10", 4, ["Persian"]),
    new CatProduct("Nail Clipper", "Utility", "Supplier - 5", "Small", "0-2", 5, ["Any"]),
    new CatProduct("Nail Clipper", "Utility", "Supplier - 1", "Large", "10-20", 7, ["Aegean", "American Curl"]),
    new CatProduct("Biscuits", "Food", "Supplier - 2", "Any", "Any", 15, ["Asian","Bengal", "Birman"]),
    new CatProduct("Mice Toy", "Toy", "Supplier - 4", "Any", "5-10", 4, ["Any"]),


];