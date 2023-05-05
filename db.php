<?php


require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Utility.php';
require_once __DIR__ . '/Models/Toy.php';
require_once __DIR__ . '/Models/Food.php';





$categories = [

    new Category("Dog","fa-solid fa-dog"),
    new Category("Cat","fa-solid fa-cat"),

];



$products = [

    new Utility("Nail Cutter", $categories[1], "Supplier - 1", 4.99, "0-5", "Plastic"),
    new Food("Dry Food", $categories[0], "Supplier - 2", 15.60, 5, ["Fish", "Vegetables"]),
    new Toy ("Ball", $categories[0], "Supplier - 2", 8, "Red", "Plastic"),
    new Utility("Collar", $categories[0], "Supplier - 1", 4.99, "0-10", "Fabric"),
    new Food("Canned Tuna", $categories[1], "Supplier - 4", 10, 0.5 , ["Tuna"]),
    new Toy ("Rope", $categories[0], "Supplier - 4", 5.99, "Blue", "Rope"),
    new Utility("Bowl", $categories[1], "Supplier - 1", 4.99, "Any", "Steel"),
    new Utility("Collar", $categories[0], "Supplier - 1", 4.99, "0-10", "Fabric"),
    new Utility("Leash", $categories[0], "Supplier - 3", 8.49, "Any", "Fabric"),
    new Food("Dry Food", $categories[0], "Supplier - 1", 25, 10, ["Meat","Vegetables"]),
    new Food("Dry Food", $categories[1], "Supplier - 3", 10, 2.5, ["Fish", "Chips"]),
    new Toy ("Ball", $categories[1], "Supplier - 2", 5.99, "Green", "Plastic"),









];