<?php

$ROOT_DIR = __DIR__;
$BASE_ROUTE = '/sites/asianfoods.com';

$main_nav = array(
    "home" => array("name" => "home", "label" => "Home", "link" => "home"),
    "aboutus" => array("name" => "aboutus", "label" => "About Us", "link" => "aboutus"),
//    "product" => array("name" => "product", "label" => "Product", "link" => "product"),
    "contactus" => array("name" => "contactus", "label" => "Contact Us", "link" => "contactus"),
);

$product_nav = array(
    "poultry" => array(
        "link" => "home/chicken",
        "name" => "Poultry",
        "dir" => "chicken",
        "icon" => "chicken.png"),
    "meat" => array(
        "link" => "home/meat",
        "name" => "Meat Products",
        "dir" => "mutton",
        "icon" => "goat.png"),
    "exotic" => array(
        "link" => "home/exotic",
        "name" => "Exotic",
        "dir" => "rawmeat",
        "icon" => "exotic.png"),
    "readyToCook" => array(
        "link" => "home/readyToCook",
        "name" => "Ready To Cook",
        "dir" => "readytocook",
        "icon" => "cooking.png"),
);
