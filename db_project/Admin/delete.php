<?php
include "dbconfig.php";
$id=$_GET['uid'];
echo "id=$id";

$qry="delete from emp_table where id=$id";
if($con->query($qry)){
  header("location:employee_list.php");
}
else{
  echo "data not found";
}
?>