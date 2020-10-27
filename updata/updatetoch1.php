<?php
session_start();
include('../connectDB.php');
$sql = "UPDATE readunits SET statusunit=NULL WHERE studentID='".$_SESSION["studentID"]."' AND unitsID=1";

if (mysql_query($sql)) {
    header("location:../ch1.php");
} else {
    echo "Error updating record: ";
}

?>