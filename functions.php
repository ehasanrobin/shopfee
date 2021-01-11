<?php
ob_start();
// mysqli connection
include("database/database.php");


// product connection
include("database/product.php");

// cart connection 
include("database/cart.php");

// connection object 

$db = new database();

// product object
$product = new product($db);

// cart object
$cart = new cart($db);
// $cart->getSum();




