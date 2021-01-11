<?php
  ob_start();

?>
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ecommerce websites</title>
    <!-- font awesome link  -->
    <link rel="stylesheet" href="./assets/css/all.min.css">
    <!-- bootsrap link  -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <!-- owl carousel link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <!-- goole font link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
     <!-- custom style  link  -->
     <link rel="stylesheet" href="./assets/css/style.css">
     <!-- responsive desgin link  -->
     <link rel="stylesheet" href="./assets/css/responsive.css">

</head>
<body>
<!-- require mysqli connection  -->
<?php
  // function include 

 include("./functions.php");



?>
   <!-- start herder  -->
   <header id="header">
    <!-- As a link -->
        <nav class="navbar navbar-light  custom-nav">
          <a class="navbar-brand text-white font-italic font-weight-bold" href="index.php">Mobile shopfee</a>
           <div class="main-menu">
                <ul>
                    <li><a href="">On Sale</a></li>
                    <li><a href="">category</a></li>
                    <li><a href="">Product <span><i class="fas fa-chevron-down    "></i><span></a></li>
                    <li><a href="">blog</a></li>
                    <li><a href="">cateogory <span><i class="fas fa-chevron-down    "></i><span></span></a></li>
                    <li><a href="">coming soon</a></li>
                </ul>
           </div>
           <form action="">
             <a href="cart.php" class="text-white rounded-pill text-decoration-none px-2 border bg-dark m-0">
               <span><i class="fas fa-shopping-cart  text-white  "></i></span>
               <span class=" px-3  text-dark bg-white rounded-pill"><?php echo count($product->getdata($table= 'cart')) ;?></span>
             </a>
           </form>

         </nav>
         

    </header>
   <!-- end header  -->