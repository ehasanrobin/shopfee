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
      
            <div class="row border-top py-3 mt-3">
                <div class="col-md-9">
                   <div class="row">
                    <div class="col-sm-12 d-flex">
                        
                    <img src="https://previews.123rf.com/images/freaktor/freaktor2002/freaktor200200004/139383340-vegetables-on-shopping-cart-trolley-grocery-logo-icon-design-vector.jpg" class="img-fluid" alt="empyty cart" style="height:200px;width:200px;text-align:center;">
                        <p class="font-size-30" style="font-size:50px">Empty cart</p>
                    </div>
                   </div>
                   
                   
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
