<?php
include('../connectDB.php');
	$txtunitID = $_POST["txttestID"];
	$txtunitName = $_POST["txtunitName"];
	$txtunitname = $_POST["txtunitname"];
	$sql = "UPDATE testunit SET test_name='$txtunitName',unitID='txtunitname' WHERE test_id='$txtunitID' ";

if (mysql_query($sql)) {
    header("location:../editchl.php");
}else{
    echo "Error updating record: ";
    echo $sql;
}

?>