<?php
      session_start();
      if($_SESSION["studentID"] == "")
      {
        // echo "<meta http-equiv='refresh' content='1;URL=index.php'>";
      }
      else if($_SESSION['status'] != 1)
      {
        // echo "<meta http-equiv='refresh' content='1;URL=logout.php'>";
      } 
      mysql_connect("localhost","root","");
      mysql_select_db("e_learning");
      $strSQL = "SELECT * FROM member WHERE studentID = '".$_SESSION["studentID"]."' ";
      $objQuery = mysql_query($strSQL);
      $objResult = mysql_fetch_array($objQuery);
?>