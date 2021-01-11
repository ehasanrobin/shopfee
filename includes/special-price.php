<?php

$product_shuffle = $product->getdata($table = "product");


$brand =  array_map(function($brand){ return $brand["item_brand"];},$product_shuffle);
 $unique = array_unique($brand);
 sort($unique);

 if($_SERVER["REQUEST_METHOD"] == "POST"){

  if(isset($_REQUEST["special_submit_btn"])){


      $item_id = $_REQUEST["item_id"];
     $user_id = $_REQUEST["user_id"];
  
     // call method add to cart
     $cart->addToCart($user_id , $item_id, $table = "cart");
  }
  

}

$in_cart =  $cart->getInCart($product->getdata($table = 'cart'));
?>
<section id="special-price">
          <div class="container">
            <div class="heading-speciali">
              <h4 class="font-weight-bold">Special Price</h4>
            <div id="filter" class="button-group text-right">
              <button class="btn " data-filter="*">All Brands</button>
              <?php 
              
              array_map(function($brands){
              ?>
              <button class="btn " data-filter=".<?php echo $brands;?>"><?php echo $brands;?></button>
              
              <?php
              },$unique)
              ?>
            </div>
            </div>
            <hr>
            <div class="grid">
            <?php
            array_map(function($item) use($in_cart){;
            
            ?>
              <div class="grid-item <?php echo $item["item_brand"]?> border">
              <div class="item py-2 text-center" style="width: 200px; ">
                <a href="product.php?item_id=<?php echo $item["item_id"] ?? "none"?>" class="text-decoration-none text-center justify-content-center ">
                  <img src="<?php echo $item["item_img"] ?? "null"?>" alt="samsung galaxy a">
                  <div class="text-center text-black-50">
                    <h6><?php echo $item["item_name"] ?? "unknown"?></h6>
                    
                  </div>
                  <div class="text-warning text-center">
                    <span><i class="fas fa-star    "></i></span>
                    <span><i class="fas fa-star    "></i></span>
                    <span><i class="fas fa-star    "></i></span>
                    <span><i class="fas fa-star    "></i></span>
                    <span><i class="far fa-star    "></i></span>
                    
                  </div>
                  <div class="price py-2 text-black-50 text-center"> $<?php echo $item["item_price"] ?? "0"?></div>
                  <form action="<?php $_SERVER["PHP_SELF"];?>" method="post">
                   <input type="hidden" value="<?php echo $item["item_id"] ;?>" name="item_id">
                   <input type="hidden" value="<?php echo 1 ;?>" name="user_id">
                   <?php 
                     if(in_array( $item["item_id"] ,$in_cart ?? [])){

                      echo '<button type="submit" class="btn btn-success" disabled>add to cart</button>';
                     }else{
                        echo ' <button type="submit" name="new_submit_btn" class="btn btn-warning  ">add to cart</button>';
                     }

                   ?>
                   </form>
                </a>
              </div>
              
            </div>
            <?php
              },$product_shuffle)
              ?>
        
            </div>
    
          </div>
        </section>