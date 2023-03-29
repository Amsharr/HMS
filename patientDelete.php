<?php
include './config/connection.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE from `patients1` where pId=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo '<script>
      window.location.href ="deleteProfile.php";
        alert("Data deleted successfully")      
        </script>';
    }
}  
?>