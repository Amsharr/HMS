<?php
include ('./config/connection.php');
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `patients1` where pId=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo '<script>
        window.location.href = "patientsDetails.php";
        alert("Data deleted!!!")        
        </script>'; 
    }else{
        die(mysqli_error($conn));
    }
}
?>