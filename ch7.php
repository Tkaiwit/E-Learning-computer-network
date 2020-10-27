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
        <label><h3><b>หน่วยที่ 7 เรื่อง การติดตั้งระบบเครือข่าย</b></h3></label>
      </div>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">หัวข้อเรื่อง (Topics)</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        7.1 ความหมายระบบปฏิบัติการเครือข่าย<br>
        7.2 ตัวอย่างระบบปฏิบัติการเครือข่าย<br>
        7.3 ระบบปฏิบัติการ CentOS

      </p>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">แนวคิดสำคัญ (Main Idea)</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ระบบปฏิบติการเครือข่ายหมายถึงซอฟต์แวร์ที่ใช้ในการควบคุมการทำงานของระบบเครือข่าย โดยทำหน้าที่จัดการเกี่ยวกับการสื่อสารข้อมูลผ่านเครือข่าย และ การเข้าไปใช้ทรัพยากรที่มีอยู่ในเครือข่าย จะเป็นระบบปฏิบัติการที่ถูกออกแบบมาสำหรับจัดการงานด้านการติดต่อสื่อสารระหว่างคอมพิวเตอร์ และช่วยให้คอมพิวเตอร์ที่ต่ออยู่กับเครือข่ายสามารถใช้อุปกรณ์ต่าง ๆ เช่น ฮาร์ดดิสก์ หรือเครื่องพิมพ์ร่วมกันได้
      </p>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">สมรรถนะย่อย (Element of Competency)</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        1. แสดงความรู้เกี่ยวกับระบบปฏิบัติการเครือข่าย<br>
        2. ติดตั้งระบบปฏิบัติการเครือข่าย

      </p><hr>
    </div>

    <div id="page2" class="tabcontent">
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">จุดประสงค์เชิงพฤติกรรม (Behaviral Objectives)</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        1. บอกความหมายของระบบปฏิบัติการเครือข่าย<br>
        2. บอกถึงลักษณะระบบปฏิบัติการวินโดวส์ได้ถูกต้อง <br>
        3. บอกถึงลักษณะระบบปฏิบัติการยูนิกซ์ได้ถูกต้อง <br>
        4. บอกถึงลักษณะระบบปฏิบัติการลีนุกซ์ได้ถูกต้อง <br>
        5. บอกถึงลักษณะระบบปฏิบัติการ Novell Netware ได้ถูกต้อง <br>
        6. บอกถึงลักษณะระบบปฏิบัติการ CentOS ได้ถูกต้อง <br>
        7. อธิบายวิธีการติดตั้งระบบปฏิบัติการ CentOS ได้ 
      </p>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">เนื้อหาสาระ (Content)</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ระบบปฏิบัติการหรือ OS (Operating System)  เป็นตัวกลางระหว่างฮาร์ดแวร์และซอฟต์แวร์ เช่น การส่งข้อมูลภาพไปแสดงผลที่จอภาพ การส่งข้อมูลไปเก็บหรืออ่านจากฮาร์ดดิสก์ การรับส่งข้อมูลในระบบเครือข่าย การส่งสัญญาณเสียงไปออกลำโพง หรือจัดสรรพื้นที่ในหน่วยความจำ ตามที่ซอฟต์แวร์ประยุกต์ร้องขอ รอมทั้งทำหน้าที่จัดสรรเวลาการใช้หน่วยประมวลผลกลางในกรณีที่อนุญาตให้ซอฟต์แวร์ประยุกต์หลายตัวทำงานพร้อมกันซึ่งช่วยให้ตัวซอฟต์แวร์ประยุต์ไม่ต้องจัดการเรื่องเหล่านั้นด้วยตนเอง
      </p>
      <hr>
    </div>

    <div id="page3" class="tabcontent">
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">7.1 ความหมายระบบปฏิบัติการเครือข่าย</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ระบบปฏิบัติการเครือข่าย (Network operating System หรือ NOS) จะเป็นระบบปฏิบัติการที่ถูกออกแบบมาสำหรับจัดการงานด้านการติดต่อสื่อสารระหว่างคอมพิวเตอร์ และช่วยให้คอมพิวเตอร์ที่ต่ออยู่กับเครือข่ายสามารถใช้อุปกรณ์ต่าง ๆ เช่น ฮาร์ดดิสก์ หรือเครื่องพิมพ์ร่วมกันได้ ระบบปฏิบัติการเครือข่ายมีคุณสมบัติต่างๆ คล้ายระบบปฏิบัติการเอ็มเอสดอส แต่เพิ่มการจัดการเกี่ยวกับเครือข่ายและการใช้อุปกรณ์ร่วมกัน รวมทั้งมีระบบการป้องกันการสูญหายของข้อมูลด้วย
      </p>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ระบบปฏิบัติการเครือข่ายที่ใช้ในปัจจุบันส่วนมากจะรองรับการใช้งานเครือข่ายอยู่แล้ว แต่อาจต้องติดตั้งโปรแกรมบางอย่างเพื่อให้สามารถใช้งานเครือข่ายได้ ในสภาพแวดล้อมของเครือข่าย เซิร์ฟเวอร์ทำหน้าที่ให้บริการกับไคลเอนท์ ส่วนไคเอนท์ทำหน้าที่ติดต้องใช้บริการเหล่านั้นให้สามารถใช้ได้เสมือนเป็นทรัพยากรของเครื่องไคลเอนท์เอง ระบบปฏิบัติการที่ออกแบบสำหรับทำหน้าที่เป็นเซิร์ฟเวอร์ เช่น Netware 6.5, Windows Server 2003, Sun Solaris และ Linux เป็นต้น
      </p>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">7.2 ตัวอย่างระบบปฏิบัติการเครือข่าย</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        <b>ตัวอย่างระบบปฏิบัติการเครือข่าย</b><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- ระบบปฏิบัติการเครือข่ายเน็ตแวร์ (Netware)<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- ระบบปฏิบัติการเครือข่ายวินโดวส์เซิร์ฟเวอร์ (Microsoft Windows Server )
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
- ระบบปฏิบัติการเครือข่ายยูนิกซ์ (Unix)<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- ระบบปฏิบัติการเครือข่ายลินุกซ์ ( Linux)
      </p><hr>
    </div>

    <div id="page4" class="tabcontent">
      <p style="font-size: 23px; margin-left: 40px;">
        <b>ประเภทของระบบปฏิบัติการเครือข่าย</b><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ระบบปฏิบัติการที่สามารถจัดการเกี่ยวกับการใช้งานเครือข่าย แบ่งตามความสามารถได้เป็น 2 แบบคือ<br>
        1. ระบบปฏิบัติการเครือข่ายแบบ Peer/Peer <br> 
        2. ระบบปฏิบัติการเครือข่ายแบบ Client/Server <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;โดยระบบปฏิบัติการทั้งสองแบบแตกต่างที่ความครบถ้วนของการให้บริการและถูกออกแบบให้เหมาะสมกับสภาพการใช้งานของผู้ใช้ที่ต่างกัน
      </p>
      <p style="font-size: 23px; margin-left: 40px;">
        <b>ระบบปฏิบัติการเครือข่ายแบบ Peer/Peer</b><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การทำงานแบบ Peer-to-Peer เป็นการทำงานที่ทุกเครื่องในเครือข่ายมีทรัพยากรเป็นของตัวเอง  และสามารถแบ่งทรัพยากรให้กับเครื่องอื่นได้ ในขณะเดียวกันก็สามารถใช้ทรัพยากรของเครื่องอื่นได้  ทุกเครื่องในเครือข่ายจะมีสถานะหรือสิทธิ์ในเครือข่ายเท่าเทียมกัน<br>
        <b>ข้อดีของการทำงานแบบ  Peer to Peer คือ</b><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- ประหยัดค่าใช้จ่ายและดูแลระบบง่ายเมื่อการเชื่อมต่อเป็นกลุ่มเล็ก<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- เป็นทั้งผู้ให้บริการ (Peer  Server) และผู้ใช้บริการ (Peer Client) <br> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- แบ่งปันทรัพยากรให้ผู้อื่นใช้ร่วมได้           
ข้อเสียในลักษณะการทำงานแบบ Peer to Peer<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- ประสิทธิภาพของเครือข่ายไม่ค่อยดี เมื่อในเครือข่ายมีจำนวน Peer client มาก <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- มีปัญหาทางด้านระบบรักษาความปลอดภัย และการจัดการระบบ เนื่องจากอยู่ภายใต้การควบคุมของแต่ละคน<br>

      </p>
      <p style="font-size: 23px; margin-left: 40px;">
        <b>ตัวอย่างระบบปฏิบัติการเครือข่ายแบบ Peer/Peer</b><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ระบบปฏิบัติการ NetWare Lite <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เป็นผลิตภัณฑ์ของบริษัท Novell   ถูกออกแบบขึ้นมาเพื่อใช้เป็นระบบเครือข่ายแบบเท่าเทียมที่  ใช้กับเครื่อง IBM compatible อยู่ในช่วง 2 ถึง  25 สถานี    โดยหนึ่งในจำนวนเครื่องเหล่านั้นต้องมีฮาร์ดดิสก์ติดตั้งอยู่ด้วย   ทำหน้าที่เป็นคล้ายเซิร์ฟเวอร์ขนาดเล็ก  ส่วนเครื่องอื่นๆ อาจจะเพียงแค่มี Floppy disk หนึ่งตัวหรือมากกว่าก็เพียงพอ <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        การเริ่มต้นทำงานของเครื่องจะอาศัย ROM Boot ในแผ่นวงจรเครือข่าย  สำหรับติดต่อไปยังเครื่องเซิร์ฟเวอร์ และดาวน์โหลดระบบปฏิบัติการมายังรันบนเครื่องไคลเอ็น
ตัวอย่างระบบปฏิบัติการเครือข่ายแบบ Peer/Peer <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ระบบปฏิบัติการ Windows for work groups (Windows 3.11, 95, 98, ME, XP) <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เป็นผลิตภัณฑ์ของบริษัทไมโครซอฟต์    โดยเพิ่มความสามารถให้ระบบปฏิบัติการวินโดวส์  ให้สามารถแบ่งทรัพยากรให้เครื่องอื่นใช้งานได้   เช่นการแชร์ไฟล์  การแชร์เครื่องพิมพ์    มีความสามารถในการจัดการด้านความปลดภัยแบบง่าย  เช่นการกำหนดสิทธิ์การขอใช้บริการโดยรหัสผ่านเท่านั้น  รองรับการขอใช้บริการในปริมาณน้อย<br>  

<b>ระบบปฏิบัติการเครือข่ายแบบ Client/Server</b><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การทำงานแบบ Client/Server นั้น  ในเครือข่ายจะต้องมีเครื่องใดเครื่องหนึ่งทำหน้าที่เป็นผู้ให้บริการ (Server) และเครื่องอื่นๆ ในเครือข่ายเป็นผู้ขอใช้บริการ (Client) ผู้ให้บริการต้องเป็นเครื่องที่มีประสิทธิภาพในการทำงานสูง เพื่อให้สามารถรองรับต่อการขอใช้บริการจากเครื่องไคลเอ็นที่มีจำนวนมาก  มีอุปกรณ์ที่ทำงานได้เร็ว  เช่น มีแรมขาดใหญ่  มีความจุของ Hard disk สูง  มีเครื่องพิมพ์ที่พิมพ์ได้อย่างรวดเร็ว ทั้งนี้  ความสามารถเฉพาะของเครื่องเซิร์ฟเวอร์ จะต้องเหมาะสมกับลักษณะการให้บริการ  เช่น  บริการไฟล์ (File Server) จะต้องมี Hard disk ที่มีความจุสูง และเข้าถึงข้อมูลอย่างรวดเร็ว<br>
        <b>ข้อดีของการทำงานแบบ  Client/Server คือ</b>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- มีความรวดเร็ว เพราะระบบนี้ออกแบบเพื่อให้ตอบสนองความต้องการของผู้ใช้หลายคนพร้อมกัน <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- มีระบบบริหารงานเครือข่ายที่มีประสิทธิภาพ เพราะทรัพยากรหลักรวมไว้ที่ศูนย์กลาง<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- มีระบบรักษาความปลอดภัย
ข้อเสียในลักษณะการทำงานแบบ Client/Server <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- จำเป็นต้องมีเครื่องที่มีประสิทธิภาพสูง และมีทรัพยากรที่ดี <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- ต้องเปิดเครื่องทิ้งไว้ตลอดเวลา  ทำให้เกิดความสิ้นเปลืองหากไม่มีเครื่องไคลเอ็นขอใช้บริการ

      <hr>
    </div>

    <div id="page5" class="tabcontent">
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">ตัวอย่างระบบปฏิบัติการเครือข่ายแบบ Client/Server</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ระบบปฏิบัติการ Microsoft Windows Server (Windows NT, 2000, 2003) เป็นผลิตภัณฑ์ของบริษัทไมโครซอฟต์ มุ่งเน้นการบริการที่ใช้กับระบบปฏิบัติการวินโดวส์เป็นหลัก เช่น<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- การจัดการบัญชีผู้ใช้ให้อยู่ในลักษณะของ Domain Controller  และเปลี่ยนเป็น Active Directory ใน Windows 2000 เป็นต้นมา  กำหนดกลุ่มผู้ใช้เพื่อง่ายต่อการระบุตัวผู้ใช้  กำหนดระดับของผู้ใช้เพื่อสิทธิที่ต่างกัน <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- กำหนดสิทธิ์การใช้งานทรัพยากรที่ละเอียด เช่น สิทธิ์ในดิสก์บนเซิร์ฟเวอร์ <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- บริการสำหรับระบบปฏิบัติการวินโดวส์ เช่น บริการไฟล์  บริการเครื่องพิมพ์  บริการค้นหาเครื่อง<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- เพิ่มเติมการบริการด้านอินเตอร์เน็ตใน Windows 2000 เป็นต้นมา
      </p>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">7.3 ระบบปฏิบัติการ CentOS</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CentOS นั้นได้ย่อมาจาก Community Enterprise Operating System ซึ่งมันเป็นลีนุกซ์ที่ได้รับการพัฒนามาจากต้นฉบับ RedHat Enterprise Linux โดยที่ เจ้า CentOS นั้นได้นำเอาซอร์สโค้ดต้นฉบับของ RedHat มาทำการคอมไพล์ใหม่ซึ่งการพัฒนา CentOS ยังเน้นพัฒนาเป็นซอฟต์แวร์ Open Source ที่ถือได้ว่าเป็นลิขสิทธิ์แบบ GNU General Public License โดยในปัจจุบันนั้น CentOS Linux ก็ได้ถูกนำมาใช้ในการทำ Web Hosting กันอย่างมากหลายเเละกว้างขวางอย่างต่อเนื่องซึ่งเนื่องมาจากการเป็นระบบปฏิบัติการที่มีต้นแบบจาก RedHat ที่มีความแข็งแกร่งสูง การติดตั้งแพ็กเกจย่อยภายในสามารถใช้ได้ทั้ง RPM, TAR, APT หรือใช้คำสั่ง YUM ในการอัปเดทซอฟต์แวร์แบบอัตโนมัติได้อีกด้วย<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เหตุผลที่ควรเลือกใช้ CentOS<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สำหรับองค์กรเหมาะสมที่จะนำระบบตัวลีนุกซ์ตัวนี้มาทำเป็น เซิร์ฟเวอร์ใช้งานภายในองค์กร เหตุผลหลักในการนำระบบนี้มาใช้งานคือ<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. เพื่อประหยัดงบประมาณขององค์กร เนื่องจาก CentOS เป็นซอฟต์แวร์ Open Source องค์กรไม่จำเป็นต้องจ่ายค่าลิขสิทธ์ซอฟต์แวร์<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. เพื่อนำมาทำเซิร์ฟเวอร์บริการงานต่างๆ ในองค์กร ซึ่งภายใน CentOS มีแพ็กเกจย่อยที่นำมาใช้ทำเซิร์ฟเวอร์สำหรับใช้งานในองค์กรจำนวนมาก อาทิ เช่น<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• Web Server (Apache) <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• FTP Server (ProFTPd / VSFTPd) <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• Mail Server (Sendmail / Postfix / Dovecot) <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• Database Server (MySQL / PostgreSQL) <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• File and Printer Server (Samba) <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• Proxy Server (Squid) <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• DNS Server (BIND) <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• DHCP Server (DHCPd) <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• Antivirus Server (ClamAV) <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• RADIUS Server (FreeRADIUS) <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• Control Panel (ISPConfig) <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. เพื่อนำมาทำเป็นระบบเซิร์ฟเวอร์สำหรับจ่าย Private IP Address แจกเครื่องลูกข่ายในองค์กร รวมทั้งตั้งเป็นระบบเก็บ Log Files ผู้ใช้งาน เพื่อให้สอดคล้องกับพระราชบัญญัตว่าด้วยการกระทำความผิดเกี่ยวกับ คอมพิวเตอร์ปี 2550
</p>
<p align="center">
<iframe width="100%" height="350" src="https://www.youtube.com/embed/0paQ0AR1Wyc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</p>
      <p align="center">
      <a href="chl7.php" style="background-color:#000; padding: 10px;">ทำแบบทดสอบหลังเรียนบทที่ 7</a>
      <a href="updata/updatetoch8.php" style="background-color:#000; padding: 10px;">จบบทเรียนทหน่วยที่ 7 คลิกเพื่อไปหน่วยต่อไป</a></p><hr>
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