<?php include "layer/header.php" ?>
<style>
          .not-active {
            pointer-events: none;
            cursor: default;
            text-decoration: none;
            color: black;
          }

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
  border: 2px solid #FF5733;
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
  background: #FFC300;
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
if (A1.toLowerCase()=="1")
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
   if (A4.toLowerCase()=="1")
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
   if (A8.toLowerCase()=="4")
   {
      i=i+1;
   }
   if (A9.toLowerCase()=="3")
   {
      i=i+1;
   }
   if (A10.toLowerCase()=="3")
   {
      i=i+1;
   }

      alertify.alert('<b>ตรวจคำตอบ </b> <hr />',speechstr+speechstr+"ตรวจคำตอบครั้งที่ "+CkAns.toString()+" <br />"+"คุณได้คะแนน "+speechstr+i.toString()+"/"+total.toString()+"<hr />").set('onok', function(closeEvent){ window.location.href="ch1.php"; } ); 
return false;
  }
</script>
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
      </ul>
    </div>
    <div class="detal-b col-sm-6 well">
      <h1 align="center" style="color: #000;">แบบทดสอบก่อนเรียนหน่วยที่ 1 
      </h1>
      <h2 align="center">พื้นฐานระบบเครื่อข่ายคอมพิวเตอร์</h2>
      <hr style="border: solid 1px #000;">
<form name="form1" onsubmit="return MarkAnswerss()">
    <label>ข้อที่ 1) ข้อใดบอกถึงความหมายของระบบเครือข่ายคอมพิวเตอร์ได้ถูกต้องที่สุด</label>
   <br>
   <div class="chk1">
     <label><input type="radio" class="radio-inline" required="" name="R1" ONCLICK="A1='1'"><span class="outside"><span class="inside"></span></span>ก. การนำคอมพิวเตอร์ตั้งแต่สองเครื่องขึ้นไปมาเชื่อมต่อกัน</label>
     <label><input type="radio" class="radio-inline" name="R1" ONCLICK="A1='2'"><span class="outside"><span class="inside"></span></span>ข. รูปแบบการเชื่อมต่อทางกายภาพของคอมพิวเตอร์</label>
     <label><input type="radio" class="radio-inline" name="R1" ONCLICK="A1='3'"><span class="outside"><span class="inside"></span></span>ค. อุปกรณ์อิเล็กทรอนิกส์ที่ทำงานตามคำสั่ง</label>
     <label><input type="radio" class="radio-inline" name="R1" ONCLICK="A1='4'"><span class="outside"><span class="inside"></span></span>ง. รูปแบบการทำงานร่วมกันในสถานที่ต่าง ๆ</label>
     </div>
<HR align="center" WIDTH="95%" style="border: solid 0.5px #000;">
<label>ข้อที่ 2) ข้อใดไม่ใช่ประโยชน์ของเครือข่ายคอมพิวเตอร์</label>
<div class="chk1">
     <label><input type="radio" class="radio-inline" name="R2" ONCLICK="A2='1'"><span class="outside"><span class="inside"></span></span>ก. สร้างความทันสมัยในองค์กร</label>
     <label><input type="radio" class="radio-inline" name="R2" ONCLICK="A2='2'"><span class="outside"><span class="inside"></span></span>ข. ลดต้นทุนและค่าใช้จ่าย</label>
     <label><input type="radio" class="radio-inline" name="R2" ONCLICK="A2='3'"><span class="outside"><span class="inside"></span></span>ค. ติดต่อสื่อสารระหว่างกัน</label>
     <label><input type="radio" class="radio-inline" name="R2" ONCLICK="A2='4'"><span class="outside"><span class="inside"></span></span>ง. แบ่งปันทรัพยากรซึ่งกันและกัน</label>
</div>
<HR align="center" WIDTH="95%" style="border: solid 0.5px #000;">
<label>ข้อที่ 3) ข้อใดบอกถึงหลักการทำงานของระบบเครือข่ายได้ถูกต้องที่สุด</label>
<div class="chk1">
     <label><input type="radio" class="radio-inline" name="R3" ONCLICK="A3='1'"><span class="outside"><span class="inside"></span></span>ก. การแปลงสัญญาณดิจิตอลเป็นสัญญาณอะนาล็อกเพื่อส่งไปตามสายสัญญาณ</label>
     <label><input type="radio" class="radio-inline" name="R3" ONCLICK="A3='2'"><span class="outside"><span class="inside"></span></span>ข. การแปลงสัญญาณจากอุปกรณ์อินพุทเพื่อส่งให้หน่วยประมวลผล</label>
     <label><input type="radio" class="radio-inline" name="R3" ONCLICK="A3='3'"><span class="outside"><span class="inside"></span></span>ค. ส่งข้อมูลผ่านสื่อกลาง โดยจะต้องมีข้อตกลงหรือกฎเกณฑ์วิธีการสื่อสารระหว่างกัน</label>
     <label><input type="radio" class="radio-inline" name="R3" ONCLICK="A3='4'"><span class="outside"><span class="inside"></span></span>ง. การรับข้อมูลเข้ามาประมวลผลแล้วส่งผลออกแสดงทางอุปกรณ์แสดงผล</label>
</div>
<HR align="center" WIDTH="95%" style="border: solid 0.5px #000;">
<label>ข้อที่ 4) ข้อใดไม่ใช่องค์ประกอบพื้นฐานการสื่อสารข้อมูล</label>
<div class="chk1">
     <label><input type="radio" class="radio-inline" name="R4" ONCLICK="A4='1'"><span class="outside"><span class="inside"></span></span>ก. บุคคลที่เกี่ยวข้อง</label>
     <label><input type="radio" class="radio-inline" name="R4" ONCLICK="A4='2'"><span class="outside"><span class="inside"></span></span>ข. สื่อกลาง</label>
     <label><input type="radio" class="radio-inline" name="R4" ONCLICK="A4='3'"><span class="outside"><span class="inside"></span></span>ค. ผู้ส่ง</label>
     <label><input type="radio" class="radio-inline" name="R4" ONCLICK="A4='4'"><span class="outside"><span class="inside"></span></span>ง. โปรโตคอล</label>
</div>
<HR align="center" WIDTH="95%" style="border: solid 0.5px #000;">
<label>ข้อที่ 5) ข้อใดกล่าวถึงคุณลักษณะทั่วไปของแบบจำลองโอเอสไอ (OSI Model) ได้ถูกต้องที่สุด</label>
<div class="chk1">
     <label><input type="radio" class="radio-inline" name="R5" ONCLICK="A5='1'"><span class="outside"><span class="inside"></span></span>ก. คุณสมบัติและมาตรฐานการทำงานภายในระบบการสื่อสาร</label>
     <label><input type="radio" class="radio-inline" name="R5" ONCLICK="A5='2'"><span class="outside"><span class="inside"></span></span>ข. รูปแบบการเชื่อมเครือข่ายคอมพิวเตอร์</label>
     <label><input type="radio" class="radio-inline" name="R5" ONCLICK="A5='3'"><span class="outside"><span class="inside"></span></span>ค. องค์การระหว่างประเทศว่าด้วยการมาตรฐาน</label>
     <label><input type="radio" class="radio-inline" name="R5" ONCLICK="A5='4'"><span class="outside"><span class="inside"></span></span>ง. ระเบียบวิธีการ หรือข้อตกลงในการสื่อสารข้อมูล</label>
</div>
<HR align="center" WIDTH="95%" style="border: solid 0.5px #000;">
<label>ข้อที่ 6) ข้อใดบอกถึงความหมายของ Physical Layer ได้ถูกต้องที่สุด</label>
<div class="chk1">
     <label><input type="radio" class="radio-inline" name="R6" ONCLICK="A6='1'"><span class="outside"><span class="inside"></span></span>ก. ติดต่อกับผู้ใช้ในระดับโปรแกรมประยุกต์</label>
     <label><input type="radio" class="radio-inline" name="R6" ONCLICK="A6='2'"><span class="outside"><span class="inside"></span></span>ข. เครื่องมือที่ใช้ในการตรวจสอบ</label>
     <label><input type="radio" class="radio-inline" name="R6" ONCLICK="A6='3'"><span class="outside"><span class="inside"></span></span>ค. เชื่อมต่อคอมพิวเตอร์ด้านรับและด้านส่งเข้าหากันผ่านระบบเครือข่าย</label>
     <label><input type="radio" class="radio-inline" name="R6" ONCLICK="A6='4'"><span class="outside"><span class="inside"></span></span>ง. เชื่อมต่อรับส่งข้อมูลในระดับฮาร์ดแวร์</label>
</div>
<HR align="center" WIDTH="95%" style="border: solid 0.5px #000;">
<label>ข้อที่ 7) ข้อใดบอกถึงความหมายของ Data Link Layer ได้ถูกต้องที่สุด</label>
<div class="chk1">
     <label><input type="radio" class="radio-inline" name="R7" ONCLICK="A7='1'"><span class="outside"><span class="inside"></span></span>ก. ทำหน้าที่ตกลงกับคอมพิวเตอร์อีกด้านหนึ่งในระดับชั้นเดียวกัน</label>
     <label><input type="radio" class="radio-inline" name="R7" ONCLICK="A7='2'"><span class="outside"><span class="inside"></span></span>ข. เชื่อมต่อคอมพิวเตอร์ด้านรับและด้านส่งเข้าหากันผ่านระบบเครือข่าย</label>
     <label><input type="radio" class="radio-inline" name="R7" ONCLICK="A7='3'"><span class="outside"><span class="inside"></span></span>ค. การเชื่อมต่อทางกายภาพระหว่างคอมพิวเตอร์</label>
     <label><input type="radio" class="radio-inline" name="R7" ONCLICK="A7='4'"><span class="outside"><span class="inside"></span></span>ง. เชื่อมต่อรับส่งข้อมูลในระดับฮาร์ดแวร์</label>
</div>
<HR align="center" WIDTH="95%" style="border: solid 0.5px #000;">
<label>ข้อที่ 8) ข้อใดบอกถึงความหมายของ Network Layer ได้ถูกต้องที่สุด</label>
<div class="chk1">
     <label><input type="radio" class="radio-inline" name="R8" ONCLICK="A8='1'"><span class="outside"><span class="inside"></span></span>ก. ควบคุมจังหวะในการรับส่งข้อมูลของคอมพิวเตอร์ทั้งสองด้าน</label>
     <label><input type="radio" class="radio-inline" name="R8" ONCLICK="A8='2'"><span class="outside"><span class="inside"></span></span>ข. ทำหน้าที่ตกลงกับคอมพิวเตอร์อีกด้านหนึ่งในระดับชั้นเดียวกัน</label>
     <label><input type="radio" class="radio-inline" name="R8" ONCLICK="A8='3'"><span class="outside"><span class="inside"></span></span>ค. เชื่อมต่อการรับส่งข้อมูลระดับสูงจาก Layer 5</label>
     <label><input type="radio" class="radio-inline" name="R8" ONCLICK="A8='4'"><span class="outside"><span class="inside"></span></span>ง. เชื่อมต่อคอมพิวเตอร์ด้านรับและด้านส่งเข้าหากันผ่านระบบเครือข่าย</label>
</div>
<HR align="center" WIDTH="95%" style="border: solid 0.5px #000;">
<label>ข้อที่ 9) ข้อใดบอกถึงความหมายของ Application Layer ได้ถูกต้องที่สุด</label>
<div class="chk1">
     <label><input type="radio" class="radio-inline" name="R9" ONCLICK="A9='1'"><span class="outside"><span class="inside"></span></span>ก. ควบคุมจังหวะในการรับส่งข้อมูลของคอมพิวเตอร์ทั้งสองด้าน</label>
     <label><input type="radio" class="radio-inline" name="R9" ONCLICK="A9='2'"><span class="outside"><span class="inside"></span></span>ข. เชื่อมต่อคอมพิวเตอร์ด้านรับและด้านส่งเข้าหากันผ่านระบบเครือข่าย</label>
     <label><input type="radio" class="radio-inline" name="R9" ONCLICK="A9='3'"><span class="outside"><span class="inside"></span></span>ค. ติดต่อกับผู้ใช้ในระดับโปรแกรมประยุกต์</label>
     <label><input type="radio" class="radio-inline" name="R9" ONCLICK="A9='4'"><span class="outside"><span class="inside"></span></span>ง. เชื่อมต่อการรับส่งข้อมูลระดับสูงจาก Layer 5</label>
</div>
<HR align="center" WIDTH="95%" style="border: solid 0.5px #000;">
<label>ข้อที่ 10) ข้อใดไม่ใช่องค์ประกอบของระบบเครือข่ายพื้นฐาน</label>
<div class="chk1">
     <label><input type="radio" class="radio-inline"  name="R10" ONCLICK="A10='1'"><span class="outside"><span class="inside"></span></span>ก. สายสัญญาณ</label>
     <label><input type="radio" class="radio-inline" name="R10" ONCLICK="A10='2'"><span class="outside"><span class="inside"></span></span>ข. โปรโตคอล</label>
     <label><input type="radio" class="radio-inline" name="R10" ONCLICK="A10='3'"><span class="outside"><span class="inside"></span></span>ค. เอกสารประกอบ</label>
     <label><input type="radio" class="radio-inline" name="R10" ONCLICK="A10='4'"><span class="outside"><span class="inside"></span></span>ง.เครื่องคอมพิวเตอร์</label>
</div><HR align="center" WIDTH="95%" style="border: solid 0.5px #000;">
<div align="center">
  <button type="submit" class="btn btn-warning">ตรวจคำตอบ</button>
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