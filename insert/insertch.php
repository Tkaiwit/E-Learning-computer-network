<?php 
	include('../connectDB.php');
		$ch_unitID = $_POST["txtunitID"];
		$ch_toptip = $_POST["txtunitName"];
		$sql ="INSERT INTO units (unitID,unitName) VALUES ('$ch_unitID','$ch_toptip')";
		// $sqlone = "SELECT * FROM member";
		// $sro= mysql_query($sqlone);
		// while ($row=mysql_fetch_array($sro)) {
		// 	$studentID = $row['studentID'];
		// 	for
		// $sqll="INSERT INTO readunits(studentID,unitsID,statusunit)
		// VALUES ('$studentID']','$ch_unitID',NULL)";
		// echo $studentID;
		// echo $sqll;
		// $ress = mysql_query($sqll) or die("Error in query: $sql " . mysql_error());
		// }
		$res = mysql_query($sql) or die("Error in query: $sql " . mysql_error());
		header("location:../searchch.php");
		
?>