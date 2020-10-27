<script LANGUAGE="JavaScript">
var speechstr='';
var A1= new String
var A2= new String
var A3= new String
var A4= new String
var A5= new String
var A6= new String
var A7= new String
var A8= new String
var A9= new String
var A10= new String
var CkAns=0
          function MarkAnswerss()
{

var i=0;
var total=10;
CkAns=CkAns+1;
   if (A1.toLowerCase()=="3")
   {
      i=i+1;
   }
   if (A2.toLowerCase()=="1")
   {
      i=i+1;
   }
   if (A3.toLowerCase()=="3")
   {
      i=i+1;
   }
   if (A4.toLowerCase()=="3")
   {
      i=i+1;
   }
   if (A5.toLowerCase()=="1")
   {
      i=i+1;
   }
   if (A6.toLowerCase()=="2")
   {
      i=i+1;
   }
   if (A7.toLowerCase()=="4")
   {
      i=i+1;
   }
   if (A8.toLowerCase()=="3")
   {
      i=i+1;
   }
   if (A9.toLowerCase()=="1")
   {
      i=i+1;
   }
   if (A10.toLowerCase()=="1")
   {
      i=i+1;
   }
      alertify.alert('<b>ตรวจคำตอบ </b> <hr />',speechstr+speechstr+"ตรวจคำตอบครั้งที่ "+CkAns.toString()+" <br />"+"คุณได้คะแนน "+speechstr+i.toString()+"/"+total.toString()+"<hr />").set('onok', function(closeEvent){ window.location.href="ch6.php"; } ); 
return false;
  }
</script>
<div class
<div class="container">
  <div>
    <div class="col-sm-3">
      <ul class="ul-menu well">
        <li><b><h3>บทเรียน</h3></b></li><hr>
        <?php
          include("connectDB.php");
          $sql = "SELECT * FROM readunits INNER JOIN member ON readunits.studentID = member.studentID
           INNER JOIN units ON readunits.unitsID = units.unitID";
          $res = mysql_query($sql);
              while ($row=mysql_fetch_array($res)) {
                if(!empty($_SESSION['studentID'])){
                  if($_SESSION['studentID']==$row['studentID']){
                  if(is_null($row['statusunit'])){
                    for ($i=0; $i < $row['unitID'] ; $i++){   
        ?>
        <li><a href="chl<?php echo $i+1 ?>.php"><?php }?><?php echo $row['unitName']; ?></a></li>
        <?php
            }else{ 
            for ($i=0; $i < $row['unitID'] ; $i++){
        ?>
        <style>
          .not-active {
            pointer-events: none;
            cursor: default;
            text-decoration: none;
            color: black;
          }
        </style>
        <li><a class="not-active"><?php } ?><?php echo $row['unitName']; ?></a></li>
       <?php } } }} ?>

      <?php 
        $sqll = "SELECT * FROM units";
        $ress = mysql_query($sqll);
        while ($roww=mysql_fetch_array($ress)) {
          if(!empty($_SESSION['studentID'])){}else{
       ?>
         <li><a class="not-active"><?php echo $roww['unitName']; ?></a></li> 
    
    <?php }} ?>
        <style>
label {
  margin: 0.5em;
  display: inline-block;
  position: relative;
  padding-left: 40px;
  cursor: pointer;
}

input {
  height: 1px;
  width: 1px;
  opacity: 0;
}

.outside {
  display: inline-block;
  position: absolute;
  left: 0;
  top: 50%;
  margin-top: -10px;
  width: 20px;
  height: 20px;
  border: 2px solid red;
  border-radius: 50%;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  background: none;
}

.inside {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  display: inline-block;
  border-radius: 50%;
  width: 10px;
  height: 10px;
  background: red;
  left: 3px;
  top: 3px;
  -webkit-transform: scale(0, 0);
          transform: scale(0, 0);
}
.no-transforms .inside {
  left: auto;
  top: auto;
  width: 0;
  height: 0;
}
.chk1{
  margin-left: 45px;
}

input {
  /*  &:focus, &:active {
        + .outside {
          border-color: $almost-black;
        }
      }*/
}
input:checked + .outside .inside {
  -webkit-animation: radio-select 0.1s linear;
          animation: radio-select 0.1s linear;
  -webkit-transform: scale(1, 1);
          transform: scale(1, 1);
}
.no-transforms input:checked + .outside .inside {
  width: 10px;
  height: 10px;
}


        </style>
      </ul>
    </div>
    <div class="detal-b col-sm-6 well">
      <h1 align="center" style="color: #000;">แบบทดสอบก่อนเรียนหน่วยที่ 6</h1><h2 align="center">รูปแแยยการเชื่อมต่อเครือข่าย</h2><hr style="border: solid 1px #000;">
<form name="form1" ONSUBMIT="MarkAnswers()" style="color: #000;">
    <label>ข้อที่ 1) ข้อใดบอกถึงลักษณะของโทโพโลยีแบบบัส (Bus Topology) ได้ถูกต้องที่สุด</label>
   <br>
   <div class="chk1">
     <label><input type="radio" class="radio-inline" required="" name="R1" ONCLICK="A1='1'"><span class="outside"><span class="inside"></span></span>ก. คอมพิวเตอร์จะเชื่อมต่อกับเครื่องถัดไปจนเครื่องแรกต่อกับเครื่องสุดท้าย</label>
     <label><input type="radio" class="radio-inline" required="" name="R1" ONCLICK="A1='2'"><span class="outside"><span class="inside"></span></span>ข. การเชื่อมต่อเครือข่ายด้วยสาย UTP</label>
     <label><input type="radio" class="radio-inline" name="R1" ONCLICK="A1='3'"><span class="outside"><span class="inside"></span></span>ค. การเชื่อมต่อคอมพิวเตอร์เข้ากับสายกลางหลัก</label>
     <label><input type="radio" class="radio-inline" name="R1" ONCLICK="A1='4'"><span class="outside"><span class="inside"></span></span>ง. เป็นแบบที่ใช้อุปกรณ์ศูนย์กลางควบคุมเส้นทางการสื่อสาร</label>
     </div>
<HR align="center" WIDTH="95%" style="border: solid 0.5px #000;">
<label>ข้อที่ 2) ข้อใดบอกถึงลักษณะของโทโพโลยีแบบดาว (Star Topology) ได้ถูกต้องที่สุด</label>
<div class="chk1">
     <label><input type="radio" class="radio-inline" name="R2" ONCLICK="A2='1'"><span class="outside"><span class="inside"></span></span>ก. เป็นแบบที่ใช้อุปกรณ์ศูนย์กลางควบคุมเส้นทางการสื่อสาร</label>
     <label><input type="radio" class="radio-inline" name="R2" ONCLICK="A2='2'"><span class="outside"><span class="inside"></span></span>ข. การเชื่อมต่อคอมพิวเตอร์เป็นวงกลม แล้วจัดให้เป็นรูปดาว</label>
     <label><input type="radio" class="radio-inline" name="R2" ONCLICK="A2='3'"><span class="outside"><span class="inside"></span></span>ค. การเชื่อมต่อคอมพิวเตอร์เข้ากับสายกลางหลัก</label>
     <label><input type="radio" class="radio-inline" name="R2" ONCLICK="A2='4'"><span class="outside"><span class="inside"></span></span>ง. คอมพิวเตอร์จะเชื่อมต่อกับเครื่องถัดไปจนเครื่องแรกต่อกับเครื่องสุดท้าย</label>
</div>
<HR align="center" WIDTH="95%" style="border: solid 0.5px #000;">
<label>ข้อที่ 3) ข้อใดบอกถึงลักษณะของโทโพโลยีแบบวงแหวน (Ring Topology) ได้ถูกต้องที่สุด</label>
<div class="chk1">
     <label><input type="radio" class="radio-inline" name="R3" ONCLICK="A3='1'"><span class="outside"><span class="inside"></span></span>ก. การเชื่อมต่อคอมพิวเตอร์เข้ากับสายกลางหลัก</label>
     <label><input type="radio" class="radio-inline" name="R3" ONCLICK="A3='2'"><span class="outside"><span class="inside"></span></span>ข. เป็นแบบที่ใช้อุปกรณ์ศูนย์กลางควบคุมเส้นทางการสื่อสาร</label>
     <label><input type="radio" class="radio-inline" name="R3" ONCLICK="A3='3'"><span class="outside"><span class="inside"></span></span>ค. คอมพิวเตอร์จะเชื่อมต่อกับเครื่องถัดไปจนเครื่องแรกต่อกับเครื่องสุดท้าย</label>
     <label><input type="radio" class="radio-inline" name="R3" ONCLICK="A3='4'"><span class="outside"><span class="inside"></span></span>ง. การเชื่อมต่อคอมพิวเตอร์กับวงแหวนเหล็กขนาดใหญ่</label>
</div>
<HR align="center" WIDTH="95%" style="border: solid 0.5px #000;">
<label>ข้อที่ 4) ข้อใดบอกถึงลักษณะการเชื่อมต่อเครือข่ายแบบเพียร์ทูเพียร์ ได้ถูกต้องที่สุด</label>
<div class="chk1">
     <label><input type="radio" class="radio-inline" name="R4" ONCLICK="A4='1'"><span class="outside"><span class="inside"></span></span>ก.	การเชื่อมต่อในระบบอินเทอร์เน็ต</label>
     <label><input type="radio" class="radio-inline" name="R4" ONCLICK="A4='2'"><span class="outside"><span class="inside"></span></span>ข.	การเชื่อมต่อเครือข่ายส่วนตัวเข้าด้วยกันผ่านอินเทอร์เน็ต</label>
     <label><input type="radio" class="radio-inline" name="R4" ONCLICK="A4='3'"><span class="outside"><span class="inside"></span></span>ค.	การเชื่อมต่อคอมพิวเตอร์เข้าด้วยกัน</label>
     <label><input type="radio" class="radio-inline" name="R4" ONCLICK="A4='4'"><span class="outside"><span class="inside"></span></span>ง.	มีคอมพิวเตอร์เครื่องหลักที่ทำหน้าที่ให้บริการแก่เครื่องลูก</label>
</div>
<HR align="center" WIDTH="95%" style="border: solid 0.5px #000;">
<label>ข้อที่ 5) ข้อใดบอกถึงลักษณะการเชื่อมต่อเครือข่ายแบบไคลแอนด์เซิร์ฟเวอร์ ได้ถูกต้องที่สุด</label>
<div class="chk1">
     <label><input type="radio" class="radio-inline" name="R5" ONCLICK="A5='1'"><span class="outside"><span class="inside"></span></span>ก.	มีคอมพิวเตอร์เครื่องหลักที่ทำหน้าที่ให้บริการแก่เครื่องลูก</label>
     <label><input type="radio" class="radio-inline" name="R5" ONCLICK="A5='2'"><span class="outside"><span class="inside"></span></span>ข.	การกำหนดกลุ่มเครือข่ายย่อยในเครือข่ายหลักเดียวกัน</label>
     <label><input type="radio" class="radio-inline" name="R5" ONCLICK="A5='3'"><span class="outside"><span class="inside"></span></span>ค.	การเชื่อมต่อเครือข่ายส่วนตัวเข้าด้วยกันผ่านอินเทอร์เน็ต</label>
     <label><input type="radio" class="radio-inline" name="R5" ONCLICK="A5='4'"><span class="outside"><span class="inside"></span></span>ง.	การเชื่อมต่อเครื่องคอมพิวเตอร์เข้าด้วยกัน</label>
</div>
<HR align="center" WIDTH="95%" style="border: solid 0.5px #000;">
<label>ข้อที่ 6) ข้อใดบอกถึงวิธีการเชื่อมต่อเครือข่าย LAN ได้ถูกต้องที่สุด</label>
<div class="chk1">
     <label><input type="radio" class="radio-inline" name="R6" ONCLICK="A6='1'"><span class="outside"><span class="inside"></span></span>ก. การเชื่อมต่อระหว่างเครือข่ายทั่วโลกเข้าด้วยกัน</label>
     <label><input type="radio" class="radio-inline" name="R6" ONCLICK="A6='2'"><span class="outside"><span class="inside"></span></span>ข. การเชื่อมต่อเครื่องคอมพิวเตอร์และอุปกรณ์สื่อสารที่อยู่ในพื้นที่ใกล้เคียง</label>
     <label><input type="radio" class="radio-inline" name="R6" ONCLICK="A6='3'"><span class="outside"><span class="inside"></span></span>ค. การกำหนดกลุ่มเครือข่ายย่อยในเครือข่ายหลักเดียวกัน</label>
     <label><input type="radio" class="radio-inline" name="R6" ONCLICK="A6='4'"><span class="outside"><span class="inside"></span></span>ง. การเชื่อมต่อเครือข่ายส่วนตัวเข้าด้วยกันผ่านอินเทอร์เน็ต</label>
</div>
<HR align="center" WIDTH="95%" style="border: solid 0.5px #000;">
<label>ข้อที่ 7) โครงสร้างแบบไร้สายแบ่งออกเป็นกี่แบบ</label>
<div class="chk1">
     <label><input type="radio" class="radio-inline" name="R7" ONCLICK="A7='1'"><span class="outside"><span class="inside"></span></span>ก. ติดตั้งเครื่องแม่ข่ายให้บริการแก่ทุกคนในบ้าน</label>
     <label><input type="radio" class="radio-inline" name="R7" ONCLICK="A7='2'"><span class="outside"><span class="inside"></span></span>ข. เชื่อมต่อสายสัญญาณมาจากที่ทำงาน</label>
     <label><input type="radio" class="radio-inline" name="R7" ONCLICK="A7='3'"><span class="outside"><span class="inside"></span></span>ค. ใช้บริการสายเช่าจากผู้ให้บริการ</label>
     <label><input type="radio" class="radio-inline" name="R7" ONCLICK="A7='4'"><span class="outside"><span class="inside"></span></span>ง. ใช้สายโทรศัพท์ในการเชื่อมต่อเข้าสู่เครือข่าย</label>
</div>
<HR align="center" WIDTH="95%" style="border: solid 0.5px #000;">
<label>ข้อที่ 8) ข้อใดเป็นวิธีการเชื่อมต่ออินเทอร์เน็ตใช้ที่โรงเรียน</label>
<div class="chk1">
     <label><input type="radio" class="radio-inline" name="R8" ONCLICK="A8='1'"><span class="outside"><span class="inside"></span></span>ก. เชื่อมต่ออินเทอร์เน็ตผ่านมือถือระบบ 4G</label>
     <label><input type="radio" class="radio-inline" name="R8" ONCLICK="A8='2'"><span class="outside"><span class="inside"></span></span>ข. เชื่อมต่อแบบเพียร์ทูเพียร์</label>
     <label><input type="radio" class="radio-inline" name="R8" ONCLICK="A8='3'"><span class="outside"><span class="inside"></span></span>ค. ติดตั้งเครื่องให้บริการและขอบริการสายเช่าจากผู้ให้บริการ</label>
     <label><input type="radio" class="radio-inline" name="R8" ONCLICK="A8='4'"><span class="outside"><span class="inside"></span></span>ง. ใช้สายโทรศัพท์ในการเชื่อมต่อเข้าสู่เครือข่าย</label>
</div>
<HR align="center" WIDTH="95%" style="border: solid 0.5px #000;">
<label>ข้อที่ 9) ข้อใดเป็นวิธีการเชื่อมต่ออินเทอร์เน็ตแบบไร้สายผ่านเครื่องโทรศัพท์บ้านเคลื่อนที่</label>
<div class="chk1">
     <label><input type="radio" class="radio-inline" name="R9" ONCLICK="A9='1'"><span class="outside"><span class="inside"></span></span>ก. การเชื่อมต่อผ่านโมเด็มชนิด PCMCIA ของ PCT</label>
     <label><input type="radio" class="radio-inline" name="R9" ONCLICK="A9='2'"><span class="outside"><span class="inside"></span></span>ข. การเชื่อมต่ออินเทอร์เน็ตผ่านมือถือระบบ 4G</label>
     <label><input type="radio" class="radio-inline" name="R9" ONCLICK="A9='3'"><span class="outside"><span class="inside"></span></span>ค. เป็นการเชื่อมต่อเครือข่ายแบบไคล์เอนท์เซิร์ฟเวอร์</label>
     <label><input type="radio" class="radio-inline" name="R9" ONCLICK="A9='4'"><span class="outside"><span class="inside"></span></span>ง. การเชื่อมต่ออินเทอร์เน็ตผ่านสายโทรศัพท์</label>
</div>
<HR align="center" WIDTH="95%" style="border: solid 0.5px #000;">
<label>ข้อที่ 10) ข้อใดเป็นวิธีการใช้งานอินเทอร์เน็ตผ่านโทรศัพท์มือถือโดยตรง </label>
<div class="chk1">
     <label><input type="radio" class="radio-inline" required="" name="R10" ONCLICK="A10='1'"><span class="outside"><span class="inside"></span></span>ก. สมัครใช้บริการแล้วเปิดใช้งาน Cellular Data ในมือถือ</label>
     <label><input type="radio" class="radio-inline" name="R10" ONCLICK="A10='2'"><span class="outside"><span class="inside"></span></span>ข. การเชื่อมต่ออินเทอร์เน็ตผ่านสายโทรศัพท์</label>
     <label><input type="radio" class="radio-inline" name="R10" ONCLICK="A10='3'"><span class="outside"><span class="inside"></span></span>ค. ติดต่อ ISP และขอใช้บริการสายเช่า</label>
     <label><input type="radio" class="radio-inline" name="R10" ONCLICK="A10='4'"><span class="outside"><span class="inside"></span></span>ง. การเชื่อมต่อผ่านโมเด็มชนิด PCMCIA ของ PCT</label>
</div><HR align="center" WIDTH="95%" style="border: solid 0.5px #000;">
<div align="center">
  <button name="markbtn" ONCLICK="MarkAnswers()" class="btn btn-warning">ตรวจคำตอบ</button>
</div>
</form>      

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


<?php include "layer/footer.php" ?>