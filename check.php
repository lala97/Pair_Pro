<?php
include 'config.php';
if (isset($_POST['send'])){
 session_start();
  $name=$_POST['name'];
  $password=$_POST['password'];

  if (!empty($_POST['name']) && !empty($_POST['password'])) {
      if ($name=="admin" && $password=="123") {
        $_SESSION['admin1']=true;
          header('Location:admin.php');
      }
      else {
        header('Location:index.php');
      }

 $sql1 = "SELECT * FROM `signup` WHERE name='$name'";
     $query1 = mysqli_query($conn,$sql1);

     $row1 = mysqli_fetch_assoc($query1);

     if($name==$row1['name']){
          $sql2 = "SELECT `password` FROM `signup`  WHERE password = '$password'";

           $query2 = mysqli_query($conn,$sql2);


            $row2 = mysqli_fetch_assoc($query2);
             if($_POST['password']==$row2['password']){
                 $_SESSION['singUp']="nese";
                  header('Location:index1.php');

        }
     }
     else{
        // header('Location:index.php');
     }
  }
}
  else {
   header('Location:index.php');
}
?>
