<?php
    include './config/connection.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>edit profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
        <Form method="post">
            <input type="text" name="username" placeholder="Enter your Username" class="textBox">
            <input type="text" name="password" placeholder="Enter your Password" class="textBox">
            <button type="submit"class="btn btn-primary" name="submit">Search</button>
        </form>
    </div>
    
        <div class="card">
            <div class="card-body">
                <table class="table">
                <thead>
                <tr>
                <th >pId</th>
                <th >First Name</th>
                <th >Last Name</th>
                <th >Date of Birth</th>
                <th >Gender</th>
                <th >Mobile No.</th>
                <th >Email ID</th>
                <th >NIC No.</th>
                <th >Address</th>
                <th >Username</th>
                <th >Password</th>
                <th >Operation</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if(isset($_POST['submit'])){
                    $search=$_POST['username'];
                    $pass=$_POST['password'];

                    $sql="Select * from `patients1` where Username='$search' AND _Password='$pass'";
                    $result=mysqli_query($conn,$sql);

                    if($result){
                        while($row=mysqli_fetch_assoc($result)){
                            $id=$row['pId'];
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
                            echo '
                            <tr>
                            <td scope="row">'.$id.'</td>
                            <td>'.$fn.'</td>
                            <td>'.$ln.'</td>
                            <td>'.$dob.'</td>
                            <td>'.$gender.'</td>
                            <td>'.$mbno.'</td>
                            <td>'.$email.'</td>
                            <td>'.$nic.'</td>
                            <td>'.$add.'</td>
                            <td>'.$un.'</td>
                            <td>'.$pas.'</td>
                            <td>
                            <button class="btn btn-primary" name="edit"><a href="editProfile.php?upid='.$id.'" class="text-light">EDIT</a></button>                  
                            </td> ';
                        }   
                    }  
                }                   
                ?> 
                </tbody>                                   
            </table>
        </div>
        </div>
    </div>
</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>