<?php
 // session_start();
 // if ($_SESSION['signUp']==true) {
 //    headesr('Location:index1.php');
 //
 // }

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <title></title>
    <style type="text/css">
		body{
			color: #7F8FA4;
		}
		.col-md-4{
			padding: 20px 50px;
			background-color: white;
		}
		img{
			border: 1px solid lightgrey;
		}
    section{
      background-image:url("img/background.jpg");
      height: 52em;
    }
	</style>
  </head>
  <body>
    <section>
	<div class="container text-center">
		<div class="col-md-4 col-md-offset-4">
		<img class="img-circle" src="img/1.png">
			 <h3 class="title">Login</h3>
			 <p>Sign in to your account</p>
			 <br>
			 <br>

              <form action="check.php" id="contactform" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                     <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                        <input type='submit' class="btn btn-success" name="send" value="Send">
          </form>


          <form  action="signUp.php">
                <input type='submit' class="btn btn-success" name="sign" value="Sign Up">
          </form>
		</div>
	</div>
</section>
</body>
</html>
