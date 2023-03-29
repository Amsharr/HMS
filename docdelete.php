<?php
include './config/connection.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE from `doctors` where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo '<script>
      window.location.href ="doctorDetails.php";
        alert("Data deleted successfully")      
        </script>';
    }
}  
?>
