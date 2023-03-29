<?php
session_start();
unset($_SESSION["Username"]);
unset($_SESSION["Password"]);
echo '<script>
      window.location.href = "index.php";
        alert("Signed out successfully")      
        </script>';
?>
