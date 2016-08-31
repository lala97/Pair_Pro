<?php
session_start();
if (isset($_SESSION['admin1'])) {
  $_SESSION['adminafter']=true;
}
else {
  header('Location:index.php');
}
// unset($_SESSION['admin1']);


 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
     <style>
     table{
       margin-top:20px;
     }
     </style>
   </head>
   <body>
     <div class="container">
         <h1>Change Section</h1>
         <div class="row">
     <table  class="table table-bordered">
     <tbody>
       <tr>
         <td><h4> Section</h4></td>
         <td>
            <a href="main.php" class="btn btn-default">Next</a>
         </td>
       </tr>
       <!-- <tr>
         <td><h4>Menu Section</h4></td>
         <td>
            <a href="team.php" class="btn btn-default">Next</a>
         </td>
       </tr> -->

     </tbody>
     </table>
     <a class="btn btn-default" href="logout.php">Log Out</a>
     <?php echo "ish bitdikden sonra log out etmek meslehetdir." ?>
   </div>
 </div>
   </body>
 </html>
