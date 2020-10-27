<?php 
// $conn=mysqli_connect("localhost","root","12345678");
// mysqli_query("SET character_set_results=utf8");
// mysqli_query("SET character_set_client=utf8");
// mysqli_query("SET character_set_connection=utf8");
// if (!$conn) {
// 	echo "ไม่สามารถเชื่อต่อฐานข้อมูล";
// }$db=mysqli_select_db("e_learning");
// if(!$db){
// 	echo "เลือกฐานข้อมูลไม่ได้";
// }
$conn=mysqli_connect("localhost","root","12345678","e_learning");
//$condb=mysqli_connect("localhost","root","","ubu_flat");
// $condb=mysqli_connect("10.80.49.8","ubu_flat","flat2020","ubu_flat");
mysqli_set_charset($conn,"utf8");
if(mysqli_connect_errno()){
	echo "เกิดช้อผิดพลาด".mysqli_connect_error($conn);
}

?>