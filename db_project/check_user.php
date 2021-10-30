<?php
if(isset($_POST['login'])){
  $email=$_POST['email'];
  $password=$_POST['password'];


  //database connection
$con=new mysqli("localhost","root","","emp_db");
if($con->connect_error){
  die("something wrong in database connection.....Try again!!!!");
}

$sql="select * from emp_table where email='$email' and password='$password'";

$result=$con->query($sql);
if($result->num_rows>0){
  $data=$result->fetch_assoc();
  $email=$data['email'];
  // echo "$email";
  header("location:home.php");

}

}


?>