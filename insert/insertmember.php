<?php
	include('../connectDB.php');
	
		$txtUsername = $_POST["txtUsername"];
		$txtfirstName = $_POST["txtfirstName"];
		$txtlastName = $_POST["txtlastName"];
		$txtstatus = $_POST["txtstatus"];
		$txttel = $_POST["txttel"];
		$txtid = $_POST["txtid"];
		$txtPassword = $_POST["txtPassword"];
		$sql = "INSERT into member (studentID,firstName,lastName,status,password,pin_id) VALUES('$txtUsername','$txtfirstName','$txtlastName','$txtstatus','$txtPassword','$txtid')";
		$res = mysql_query($sql) or die("Error in query: $sql " . mysql_error());
		$sql1 = "INSERT into readunits(studentID,unitsID,statusunit)VALUES('$txtUsername','1',NULL)";
		$ress = mysql_query($sql1) or die("Error in query: $sql " . mysql_error());
		$sql2 = "INSERT into readunits(studentID,unitsID,statusunit)VALUES('$txtUsername','2','1')";
		$ress = mysql_query($sql2) or die("Error in query: $sql " . mysql_error());
		$sql3 = "INSERT into readunits(studentID,unitsID,statusunit)VALUES('$txtUsername','3','1')";
		$ress = mysql_query($sql3) or die("Error in query: $sql " . mysql_error());
		$sql4 = "INSERT into readunits(studentID,unitsID,statusunit)VALUES('$txtUsername','4','1')";
		$ress = mysql_query($sql4) or die("Error in query: $sql " . mysql_error());
		$sql5 = "INSERT into readunits(studentID,unitsID,statusunit)VALUES('$txtUsername','5','1')";
		$ress = mysql_query($sql5) or die("Error in query: $sql " . mysql_error());
		$sql6 = "INSERT into readunits(studentID,unitsID,statusunit)VALUES('$txtUsername','6','1')";
		$ress = mysql_query($sql6) or die("Error in query: $sql " . mysql_error());
		$sql7 = "INSERT into readunits(studentID,unitsID,statusunit)VALUES('$txtUsername','7','1')";
		$ress = mysql_query($sql7) or die("Error in query: $sql " . mysql_error());
		$sql8 = "INSERT into readunits(studentID,unitsID,statusunit)VALUES('$txtUsername','8','1')";
		$ress = mysql_query($sql8) or die("Error in query: $sql " . mysql_error());
      	header("location:../login.php");
	mysql_close($conn);
?>