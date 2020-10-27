<?php include "layer/header.php" ?>
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
                if(!empty($_SESSION['lastName'])){
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
          if(!empty($_SESSION['lastName'])){}else{
       ?>
         <li><a class="not-active"><?php echo $roww['unitName']; ?></a></li> 
    <?php  } }?>
      </ul>
    </div>
    <div class="detal-b col-sm-6 well">
      <div id="page1" class="tabcontent">
      <div align="center">
        <label><h3><b>หน่วยที่ 5 เรื่อง โปรโตคอล</b></h3></label>
      </div>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">หัวข้อเรื่อง (Topics)</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
       5.1 ความหมายของโปโตคอล <br>
       5.2 โปรโตคอล TCP/IP (Transfer Control Protocol/ Internet Protocol) <br>
       5.3 โปรโตคอล FTP (File Transfer Protocol) <br>
       5.4 โปโตคอล HTTP (Hypertext Transfer Protocol) <br>
       5.5 โปโตคอล UDP (User Datagram Protocol) 
      </p>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">แนวคิดสำคัญ (Main Idea)</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;โปรโตคอล (Protocol) หมายถึง ข้อกำหนดหรือข้อตกลงในการสื่อสารระหว่างคอมพิวเตอร์ ซึ่งมีหลายหลายคล้ายกับมนุษย์ที่มีทั้งภาษษไทย ภาษาอังกฤษ และภาษามือเป็นต้น โดยมนุษย์สื่อสารกันใหเกิดความเข้าใจได้จะต้องใช้ภาษาเดียวกัน ในกรณีที่คอมพิวเตอร์ 2 เครื่อง ต้องการสื่อสารกันแต่ใช้คนละภาษาจะต้องมีตัวกลางในการแปลงถ้าเทียบกับภาษามนุษย์ก็คือล้าม ซึ้งอาจจะเป็นเครื่องเซิฟเวอร์สำหรับทำหน้าที่นี้โดยเฉพาะหรืออาจจะเป็นโปรแกรมเมอร์หรือไดร์ฟเวอร์สำหรับติดตั้งเพิ่มเติมในเครื่องคอมพิวเตอร์
      </p>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">สมรรถนะย่อย (Element of Competency)</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        1. แสดงความรู้เกี่ยวกับโปรโตคอล <br>
        2. กำหนดหมายเลข IP ให้กับเครื่องคอมพิวเตอร์ที่เชื่อมต่อในเครือข่าย
      </p><hr>
    </div>

    <div id="page2" class="tabcontent">
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">จุดประสงค์เชิงพฤติกรรม (Behaviral Objectives)</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
      1. บอกความหมายของโปรโตคอลได้ถูกต้อง <br>
      2. บอกความหมายของโปรโตคอล TCP/IP ได้ถูกต้อง <br>
      3. บอกความหมายของโปรโตคอล FTP ได้ถูกต้อง <br>
      4. บอกความหมายของโปรโตคอล HTTP ได้ถูกต้อง <br>
      5. บอกความหมายของโปรโตคอล UDP ได้ถูกต้อง
      </p>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">เนื้อหาสาระ (Content)</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ระบบเครือข่ายคอมพิวเตอร์ เป็นระบบที่จะต้องมีการสื่อสารข้อมูลระหว่างเครื่องคอมพิวเตอร์ที่ต่ออยู่ในเครือข่ายที่มีฮาร์ดแวร์หรือซอฟต์แวร์ที่แตกต่าง ดังนั้นเพื่อให้การสื่อสารสามารถติดต่อสื่อสารกันได้อย่างมีประสิทธิภาพสามารถตีความหมายได้ตรงกัน จะต้องมีการกำหนดระเบียบวิธีการติดต่อสื่อสารขึ้นมา
      </p>
      <hr>
    </div>

    <div id="page3" class="tabcontent">
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">5.1 ความหมายของโปโตคอล</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;โปรโตคอล (Protocol) หมาย ถึง ข้อกำหนดหรือข้อตกลงในการสื่อสารระหว่างคอมพิวเตอร์ ซึ่งมีหลายชนิดคล้ายกับภาษามนุษย์ที่มีทั้ง ภาษาไทย ภาษาอังกฤษ และภาษามือ เป็นต้น โดยมนุษย์จะสื่อสารกันให้เกิดความเช้าใจได้ จะต้องใช้ภาษาเดียวกัน ในกรณีที่คอมพิวเตอร์ 2 เครื่อง ต้องการสื่อสารกันแต่ใช้คนละภาษา จะต้องมีตัวกลางในการแปลงโปรโตคอล ที่เรียกว่า Gateway ถ้า เทียบกับภาษามนุษย์ก็คือ ล่าม ซึ่งอาจะเป็นเครื่องเซิฟเวอร์สำหรับทำหน้าที่นี้โดยเฉพาะ หรืออาจะเป็นโปรแกรมเมอร์หรือไดร์ฟเวอร์สำหรับติดตั้งเพิ่มเติมในเครื่อง คอมพิวเตอร์
      </p>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;โปรโตคอลของระบบเครือข่ายมีลักษณะคล้ายคลึงกับโปรโตคอลในการสื่อสารของมนุษย์ แต่อาจตั่งกันที่ลักษณะในการแลกเปลี่ยนข้อความระหว่างกัน โดยการสื่อสารบนเครือข่ายอินเทอร์เน็ตต้องมีการนำโปรโตคอลมาใช้ในการควบคุม การส่งข้อมูลด้วย
      </p>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">5.2 โปรโตคอล TCP/IP (Transfer Control Protocol/ Internet Protocol)</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เป็นโปรโตคอลที่ใช้กันอย่างแพร่หลายในเครือข่ายขนาดใหญ่และเครือข่ายอินเทอร์เน็ต เนื่องจากมีความสามารถในการค้นหาเส้นทางไปยังเครื่องคอมพิวเตอร์ที่ร้องขอข้อมูล จึงถูกใช้เป็นโปรโตคอลหลักในเครือข่ายอินเทอร์เน็ตข้อเสียของโปรโตคอลนี้  คือ ต้องมีความรู้พื้นฐานเกี่ยวกับโปรโตคอล TCP/IP การกำหนด IP Addressอีกทั้งจะต้องมีการปรับแต่งค่าต่าง ๆ หลังจากการติดตั้งซอฟต์แวร์เครือข่าย ในที่นี้จะได้กล่าวถึงรายละเอียดและคุณสมบัติของโปรโตคอลที่สำคัญบางโปรโตคอลเท่านั้น คือ
      </p>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">5.3  โปรโตคอล FTP (File Transfer Protocol) </b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ใช้ในการรับ-ส่ง แฟ้มข้อมูลระหว่างเครื่องลูกข่ายและเครื่องเซิร์ฟเวอร์ โดยที่เครื่องเซิร์ฟเวอร์จะต้องมีโปรแกรมให้บริการ FTP (FTP Server) ติดตั้งและทำงานอยู่ เพื่อให้เครื่องลูกข่ายที่รันโปรแกรม FTP Client สามารถเข้ามาขอใช้บริการได้ นอกจากรับส่งแฟ้มข้อมูลแล้ว FTP ยังมีคำสั่งที่ใช้ในการแสดงชื่อแฟ้มข้อมูลบนเครื่องเซิร์ฟเวอร์ เปลี่ยนชื่อแฟ้มหรือลบแฟ้มข้อมูล
      </p>
      <div align="center">
        <img src="assets/img/img5-1.gif" width="400" height="250"><br>
        รูปที่ 5.1 แสดง FTP (File Transfer Protocol)
      </div><hr>
    </div>
    <div id="page4" class="tabcontent">
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">5.4 โปโตคอล HTTP (Hypertext Transfer Protocol)</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hypertext Transfer Protocol คือ โพรโทคอลสื่อสารสำหรับการแลกเปลี่ยนสารสนเทศผ่านอินเทอร์เน็ต โดยหลักแล้วใช้ในการรับเอกสารข้อความหลายมิติที่นำไปสู่การเชื่อมต่อกับ World Wide Web(WWW )จะใช้เมื่อเรียกโปรแกรมweb browser เช่น Firefox, Google Chrome, Safari,Opera และ IE Microsoft Internet Explorer เรียกดูข้อมูลหรือเว็บเพจ โปรแกรมบราวเซอร์ดังกล่าวจะใช้โปรโตคอล HTTP ซึ่งโปรโตคอลนี้ทำให้เซิร์ฟเวอร์ส่งข้อมูลมาให้บราวเซอร์ตามต้องการ และบราวเซอร์จะนำข้อมูลมาแสดงผลบนจอภาพได้อย่างถูกต้อง
ในการแลกเปลี่ยนข้อมูลกันระหว่าง Server และ Client ของ World Wide Web (Server) โดยส่งข้อมูลแบบ Clear text คือ ข้อมูลที่ทำการส่งไปนั้น ไม่ได้ทำการเข้ารหัส ทำให้สามารถถูกดักจับและอ่านข้อมูลได้ง่าย
      </p>
      <div align="center">
        <img src="assets/img/img5-2.jpg" width="400" height="250"><br>
        รูปที่ 5.2 แสดง HTTP (Hypertext Transfer Protocol)
      </div>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">5.5 โปโตคอล UDP (User Datagram Protocol)</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เป็นโปรโตคอลในระดับ Transport Layer ที่มีความแตกต่่างไปจากโปรโตคอล TCP เกือบทุกด้านโปรโตคอล UDP ทำการส่งข้อมูลโดยไม่มีการสร้างคอนเน็กชันก่อน (เรียกว่าแบบ Connectionless) ไม่มีการส่งการยืนยันว่าได้รับข้อมูลแล้ว ไม่มีการจัดเตรียมขนาดของบัฟเฟอร์สำหรับการรับส่งข้อมูลและไม่มีการจัดลำดับของข้อมูลที่ได้รับ หน้าที่ของการยืนยันว่าได้รับข้อมูลแล้วอาจถูกผลักภาระให้กับแอปพลิเคชันในเลเยอร์บนต่อไป และยังไม่สนใจในการควบคุมโฟล์ของการรับส่งข้อมูลด้วย ด้วยหลักการทำงานข้างต้นนี้จึงทำให้ UDP เป็นโปรโตคอลที่ไม่มีความน่าเชื่อถือ (Unreliable) <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;โปรโตคอล UDP เมื่อไม่มีความน่าเชื่อถือ แต่ประโยชน์สำคัญที่ได้รับจากการทำงานแบบนี้คือ ความรวมเร็ว ความไม่สิ้นเปลืองเวลาและทรัพยากรที่ต้องใช้ในการติดตามสถานะต่าง ๆ ตัวอย่างหนึ่งที่พบในการทำงานบนเน็ตเวิร์กที่ใช้ UDP ได้แก่ โปรโตคอล SNMP (Simple Netowork Management Protocol) อุปกร์เน็ตเวิร์กซึ่งทำหน้าที่เป็น SNMP Agent จะส่งรายงานสถานะต่าง ๆ กลับไปให้เครื่องเซิร์ฟเวอร์ที่ทำหน้าที่ SMMP Server โดยผ่านทาง UDP เพราะมันต้องการความรวมเร็ว อีกทั้งข้อมูลสถานะมีจำนวนมาก การที่จะต้องรอคอยเซตอัพคอนเน็กชันทุกครั้งเมื่อต้องการส่งข้อมูลอาจจะเป็นเรื่องที่เสียเวลาและไม่จำเป็น อีกตัวอย่างหนึ่ง คือ การโอนย้ายไฟล์ด้วยโปรโตคอล FTP จะเป็นแบบ Connection Oriented คือ ใช้งานโปรโตคอล TCP ส่วนการโอนย้ายไฟล์ด้วยโปรโตคอล Trivial FTP (TFTP) จะเป็นแบบ Connectionless คือ ใช้งานโปรโตคอล UDP
      </p>
      <p align="center">
      <iframe width="100%" height="350" src="https://www.youtube.com/embed/yU92p4wS5qM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </p>
      <p align="center">
        <a href="chl5.php" style="background-color:#000; padding: 10px;">ทำแบบทดสอบหลังเรียนบทที่ 5</a>
      <a href="updata/updatetoch6.php" style="background-color:#000; padding: 10px;">จบบทเรียนทหน่วยที่ 5 คลิกเพื่อไปหน่วยต่อไป</a></p><hr>
    </div>

      


<button class="tablink btn" onclick="openCity('page1', this, 'orange')" id="defaultOpen">หน้าที่ 1</button>
<button class="tablink btn" onclick="openCity('page2', this, 'orange')">หน้าที่ 2</button>
<button class="tablink btn" onclick="openCity('page3', this, 'orange')">หน้าที่ 3</button>
<button class="tablink btn" onclick="openCity('page4', this, 'orange')">หน้าที่ 4</button>

<script>
function openCity(cityName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(cityName).style.display = "block";
  elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

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
<?php include "layer/footer.php" ?>