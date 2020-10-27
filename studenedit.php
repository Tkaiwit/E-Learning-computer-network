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
    <?php 
       include("connectDB.php");
        $sql = "SELECT * FROM member WHERE studentID ='".$_GET["sid"]."'";
        $res = mysql_query($sql);
        $arr = mysql_fetch_array($res);
      ?>
      <h2 align="center"><b>แก้ไขข้อมูลส่วนตัว</b></h2>
      <div class="contenss">
        <form name="form1" method="post" action="updata/updatestudent.php?sid=<?php echo $_GET["sid"];?>">
        <div class="text-log">
          <i class="fa fa-address-card" aria-hidden="true"></i> <label>รหัสนักศึกษา</label>
        <input name="txtUsername" class="form-control" type="text" id="txtUsername" value="<?php echo $arr['studentID']?>" readonly>
        </div>
        <div class="text-log">
          <i class="fa fa-address-card" aria-hidden="true"></i> <label>ชื่อ</label>
        <input name="txtfirstName" class="form-control" type="text" id="txtfirstName" placeholder="กรุณกรอกชื่อนักศึกษา..." required="" value="<?php echo $arr['firstName']?>">
        </div>
        <div class="text-log">
          <i class="fa fa-address-card" aria-hidden="true"></i> <label>นามสกุล</label>
        <input name="txtlastName" class="form-control" type="text" id="txtlastName" placeholder="กรุณกรอกนามสกุลนักศึกษา..." required="" value="<?php echo $arr['lastName']?>">
        </div>
        <div class="text-log">
          <i class="fa fa-address-card" aria-hidden="true"></i> <label>เลขบัตรปรชาชน</label>
        <input name="txtid" class="form-control" type="text" id="txtid" placeholder="กรุณกรอกนามสกุลนักศึกษา..." readonly="" value="<?php echo $arr['pin_id']?>">
        </div><hr>
        <div align="center">
          <a onclick="goBack()" type="button" class="btn btn-danger">ย้อนกลับ</a>
          <input class="btn btn-success run" type="submit" name="Submit" value="บันทึกการแก้ไข">
        </div>
      </form><br>
      </div>
    <?php ?>  

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
function goBack() {
  window.history.back();
}
</script>

<?php include "layer/footer.php" ?>