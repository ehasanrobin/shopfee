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
                   
                    <div class="row border-top py-3">
                    <img src="https://previews.123rf.com/images/freaktor/freaktor2002/freaktor200200004/139383340-vegetables-on-shopping-cart-trolley-grocery-logo-icon-design-vector.jpg" class="img-fluid" alt="empyty cart" style="height:200px;width:200px;text-align:center;">
                        <p class="font-size-30" style="font-size:50px">Empty wishlist</p>
                       
                    </div>
                 
                   
                </div> 
                <!-- col end -->
               
                <!-- col end  -->
            </div>
        </div>
