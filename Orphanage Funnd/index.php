<?php

$conn=mysqli_connect('localhost','root', '','of') or die('db not connected');

$sqlDonor= "SELECT* FROM donor";
$result= mysqli_query($conn,$sqlDonor);
$totalPrice = 0;
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width" initial-scale=1>
	<title> Data Table</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">

	



</head>


<body>
<div class="container ">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center text-uppercase text-info">Donor's data table</h1>

		
</div>
	<div class="row text-center m-auto" >
		<div class="col-md-12 bg-primary p-2">
			<img class="img-thumbnail w-100" src="./image/orphan.jpg">


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
			<h2 class="m-auto text-center border border-dark bg-light text-dark">
				<?php
				echo "Total: ";
				echo $totalPrice;
				echo "tk";
				?>
			</h2>


		</div>
	</div>
</div>






<?php


$sqlOrphan= "SELECT* FROM orphan";
$result= mysqli_query($conn,$sqlOrphan);
$totalOrphan = 0;
?>


<div class="container">
	<div class="row mt-5">
		<div class="col-md-12">

			<h1 class="text-center text-uppercase text-info">Orphon's data table</h1>
		
</div>
	<div class="row text-center m-auto" >
		<div class="col-md-12 bg-success p-2">
			<img class="img-thumbnail w-100" src="./image/orphan.jpg">


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

						$totalOrphan += $row['amount']+0;
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
			<h2 class="m-auto text-center border border-dark bg-light text-dark">
				<?php
				echo "Total: ";
				echo $totalOrphan;
				echo "tk";
				?>
			</h2>







		</div>
	</div>

	<div class="container text-center m-3 mx-5">
		<div class="container">
			<h2 class="m-auto text-center mt-2 text-dark">
				<?php
				echo "Available Fund: ";
				echo $totalPrice-$totalOrphan;
				echo "tk";
				?>
			</h2>
		</div>
		<div class="container">					
			<a class="btn btn-primary mt-4" href="./OF Donars">Register as a doner</a>
			<a class="btn btn-primary mt-4" href="./OF Orphan">Register as a orphan</a>
		</div>

	</div>
</div>


	
</body>
</html>