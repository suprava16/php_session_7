<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Registration form</h1>
  <?php

if(isset($_GET['msg'])){
 if($_GET['msg']==="success"){
   echo "<h3 style='color:red'>successfully data inserted</h3>";
 }
}
 
 ?>
  <form action="insert_data.php" method="post">
    <input type="text" name="username" placeholder="enter username"><br/>
    <input type="email" name="email" placeholder="enter email"><br/>
    <input type="text" name="phone" placeholder="enter phone no"><br/>
    <input type="text" name="address" placeholder="enter address"><br/>
    <input type="text" name="designation" placeholder="enter designation"><br/>
    <input type="text" name="salary" placeholder="enter salary"><br/>
    <input type="password" name="password" placeholder="enter password"><br/>
    <button type="submit" name="register">REGISTER</button>
  </form>


</body>
</html>