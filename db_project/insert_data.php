<?php

if(isset($_POST['register'])){
  $name=$_POST['username'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];
  $designation=$_POST['designation'];
  $salary=$_POST['salary'];
  $password=$_POST['password'];

//database connection
$con=new mysqli("localhost","root","","emp_db");
if($con->connect_error){
  die("something wrong in database connection.....Try again!!!!");
}

//inserting data into table
$sql="insert into emp_table values(0,'$name','$email','$phone','$address','$designation',$salary,'$password')";
  if($con->query($sql)){
//   ?>
// <script>
//   alert("successfully data inserted");
// </script>
// <?php
header("location:registration.php?msg=success");
  }
  else{
    echo "something wrong .....try again";
  }
}
?>
