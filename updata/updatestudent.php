<?php
include('../connectDB.php');
	$txtUsername = $_POST["txtUsername"];
	$txtfirstName = $_POST["txtfirstName"];
	$txtlastName = $_POST["txtlastName"];
	$sql = "UPDATE member SET firstName='$txtfirstName',lastName='$txtlastName' WHERE studentID='$txtUsername' ";

if (mysql_query($sql)) {
    header("location:../editstudents.php");
}else{
    echo "Error updating record: ";
    echo $sql;
}

?>