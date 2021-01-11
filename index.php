
<?php
 
 


// header include start 
include("./header.php");
ob_start();
// header include end

?>

   <!-- main content start  -->
    
     <!-- banner include  -->
     <?php include("./includes/banner.php");?>
      
       <!-- top sale section start  -->
       <?php include("./includes/topsale.php");?>
       <!-- top sale section end  -->

       <!-- special price start   -->
       <?php include("./includes/special-price.php");?>
       <!-- special price end   -->

       <!-- top sale section start  -->
       <?php include("./includes/banner-adds.php");?>
       <!-- top sale section end  -->
       <!-- new phones  -->
       <?php include("./includes/new-phones.php");?>
       <!-- new phones  -->

        <!-- leatest blog section start  -->
        <?php include("./includes/leatest-blog.php");?>
  
    <!-- leatest blog section end  -->

   <!-- main content end  -->
   <!-- footer start  -->


    <?php
    
    include("./footer.php");
   ob_end_flush();
    ?>
 
   <!-- footer  start  -->

    


 