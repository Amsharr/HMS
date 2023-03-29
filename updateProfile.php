<?php
    include ("./config/connection.php");

    if(isset($_POST['saveChanges']))
    {   
        $pId = $_POST["pId"];
        $First_Name = $_POST["First_Name"];
		$Last_Name = $_POST["Last_Name"];
		$Date_of_Birth = $_POST["Date_of_Birth"];
		$Gender = $_POST["Gender"];
		$Mobile_No = $_POST["Mobile_No"];
		$Email = $_POST["Email"];
		$NIC_No = $_POST["NIC_No"];
		$Address = $_POST["_Address"];
		$Username = $_POST["Username"];
		$Password = $_POST["_Password"];

        $query = "UPDATE `patients1` SET pId=$pId,First_Name='$First_Name',Last_Name='$Last_Name',Date_of_Birth='$Date_of_Birth',Gender='$Gender',Mobile_No='$Mobile_No',Email='$Email',NIC_No='$NIC_No',_Address='$Address',Username='$Username',_Password='$Password' WHERE pId=$pId ";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:displayUserInfo.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>