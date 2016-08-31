<?php
session_start();
if ($_SESSION['adminafter']) {


}
else {
  header('Location:index.php');
}
// unset($_SESSION['adminafter']);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        input{
          display: block;
          padding: 10px 15px;
          margin-bottom:20px;
        }
        .submit{
          background: green;
          border-radius:5px;
          color:white;
          float:left;
        }
        .back{
          background: white;
          color:black;
          border-radius:5px;
        }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Create a Menu</h1>
      <form action="createMenu.php" method="post">

        <input type="text" name="menu" placeholder="text">
        <input type="submit" class="submit" name="gonder" value="Gonder">
      </form>
    </div>


      <?php
       if (isset($_POST['gonder'])) {
         include 'config.php';


         $menu=$_POST['menu'];

         $sql="INSERT INTO menu(`menu`) VALUES ('$menu')";
         $querry=mysqli_query($conn,$sql);
         if ($querry) {
           header('Location:main.php');
         }
         else {
           echo "QOWULMUR";
         }
       }

       ?>
  </body>
</html>
