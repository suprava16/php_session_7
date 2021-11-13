
<?php
include "dbconfig.php";
if(isset($_POST['login'])){
  $email=$_POST['email'];
  $password=$_POST['password'];
  
  
  $qry="select * from admin_table where email='$email' and password='$password'";
  $result=$con->query($qry);
  if($result->num_rows>0){
    $data=$result->fetch_assoc();
    session_start();
    $_SESSION['email']=$data['email'];
  header("location:adminhome.php");
  }
  else{
    echo "no data available in admin database";
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
  <h1>Admin Login form</h1>
  <form action="" method="post">
  <input type="email" placeholder="enter email" name="email">
  <input type="password" placeholder="enter password" name="password">
  <input type="submit" value="Admin submit" name="login">
  </form>
</body>
</html>