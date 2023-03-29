<?php
	require './config/connection.php';

	if(isset($_POST["submit"])){
		$firstName = $_POST["firstName"];
		$lastName = $_POST["lastName"];
		$dob = $_POST["dob"];
		$gender = $_POST["gender"];
		$mobileNo = $_POST["mobileNo"];
		$email = $_POST["email"];
		$NicNo = $_POST["NicNo"];
		$address = $_POST["address"];
		$username = $_POST["username"];
		$password = $_POST["password"];

		$query = "INSERT INTO patients1 VALUES('', '$firstName', '$lastName', '$dob', '$gender', '$mobileNo', '$email', '$NicNo', '$address', '$username', '$password')";
		mysqli_query($conn, $query);
		echo '<script>
      	window.location.href ="userDashboard.php";
        alert("Registration success!!!")        
        </script>';
	}
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Form</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/register.css">
  </head>
  <body>
    <!-- Body of Form starts -->
  	<div class="container">
      <form method="post" autocomplete="on">
        <!--First name-->
    		<div class="box">
          		<label for="firstName" class="fl fontLabel"> First Name: </label>
    			<div class="new iconBox">
           		 	<i class="fa fa-user" aria-hidden="true"></i>
          		</div>
    			<div class="fr">
    				<input type="text" name="firstName" placeholder="First Name"
              		class="textBox" autofocus="on" required>
    			</div>
    			<div class="clr"></div>
    		</div>
        <!--Last name-->
    		<div class="box">
          		<label for="lastName" class="fl fontLabel"> Last Name: </label>
    			<div class="fl iconBox">
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
    			<div class="fr">
    				<input type="text" required name="lastName"
              		placeholder="Last Name" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
			<!--DOB-->
    		<div class="box">
          		<label for="dob" class="fl fontLabel"> Date of Birth:</label>
    			<div class="fl iconBox">
					<i class="fa-regular fa-calendar-days" aria-hidden="true"></i>
				</div>
    			<div class="fr">
    				<input type="date" required name="dob"
              		placeholder="yyyy-mm-dd" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
			<!---Gender----->
    		<div class="box radio">
          	<label for="gender" class="fl fontLabel"> Gender: </label>
    				<input type="radio" name="gender" value="Male" required> Male &nbsp; &nbsp; &nbsp; &nbsp;
    				<input type="radio" name="gender" value="Female" required> Female
    		</div>
			<!---Mobile No.------>
    		<div class="box">
          		<label for="mobileNo" class="fl fontLabel"> Mobile No.: </label>
    			<div class="fl iconBox">
					<i class="fa fa-phone-square" aria-hidden="true"></i>
				</div>
    			<div class="fr">
    					<input type="text" required name="mobileNo" maxlength="13" placeholder="Mobile No." class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!---Email ID---->
    		<div class="box">
          		<label for="email" class="fl fontLabel"> Email ID: </label>
    			<div class="fl iconBox">
					<i class="fa fa-envelope" aria-hidden="true"></i>
				</div>
    			<div class="fr">
    					<input type="email" required name="email" placeholder="Email Id" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
			<!--NIC no -->
    		<div class="box">
          		<label for="NicNo" class="fl fontLabel"> NIC No. : </label>
    			<div class="fl iconBox">
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
    			<div class="fr">
    				<input type="text" required name="NicNo"
              		placeholder="NIC No." class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
			<!--Address-->
    		<div class="box">
          		<label for="address" class="fl fontLabel"> Address: </label>
    			<div class="fl iconBox">
					<i class="fa-solid fa-house" aria-hidden="true"></i>
				</div>
    			<div class="fr">
					<input type="text" required name="address"
              		placeholder="Address" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
			<!--Username-->
    		<div class="box">
          <label for="username" class="fl fontLabel"> Username: </label>
    			<div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="username"
              placeholder="Username" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!---Password------>
    		<div class="box">
          <label for="password" class="fl fontLabel"> Password </label>
    			<div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="Password" required name="password" placeholder="Password" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!---Submit Button------>
    		<div class="box" style="background: #2d3e3f">
    				<input type="Submit" name="submit" class="submit" value="SUBMIT">
    		</div>
      </form>
  </div>
</body>
</html>
