$(document).ready(function(){

    $(' #top-sale .owl-carousel').owlCarousel({
      loop:true, 
      dots:false,
      nav:true,
      responsive:{
        0:{
          items:2
        },
        768:{
          items:4
        }
      }
    
    });
    // isotop filter 
        var items =   $('.grid').isotope({
          // options
          itemSelector: '.grid-item',
          layoutMode: 'fitRows'
        });
        // filter items 
        $(".button-group").on("click","button",function(){
  
          let filterValue = $(this).attr("data-filter");
          items.isotope({filter: filterValue});
        })
        $(' #new-phones .owl-carousel').owlCarousel({
            loop:true, 
            dots:true,
            nav:false,
            responsive:{
              0:{
                items:6
              },
              768:{
                items:4
              }
            }
          
          });
          //letest model 
          $(' #letest-blog .owl-carousel').owlCarousel({
            loop:true, 
            dots:true,
            nav:false,
            responsive:{
              0:{
                items:2
              },
              768:{
                items:3
              }
            }
          
          });



        let $upKey = $(".qty .qty-up");
        let $upDown = $(".qty .qty-down");
        // let $Input = $(".qty .qty-input");
          // quality up
        $upKey.click(function(){
          let $Input = $(`.qty-input[data-id='${$(this).data("id")}']`);

          let $price = $(`.product_price[data-id = '${$(this).data("id")}']`);
          let $input = $(`.qty-input[data-id = '${$(this).data("id")}']`);
          let $dealPrice = $(".subtotal");
          
          // ajax  using change price of the cart
          
           $.ajax({
             url: "../shopfee2/includes/ajax.php",
             type: "post",
             data: {itemId: $(this).data("id")},
             success: function(result){
                
              let obj = JSON.parse(result);
              let item_price = obj[0]["item_price"];

              
              
          if($Input.val() > 0 && $Input.val() < 9){
          
            $Input.val(function(i , data){

              return ++ data;
            });

            let  $subtotalprice = parseInt($dealPrice.text()) + parseInt(item_price);
            console.log($subtotalprice);

            $dealPrice.text($subtotalprice);
          };

             // price increasing

             $price.text(parseInt(item_price * $input.val()).toFixed());
             

             //subtotal price

           

             




             }

          
             
             

          
             
            

            
            
           });//closing ajax


          
         
          
        });
        //quantity down
        $upDown.click(function(){
          $Input = $(`.qty-input[data-id='${$(this).data("id")}']`);
          
          let $price = $(`.product_price[data-id = '${$(this).data("id")}']`);
          let $input = $(`.qty-input[data-id = '${$(this).data("id")}']`);
          let $dealPrice = $(".subtotal");
          

          $.ajax({
            url: "../shopfee2/includes/ajax.php",
            type: "post",
            data: {itemId: $(this).data("id")},
            success: function(result){
               
             let obj = JSON.parse(result);
             let item_price = obj[0]["item_price"];

             
             
             if($Input.val() > 1 && $Input.val() <= 9){

              $Input.val(function(i , data){
  
                return -- data;
              });
              let  $subtotalprice = parseInt($dealPrice.text()) - parseInt(item_price);
              console.log($subtotalprice);
   
              $dealPrice.text($subtotalprice);
            }

            // price increasing

            $price.text(parseInt(item_price * $input.val()).toFixed());
            

            //subtotal price

          

            




            }

         
            
            

         
            
           

           
           
          });//closing ajax
          
          
          
        });
  });

