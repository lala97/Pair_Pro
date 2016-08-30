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
       header('Location:team.php');

    }
    else {
      echo "error";
     }
  }
  if (isset($_POST['back'])) {
     header('Location:team.php');
  }


  // for MENU section

  if (isset($_POST['Menugonder'])) {

    $menu=$_POST['menu'];
    $id=$_POST['id'];
    $sql="UPDATE `menu` SET `menu`='$menu'  WHERE `id`='$id'";

    $querry=mysqli_query($conn,$sql);
    if ($querry) {
       header('Location:team.php');

    }
    else {
      echo "error";
     }
  }
  if (isset($_POST['Menuback'])) {
     header('Location:team.php');
  }
 ?>
