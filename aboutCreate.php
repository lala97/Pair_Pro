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
    <script src="//cdn.ckeditor.com/4.5.10/standard/ckeditor.js"></script>
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
      <h1>Create a About</h1>
      <form action="aboutCreate.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <!-- <input type="text" name="editor1" placeholder="text" size="50"> -->
          <textarea name="editor1" cols="30" rows="10"></textarea>
        <script>
         CKEDITOR.replace( 'editor1' );
     </script>
        <input type="submit" class="submit" name="gonder" value="Gonder">
      </form>
    </div>


      <?php
       if (isset($_POST['gonder'])) {
         include 'config.php';

         $src =  "img/" . basename($_FILES["image"]["name"]);
         $metn=$_POST['editor1'];

         $sql="INSERT INTO about(`image`, `text`) VALUES ('$src', '$metn')";
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
