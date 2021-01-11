<?php
 ob_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(isset($_REQUEST["delete_btn"])){
        $item_id = $_REQUEST["item_id"]; 

        $cart->delete_cart($item_id , $table= "cart");
    
    }
}

if(isset($_REQUEST["wishlistbtn"])){

    $item_id = $_REQUEST["item_id"];

    $cart->wishlist($item_id);
}
   
?>
<main>
        <div class="container">
      
            <div class="row">
                <div class="col-md-9">
                    <h6 class="py-3">shopping cart</h6>
                    <?php
                    $cart_item = $product->getdata($table = "cart");
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
                                  <button data-id="<?php echo $item["item_id"] ?? 0;?>" class="qty-up border bg-light"><i class="fas fa-angle-up    "></i></button>
                                  <input data-id="<?php echo $item["item_id"]?? 0;?>" type="text" class="w-25 qty-input bg-light border px-2" placeholder="1" value="1" disabled>
                                  <button data-id="<?php echo $item["item_id"]?? 0;?>" class="qty-down border bg-light"><i class="fas fa-angle-down    "></i></button>
                                  <form action="" method="post">
                                  <input type="hidden" value="<?php echo   $item["item_id"];?>" name="item_id">
                                  <button type="submit" name="delete_btn" class=" btn text-danger border-right px-3">delete</button>
                                  </form>
                                  
                                  <form action="" method="post">
                                  <input type="hidden" name="item_id" value="<?php echo $item["item_id"] ?? 0;?>">
                                  <button  class=" btn text-danger  px-3" name="wishlistbtn">Save for later</button>
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
                <div class="col-md-3">
                   <div class="card mt-5 text-center">
                       <div class="card-header  p-1">
                           <h6 class="card-title"> <span><i class="fas fa-check text-success    "></i></span> you order is ligible for delivery</h6>
                       </div>
                       <div class="card-body">
                           <h5>subtotal(<?php echo isset($subtotal) ?count($subtotal):0  ;?>items) <span class="text-danger subtotal"><?php echo isset($subtotal) ?$cart->getSum($subtotal) :0; ?></span> <span>$</span></h5>
                           <button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
                       </div>
                   </div>
                </div>
                <!-- col end  -->
            </div>
        </div>
