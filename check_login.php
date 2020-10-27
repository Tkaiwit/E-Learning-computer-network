<?php 
include("connectDB.php");
$studentID = $_POST['txtUsername'];
$password = $_POST['txtPassword'];

if ($_POST['txtUsername'] and $_POST['txtPassword']){

	$sql = "SELECT * FROM member WHERE studentID='".$_POST['txtUsername']."' AND
	password='".$_POST['txtPassword']."' ";
	$res = mysql_query($sql);
	$arr = mysql_fetch_array($res);
		if($arr['status']==1){
			session_start();
			$_SESSION['studentID']=$studentID;
			$_SESSION['firstName']=$arr['firstName'];
			$_SESSION['lastName']=$arr['lastName'];
			$_SESSION['status']=$arr['status'];
			header("location:admin.php");
			die();
		}elseif($arr['status']==2){
			session_start();
			$_SESSION['studentID']=$studentID;
			$_SESSION['firstName']=$arr['firstName'];
			$_SESSION['status']=$arr['status'];
			header("location:administrator.php");
			die();
		}else{
			header("location:login.php");
		}
	}else{
	echo "กรุณกรอกข้อมูลให้ครบ";
	echo "<br><a href='login.php'>ย้อนกลับ</a>";
}
?>