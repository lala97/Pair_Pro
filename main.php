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
     	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
     <style>
     .create{
       background: green;
       border-radius:5px;
       color:white;
       padding: 10px 15px;
     }
     .update{
       background: green;
     color: white;
     background: green;
       color: white;
       padding: 5px 10px;
       border-radius: 5px;

     }
     table{
       margin-top:20px;
     }

     td{
       height: 40px;
       width: 150px;
     }

     </style>
   </head>
   <body>
     <div class="container">
         <h1>Change Team Section</h1>
         <div class="row">
     <table  class="table table-bordered">
       <thead>
       <tr>
         <td><b>image<b></td>
          <td><b>text</b></td>
          <td><b>Action</b></td>
       </tr>

     </thead>

     <tbody>
       <?php
       include 'config.php';
       $sql="SELECT * FROM telebe";
       $querry=mysqli_query($conn,$sql);
       if ($querry) {
          while($row=mysqli_fetch_assoc($querry)){  ?>
            <tr>
            <?php

            echo "<td><img class='img-responsive' src='".$row['src']."'></td>";
            echo "<td>" .$row['text']. "</td>";
        ?>
         <td>
           <a href="teamEdit.php?id=<?php echo $row['id']?>" class="btn btn-success">Update</a>
            <a href="deleteTeam.php?id=<?php echo $row['id']?>" class="btn btn-danger">DELETE</a>
         </td>
          </tr>
       <?php  }

       }
     ?>
       <a href="createTeam.php?id=<?php echo $row['id']?>" class="create">Create</a>
     </tbody>
     </table>
   </div>
 </div>
<br><br><br><br>

<div class="container">
    <h1>Change Menu Section</h1>
    <div class="row">
<table  class="table table-bordered">
  <thead>
  <tr>
     <td><b>Menu</b></td>
      <td><b>Action</b></td>
  </tr>
</thead>
<tbody>
  <?php
  include 'config.php';
  $sql="SELECT * FROM menu";
  $querry=mysqli_query($conn,$sql);
  if ($querry) {
     while($row=mysqli_fetch_assoc($querry)){  ?>
       <tr>
       <?php


        echo "<td>" .$row['menu']. "</td>";

   ?>
    <td>
      <a href="editMenu.php?id=<?php echo $row['id']?>" class="btn btn-success">Update</a>
       <a href="deleteMenu.php?id=<?php echo $row['id']?>" class="btn btn-danger">Delete</a>
    </td>
     </tr>
  <?php  }

  }
?>
  <a href="createMenu.php?id=<?php echo $row['id']?>" class="create">Create</a>
</tbody>
</table>
</div>
</div>

<div class="container">
    <h1>Change About Section</h1>
    <div class="row">
<table  class="table table-bordered">
  <thead>
  <tr>
     <td><b>Image</b></td>
      <td><b>Text</b></td>
      <td><b>Action</b></td>
  </tr>
</thead>
<tbody>
  <?php
  include 'config.php';
  $sql="SELECT * FROM about";
  $querry=mysqli_query($conn,$sql);
  if ($querry) {
     while($row=mysqli_fetch_assoc($querry)){  ?>
       <tr>
       <?php

        echo "<td><img class='img-responsive' src='".$row['image']."'></td>";
        echo "<td>" .$row['text']. "</td>";

   ?>
    <td>
      <a href="editAbout.php?id=<?php echo $row['id']?>" class="btn btn-success">Update</a>
       <a href="deleteAbout.php?id=<?php echo $row['id']?>" class="btn btn-danger">Delete</a>
    </td>
     </tr>
  <?php  }

  }
?>
  <a href="aboutCreate.php" class="create">Create</a>
</tbody>
</table>
</div>
</div>




   </body>
 </html>
