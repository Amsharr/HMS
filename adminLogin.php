<?php
  include("./config/connection.php");
  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from admin where username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count==1){
        echo '<script>
        window.location.href = "admindashboard.php";
        alert("Login Successful!!!")
        </script>';
    }
    else{
        echo '<script>
        window.location.href = "adminLogin.php";
        alert("Login failed. Invalid username or password!!!")
        </script>';
    }
  }
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin login page </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./css/login.css">

</head>
<body>
<!--form-->
<div id="login-form-wrap">
  <h2>Admin Login</h2>
  <form id="login-form" name= "form" action= "" method= "POST">
    <p>
    <input type="text" id="username" name="username" placeholder="Username" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="password" id="password" name="password" placeholder="Password" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="submit" id="login" value="Login" name= "submit">
    </p>
  </form>
  <div id="create-account-wrap">
  </div><!--create-account-wrap-->
</div><!--login-form-wrap-->
  
</body>
</html>
