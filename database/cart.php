<?php


class cart{

    public $db = null ; 


    public function __construct(database $db){

        if(!isset($db->conn))return null; 

        $this->db = $db ; 


    }

    // insert into cart table

    public function insertIntoCart($params = null,$table){

        if($this->db->conn != null){
            if($params != null){

                $collumns = implode(",",array_keys($params));
                $values = implode(",",array_values($params));


                $sql = "INSERT INTO {$table} ($collumns) VALUES ($values)";

                $result =  $this->db->conn->query($sql);

                if($result){
                    // reload page
                    header("location:". $_SERVER["PHP_SELF"]);
    
                }


            }
        }
    }

    // to get user_id and item_id to insert in cart

    public function addToCart($user_id ,$item_id , $table){

        if(isset($user_id ) && isset($item_id)){

            $params = array(
                "user_id" => $user_id,
                "item_id" => $item_id,
            );

            $result = $this->insertIntoCart($params,$table);
            // insert data into cart 
            if($result){
                // reload page
                header("location: cart.php");

            }
        }

    }

    // delete from cart 

    public function delete_cart($item_id = null , $table){

        if($item_id != null){

            $sql = "DELETE FROM {$table} WHERE item_id = {$item_id}";

        $result=  $this->db->conn->query($sql);

                if($result == true){
                    header("location:". $_SERVER["PHP_SELF"]);
                }
                return $result;
        }


    }
    // get item id og shopping card list

    public function getInCart($cart_array = null,$key = "item_id"){

        if($cart_array != null){

            $cart_id = array_map(function($value) use($key){

                return $value[$key];
            },$cart_array);
                return $cart_id;

        }

    }


    // calculate sub total

    public function getSum($arr){


        if(isset($arr)){

            $sum = 0;
            foreach ($arr as $key){

                $sum += floatval($key[0]);
                
            }
            return sprintf($sum);
        }
        
    }

    // add to wishlist 

    public function wishlist($item_id = null,$table = "wishlist",$formtable = "cart"){

        $sql = "INSERT INTO {$table} SELECT * FROM {$formtable} WHERE item_id = {$item_id};";
        $sql .= " DELETE FROM {$formtable} WHERE item_id = {$item_id};";
        echo $sql;
        $result = $this->db->conn->multi_query($sql);

        if($result == true){ 
            header("location:" . $_SERVER["PHP_SELF"]);
        }
        return $result;
    }


}