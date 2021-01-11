<?php

  $item_id = $_REQUEST["item_id"] ?? 1;

  $products = $product->getdata($table = "product");
  $product_shuffle = $product->getdata($table = "product");

$in_cart =  $cart->getInCart($product->getdata($table = 'cart'));

  if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(isset($_REQUEST["products_btn"])){
  
  
        $item_id = $_REQUEST["item_id"];
       $user_id = $_REQUEST["user_id"];
    
       // call method add to cart
       $cart->addToCart($user_id , $item_id, $table = "cart");
    }
    
  
  }

  foreach($products as $item){

 if($item["item_id"] == $item_id){


?>
<section id="product">

            <div class="container ">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <img src="<?php echo $item["item_img"] ?? "unknown" ;?>" alt="">
                        <div class="form-row">
                            <div class="col">
                                <button type="submit" class="btn btn-danger form-control">Proceed to Pay</button>
                            </div>
                            <div class="col">
                            <form action="<?php $_SERVER["PHP_SELF"];?>" method="post">
                   <input type="hidden" value="<?php echo $item["item_id"] ;?>" name="item_id">
                   <input type="hidden" value="<?php echo 1 ;?>" name="user_id">
                   <?php 
                     if(in_array( $item["item_id"] ,$in_cart ?? [] )){

                      echo '<button type="submit" class="btn btn-success btn-block" disabled>add to cart</button>';
                     }else{
                        echo ' <button type="submit" name="products_btn" class="btn btn-warning btn-block  ">add to cart</button>';
                     }

                   ?>
                   </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-4">
                        <h5><?php echo $item["item_name"] ?? "unknown" ;?></h5>
                        <small>by <?php echo $item["item_brand"] ?? "unknown" ;?></small>
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
                        <hr>
                        <!-- price section  -->
                        <table class="my-3">
                            <tr>
                                <td>M.R.P</td>
                                <td class="px-3"><strike>162.00</strike>$</td>
                            </tr>
                            <tr>
                                <td>Deal Price</td>
                                <td class="px-3 text-danger"><span class=""><?php echo $item["item_price"] ?? "unknown" ;?></span>$ <span class="text-dark"> Include Of All Tasex</span></td>
                            </tr>
                            <tr>
                                <td>You Save</td>
                                <td class="px-3 "><span class="">10.00</span>$ <span class="text-dark"> Include Of All Tasex</span></td>
                            </tr>
                        </table>
                      
                        <!-- price section  -->
                        <!-- policy section  -->
                        <div id="policy ">
                            <div class="d-flex">
                                <div class="return text-center px-2">
                                  <div class="border bg-white border rounded-pill p-2 text-primary text-20">
                                    <span class="fas fa-retweet rounded-pill"><i class="    "></i></span>
                                  </div>
                                    <a href=""class="d-block">10 days <br> replacement</a>
                                </div>
                                <div class="return text-center px-2">
                                  <div class="border bg-white border rounded-pill p-2 text-primary text-20">
                                    <span class="fas fa-truck rounded-pill"></span>
                                  </div>
                                    <a href=""class="d-block">daily tution <br> Delivered</a>
                                </div>
                                <div class="return text-center px-2">
                                  <div class="border bg-white border rounded-pill p-2 text-primary text-20">
                                    <span class="fas fa-check-double rounded-pill"></span>
                                  </div>
                                    <a href=""class="d-block">1 year <br> warentee</a>
                                </div>
                                
                               
                            </div>
                        </div>
                        <!-- policy se  ction  -->
                        <hr>
                        <!-- order detail  -->
                        <div id="order-details" class="d-flex flex-column text-dark">
                            <small>delivery by:mar29 - april 1</small>
                            <small>Sold by <a href="">Daily electronics</a> 5 out of 10</small>
                            <small><i class="fas fa-map-marker-alt  text-primary  "></i> deliver to  custoomer: 25421</small>
                        </div>


                        <!-- order detail  -->
                        <!-- order color section  -->
                        <div class="row">
                          <div class="col-md-6">
                            <!-- color  -->
                            <div class="color my-3">
                             <div class="d-flex justify-content-between">
                              <h6>color</h6>
                              <div class="p-2 bg-warning rounded-circle"> <button class="btn "></button></div>
                              <div class="p-2 bg-primary rounded-circle"> <button class="btn "></button></div>
                              <div class="p-2 bg-dark rounded-circle"> <button class="btn "></button></div>
                             </div>
                            </div>
                            <!-- color  -->
                          </div>
                          <div class="col-md-6">
                            <div class="qty">
                                <h6>qty:</h6>
                                <div class="px4 d-flex">
                                  <button data-id="pro1" class="qty-up border bg-light"><i class="fas fa-angle-up    "></i></button>
                                  <input data-id="pro1" type="text" class="w-50 qty-input bg-light border px-2" placeholder="1" value="1" disabled>
                                  <button data-id="pro1"  class="qty-down border bg-light"><i class="fas fa-angle-down    "></i></button>
                                </div>
                            </div>
                          </div>
                        </div>

                        <!-- order color section  -->
                        <!-- ram section  -->
                        <div class="size d-flex my-3">
                          <h6>size:</h6>
                        </div>
                       
                        <div class="d-flex justify-content-between w-75">
                            <div class="border">
                              <button class="btn "> 4gb ram</button>
                            </div>
                            <div class="border">
                              <button class="btn "> 6gb ram</button>
                            </div>
                            <div class="border">
                              <button class="btn "> 8gb ram</button>
                            </div>
                           
                        </div>
                        <!-- ram section  -->

                        
                    </div>
                    <div class="col-12 mt-5">
                      <div class="product-desc">
                        <h6>product description</h6>
                        <hr>
                          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro, perferendis quas? Eos doloremque quisquam, eius consequuntur numquam illum. Soluta cum magni numquam qui libero blanditiis vel tempore veritatis. Rerum nulla similique praesentium delectus odio itaque
                             dolore, ex, possimus omnis eos quis nobis tempore atque minima quos? Veniam quaerat officia aliquam?</p>
                      </div>
                    </div>
                </div>
                
            </div>
            

        </section>
        <?php
        }
      }
        
                        
                        
                        ?>