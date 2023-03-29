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
        window.location.href ="dappointments.php";
      alert("appointment updated !!! ")        
      </script>';
	}
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <nav class="navbar bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Arogya Healthcare</a>
      <form class="d-flex" role="search">
      <?php
        $sel="SELECT * FROM doctors";
        $query = mysqli_query($conn,$sel);
        $result = mysqli_fetch_assoc($query);
    ?>
        <div class="dropdown pb-4" >
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="./assets/img/admin.jpg" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1"><?php echo $result['Username'];?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
                    </ul>
        </div>
      </form>
    </div>
  </div>
</nav>
  <body>
    <!-- side panel -->
  <div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="doctorDashboard.php" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">                 
                    <li class="nav-item">
                        <a href="dappoinments.php" class="nav-link px-0 align-middle">
                        <i class="fa-regular fa-calendar-check"></i> <span class="ms-1 d-none d-sm-inline">Appointments</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="droom.php" class="nav-link px-0 align-middle">
                        <i class="fa-solid fa-bed"></i> <span class="ms-1 d-none d-sm-inline">Rooms</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="dop.php" class="nav-link px-0 align-middle">
                        <i class="fa-solid fa-bed-pulse"></i> <span class="ms-1 d-none d-sm-inline">Operating Rooms</span></a>
                    </li>
                </ul>
                <hr>
            </div>
        </div>
        <!-- content of the page -->
        <div class="col py-3">
            <form method="post">
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
        </div>
    </div>    
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>                               
</html>


