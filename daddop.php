<?php
    include ("./config/connection.php");

	if(isset($_POST["submit"])){
        $nop=$_POST['nameOfPatient'];
        $nod=$_POST['nameOfDoctor'];
        $rn=$_POST['RoomNo'];
        $tos=$_POST['typeOfSurgery'];
        $st=$_POST['startTime'];
        $et=$_POST['endTime'];

		$query ="INSERT INTO operatingrooms VALUES('','$nop','$nod','$rn','$tos','$st','$et')";
		mysqli_query($conn, $query);
		echo '<script>
        window.location.href ="dop.php";
        alert("Added successfully")        
        </script>';
	}
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>edit rooms</title>
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
                <div class="container">
                <!-- Name of Patient -->
                <div class="mb-3">
                    <label> Name of Patient: </label>
                    <input type="text" name="nameOfPatient" class="form-control" autofocus="on">                  
                </div>
                <!-- Name of Doctor -->
                <div class="mb-3">
                    <label> Name of Doctor:</label>
                    <input type="text" name="nameOfDoctor" class="form-control" >
                </div>
                <div class="mb-3">
                    <label> Room No. :</label>
                    <input type="text" name="RoomNo" class="form-control" >
                </div>
                <!-- type of surgery -->
                <div class="mb-3">
                    <label> Type of surgery:</label>
                    <input type="text" name="typeOfSurgery" class="form-control" autofocus="on" >
                </div>
                <!-- start time-->
                <div class="mb-3">
                    <label>Start time:</label>
                    <input type="datetime-local" name="startTime" class="form-control" >
                </div> 
                <div class="mb-3">
                    <label>End time:</label>
                    <input type="datetime-local" name="endTime" class="form-control" >
                </div>
                <!-- Submit button  -->
                <div>
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>             
            </form>
        </div>
    </div>    
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>                               
</html>