<?php
include ("./config/connection.php");
$id=$_GET['upid'];

$sql="SELECT * from `patients1` where pId=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$fn=$row['First_Name'];
$ln=$row['Last_Name'];
$dob=$row['Date_of_Birth'];
$gender=$row['Gender'];
$mbno=$row['Mobile_No'];
$email=$row['Email'];
$nic=$row['NIC_No'];
$add=$row['_Address'];
$un=$row['Username'];
$pas=$row['_Password'];

if(isset($_POST["submit"])){
	$fn=$_POST['First_Name'];
	$ln=$_POST['Last_Name'];
	$dob=$_POST['Date_of_Birth'];
	$gender=$_POST['Gender'];
	$mbno=$_POST['Mobile_No'];
	$email=$_POST['Email'];
	$nic=$_POST['NIC_No'];
	$add=$_POST['_Address'];
	$un=$_POST['Username'];
	$pas=$_POST['_Password'];

	$query ="UPDATE `patients1` set pId=$id, First_Name='$fn',Last_Name='$ln',Date_of_Birth='$dob',Gender='$gender',Mobile_No='$mbno',Email='$email',NIC_No='$nic',_Address='$add',Username='$un',_Password='$pas' where pId=$id";
	mysqli_query($conn, $query);
	echo '<script>
	window.location.href ="displayUserInfo.php";
	alert("Account updated successfully")        
	</script>';
}
?>

<!doctype html>
<html lang="en">
  	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>edit profile</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"/>
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
            <a class="nav-link" href="userDashboard.php">Home</a>
            </li>
			<li class="nav-item">
				<a class="nav-link" href="#">About us </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Services</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Pharmacy</a>
			</li>
            <li class="nav-item">
				<a class="nav-link" href="so.php">Sign out</a>
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
	<div class="container">
		<form method = "post">
			<div class="mb-3">
				<label class="form-label">First Name</label>
				<input type="text" class="form-control" name="First_Name" id="First_Name" value=<?php echo $fn;?>>
			</div>
			<div class="mb-3">
				<label class="form-label">Last Name</label>
				<input type="text" class="form-control" name="Last_Name" id="Last_Name" value=<?php echo $ln;?>>
			</div>
			<div class="mb-3">
				<label class="form-label">Date of Birth</label>
				<input type="date" class="form-control" name="Date_of_Birth" id="Date_of_Birth" value=<?php echo $dob;?>>
			</div>
			<div class="mb-3">
				<label class="form-label">Gender</label>
				<input type="text" class="form-control" name="Gender" id="Gender" value=<?php echo $gender;?>>
			</div>
			<div class="mb-3">
				<label class="form-label">Mobile No.</label>
				<input type="text" class="form-control" name="Mobile_No" id="Mobile_No" value=<?php echo $mbno;?>>
			</div>
			<div class="mb-3">
				<label class="form-label">Email</label>
				<input type="email" class="form-control" name="Email" id="Email" value=<?php echo $email;?>>
			</div>
			<div class="mb-3">
				<label class="form-label">NIC No.</label>
				<input type="text" class="form-control" name="NIC_No" id="NIC_No" value=<?php echo $nic;?>>
			</div>
			<div class="mb-3">
				<label class="form-label">Address</label>
				<input type="text" class="form-control" name="_Address" id="_Address" value=<?php echo $add;?>>
			</div>
			<div class="mb-3">
				<label class="form-label">Username</label>
				<input type="text" class="form-control" name="Username" id="Username" value=<?php echo $un;?>>
			</div>
			<div class="mb-3">
				<label class="form-label">Password</label>
				<input type="text" class="form-control" name="_Password" id="_Password" value=<?php echo $pas;?>>
			</div>
			<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
  </body>
</html>