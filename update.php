<?php
  include 'config.php';
  // for TEAM section
  if (isset($_POST['gonder'])) {
    $image=$_POST['src'];
    $metn=$_POST['text'];
    $id=$_POST['id'];
    $sql="UPDATE `telebe` SET `src`='$image', `text`='$metn'  WHERE `id`='$id'";

    $querry=mysqli_query($conn,$sql);
    if ($querry) {
       header('Location:main.php');

    }
    else {
      echo "error";
     }
  }
  if (isset($_POST['back'])) {
     header('Location:main.php');
  }


  // for MENU section

  if (isset($_POST['Menugonder'])) {

    $menu=$_POST['menu'];
    $id=$_POST['id'];
    $sql="UPDATE `menu` SET `menu`='$menu'  WHERE `id`='$id'";

    $querry=mysqli_query($conn,$sql);
    if ($querry) {
       header('Location:main.php');

    }
    else {
      echo "error";
     }
  }
  if (isset($_POST['Menuback'])) {
     header('Location:main.php');
  }



  //for ABOUT section

  if (isset($_POST['Aboutgonder'])) {

    $image=$_POST['about'];
    $text=$_POST['text'];
    $id=$_POST['id'];
    $sql="UPDATE `about` SET `image`='$image', `text`=`$text`  WHERE `id`='$id'";

    $querry=mysqli_query($conn,$sql);
    if ($querry) {
       header('Location:main.php');

    }
    else {
      echo "error";
     }
  }
  if (isset($_POST['Aboutback'])) {
     header('Location:main.php');
  }



 ?>
