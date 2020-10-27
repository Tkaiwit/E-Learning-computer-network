<?php include "layer/header.php" ?> 
<div class="container">
  <div>
    <div class="col-sm-3">
      <ul class="ul-menu well">
        <li><b><h3>จัดการข้อมูลนักศึกษา</h3></b></li><hr>
        <li><a href="addstudents.php">เพิ่มนักศึกษา</a></li>
        <li><a href="searchstudents.php">ค้นหานักศึกษา</a></li>
        <li><a href="editstudents.php">แก้ไขนักศึกษา</a></li>
        <li><a href="dropstudents.php">ลบนักศึกษา</a></li>
        <li><b><h3>จัดการข้อมูลบทเรียน</h3></b></li><hr>
        <li><a href="addch.php">เพิ่มบทเรียน</a></li>
        <li><a href="searchch.php">ค้นหาบทเรียน</a></li>
        <li><a href="editch.php">แก้ไขบทเรียน</a></li>
        <li><a href="dropch.php">ลบบทเรียน</a></li>
        <li><b><h3>จัดการข้อมูลแบบทดสอบ</h3></b></li><hr>
        <li><a href="addchl.php">เพิ่มแบบทดสอบ</a></li>
        <li><a href="serachchl.php">ค้นหาแบบทดสอบ</a></li>
        <li><a href="editchl.php">แก้ไขแบบทดสอบ</a></li>
        <li><a href="dropchl.php">ลบแบบทดสอบ</a></li>
      </ul>
    </div>
    <div class="detal-b col-sm-6 well">
      <h2 align="center">ค้นหานักศึกษาเพื่อแก้ไข</h2><hr>
        <form name="frmSearch" method="get" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
          <table width="100%" border="0s">
              <tr>
                <th>
                <input name="txtKeyword" type="text" id="txtKeyword" value="" placeholder="กรอกรหัสนักศึกษา หรือ ชื่อ...." style="width: 88%;">
                <input type="submit" value="Search">
              </th>
              </tr>
            </table>
          </form>
<?php
if(!empty($_GET["txtKeyword"]))
  {

  $conn=mysql_connect("localhost","root","");
mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
if (!$conn) {
  echo "ไม่สามารถเชื่อต่อฐานข้อมูล";
}$db=mysql_select_db("e_learning");
if(!$db){
  echo "เลือกฐานข้อมูลไม่ได้";
}
  // Search By Name or Email
  $strSQL = "SELECT * FROM member WHERE (firstName LIKE '%".$_GET["txtKeyword"]."%' or studentID LIKE '%".$_GET["txtKeyword"]."%' )";
  $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");

  ?>
  <br>
<style>
  th,td{
  border: 1px solid  #fff;
  background-color: #dddddd;
  padding: 5px;
  width:100px;
  text-align: center;
}
</style>
  <table width="100%">
    <tr>
    <th width="60"> <div align="center">รหัสนักศึกษา</div></th>
    <th width="98"> <div align="center">ชื่อ</div></th>
    <th width="98"> <div align="center">นามสกุล</div></th>
    <th width="97"> <div align="center">รหัสบัตรประชาชน</div></th>
    <th><div align="center">จัดการ</div></th>
    </tr>
  <?php
  while($objResult = mysql_fetch_array($objQuery))
  {
  ?>
    <tr>
    <td><div align="center"><?php echo $objResult["studentID"];?></div></td>
    <td><?php echo $objResult["firstName"];?></td>
    <td><?php echo $objResult["lastName"];?></td>
    <td><div align="center"><?php echo $objResult["pin_id"];?></div></td>
    <td><div align="center"><a href="studenedit.php?sid=<?php echo $objResult["studentID"];?>" style="color: #000; "><i class="fa fa-pencil-square-o" style="font-size: 15px;"></i></a></div></td>
    </tr>
  <?php
  }
  ?>
  </table>
  <?php
  mysql_close($conn);
}
?>

    </div>
    <div class="col-sm-2"> 

    <div class="page-count" style="font-size: 20px; width: 250px; height: 70px; border: 2px solid #f1f1f1;margin-top: 15px; padding: 5px;">
      <img src="../assets/img/ttt.png" width="15" height="15">
      <script type="text/javascript">
          if (localStorage.pagecount)
            {
            localStorage.pagecount=Number(localStorage.pagecount) +1;
            }
       else
          {
            localStorage.pagecount=1;
            }
       document.write("จำนวนผู้เข้าชมเว็บไซต์ "+ "<br />");
       document.write("<p style='margin-left:100px;text-aling:right'>"+localStorage.pagecount + " ครั้ง.</p>");
      </script>
    </div>

    <div id="v-cal" style="width: 250px; height: 300px; margin-right: 1px;margin-top: 15px; position: absolute;">
      <div class="vcal-header">
        <button class="vcal-btn" data-calendar-toggle="previous">
          <svg height="24" version="1.1" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
            <path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z"></path>
          </svg>
        </button>

        <div class="vcal-header__label" data-calendar-label="month">
          March 2017
        </div>


        <button class="vcal-btn" data-calendar-toggle="next">
          <svg height="24" version="1.1" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
            <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
          </svg>
        </button>
      </div>
      <div class="vcal-week">
        <span>Mon</span>
        <span>Tue</span>
        <span>Wed</span>
        <span>Thu</span>
        <span>Fri</span>
        <span>Sat</span>
        <span>Sun</span>
      </div>
      <div class="vcal-body" data-calendar-area="month"></div>
    </div>

    <p class="demo-picked">
      <span data-calendar-label="picked"></span>
    </p>
  <script src="assets/js/vanillaCalendar.js" type="text/javascript"></script>
  <script>
    window.addEventListener('load', function () {
      vanillaCalendar.init({
        disablePastDays: true
      });
    })
  </script>
  </div>
  </div>
  </div>
</div>
<script>

<?php include "layer/footer.php" ?>