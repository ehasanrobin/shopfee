<?php
 ob_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(isset($_REQUEST["delete_btn"])){
        $item_id = $_REQUEST["item_id"]; 

        $cart->delete_cart($item_id , $table= "wishlist");
    
    }
}
if(isset($_REQUEST["addcartbtn"])){

   echo  $item_ids = $_REQUEST["item_id"];
   $item_id = $_REQUEST["item_id"];

   $cart->wishlist($item_id,$table = "cart",$formtable = "wishlist");

}
   
?>
<main>
        <div class="container">
      
            <div class="row">
                <div class="col-md-9">
                    <h6 class="py-3">wishlist</h6>
                    <?php
                    $cart_item = $product->getdata($table = "wishlist");
                       foreach ($cart_item  as $item) {
                           
                       $cart_id = $item["item_id"];

                       $result = $product->getProduct($cart_id, $table= "product");
                        $subtotal[] = array_map(function($item){
                       ?>
                    <div class="row border-top py-3">
                        <div class="col-2">
                            <img src="<?php echo $item["item_img"] ?? "unknow";?>" alt="">
                        </div>
                        <div class="col-8">
                            <h6><?php echo $item["item_name"] ?? "unknow";?></h6>
                            <small> by <?php echo $item["item_brand"] ?? "unknow";?></small>
                            <div class="d-flex ">
                                <div class="rating text-warning">
                                    <span><i class="fas fa-star    "></i></span>
                                    <span><i class="fas fa-star    "></i></span>
                                    <span><i class="fas fa-star    "></i></span>
                                    <span><i class="fas fa-star    "></i></span>
                                    <span><i class="far fa-star    "></i></span>
                                </div>
                                <a href="" class="px-2">20,500 rating|1000 questiond answered</a>
                            </div>
                            <div class="qty">
                                
                                <div class="py-2 d-flex">
                                 
                                  <form action="" method="post">
                                  <input type="hidden" value="<?php echo   $item["item_id"];?>" name="item_id">
                                  <button type="submit" name="delete_btn" class=" btn text-danger border-right px-3">delete</button>
                                  </form>
                                 <form action="" method="post">
                                     <input type="hidden" name="item_id" value="<?php echo $item["item_id"] ?? 0;?>">
                                  <button href="" class=" btn text-danger  px-3" name="addcartbtn">add to cart</button>
                                 </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 text-right  text-danger"> <span class=" text-right product_price" data-id="<?php echo $item["item_id"]?? 0;?>"><?php echo $item["item_price"] ?? "unknow";?></span> <span>$</span></div>
                    </div>
                    <?php
                    return $item["item_price"];
                    },$result);
                    
                    
                         // end foreach
                }
               

               
                    ?>
                   
                </div> 
                <!-- col end -->
               
                <!-- col end  -->
            </div>
        </div>
