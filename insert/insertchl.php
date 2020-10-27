<?php 
	include('../connectDB.php');
		$ch_testID = $_POST["txttestid"];
		$ch_toptip = $_POST["txttestName"];
		$ch_status = 1;
		$ch_unitID = $_POST["txtunitname"];
		$sql ="INSERT INTO testunit (test_id,test_name,b_a_status,unitID) VALUES ('$ch_testID','$ch_toptip','$ch_status','$ch_unitID')";
		$res = mysql_query($sql) or die("Error in query: $sql " . mysql_error());
		header("location:../searchchl.php");
		
?>