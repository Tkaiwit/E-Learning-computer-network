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
        <label><h3><b>หน่วยที่ 6 เรื่อง รูปแบบการเชื่อมต่อเครือข่าย</b></h3></label>
      </div>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">หัวข้อเรื่อง (Topics)</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
      6.1 รูปแบบการเชื่อมต่อเครือข่าย ( Topologies ) <br>
      6.2 การเชื่อมต่อเครือข่าย LAN 
      </p>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">แนวคิดสำคัญ (Main Idea)</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;รูปแบบการเชื่อมต่อเครือข่าย เป็นลักษณะทางกายภาพของระบบเครือข่ายที่เชื่อมโยงสายสื่อสารเข้ากับอุปกรณ์และเครื่องคอมพิวเตอร์ภายในเครือข่ายด้วยกันเพื่อส่งข้อมูลจากอุปกรณ์หนึ่งไปยังอุปกรณ์หนึ่ง <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เนื้อหาในหน่วยนี้จะกล่าวถึงรายละเอียดรูปแบบการเชื่อมต่อเครือข่ายทั้งที่โทโพโลยีรูปแบบการเชื่อมต่อเครือข่าย LAN และการเชื่อมต่อระบบอินเตอร์เน็ต
      </p>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">สมรรถนะย่อย (Element of Competency)</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
      1. แสดงความรู้เกี่ยวกับรูปแบบการเชื่อมต่อเครือข่าย<br>
      2. เชื่อมต่อคอมพิวเตอร์ส่วนบุคคลเข้ากับเครือข่ายแลน
      </p><hr>
    </div>

    <div id="page2" class="tabcontent">
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">จุดประสงค์เชิงพฤติกรรม (Behaviral Objectives)</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
      1. บอกถึงลักษณะโทโพโลยีแบบบัสได้ถูกต้อง <br>
      2. บอกถึงลักษณะโทโพโลยีแบบดาวได้ถูกต้อง <br>
      3. อธิบายวิธีการเชื่อมต่อเครือข่าย LAM ถูกต้อง
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
        <label><h4><b style="font-size: 23px; margin-left: 15px;">6.1 รูปแบบการเชื่อมต่อเครือข่าย ( Topologies )</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;รูปแบบการเชื่อมต่อเครือข่ายหรือมักเรียกสั้นๆว่าโทโพโลยี เป็นลักษณะทั่วไปที่กล่าวถึงการเชื่อมต่อคอมพิวเตอร์ทางกายภาพว่ามีรูปแบบหน้าตาอย่างไร เพื่อให้สามารถสื่อสารร่วมกันได้และด้วยเทคโนโลยีเครือข่ายท้องถิ่นจะมีรูปแบบของโทโพโลยีหลายแบบด้วยกัน ดังนั้น จึงเป็นสิ่งสำคัญที่จะต้องเรียนรู้และทำความเข้าใจแต่ละโทโพโลยีว่ามีความคล้ายคลึง หรือแตกต่างกันอย่างไร รวมถึงข้อดีและข้อเสียของแต่ละโทโพโลยี และโดยปกติโทโพโลยีที่นิยมใช้กันบนเครือข่ายท้องถิ่นจะมีอยู่ 3 ชนิดด้วยกัน คือ โทโพโลยีแบบบัส ,โทโพโลยีแบบดาว, โทโพโลยีแบบวงแหวน
      </p>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>1. แบบบัส ( BUS Topology )</b> เป็นการเชื่อมต่อคอมพิวเตอร์ทุกเครื่องบนสายสัญญาณหลักเส้นเดียว ที่เรียกว่า BUS ทีปลายทั้งสองด้านปิดด้วยอุปกรณ์ที่เรียกว่า Teminator ไม่มีคอมพิวเตอร์เครื่องใดเครื่องหนึ่งเป็นศูนย์กลางในการเชื่อมต่อ คอมพิวเตอร์เครื่องใดหยุดทำงาน ก็ไม่มีผลกับคอมพิวเตอร์เครื่องอื่น ๆ ในเครือข่าย
      </p>
      <div align="center">
        <img src="assets/img/img6-1.jpg" width="400" height="250"><br>
        รูปที่ 6.1 แสดงโครงสร้างเครือข่ายคอมพิวเตอร์แบบบัส
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        <b>ข้อดี ของการเชื่อแบบบัส คือ </b><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- สามารถติดตั้งได้ง่าย เนื่องจากเป็นโครงสร้างเครือข่ายที่ไม่ซับซ้อน <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- การเดินสายเพื่อต่อใช้งาน สามารถทำได้ง่าย <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- ประหยัดค่าใช้จ่าย กล่าวคือ ใช้สายส่งข้อมูลน้อยกว่า เนื่องจากสามารถเชื่อมต่อกับสายหลักได้ทันที <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- ง่ายต่อการเพิ่มสถานีใหม่เข้าไปในระบบ โดยสถานีนี้สามารถใช้สายส่งข้อมูลที่มีอยู่แล้ว<br>
        <b>ข้อเสียของการเชื่อแบบบัส คือ</b><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-  ถ้ามีสายเส้นใดเส้นหนึ่งหลุดไปจากสถานีใดสถานีหนึ่ง ก็จะทำให้ระบบเครือข่ายนี้หยุดการทำงานลงทันที<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- ถ้าระบบเกิดข้อผิดพลาดจะหาข้อผิดพกลาดได้ยาก โดยเฉพาะถ้าเป็นระบบเครือข่ายขนาดใหญ่
      </p><hr>
    </div>

    <div id="page4" class="tabcontent">
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>2. แบบดาว ( Star topology )</b>เป็นการเชื่อมต่อสถานีหรือจุดต่าง ๆ ออกจากคอมพิวเตอร์ศูนย์กลางหรือคอมพิวเตอร์แม่ข่ายที่เรียกว่า File Server แต่ละสถานีจะมีสายสัญญาณเชื่อมต่อกับศูนย์กลาง ไม่มีการใช้สายสัญญาณร่วมกัน เมื่อสถานีใดเกิดความเสียหายจะไม่มีผลกระทบกับสถานีอื่น ๆ ปัจจุบันนิยมใช้อุปกรณ์ HUB เป็นตัวเชื่อมต่อจากคอมพิวเตอร์แม่ข่ายหรือคอมพิวเตอร์ศูนย์กลาง
      </p>
      <div align="center">
        <img src="assets/img/img6-2.gif" width="400" height="250"><br>
        รูปที่ 6.2 แสดงโครงสร้างเครือข่ายคอมพิวเตอร์แบบดาว
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        <b>ข้อดีของการเชื่อมแบบวงแหวน คือ</b><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
- ใช้สายสัญญาณน้อยกว่าแบบดาว เหมาะกับการเชื่อมต่อด้วยสายสัญญาณใยแก้วนำแสง เพราะส่งข้อมูลทางเดียวกันด้วยความเร็วสูง
<br><b>ข้อเสียของการเชื่อมแบบวงแหวน คือ </b><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- ถ้าสถานีใดเสียระบบก็จะไม่สามารถทำงานต่อไปได้จนกว่าจะแก้ไขจุดเสียนั้น และยากในการตรวจสอบว่ามีปัญหาที่จุดใดและถ้าต้องการเพิ่มสถานีเข้าไปจะพกหระทำได้ยากด้วย
      </p>
      <div align="center">
        <img src="assets/img/img6-3.gif" width="400" height="250"><br>
        รูปที่ 6.3 แสดงการเชื่อมต่อแบบวงแหวน
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        <b>ข้อดีของการเชื่อมแบบวงแหวน คือ</b><br> 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
- ใช้สายสัญญาณน้อยกว่าแบบดาว เหมาะกับการเชื่อมต่อด้วยสายสัญญาณใยแก้วนำแสง เพราะส่งข้อมูลทางเดียวกันด้วยความเร็วสูง

<br><b>ข้อเสียของการเชื่อมแบบวงแหวน คือ </b><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
- ถ้าสถานีใดเสียระบบก็จะไม่สามารถทำงานต่อไปได้จนกว่าจะแก้ไขจุดเสียนั้น และยากในการตรวจสอบว่ามีปัญหาที่จุดใดและถ้าต้องการเพิ่มสถานีเข้าไปจะพกหระทำได้ยากด้วย

      </p>
      <hr>
    </div>

    <div id="page5" class="tabcontent">
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">6.2 การเชื่อมต่อเครือข่าย LAN </b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ระบบเครือข่ายแบบ LAN หรือระบบเครือข่ายเฉพาะบริเวณ โดยปกติแล้วจะเป็นระบบเครือข่ายส่วนตัว (Private Network) นั่นคือองค์กรที่ต้องการใช้งานเครือข่าย ทำการสร้าง เครือข่ายคอมพิวเตอร์ที่เชื่อมต่อกันเป็นระบบเครือข่ายในระยะใกล้ ๆ ซึ่งจะช่วยให้เกิดประโยชน์แก่องค์กรและธุรกิจต่างๆ มากมาย เช่น – สามารถแบ่งเบาการประมวลผลไปยังเครื่องต่างๆ เฉลี่ยกันไป – สามารถแบ่งกันใช้งานอุปกรณ์ต่างๆ เช่น เครื่องพิมพ์ ซีดีรอมไดร์ฟ เครื่องคอมพิวเตอร์ที่มีประสิทธิภาพสูง เป็นต้น <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– สามารถแบ่งกันใช้งานซอฟต์แวร์และข้อมูลหรือสารสนเทศต่างๆ รวมทั้งทำให้สามารถจัดเก็บข้อมูลเหล่านั้นไว้เพียงที่เดียว<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– สามารถวางแผนหรือทำงานร่วมกันเป็นกลุ่มได้ แม้จะไม่ได้อยู่ใกล้กันก็ตาม – สามารถใช้ในการติดต่อกัน เช่น ส่งจดหมายทางอิเลคทรอนิคส์ หรือการส่งเสียงหรือภาพทางอิเลคทรอนิคส์ เป็นต้น<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– ช่วยลดค่าใช้จ่ายโดยรวมขององค์กร
      </p>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">ชนิดการเชื่อมต่อของเครือข่าย LAN</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การเชื่อมต่อคอมพิวเตอร์เข้าด้วยกันเป็นเครือข่ายเฉพาะบริเวณ (LAN) นั้น จุดประสงค์หลักอย่างหนึ่งก็คือการแบ่งกันใช้ทรัพยากรที่มีอยู่ โดยทรัพยากรเหล่านั้นอาจเป็นหน่วยประมวลผลกลาง (CPU) ความเร็วสูง ฮาร์ดดิสก์ เครื่องพิมพ์ หรือแม้แต่อุปกรณ์สื่อสารต่างๆ ซึ่งอุปกรณ์เหล่านี้จะเชื่อมอยู่กับคอมพิวเตอร์เครื่องใดเครื่องหนึ่ง<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วิธีการเชื่อมต่อเครือข่ายคอมพิวเตอร์ เพื่อจัดสรรการใช้งานทรัพยากรในระบบเครือข่ายสามารถจำแนกได้เป็น 3 รูปแบบ คือ เครือข่ายแบบ Peer-to-Peer เครือข่ายแบบ Server-based เครือข่ายแบบ Client/Server <br>    
<b>LAN (Local Area Network)</b><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LAN คืออะไร LAN ย่อมาจาก Local Area Network คือระบบเครือข่าย แบบเชื่อมต่อคอมพิวเตอร์เข้าด้วยกันในระยะจำกัด เช่น ในอาคารเดียวกัน หรือบริเวณเดียวกันที่สามารถลากสายถึงกันได้โดยตรง ส่วนมากจะใช้สายเคเบิ้ล หรือ ที่เรียกกันว่า สายแลน เป็นตัวกลางในการเชื่อมต่อ อัตราเร็วของเครือข่าย LAN อยู่ที่ระหวาง 1-100 Mbps ทั้งนี้ความเร็วขอมูลขึ้นอยู่กับ ตัวกลางสายส่งที่ใช้ เทคนิคการส่งสัญญาณ และข้อกำหนดของผู้ให้บริการเน็ตเวิร์ค

      </p>
      <div align="center">
        <img src="assets/img/img6-4.jpg" width="400" height="250"><br>
        รูปที่ 6.4 แสดงการเชื่อมโยงเครือข่ายแบบ LAN
      </div>
      <p align="center">
      <iframe width="100%" height="350" src="https://www.youtube.com/embed/xI7OVOxL9nI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  
      </p>
      <p align="center">
        <a href="chl6.php" style="background-color:#000; padding: 10px;">ทำแบบทดสอบหลังเรียนบทที่ 6</a>
      <a href="updata/updatetoch7.php" style="background-color:#000; padding: 10px;">จบบทเรียนทหน่วยที่ 6 คลิกเพื่อไปหน่วยต่อไป</a></p><hr>
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