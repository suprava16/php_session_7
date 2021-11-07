<?php
include "dbconfig.php";

session_start();
if(isset($_POST['update'])){
  $empname=$_POST['username'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];
  $designation=$_POST['designation'];
  $salary=$_POST['salary'];


$sql="update emp_table set username='$empname',email='$email',phone='$phone',address='$address',designation='$designation',salary=$salary";
if($con->query($sql)){
  header("location:profile.php");
}
else{
  echo "user not found";
}
}

$sql="select * from emp_table where id=$_SESSION[id]";
$result=$con->query($sql);
if($result->num_rows>0){
  $data=$result->fetch_assoc();
  $empname=$data['username'];
  $email=$data['email'];
  $phone=$data['phone'];
  $address=$data['address'];
  $designation=$data['designation'];
  $salary=$data['salary'];
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
<h1>Update form</h1>
  <form action="" method="post">
    <input type="text" name="username" value="<?php echo $empname; ?>"><br/>
    <input type="email" name="email" value="<?php echo $email ;?>"><br/>
    <input type="text" name="phone" value="<?php echo $phone; ?>"><br/>
    <input type="text" name="address" value="<?php echo $address; ?>"><br/>
    <input type="text" name="designation" value="<?php echo $designation; ?>"><br/>
    <input type="text" name="salary" value="<?php echo $salary; ?>"><br/>
    <button type="submit" name="update">UPDATE</button>
  </form>
</body>
</html>