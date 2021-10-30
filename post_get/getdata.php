<?php
// $email=$_GET['user_email'];
// $password=$_GET['user_password'];

// echo "your email id is $email and your password is $password";



 if(isset($_POST['login'])){
  $email=$_POST['user_email'];
  $password=$_POST['user_password'];
  
  //echo "your email id is $email and your password is $password";

  if($email==="suprava@gmail.com" && $password==="sup"){
    header("location:home.php?id=10");
  }
  else{
    echo "try again......";
  }
}

?>