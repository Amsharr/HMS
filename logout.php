<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);
echo '<script>
      window.location.href = "index.php";
        alert("Signed out successfully")      
        </script>';
?>
