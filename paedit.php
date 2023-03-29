<?php
	require './config/connection.php';
    $id=$_GET['upid'];
    //retrieve values to the text box
    $sql="SELECT * from `appointments` where id=$id";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $firstName = $row["firstName"];
    $lastName = $row["lastName"];
    $nicNo = $row["nicNo"];
    $mobileNo = $row["mobileNo"];
    $date = $row["date"];
    $service = $row["service"];

    //edit appointment
	if(isset($_POST["Update"])){
		$firstName = $_POST["firstName"];
		$lastName = $_POST["lastName"];
		$nicNo = $_POST["nicNo"];
		$mobileNo = $_POST["mobileNo"];
		$date = $_POST["date"];
		$service = $_POST["service"];
		

		$query = "UPDATE appointments set firstName='$firstName', lastName='$lastName', nicNo='$nicNo', mobileNo='$mobileNo', date='$date', service='$service' where id=$id";
		mysqli_query($conn, $query);
		echo '<script>
      	window.location.href ="appointments.php";
        alert("appointment updated !!! ")        
        </script>';
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>edit Appointment</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="./css/style.css">
</head>
	<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
	<div class="container-fluid">
		<a class="navbar-brand">
		<img src="./assets/img/logo.png" alt="Bootstrap" width="80px" height="80px">
		Arogya Healthcare
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			<li class="nav-item">
				<a class="nav-link" href="#">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">About us</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Services</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Pharmacy</a>
			</li>	
			<li class="nav-item">
				<a class="nav-link" href="#">Sign out</a>
			</li>		
        </li>
			</ul>
			<form class="d-flex" role="search">
				<a href="myprofile.php" class="btn-blue mt-20px">
					<i class="fa-solid fa-arrow-right-to-bracket"></i> My profile
				</a>
     		</form>
		</div>
	</div>
	</nav>
<body>
	<form method="post">
		<div class="container">
			<!-- first name  -->
			<div class="mb-3">
				<label class="form-label">First Name:</label>
				<input type="text" class="form-control" id="firstName" name="firstName" value=<?php echo $firstName;?>>
			</div>
			<!-- last name -->
			<div class="mb-3">
				<label class="form-label">Last Name:</label>
				<input type="text" class="form-control" id="lastName" name="lastName" value=<?php echo $lastName;?>>
			</div>
			<!-- nic no -->
			<div class="mb-3">
				<label class="form-label">NIC No. :</label>
				<input type="text" class="form-control" id="nicNo" name="nicNo" value=<?php echo $nicNo;?>>
			</div>
			<div class="mb-3">
				<label class="form-label">Mobile No. :</label>
				<input type="text" class="form-control" id="mobileNo" name="mobileNo" value=<?php echo $mobileNo;?>>
			</div>
			<!-- date -->
			<div class="mb-3">
				<label class="form-label">Date :</label>
				<input type="date" class="form-control" id="date" name="date" value=<?php echo $date;?>>
			</div>
			<!-- service -->
			<div class="mb-3">
				<label class="form-label">Service:</label>
				<input type="text" class="form-control" id="service" name="service" placeholder="test/OPD/vaccination" value=<?php echo $service;?>>
			</div>
			<div>			
			<button type="Update" name="Update" class="btn btn-primary">Update</button>
			</div>	
	</form>
	<!-- CDN links -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>