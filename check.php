<?php if (isset($_POST['send'])){
 session_start();
  $name=$_POST['name'];
  $password=$_POST['password'];

  if (!empty($_POST['name']) && !empty($_POST['password'])) {
      if ($name=="admin" && $password=="123") {
          $_SESSION['login']=true;
          header('Location:admin.php');
      }
      else {
        header('Location:index.php');
      }
  }
  else {

     header('Location:index.php');
  }
}
  else {
   header('Location:index.php');
}
//   $sql1 = "SELECT * FROM `sign-up`";
// $query1 = mysqli_query($conn,$sql1);
// $row1 = mysqli_fetch_assoc($query1);
// // print_r($row1);
//
// if($_POST['name']==$row1['name'] && $_POST['password']==$row1['password']){
//     $_SESSION['signUp']=true;
//   header('Location:index1.php');
// }else{
//   header('Location:index1.php');
// }
// }
// else {
//   header('Location:index.php');
// }
