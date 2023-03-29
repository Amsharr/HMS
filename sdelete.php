<?php
include './config/connection.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE from `staff` where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo '<script>
      window.location.href ="staffDetails.php";
        alert("Data deleted successfully")      
        </script>';
    }
}  
?>