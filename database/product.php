<?php


class product{

    public $db = null ; 


    public function __construct(database $db){

        if(!isset($db->conn)) return null; 
        
        $this->db = $db ; 


    }
    // fetch profuct from databaase 

    public function getdata($table){

      $result =   $this->db->conn->query("SELECT * FROM {$table}");

      $resultArray = array();

        while( $item = mysqli_fetch_array($result,MYSQLI_ASSOC)){

            $resultArray[] = $item;
        }

        return $resultArray;

    }

    public function getProduct($item_id = null,$table){

        $result =   $this->db->conn->query("SELECT * FROM {$table} WHERE item_id='{$item_id}'");
  
        $resultArray = array();
  
          while( $item = mysqli_fetch_array($result,MYSQLI_ASSOC)){
  
              $resultArray[] = $item;
          }
  
          return $resultArray;
  
      }

}