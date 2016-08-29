<?php

$host="localhost";
$name="root";
$password="";
$db="db_telebe";
// $db1="sign-up";
$conn=mysqli_connect($host,$name,$password,$db);
// $conn1=mysqli_connect($host,$name,$password,$db1);

  if (!$conn) {
     echo "ERROR";
  }
 ?>
