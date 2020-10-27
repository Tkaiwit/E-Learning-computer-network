<?php
include('../connectDB.php');
// $sqll = "DELETE FROM readunits WHERE studentID='".$_GET['id']."'";
$sql = "DELETE FROM testunit WHERE test_id='".$_GET['id']."'";
// $rag = mysql_query($sqll);
if(mysql_query($sql))
{
	// echo "Record Deleted.";
	// header("location:");
	 header("location: ../dropchl.php");
}
else
{
	echo "Error Delete";
}
?>