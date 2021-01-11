<?php
ob_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){

  if(isset($_REQUEST["product_submit_btn"])){


      $item_id = $_REQUEST["item_id"];
     $user_id = $_REQUEST["user_id"];
  
     // call method add to cart
     $cart->addToCart($user_id , $item_id, $table = "cart");
  }
  

}
$product_shuffle = $product->getdata($table = "product");

$in_cart =  $cart->getInCart($product->getdata($table = 'cart'));
 

?>
<section id="top-sale">
          <div class="container py-3">
            <h2 class="text-left font-weight-bold text-capitalize text-black-80">top sale</h2>
            <hr>
            <!-- owl carousel start  -->
           
            <div class="owl-carousel owl-theme">
               <!-- item start  -->
               <?php 

               foreach($product_shuffle as $item) {

               
               
               ?>
              <div class="item py2"> 
                <div class="product text-center">
                  <a href="product.php?item_id=<?php echo $item["item_id"] ?? "none"?>" class="text-decoration-none text-center justify-content-center ">
                    <img src="<?php echo $item["item_img"] ?? "none"?>" alt="samsung galaxy a">
                    <div class="text-center text-black-50">
                      <h6><?php echo $item["item_brand"] ?? "none"?></h6>
                      
                    </div>
                    <div class="text-warning text-center">
                      <span><i class="fas fa-star    "></i></span>
                      <span><i class="fas fa-star    "></i></span>
                      <span><i class="fas fa-star    "></i></span>
                      <span><i class="fas fa-star    "></i></span>
                      <span><i class="far fa-star    "></i></span>
                      
                    </div>
                    <div class="price py-2 text-black-50 text-center"> $<?php echo $item["item_price"] ?? "0" ;?> </div>
                   <form action="<?php $_SERVER["PHP_SELF"];?>" method="post">
                   <input type="hidden" value="<?php echo $item["item_id"] ;?>" name="item_id">
                   <input type="hidden" value="<?php echo 1 ;?>" name="user_id">
                   <?php 
                     if(in_array( $item["item_id"] ,$in_cart ?? [] )){

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
              }
              ?>
             <!-- item end  -->
            
             <!-- item end  -->
    
              
            </div>
            <!-- owl carousel end  -->
          </div>
    
        </section>