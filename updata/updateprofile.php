<?php
session_start();
include('../connectDB.php');
	$txtfirstName = $_POST["txtfirstName"];
	$txtlastName = $_POST["txtlastName"];
	$txtstatus = $_POST["txtstatus"];
	$txtPassword = $_POST["txtPassword"];
	$sql = "UPDATE member SET firstName='$txtfirstName',lastName='$txtlastName', WHERE studentID='".$_SESSION["studentID"]."' ";

if (mysql_query($sql)) {
    header("location:../admin.php");
} else {
    echo "Error updating record: ";
}

?>