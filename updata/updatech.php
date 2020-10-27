<?php
include('../connectDB.php');
	$txtunitID = $_POST["txtunitID"];
	$txtunitName = $_POST["txtunitName"];
	$sql = "UPDATE units SET unitName='$txtunitName' WHERE unitID='$txtunitID' ";

if (mysql_query($sql)) {
    header("location:../editch.php");
}else{
    echo "Error updating record: ";
    echo $sql;
}

?>