<?php
include ('./config/connection.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Operating rooms</title>
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
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
        </div>
      </form>
    </div>
  </div>
</nav>
  <body>
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
        <div class="col py-3">
        <h3>Operating room details</h3>
          <a href="daddop.php">
          <div>
              <button name="Add" type="Add" class="btn btn-success">Add operating room</button>
          </div>
          </a>          
        <table class="table">
            <thead>
              <tr>
                <th >Id</th>
                <th >Name of Patient</th>
                <th >Name of Doctor</th>
                <th >Room No.</th>
                <th >Type of surgery</th>
                <th >Start time</th>
                <th >End time</th> 
                <th>Operation</th>         
              </tr>
            </thead>
            <tbody>
              <?php

              $sql="Select * from `operatingrooms`";
              $result=mysqli_query($conn,$sql);
              if($result){
                while($row=mysqli_fetch_assoc($result)){
                  $id=$row['id'];
                  $nop=$row['nameOfPatient'];
                  $nod=$row['nameOfDoctor'];
                  $rn=$row['RoomNo'];
                  $tos=$row['typeOfSurgery'];
                  $st=$row['startTime'];
                  $et=$row['endTime'];
                  echo '
                  <td scope="row">'.$id.'</td>
                  <td>'.$nop.'</td>
                  <td>'.$nod.'</td>
                  <td>'.$rn.'</td>
                  <td>'.$tos.'</td>
                  <td>'.$st.'</td>
                  <td>'.$et.'</td>
                  <td>
                  <button class="btn btn-primary" name="edit"><a href="deditop.php?upid='.$id.'" class="text-light">EDIT</a></button>
                  </td>  
                  <td>
                  <button class="btn btn-danger" name="delete"><a href="ddeleteop.php?deleteid='.$id.'" class="text-light">DELETE</a></button>
                  </td>          
                  </tr>';
                }                
              }
              ?>
            </tbody>
        </table>            
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>