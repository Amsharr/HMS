<?php
include ('./config/connection.php');
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `operatingrooms` where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo '<script>
        window.location.href = "dop.php";
        alert("data deleted")        
        </script>'; 
    }else{
        die(mysqli_error($conn));
    }
}
?>