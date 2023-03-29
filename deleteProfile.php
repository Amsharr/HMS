<?php
    include "./config/connection.php";

?>
<!doctype html>
<html lang="en">
  	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>delete profile</title>
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
        <input type="text" name="Username" id="Username" placeholder="Username">
        <input type="text" name="_Password" id="_Password" placeholder="Password">
        <button class="btn btn-outline-success" type="submit" name="submit">Search</button>
    </div>
    </form>
    
<div class="col py-3">
        <table class="table">
            <thead>
              <tr>
                <th >id</th>
                <th >First Name</th>
                <th >Last Name</th>
                <th >dob</th>                
                <th >gender</th>  
                <th >Mobile No.</th>
                <th >Email</th>    
                <th >Nic No.</th>
                <th >Address</th>    
                <th >Username</th> 
                <th >Password</th> 
                <th>Operation</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if(isset($_POST['submit'])){
                $un=$_POST['Username'];
                $pas=$_POST['_Password'];

              $sql="SELECT * from `patients1` WHERE Username='$un' AND _Password='$pas'";
              $result=mysqli_query($conn,$sql);
              if($result){
                while($row=mysqli_fetch_assoc($result)){
                  $id=$row['pId'];
                  $fn=$row['First_Name'];
                  $ln=$row['Last_Name'];
                  $dob=$row['Date_of_Birth'];
                  $gen=$row['Gender'];
                  $mbo=$row['Mobile_No'];
                  $email=$row['Email'];
                  $nic=$row['NIC_No'];
                  $add=$row['_Address'];
                  $un=$row['Username'];
                  $pas=$row['_Password'];
                  echo'<tr>
                  <td scope="row">'.$id.'</td>
                  <td>'.$fn.'</td>
                  <td>'.$ln.'</td>
                  <td>'.$dob.'</td>
                  <td>'.$gen.'</td>
                  <td>'.$mbo.'</td>
                  <td>'.$email.'</td>
                  <td>'.$nic.'</td>
                  <td>'.$add.'</td>
                  <td>'.$un.'</td>
                  <td>'.$pas.'</td>
                  <td>
                  <button class="btn btn-danger" name="delete"><a href="patientDelete.php?deleteid='.$id.'" class="text-light">DELETE</a></button>
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