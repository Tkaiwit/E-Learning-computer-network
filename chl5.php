<?php include "layer/header.php" ?>
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
   if (A1.toLowerCase()=="4")
   {
      i=i+1;
   }
   if (A2.toLowerCase()=="1")
   {
      i=i+1;
   }
   if (A3.toLowerCase()=="1")
   {
      i=i+1;
   }
   if (A4.toLowerCase()=="3")
   {
      i=i+1;
   }
   if (A5.toLowerCase()=="3")
   {
      i=i+1;
   }
   if (A6.toLowerCase()=="2")
   {
      i=i+1;
   }
   if (A7.toLowerCase()=="2")
   {
      i=i+1;
   }
   if (A8.toLowerCase()=="3")
   {
      i=i+1;
   }
   if (A9.toLowerCase()=="4")
   {
      i=i+1;
   }
   if (A10.toLowerCase()=="1")
   {
      i=i+1;
   }
   Answers.document.write("<BODY BGCOLOR=#B6F88B ALINK=#0080C0 LINK=#0080C0 VLINK=#0080C0>");
   Answers.document.write("<p align=Left><B><FONT SIZE=3 FACE="+speechstr+"MS Sans Serif"+speechstr+" COLOR=#0033CC>ตรวจคำตอบ..."+CkAns.toString()+"</B></FONT></p>");
   Answers.document.write("<p align=Left><B><FONT SIZE=3 FACE="+speechstr+"MS Sans Serif"+speechstr+" COLOR=#0033CC>คุณได้คะแนน "+i.toString()+" / "+t.toString()+"</B></FONT></p>");
   var currentGrade=new String;
   var currentComment=new String;
   currentGrade="";
   currentComment="";
   if (i>=0)
   {
      currentGrade="F";
      currentComment=" แย่จังทำไม่ได้เลย !";
   }
   if (i>=5)
   {
      currentGrade="D";
      currentComment=" ทำได้น้อยมาก ควรปรับปรุง";
   }
   if (i>=6)
   {
      currentGrade="C";
      currentComment=" ทำได้ไม่เลวเลย อยู่ในระดับพอใช้";
   }
   if (i>=7)
   {
      currentGrade="B";
      currentComment=" อยู่ในระดับดีมาก !";
   }
   if (i>=8)
   {
      
      alertify.alert('<b>ตรวจคำตอบ </b> <hr />',speechstr+speechstr+"ตรวจคำตอบครั้งที่ "+CkAns.toString()+" <br />"+"คุณได้คะแนน "+speechstr+i.toString()+"/"+total.toString()+"<hr />").set('onok', function(closeEvent){ window.location.href="ch5.php"; } ); 
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
      <h1 align="center" style="color: #000;">แบบทดสอบก่อนเรียนหน่วยที่ 5</h1>
      <h2 align="center">โปรโตคอล</h2><hr style="border: solid 1px #000;">
<form name="form1" ONSUBMIT="MarkAnswers()" style="color: #000;">
    <label>ข้อที่ 1) ข้อใดบอกความหมายของโปรโตคอล ได้ถูกต้องที่สุด</label>
   <br>
   <div class="chk1">
     <label><input type="radio" class="radio-inline" required="" name="R1" ONCLICK="A1='1'"><span class="outside"><span class="inside"></span></span>ก. ข้อใดบอกความหมายของโปรโตคอล ได้ถูกต้องที่สุด</label>
     <label><input type="radio" class="radio-inline" required="" name="R1" ONCLICK="A1='2'"><span class="outside"><span class="inside"></span></span>ข. หมายเลขที่ใช้ระบุตําแหน่งเครื่องและเป็นหมายเลขที่ไม่ซ้ำกัน</label>
     <label><input type="radio" class="radio-inline" name="R1" ONCLICK="A1='3'"><span class="outside"><span class="inside"></span></span>ค. รูปแบบการเชื่อมต่อเครือข่าย</label>
     <label><input type="radio" class="radio-inline" name="R1" ONCLICK="A1='4'"><span class="outside"><span class="inside"></span></span>ง. มาตรฐานหรือข้อตกลงเกี่ยวกับการสื่อสารข้อมูล</label>
     </div>
<HR align="center" WIDTH="95%" style="border: solid 0.5px #000;">
<label>ข้อที่ 2) ข้อใดไม่ใช่ส่วนประกอบโปรโตคอล</label>
<div class="chk1">
     <label><input type="radio" class="radio-inline" name="R2" ONCLICK="A2='1'"><span class="outside"><span class="inside"></span></span>ก. Comment</label>
     <label><input type="radio" class="radio-inline" name="R2" ONCLICK="A2='2'"><span class="outside"><span class="inside"></span></span>ข. Timing</label>
     <label><input type="radio" class="radio-inline" name="R2" ONCLICK="A2='3'"><span class="outside"><span class="inside"></span></span>ค. Syntax</label>
     <label><input type="radio" class="radio-inline" name="R2" ONCLICK="A2='4'"><span class="outside"><span class="inside"></span></span>ง. Semantics</label>
</div>
<HR align="center" WIDTH="95%" style="border: solid 0.5px #000;">
<label>ข้อที่ 3) ข้อใดบอกความหมายของโปรโตคอล TCP/IP ได้ถูกต้องที่สุด</label>
<div class="chk1">
     <label><input type="radio" class="radio-inline" name="R3" ONCLICK="A3='1'"><span class="outside"><span class="inside"></span></span>ก. ชุดของโปรโตคอลสําหรับการแลกเปลี่ยนข้อมูลบนเครือข่ายอินเทอร์เน็ต</label>
     <label><input type="radio" class="radio-inline" name="R3" ONCLICK="A3='2'"><span class="outside"><span class="inside"></span></span>ข. เป็นโปรโตคอลที่บริการด้านการโอนถ่ายแฟ้มข้อมูล</label>
     <label><input type="radio" class="radio-inline" name="R3" ONCLICK="A3='3'"><span class="outside"><span class="inside"></span></span>ค. เป็นโปรโตคอลที่เชื่อมต่อกับปลายทางก่อนจะส่งข้อมูลจริง</label>
     <label><input type="radio" class="radio-inline" name="R3" ONCLICK="A3='4'"><span class="outside"><span class="inside"></span></span>ง. เป็นหมายเลขที่ใช้ระบุตําแหน่งเครื่องและเป็นหมายเลขที่ไม่ซ้ำกัน</label>
</div>
<HR align="center" WIDTH="95%" style="border: solid 0.5px #000;">
<label>ข้อที่ 4) ข้อใดบอกความหมายของโปรโตคอล TCP ได้ถูกต้องที่สุด</label>
<div class="chk1">
     <label><input type="radio" class="radio-inline" name="R4" ONCLICK="A4='1'"><span class="outside"><span class="inside"></span></span>ก. เป็นข้อกําหนดที่ใช้สําหรับเรียกดูเอกสาร</label>
     <label><input type="radio" class="radio-inline" name="R4" ONCLICK="A4='2'"><span class="outside"><span class="inside"></span></span>ข. เป็นโปรโตคอลที่ประกอบด้วยหมายเลขพอร์ตต้นทางและปลายทาง</label>
     <label><input type="radio" class="radio-inline" name="R4" ONCLICK="A4='3'"><span class="outside"><span class="inside"></span></span>ค. เป็นโปรโตคอลที่เชื่อมต่อกับปลายทางก่อนจะส่งข้อมูลจริง</label>
     <label><input type="radio" class="radio-inline" name="R4" ONCLICK="A4='4'"><span class="outside"><span class="inside"></span></span>ง. เป็นโปรโตคอลที่บริการด้านการโอนถ่ายแฟ้มข้อมูล</label>
</div>
<HR align="center" WIDTH="95%" style="border: solid 0.5px #000;">
<label>ข้อที่ 5) ข้อใดอธิบายลักษณะของ IP Address ได้ถูกต้องที่สุด</label>
<div class="chk1">
     <label><input type="radio" class="radio-inline" name="R5" ONCLICK="A5='1'"><span class="outside"><span class="inside"></span></span>ก. เป็นกลุ่มตัวเลขและตัวอักษรที่ใช้ระบุตัวตนของเครื่องคอมพิวเตอร์</label>
     <label><input type="radio" class="radio-inline" name="R5" ONCLICK="A5='2'"><span class="outside"><span class="inside"></span></span>ข. เป็นหมายเลขที่มีลักษณะเดียวกันกับบาร์โค้ด</label>
     <label><input type="radio" class="radio-inline" name="R5" ONCLICK="A5='3'"><span class="outside"><span class="inside"></span></span>ค. เป็นหมายเลขที่ใช้ระบุตําแหน่งเครื่องและเป็นหมายเลขที่ไม่ซ้ำกัน</label>
     <label><input type="radio" class="radio-inline" name="R5" ONCLICK="A5='4'"><span class="outside"><span class="inside"></span></span>ง. เป็นกระบวนการแบ่งเป็นซับเน็ตของเครือข่าย</label>
</div>
<HR align="center" WIDTH="95%" style="border: solid 0.5px #000;">
<label>ข้อที่ 6) ข้อใดอธิบายลักษณะของ Subnet Mask ได้ถูกต้องที่สุด</label>
<div class="chk1">
     <label><input type="radio" class="radio-inline" name="R6" ONCLICK="A6='1'"><span class="outside"><span class="inside"></span></span>ก. เป็นช่วงของหมายเลขไอพีที่ใช้งานภายใน</label>
     <label><input type="radio" class="radio-inline" name="R6" ONCLICK="A6='2'"><span class="outside"><span class="inside"></span></span>ข. เป็นกระบวนการแบ่งเป็นซับเน็ตของเครือข่าย</label>
     <label><input type="radio" class="radio-inline" name="R6" ONCLICK="A6='3'"><span class="outside"><span class="inside"></span></span>ค. เป็นหมายเลขไอพีจริง</label>
     <label><input type="radio" class="radio-inline" name="R6" ONCLICK="A6='4'"><span class="outside"><span class="inside"></span></span>ง. เป็นหมายเลขที่ใช้ระบุตําแหน่งเครื่องและเป็นหมายเลขที่ไม่ซ้ำกัน</label>
</div>
<HR align="center" WIDTH="95%" style="border: solid 0.5px #000;">
<label>ข้อที่ 7) ข้อใดเป็นหมายเลข Private Address</label>
<div class="chk1">
     <label><input type="radio" class="radio-inline" name="R7" ONCLICK="A7='1'"><span class="outside"><span class="inside"></span></span>ก. เป็นหมายเลขที่ใช้ระบุการแบ่งซับเน็ตของเครือข่าย</label>
     <label><input type="radio" class="radio-inline" name="R7" ONCLICK="A7='2'"><span class="outside"><span class="inside"></span></span>ข. เป็นช่วงของหมายเลขไอพีที่ใช้งานภายใน</label>
     <label><input type="radio" class="radio-inline" name="R7" ONCLICK="A7='3'"><span class="outside"><span class="inside"></span></span>ค. เป็นกลุ่มตัวเลขและตัวอักษรที่ใช้ระบุตัวตนของเครื่องคอมพิวเตอร์</label>
     <label><input type="radio" class="radio-inline" name="R7" ONCLICK="A7='4'"><span class="outside"><span class="inside"></span></span>ง. เป็นหมายเลขไอพีจริง</label>
</div>
<HR align="center" WIDTH="95%" style="border: solid 0.5px #000;">
<label>ข้อที่ 8) ข้อใดบอกความหมายของโปรโตคอล FTP ได้ถูกต้องที่สุด</label>
<div class="chk1">
     <label><input type="radio" class="radio-inline" name="R8" ONCLICK="A8='1'"><span class="outside"><span class="inside"></span></span>ก. เป็นโปรโตคอลที่ประกอบด้วยหมายเลขพอร์ตต้นทางและปลายทาง</label>
     <label><input type="radio" class="radio-inline" name="R8" ONCLICK="A8='2'"><span class="outside"><span class="inside"></span></span>ข. เป็นโปรโตคอลที่เชื่อมต่อกับปลายทางก่อนจะส่งข้อมูลจริง </label>
     <label><input type="radio" class="radio-inline" name="R8" ONCLICK="A8='3'"><span class="outside"><span class="inside"></span></span>ค. เป็นโปรโตคอลที่บริการด้านการโอนถ่ายแฟ้มข้อมูล</label>
     <label><input type="radio" class="radio-inline" name="R8" ONCLICK="A8='4'"><span class="outside"><span class="inside"></span></span>ง. เป็นข้อกําหนดที่ใช้สําหรับเรียกดูเอกสารจากเวิลด์ไวด์เว็บ</label>
</div>
<HR align="center" WIDTH="95%" style="border: solid 0.5px #000;">
<label>ข้อที่ 9) ข้อใดบอกความหมายของโปรโตคอล HTTP ได้ถูกต้องที่สุด</label>
<div class="chk1">
     <label><input type="radio" class="radio-inline" name="R9" ONCLICK="A9='1'"><span class="outside"><span class="inside"></span></span>ก. เป็นโปรโตคอลที่ประกอบด้วยหมายเลขพอร์ตต้นทางและปลายทาง</label>
     <label><input type="radio" class="radio-inline" name="R9" ONCLICK="A9='2'"><span class="outside"><span class="inside"></span></span>ข. เป็นชุดของโปรโตคอลสําหรับการแลกเปลี่ยนข้อมูลบนเครือข่ายอินเทอร์เน็ต</label>
     <label><input type="radio" class="radio-inline" name="R9" ONCLICK="A9='3'"><span class="outside"><span class="inside"></span></span>ค. เป็นโปรโตคอลที่บริการด้านการโอนถ่ายแฟ้มข้อมูล</label>
     <label><input type="radio" class="radio-inline" name="R9" ONCLICK="A9='4'"><span class="outside"><span class="inside"></span></span>ง. เป็นข้อกําหนดที่ใช้สําหรับเรียกดูเอกสารจากเวิลด์ไวด์เว็บ</label>
</div>
<HR align="center" WIDTH="95%" style="border: solid 0.5px #000;">
<label>ข้อที่ 10) ข้อใดบอกความหมายของโปรโตคอล UDP ได้ถูกต้องที่สุด</label>
<div class="chk1">
     <label><input type="radio" class="radio-inline" required="" name="R10" ONCLICK="A10='1'"><span class="outside"><span class="inside"></span></span>ก. เป็นโปรโตคอลที่ประกอบด้วยหมายเลขพอร์ตต้นทางและปลายทาง</label>
     <label><input type="radio" class="radio-inline" name="R10" ONCLICK="A10='2'"><span class="outside"><span class="inside"></span></span>ข. เป็นข้อกําหนดที่ใช้สําหรับเรียกดูเอกสารจากเวิลด์ไวด์เว็บ</label>
     <label><input type="radio" class="radio-inline" name="R10" ONCLICK="A10='3'"><span class="outside"><span class="inside"></span></span>ค. เป็นโปรโตคอลที่เชื่อมต่อกับปลายทางก่อนจะส่งข้อมูลจริง</label>
     <label><input type="radio" class="radio-inline" name="R10" ONCLICK="A10='4'"><span class="outside"><span class="inside"></span></span>ง. เป็นโปรโตคอลที่บริการด้านการโอนถ่ายแฟ้มข้อมูล</label>
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