<?php
      include 'config.php';
       $id=$_GET['id'];

       $sql="SELECT `src`,`text` FROM `telebe` WHERE id=$id";

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
      <h1>Update a Team Section</h1>
      <div class="col-md-4 col-md-offset-3">
        <form action="update.php" method="post">
          <label class="form-control-label">Image</label>
          <input class="form-control"  type="text" name="src" placeholder="Image Src" value="<?php echo $row['src'] ?>">
            <label class="form-control-label">text</label>
          <input class="form-control"  type="text" name="text" placeholder="Text" value="<?php echo $row['text'] ?>">
          <input class="form-control"  type="hidden" name="id" value="<?php echo $id ?>" >
          
          <input type="submit" name="gonder" value="Update"  class="btn btn-success">
            <input type="submit" name="back" value="Back"  class="btn btn-default">
        </form>
      </div>
  </div>
  </body>
</html>
