<?php
class Dbconnect 
{
   public function __construct()
   {
      $conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
      if($conn->connect_error)
      {
         die("<h1> Connection fail</h1>");
      }
      //echo "db connected with success";
      return $this->conn =$conn;
   }  
    

}
?>