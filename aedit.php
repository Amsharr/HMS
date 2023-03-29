<?php
	include './config/connection.php';
    $id=$_GET['upid'];

    $sql="SELECT * from `patients1` where pId=$id";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $firstName = $row['First_Name'];
    $lastName = $row['Last_Name'];
    $dob = $row['Date_of_Birth'];
    $gender = $row['Gender'];
    $mobileNo = $row['Mobile_No'];
    $email = $row['Email'];
    $NicNo = $row['NIC_No'];
    $address = $row['_Address'];
    $username = $row['Username'];
    $password = $row['_Password'];
    //edit data 
	if(isset($_POST["submit"])){
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$dob = $_POST['dob'];
		$gender = $_POST['gender'];
		$mobileNo = $_POST['mobileNo'];
		$email = $_POST['email'];
		$NicNo = $_POST['NicNo'];
		$address = $_POST['address'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query ="UPDATE `patients1` set pId=$id,First_Name='$firstName',Last_Name='$lastName',Date_of_Birth='$dob',Gender='$gender',Mobile_No='$mobileNo',Email='$email',NIC_No='$NicNo',_Address='$address',Username='$username',_Password='$password' where pId=$id";
		mysqli_query($conn, $query);
		echo '<script>
        window.location.href ="patientsDetails.php";
        alert("Updated successfully")        
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
        $sel="SELECT * FROM admin";
        $query = mysqli_query($conn,$sel);
        $result = mysqli_fetch_assoc($query);
    ?>
        <div class="dropdown pb-4" >
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="./assets/img/admin.jpg" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1"><?php echo $result['username'];?></span>
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
                <a href="admindashboard.php" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">                 
                    <!-- patients details -->
                    <li class="nav-item">
                        <a href="patientsDetails.php" class="nav-link align-middle px-0">
                        <i class="fa-regular fa-user"></i> <span class="ms-1 d-none d-sm-inline">Patients</span>
                        </a>
                    </li>
                    <!-- Doctors page -->
                    <li>
                        <a href="doctorDetails.php" class="nav-link px-0 align-middle">
                        <i class="fa-solid fa-stethoscope"></i> <span class="ms-1 d-none d-sm-inline">Doctors</span> 
                        </a>
                    </li>
                    <li>
                        <a href="staffDetails.php" class="nav-link px-0 align-middle">
                        <i class="fa-solid fa-user-nurse"></i> <span class="ms-1 d-none d-sm-inline">Staff</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="rooms.php" class="nav-link px-0 align-middle">
                        <i class="fa-solid fa-bed"></i> <span class="ms-1 d-none d-sm-inline">Rooms</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="operatingRooms.php" class="nav-link px-0 align-middle">
                        <i class="fa-solid fa-bed-pulse"></i> <span class="ms-1 d-none d-sm-inline">Operating Rooms</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="appointmentsD.php" class="nav-link px-0 align-middle">
                        <i class="fa-regular fa-calendar-check"></i> <span class="ms-1 d-none d-sm-inline">Appointments</span></a>
                    </li>
                </ul>
                <hr>
            </div>
        </div>
        <!-- content of the page -->
        <div class="col py-3">
            <form method="post">
                <div class="container">
                <!-- First Name -->
                <div class="mb-3">
                    <label> First Name: </label>
                    <input type="text" name="firstName" class="form-control" autofocus="on" value=<?php echo $firstName;?>>                     
                </div>
                <!-- Last Name -->
                <div class="mb-3">
                    <label> Last Name:</label>
                    <input type="text" name="lastName" class="form-control" value=<?php echo $lastName;?>>
                </div>
                <!-- Date of Birth -->
                <div class="mb-3">
                    <label> Date of Birth:</label>
                    <input type="text" name="dob" class="form-control" autofocus="on" value=<?php echo $dob;?>>
                </div>
                <!-- Gender -->
                <div class="mb-3">
                    <label> Gender:  </label>
                    <input type="text" name="gender" class="form-control" autofocus="on" value=<?php echo $gender;?>>
                </div>
                <!-- Mobile No. -->
                <div class="mb-3">
                    <label> Mobile No. :</label>
                    <input type="text" name="mobileNo" class="form-control" autofocus="on" value=<?php echo $mobileNo;?>>                     
                </div>
                <!-- Email -->
                <div class="mb-3">
                    <label> Email</label>
                    <input type="text" name="email" class="form-control" value=<?php echo $email;?>>
                </div>
                <!-- NIC No. -->
                <div class="mb-3">
                    <label> NIC No. :</label>
                    <input type="text" name="NicNo" class="form-control" autofocus="on" value=<?php echo $NicNo;?>>
                </div>
                <!-- Address -->
                <div class="mb-3">
                    <label> Address:</label>
                    <input type="text" name="address" class="form-control" value=<?php echo $address;?>>
                </div>
                <!-- Username -->
                <div class="mb-3">
                    <label> Username: </label>
                    <input type="text" name="username" class="form-control" autofocus="on" value=<?php echo $username;?>>                     
                </div>
                <!-- Password -->
                <div class="mb-3">
                    <label> Password: </label>
                    <input type="text" name="password" class="form-control" autofocus="on" value=<?php echo $password;?>>                     
                </div>
                <!-- update button  -->
                <div>
                    <button name="submit" type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>    
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>                               
</html>


