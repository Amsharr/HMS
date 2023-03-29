<?php
include './config/connection.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE from `rooms` where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo '<script>
      window.location.href ="rooms.php";
        alert("room booking canceled ")      
        </script>';
    }
}  
?>