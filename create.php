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
      <h1>Create a Customer</h1>
      <form action="create.php" method="post" enctype="multipart/form-data">
        <input type="file" name="ad">
        <input type="text" name="metn" placeholder="text">
        <input type="submit" class="submit" name="gonder" value="Gonder">
      </form>
    </div>


      <?php
       if (isset($_POST['gonder'])) {
         include 'config.php';

         $src =  "img/" . basename($_FILES["ad"]["name"]);
         $metn=$_POST['metn'];

         $sql="INSERT INTO telebe(`src`, `text`) VALUES ('$src', '$metn')";
         $querry=mysqli_query($conn,$sql);
         if ($querry) {
           header('Location:admin.php');
         }
         else {
           echo "QOWULMUR";
         }
       }

       ?>
  </body>
</html>
