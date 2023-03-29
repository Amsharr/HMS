<?php
include ('./config/connection.php');
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `appointments` where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo '<script>
        window.location.href = "appointmentsAdmin.php";
        alert("appointment cancelled")        
        </script>'; 
    }else{
        die(mysqli_error($conn));
    }
}
?>