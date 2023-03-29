<?php 
include ('./config/connection.php');

$sel="SELECT * FROM appointments";
$query = mysqli_query($conn,$sel);
$result = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="./css/style.css">
    <title>Invoice</title>
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
				<a class="nav-link" href="#">Sign out</a>
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
        <input type="text" name="firstName" id="firstName" placeholder="First Name">
        <input type="text" name="lastName" id="lastName" placeholder="Last Name">
        <button class="btn btn-outline-success" type="submit" name="submit">Search for appointments</button>
    </div>
    </form>
    
<div class="col py-3">
        <table class="table">
            <thead>
              <tr>
                <th >id</th>
                <th >First Name</th>
                <th >Last Name</th>
                <th >NIC No.</th>                
                <th >Mobile No</th>  
                <th >Date</th>
                <th >Service</th>    
                <th >Operation</th>  
              </tr>
            </thead>
            <tbody>
              <?php
              if(isset($_POST['submit'])){
                $fn=$_POST['firstName'];
                $ln=$_POST['lastName'];

              $sql="SELECT * from `appointments` WHERE firstName='$fn' AND lastName='$ln'";
              $result=mysqli_query($conn,$sql);
              if($result){
                while($row=mysqli_fetch_assoc($result)){
                  $id=$row['id'];
                  $fn=$row['firstName'];
                  $ln=$row['lastName'];
                  $nicNo=$row['nicNo'];
                  $mbNo=$row['mobileNo'];
                  $date=$row['date'];
                  $service=$row['service'];
                  echo'<tr>
                  <td scope="row">'.$id.'</td>
                  <td>'.$fn.'</td>
                  <td>'.$ln.'</td>
                  <td>'.$nicNo.'</td>
                  <td>'.$mbNo.'</td>
                  <td>'.$date.'</td>
                  <td>'.$service.'</td>
                  <td>
                  <button class="btn btn-primary" name="edit"><a href="paedit.php?upid='.$id.'" class="text-light">EDIT</a></button>                  
                  </td> 
                  <td>
                  <button class="btn btn-danger" name="delete"><a href="padelete.php?deleteid='.$id.'" class="text-light">Cancel</a></button>
                  </td>             
                  </tr>';
                }                
              }
            } 
              ?>
            </tbody>
        </table>
        </div>
</body>
</html>