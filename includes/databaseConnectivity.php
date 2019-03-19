<?php
   DEFINE('HOST','Localhost:3308');
   DEFINE('USER','root');
   DEFINE('PASSWORD','7205');
   DEFINE('DATABASE','masenocu');
   $conn = null;
   // DATABASE CONNECTIVITY.
   $conn = new MySQLi(HOST,USER,PASSWORD,DATABASE);
   
   if($conn -> connect_error){	   
	   die($conn -> connect_error);	   
   }
   
?>