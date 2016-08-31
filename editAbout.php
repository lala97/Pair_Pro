<?php
      include 'config.php';
       $id=$_GET['id'];

       $sql="SELECT `image`,`text` FROM `about` WHERE id=$id";

       $querry=mysqli_query($conn,$sql);
       $row=mysqli_fetch_assoc($querry);

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
      <script src="//cdn.ckeditor.com/4.5.10/full/ckeditor.js"></script>
    <style>
        input{
          display: block;
          padding: 10px 15px;
        }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Update a About Section</h1>
      <div class="col-md-8 col-md-offset-2">

        <form action="update.php" method="post">
          <label class="form-control-label">Image</label>
          <input size="50" class="form-control"  type="text" name="about" placeholder="Image Src" value="<?php echo $row['image'] ?>">

            <label class="form-control-label">text</label>
            <textarea name="editor1" cols="30" rows="10"></textarea>
          <script>
           CKEDITOR.replace( 'editor1' );
       </script>
          <input class="form-control"  type="hidden" name="id" value="<?php echo $id ?>" >

          <input type="submit" name="Aboutgonder" value="Update"  class="btn btn-success">
            <input type="submit" name="Aboutback" value="Back"  class="btn btn-default">
        </form>
      </div>
  </div>
  </body>
</html>
