<?php

session_start();


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width" initial-scale=1>
	<title>Registration</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	
<div class="container ">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center text-uppercase text-info">Registration Form</h1>
		
	</div>
</div>
	<div class="row text-center" >
		<div class="col-md-12">

			<?php
			if(isset($_SESSION['message']))
			{?>
				<div class="alert alert-success">
					Congrats!!Your registration is successful.....
				</div>

			<?php }
			?>








		<form action="storeReg.php" method="post">
			<div class="form-group">
				<label for=""></label>
				<input class="form-control" name="phone" type="phone" required="required" placeholder="Enter your Phone Number ">
			</div>
			<div class="form-group">
				<label for=""></label>
				<input class="form-control" name="name" type="text" required="required" placeholder="Enter Your Name">
			</div>
			<div class="form-group">
				<label for=""></label>
				<input class="form-control" name="amount" type="Number" required="required" placeholder="Enter Donation Amount">
			</div>
			<div class="form-group">
				<label for=""></label>
				<input class="form-control" name="address" required="required" type="text" placeholder="Enter Your Address">
			</div>
			<div class="form-group">
				<label for=""></label>
				<input class="form-control" name="comment" type="text" placeholder="Enuter Your Comment">
			</div>
			
			
			<input class="btn btn-outline-info" type="submit" value="registration">
		</form>
		<a class="btn btn-dark mt-4" href="display.php">Back</a>

	</div>
	</div>
</div>


	<script src="js/jquery-3.5.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>


	<?php
	unset($_SESSION['message']);
	?>
</body>
</html>