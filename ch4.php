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
        <label><h3><b>หน่วยที่ 4 เรื่อง ตัวกลางการเชื่อมต่อเครือข่าย</b></h3></label>
      </div>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">หัวข้อเรื่อง (Topics)</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
       4.1 สายทองแดง <br>
       4.2 สายใยแก้วนำแสง<br> 
       4.3 การสื่อสารไร้สาย 
      </p>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">แนวคิดสำคัญ (Main Idea)</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตัวกลางในการเชื่อมต่อข้อมูลเป็นองค์ประกอบพื้นฐานที่สำคัญของการสื่อสารข้อมูล ประกอบด้วย2 แบบ ได้แก่ ตัวกลางในการสืรอสารข้อมูลแบบใช้สาย และตัวกลางในการสื่อสารข้อมูลแบบไร้สาย โดยแบบแรกเป็นการใช้สายนำสัญญาณสำหรับการสื่อสารข้อมูล มีสายนำวัญญาณที่นิยมใช้งานในระบบเคื่อข่ายคอมพิวเตอร์ ได้แก่สายคู่ตีเกลียว สายโคแอกเชียล และสายใยแก้วนำแสง สายคู่ตีเกลียวและสายโคแอกเชียล เป็นสายที่มีลวดตัวนำผลิตจากทองแดงที่จะมีผลกระทบจากคลื่นสนามแม่เหล็กไฟฟ้า ดังนั้น จึงทำให้มีการป้องกันคลื่อนสนามแม่เหล็กไฟฟ้าด้วยการตีเกลียว หรือการห่อหุ้มด้วยใยตาข่ายโลหะ และสำหรับสายใยแก้วนำแสงไม่มีผลกระทบจากคลื่นสนามแม่เหล็กไฟฟ้าแต่อย่างใด ตัวกลางแบบไม่ใช้สายนำแสงนำสัญาณ เนื่องจากการสื่อสารต้องการให้สามารถรับส่งสัญญาณให้ได้ในระยะทางที่ไกลๆ ซึ้งตัวกลางแบบใช้สายไม่สามารถทำได้ ดังนั้นจึงได้มีการพัฒนาการสื่อสารแบบไร้สายขึ้นด้วยการใช้คลื่นสนามแม่เหล็กไฟฟ้าที่มีความถี่สูงในการนำพาข้อมูลส่งถึงปลายทาง คลื่นสนามแม่เหล็กไฟฟ้ามีช่องความถี่ในการใช้งานมากมาย เช่น คลื่นวิทยุ คลื่นย่านไมโครเวฟ คลื่นอินฟราเรด เป็นต้น
      </p>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">สมรรถนะย่อย (Element of Competency)</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        1. แสดงความรู้เกี่ยวกับตัวกลางการเชื่อมต่อเครื่อข่าย<br>
        2. ประกอบและตรวจสอบสายแลนแบบสายคู่บิดเกลียว
      </p><hr>
    </div>

    <div id="page2" class="tabcontent">
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">จุดประสงค์เชิงพฤติกรรม (Behaviral Objectives)</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
      1.บอกลักษณะสาย Coaxial  ได้ถูกต้อง<br>
      2. บอกลักษณะและชนิดของสายคู่บิดเกลียวได้ถูกต้อง<br>
      3. บอกถึงการเชื่อมต่อสายคู่ตีเกลียวได้ถูกต้อง<br>
      4.บอกลักษณะสายใยแก้วนำแสงได้ถูกต้อง<br>
      5.บอกลักษณะการสื่อสารไร้สายแบบต่างๆได้ถูกต้อง
      </p>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">เนื้อหาสาระ (Content)</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การสื่อสารต้องอาศัยสื่อกลางเพื่อการส่งผ่านข้อมูลในการนำข้อมูลไปยังจุดหมายปลายทาง และการติดต่อสื่อสารระหว่างคอมพิวเตอร์อาจจะใช้สายเชืาอมต่อผ่านอุปกรณ์หรืออาจจะเชื่อมต่อแบบไร้สายก็ได้และสื่อกลางการสื่อสารมีความสำคัญมากเพราะเป็นปัจจัยหนึ่งที่กำหนดประสิทธิภาพในการสื่อสาร เช่น ความรวดเร็วในการส่งข้อมูล ปริมาณของข้อมูลที่สามารถนำไปได้ในหนึ่งหน่วยเวลา รวมถึงคุณภาพของการส่งข้อมูล
      </p>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สื่อกลางในการสื่อสารข้อมูลเป็นส่วนที่ทพให้เกิดการเชื่อมต่อระหว่างอุปกรณ์เข้าด้วยกัน และเป็นส่วนที่ยอมให้ข่าวสารข้อมูลเดินทางผ่านจากผู้ส่งไปยังผู้รับ สื่อกลางที่ให้ในการสื่อสารข้อมูลมีอยู่หลายประเภทซึ่งแต่ละประเภทมีความแตกต่างกันในด้านปริมาณข้อมูลๆที่สามารุนำผ่านไปได้ในเวลาขณะใดขณะหนึ่งสื่อหรือตัวกลางการสื่อสารข้อมูลเป็นองค์ประกอบสำคัฯของการสื่อสารข้อมูล เพราการเลือกใช้สื่อกลางที่เหมาะสมจะทำให้เกิดประสิทธิภาพในการสื่อสารข้อมูลและประหยัดต้นทุน ตัวกลางหรือสื่อที่ใช้ในการสื่อสาร แบ่งออกเป็น 2 ประเภท คือ ตัวกลางในการสื่อสารข้อมูลแบบไร้สาย และตัวกลางในการสือสารข้อมูลแบบไร้สาย
      </p>
      <hr>
    </div>

    <div id="page3" class="tabcontent">
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">4.1 สายทองแดง</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เป็นอุปกรณ์ที่ใช้ส่งพลังงานไฟฟ้าจากที่หนึ่งไปยังอีกที่หนึ่งโดยกระแสไฟฟ้าจะ เป็นตัวนำพลังงานไฟฟ้าผ่านไปตามสายไฟจนถึงเครื่องใช้ไฟฟ้า สายไฟทำด้วยสารที่ยอมให้กระแสไฟฟ้าผ่านได้ เรียกว่าตัวนำไฟฟ้า
      </p>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. สายคู่บิดเกลียว (TP) ประกอบด้วยเส้นลวดทองแดงหุ้มด้วยฉนวนพลาสติก พันเป็นเกลียวเพื่อลดผลกระทบของคลื่นแม่เหล็กไฟฟ้า จากคู่สายข้างเคียง ในปัจจุบันสามารถส่งข้อมูลได้มากกว่า 1 กิกะบิตต่อวินาที ในระยะทางไม่เกิน 100 เมตร และมีราคาไม่แพง ใช้ส่งข้อมูลได้ดี มี 2 ชนิด คือ สายคู่บิดเกลียวแบบป้องกันสัญญาณรบกวน (STP) , สายคู่บิดเกลียวแบบไม่ป้องกันสัญญาณ (UTP) 
      </p>
      <div align="center">
        <img src="assets/img/img4-1.jpg"><br>
        รูปที่ 4.1 สายคู่บิดเกลียว (TP)
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. สายโคแอกซ์หรือสายแกนร่วม  เป็นสายสัญญาณที่มีสายทองแดงเดี่ยวเป็นแกนกลาง หุ้มด้วยฉนวนเพื่อป้องกันไฟรั่ว จากนั้นหุ้มด้วยลวดทองแดงเป็นตัวกั้นสัญญาณรบกวนและหุ้มชั้นนอกด้วยพลาสติก สายโคแอกซ์ที่พบในชีวิตประจำวัน เช่น สายอากาศโทรทัศน์ ปัจจุบันในระบบเครือข่ายไม่นิยมใช้ในการสื่อสารข้อมูลแล้ว
      </p>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ข้อดี ฉนวนภายนอกมีความคงทนต่อการใช้งานสูง และเป็นช่องสื่อสารที่มีความกว้างมาก<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ข้อเสีย ขนาดค่อนข้างใหญ่และน้ำหนักมาก เมื่อเปรียบเทียบกับสายคู่บิดเกลียว
      </p>
      <div align="center">
        <img src="assets/img/img4-2.jpg" width="400" height="250"><br>
        รูปที่ 4.2 ลักษณะโครงสร้างสาย (โคแอกเซียล)
      </div>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">4.2 แสงใยแก้วนำแสง</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สายใยแก้วนำแสง (Fiber Optic Cable) เป็นตัวกลางของสัญญาณแสงชนิดหนึ่ง ที่ทำมาจากแก้วซึ่งมีความบริสุทธิ์สูงมาก สายใยแก้วนำแสงมีลักษณะเป็นเส้นยาวขนาดเล็ก มีขนาดประมาณเส้นผมของมนุษย์เรา สายใยแก้วนำแสงที่ดีต้องสามารถนำสัญญาณแสงจากจุดหนึ่งไปยังอีกจุดหนึ่งได้ โดยมีการสูญเสียของสัญญาณแสงน้อยมาก 
      </p>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สายใยแก้วนำแสงสามารถแบ่งตามความสามารถในการนำแสงออกได้เป็น 2 ชนิด คือ สายใยแก้วนำแสงชนิดโหมดเดี่ยว (Single-mode Optical Fibers, SM) และชนิดหลายโหมด (Multimode Optical Fibers, MM)
      </p>
      <div align="center">
        <img src="assets/img/img4-3.jpg"><br>
        รูปที่ 4.3 ลักษณะสายใยแก้วนำแสง
      </div><hr>
    </div>

    <div id="page4" class="tabcontent">
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">4.3 การสื่อสารไร้สาย</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สื่อสารไร้สาย Wireless communication (ไวรเล็ซคอมมูนิเคชัน) คือการถ่ายโอนข้อมูลจากจุดนึงไปอีกจุดนึงหรือมากกว่า โดยไม่ได้เชื่อมต่อกันโดยตัวนำไฟฟ้า
      </p>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การสื่อสารข้อมูลไร้สาย เป็นเทคโนโลยีที่สามารถใช้งานได้หลากหลายสถานที่หลากหลายท้องถิ่นโดยในแต่ละท้องถิ่นก็จะมีความแตกต่างกัน ระยะทางมีความครอบคลุมและมีประสิทธิภาพที่แตกต่างกันไปโดยในบางสถานที่บางสถานการณ์ผู้ใช้มีการเชื่อมต่อหลายประเภทหลายเครือข่ายเพื่อให้มีความง่ายขึ้น ซอฟต์แวร์หรือที่เรียกว่าตัว VPN (วีพีเอ็น) ที่ใช้ในการจัดการการเชื่อมต่อนำมาใช้เพื่อให้รองรับการเชื่อมต่อหลายๆประเภท โดยมีเทคโนโลยีที่สนับสนุนคือ <br>Wi-Fi (ไวไฟ) เป็นเครือข่ายไร้สายที่สามารถเชื่อมต่ออินเทอร์เน็ตได้โดยอุปกรณ์เคลื่อนที่อาทิเช่น สมาร์ทโฟนต่างๆ เเท็บเล็ต โน๊ตบุ๊ค โดยสามารถเข้าถึงอินเทอร์เน็ตได้อย่างง่ายดาย
      </p>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;บริการข้อมูลมือถือ เป็นการบริการการใช้งานเครือข่ายมือถือโดยมีระยะทางในการใช้งาน 10-15 ไมล์จากเสาร์สัญญาณที่อยู่ใกล้ที่สุด โดยเมื่อก่อนใช้เป็นเทคโนโลยี GSM (จีเอสเอ็ม) GPRS (จีพีอาเอส) และ CDMA (ซีดีเอ็มเอ) แต่ในตอนนี้เทคโนโลยีมีการพัฒนาขึ้นมาเอ็น 3G 4G และจะเข้าเป็น 5G 
      </p>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การสื่อสารเคลื่อนที่ผ่านดาวเทียม โดยการสื่อสารแบบนี้จะมีปัญหาในการเชื่อมต่อการเข้าถึงของพื้นที่ที่เป็นพื้นที่ชนบท หรือพื้นที่ที่ห่างไกลการสื่อสารผ่านดาวเทียม การเดินทางที่เข้าไปได้ยากจะมีปัญหาในการเชื่อมต่อ
      </p><hr>
    </div>

    <div id="page5" class="tabcontent">
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">เทคโนโลยีการสื่อสารแบบไร้สายในปัจจุบัน</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        1. Bluetooth (บลูทูท) <br> 
        2. IEEE 802.11 (ไออีอีอี 802.11) <br>
        3. Wireless Access Protocol WAP (ไวเลตเอ็กเซ็ตโปรโตคอล ดับเบิลยูเอพี) <br>
        4. Global Positioning System GPS (โกลโบลโพซิชันซิซเท็ม จีพีเอส) <br>
        5. เทคโนโลยี 3G <br>
        6. เทคโนโลยี 4G
      </p>
      <p align="center">
      <iframe width="100%" height="350" src="https://www.youtube.com/embed/b0h-y5XYABY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </p>
      <p align="center">
      <a href="chl4.php" style="background-color:#000; padding: 10px;">ทำแบบทดสอบหลังเรียนบทที่ 4</a>
      <a href="updata/updatetoch5.php" style="background-color:#000; padding: 10px;">จบบทเรียนทหน่วยที่ 4 คลิกเพื่อไปหน่วยต่อไป</a></p>
      <hr>
    </div>

<button class="tablink btn" onclick="openCity('page1', this, 'orange')" id="defaultOpen">หน้าที่ 1</button>
<button class="tablink btn" onclick="openCity('page2', this, 'orange')">หน้าที่ 2</button>
<button class="tablink btn" onclick="openCity('page3', this, 'orange')">หน้าที่ 3</button>
<button class="tablink btn" onclick="openCity('page4', this, 'orange')">หน้าที่ 4</button>
<button class="tablink btn" onclick="openCity('page5', this, 'orange')">หน้าที่ 5</button>

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