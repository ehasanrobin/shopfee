
<?php ob_start(); include("./header.php");?>
 
   <!-- end header  -->
   <!-- end header  -->

   <!-- main content start  -->
   
  <!-- include cart  -->
 <?php  count($product->getdata($table ='cart')) ?  include("./includes/__cart.php") : include("./not found/__cart.php")  ?>
  <?php;?>
  <!-- include cart  -->

  <!-- include cart  -->
  <?php  count($product->getdata($table ='wishlist')) ?  include("./includes/__wishList.php") : include("./not found/__wishlist.php")  ?>
  
  <!-- include cart  -->


    <!-- new phones carousel  -->
     <!-- new phones  -->
     <?php include("./includes/new-phones.php");?>
       <!-- new phones  -->
    <!-- leatest blog section end  -->

   <!-- main content end  -->
   <!-- footer start  -->
   <?php
    include("./footer.php");
    
    ?>