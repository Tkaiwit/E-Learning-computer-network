<?php session_start();

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta content="A pure vanilla JS calendar by @chrisssycollins" name="description">
	<title>header</title>
	<link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/alertify.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="assets/css/vanillaCalendar.css">
	<script type="text/javascript" src="assets/js/jquery-3.2.0.js"></script>
	<script type="text/javascript" src="assets/js/notify.min.js"></script>
	<script type="text/javascript" src="assets/js/alertify.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	
</head>
<body>
	<nav>
		<div class="container">
		<ul class="ul-font-one">
			<li><a href="index.php"><i class="fa fa-home"></i><b> หน้าแรก</b></a></li>
			<li><a href="Objectives.php"><b> คำอธิบายรายวิชา</b></a></li>
			<li><a href="chl1-8.php"><b> แบบทดสอบ</b></a></li>
			<li><a href="contact.php"><b> ติดต่อเรา</b></a></li>
			<li><a href="by.php"><b> คณะผู้จัดทำ</b></a></li>
			<?php include("connectDB.php");
				
			?>
			<?php if(!empty($_SESSION['firstName'])){ ?>
			<li class="li-right" style="color: #ffffff;"><b><a href="administrator.php"><?php echo $_SESSION["firstName"];?><?php if($_SESSION['status']==1){ ?><?php echo $_SESSION["lastName"];?><?php }else{ }?></a></b></li>
			<?php }else{ ?>
			<li class="li-right" style="color: red;"><b>*คุณยังไม่ได้เข้าสู่ระบบ!</b></li>
			<?php }?>
			<?php 
			if(!empty($_SESSION['firstName'])){ ?>
			<li class="li-r-one"><a href="logout.php"><i class="fa fa-sign-out"></i><b> Logout</b></a></li>
			<?php }else{?>
			<li class="li-r-one"><a href="login.php"><i class="fa fa-sign-in"></i><b> Login</b></a></li>
			
			
			<?php }?>
		</ul>
		</div>
	</nav>
	<div class="head-one">
		<div class="container">
			<div class="box-row">
			<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<img src="assets/img/Logo.png" width="120" height="120" >
			</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<div style="margin: 18px; padding: 5px;background-color: ">
				<h2 class="box-one" style="font-size: 45px; background-color: #FAF6ED;">&nbsp;E Learning เครือข่ายคอมพิวเตอร์เบื้องต้น&nbsp;</h2>
			</div>
			</div>
		</div>
	</div>
	