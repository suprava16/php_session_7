<?php
session_start();
$email=$_SESSION['email'];
echo "welcome to home $email";
?>
<br/><br/>
<a href="profile.php">Profile</a>
<a href="logout.php">Logout</a>