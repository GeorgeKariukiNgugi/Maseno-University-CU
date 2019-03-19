<?php
      class database{
   // DATABASE CONNECTIVITY.
   public $conn = null;
   function connect(){
	    $this->conn = new MySQLi('Localhost:3308','root','7205','masenocu');
   
   if($this->conn -> connect_error){	   
	   die($this->conn -> connect_error);	   
   }
   }
	  }
?>