<?php

 //database connection
 $con=new mysqli("localhost","root","","emp_db");
 if($con->connect_error){
   die("something wrong in database connection.....Try again!!!!");
 }
?>