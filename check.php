<?php
include 'config.php';
if (isset($_POST['send'])){
 session_start();
  $name=$_POST['name'];
  $password=$_POST['password'];

  if (!empty($_POST['name']) && !empty($_POST['password'])) {
      if ($name=="admin" && $password=="123") {
        
          header('Location:admin.php');
      }
      else {
        header('Location:index.php');
      }

      $sql1 = "SELECT `name` FROM `signup`";
   $query1 = mysqli_query($conn,$sql1);
   while ($row1 = mysqli_fetch_assoc($query1)) {
    if($_POST['name']==$row1['name']){
      $sql2 = "SELECT `password` FROM `signup`";
       $query2 = mysqli_query($conn,$sql2);


     while ( $row2 = mysqli_fetch_assoc($query2) ) {
            if($_POST['password']==$row2['password']){
        header('Location:index1.php');
         }
      }
   }

 }
  }
}
  else {
   header('Location:index.php');
}
?>
