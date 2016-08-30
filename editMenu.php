<?php
      include 'config.php';
       $id=$_GET['id'];

       $sql="SELECT `menu` FROM `menu` WHERE id=$id";

       $querry=mysqli_query($conn,$sql);
       $row=mysqli_fetch_assoc($querry);

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <style>
        input{
          display: block;
          padding: 10px 15px;
        }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Update a Menu Section</h1>
      <div class="col-md-4 col-md-offset-3">
        <form action="update.php" method="post">
          <label class="form-control-label">Menu</label>
          <input class="form-control"  type="text" name="menu" placeholder="Menu" value="<?php echo $row['menu'] ?>">

          <input class="form-control"  type="hidden" name="id" value="<?php echo $id ?>" >


           <input type="submit" name="Menugonder" value="Update"  class="btn btn-success">
            <input type="submit" name="Menuback" value="Back"  class="btn btn-default">
        </form>
      </div>
  </div>
  </body>
</html>
