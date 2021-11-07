<?php
session_start();
 //database connection
 $con=new mysqli("localhost","root","","emp_db");
 if($con->connect_error){
   die("something wrong in database connection.....Try again!!!!");

 }

 if(isset($_SESSION['email'])){

   $sql="select * from emp_table where id=$_SESSION[id]";

   $result=$con->query($sql);
if($result->num_rows>0){
  $data=$result->fetch_assoc();
  $empname=$data['username'];
  $email=$data['email'];
  $phone=$data['phone'];
  $designation=$data['designation'];
  $salary=$data['salary'];

}
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Your Profile</h1>
  <div>
    <span>Name:</span>
    <span><?php echo $empname;?></span>
  </div>
  <div>
    <span>Email:</span>
    <span><?php echo $email;?></span>
  </div>
  <div>
    <span>Phone NUmber:</span>
    <span><?php echo $phone;?></span>
  </div>
  <div>
    <span>Designation:</span>
    <span><?php echo $designation;?></span>
  </div>
  <div>
    <span>salary:</span>
    <span><?php echo $salary;?></span>
  </div>
  <div>
   <a href="update.php">EDIT</a>
  </div>
</body>
</html>