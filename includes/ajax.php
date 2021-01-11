    <?php

// mysqli connection
include("../database/database.php");


    // product connection
    include("../database/product.php");

    // connection object 
    $db = new database();

    // product object
    $product = new product($db);

    if(isset($_REQUEST["itemId"])){

        $product = $product->getProduct($_REQUEST["itemId"],$table = "product");
        echo json_encode($product);

    }