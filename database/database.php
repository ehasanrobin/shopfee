<?php

class database{

    private $dbhost = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "shopfee";

    // connection property 

    public $conn = null;


    public function __construct(){

        $this->conn = new mysqli($this->dbhost,$this->user,$this->pass,$this->dbname);

        
        if($this->conn->connect_error){
            echo "failed ".$this->conn->connect_error;
        }
       

    }


    public function __desctruct(){

        if($this-conn != null){

            $this->conn->close();

            $this->conn = null ;
        }

    }
}
