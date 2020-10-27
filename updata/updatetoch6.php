<?php
session_start();
include('../connectDB.php');
$sql = "UPDATE readunits SET statusunit=NULL WHERE studentID='".$_SESSION["studentID"]."' AND unitsID=6";

if (mysql_query($sql)) {
    header("location:../ch6.php");
} else {
    echo "Error updating record: ";
}

?>