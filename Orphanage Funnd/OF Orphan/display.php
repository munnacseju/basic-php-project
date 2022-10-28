<?php

$conn=mysqli_connect('localhost','root', '','of') or die('db not connected');

$sql= "SELECT* FROM orphan";
$result= mysqli_query($conn,$sql);
$totalPrice = 0;
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width" initial-scale=1>
	<title>Data Table</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">

	



</head>


<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center text-uppercase text-info">data table</h1>
		
</div>
	<div class="row text-center m-auto" >
		<div class="col-md-12">


			<table class="table table-bordered text-center table-dark table-hover table-striped">
				<thead>
					<th class="text-uppercase text-info">Name</th>
					<th class="text-uppercase text-info">Phone Number</th>
					<th class="text-uppercase text-info">Address</th>
					<th class="text-uppercase text-info">Donation Amount</th>
					<th class="text-uppercase text-info">Sort Comment</th>
				</thead>
				<tbody>
					<?php while ($row=mysqli_fetch_assoc($result)){

						$totalPrice += $row['amount']+0;
						?>
					    <tr>
					    <td> <?php echo $row ['name'] ?> </td>
					    <td> <?php echo $row ['phone']?></td>
					    <td> <?php echo $row ['address'] ?></td>
					    <td> <?php echo $row ['amount']  ?> </td>
					    <td> <?php echo $row ['comment'] ?> </td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
			<h2 class="m-auto text-center border border-dark bg-success text-light">
				<?php
				echo "Total Price: ";
				echo $totalPrice;
				echo "tk";
				?>
			</h2>
			<a class="btn btn-danger mt-4" href="index.php"> Go Back</a>





		</div>
	</div>
</div>


	
</body>
</html>