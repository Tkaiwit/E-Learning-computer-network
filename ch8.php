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
        <label><h3><b>หน่วยที่ 8 เรื่อง การใช้โปรแกรมประยุกต์และโปรแกรมยูทิลิตี้บนเครือข่าย</b></h3></label>
      </div>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">หัวข้อเรื่อง (Topics)</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        8.1 การใช้คำสั่งตรวจสอบการทำงานของระบบเครือข่าย<br>
        8.2 โปรแกรม TeamViewer <br>  
        8.3 โปรแกรม PuTTY <br>
        8.4 โปรแกรม Filezilla <br>
        8.5 โปรแกรม Advanced IP Scanner

      </p>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">แนวคิดสำคัญ (Main Idea)</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;โปรแกรมประยุกต์ หรือเรียกว่า Applications คือ ซอฟต์แวร์ประยุกต์เป็นโปรแกรมที่พัฒนาขึ้นเพื่อให้คอมพิวเตอร์ทำงานด้านต่างๆ ตามความต้องการของผู้ใช้ ซึ้งถ้าโปรแกรมพัฒนาเฉพาะงาน (Custom Program หรือ Tailor-made Software) ซึ่งข้อดีคือโปรแกรมสามารถใช้งานได้อย่างมีประสิทธิภาพตามความประสงค์ของหน่วยงาน
      </p>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เนื้อหาในหน่วยนี้จะแนะนำการใช้คำสั่งตรวจสอบการทำงานของระบบเครือข่ายการใช้โปรแกรม TeamViewer การใช้โปรแกรม PuTTY การใช้โปรแกรม Filezilla การใช้โปรแกรม Advanced IP Scanner
      </p>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">สมรรถนะย่อย (Element of Competency)</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        1. แสดงความรู้เกี่ยวกับการใช้โปรแกรมประยุกต์และโปรแกรมยูทิลิตี้บนเครือข่าย <br>
        2. ใช้คำสั่งตรวจสอบการทำงานของรบบเครือข่าย <br>
        3. ใช้โปรแกรมที่ทำงานเกี่ยวกับเครือข่าย
      </p><hr>
    </div>

    <div id="page2" class="tabcontent">
      <div align="center">
        <label><h3><b>จุดประสงค์เชิงพฤติกรรม (Behaviral Objectives)</b></h3></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        1. ใช้คำสั่งตรวจสอบการทำงานของระบบเครือข่ายพื้นฐาน ได้ถูกต้อง<br>
        2. อธิบายวิธีการใช้โปรแกรม TeamViewer ได้ถูกต้อง<br>
        3. อธิบายวิธีการใช้โปรแกรม PuTTY ได้ถูกต้อง <br>
        4. อธิบายวิธีการใช้โปรแกรม Filezilla ได้ถูกต้อง <br>
        5. อธิบายวิธีการใช้โปรแกรม Advanced IP Scanner ได้ถูกต้อง
      </p>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">เนื้อหาสาระ (Content)</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;โปรแกรมประยุกต์ หมายถึง โปรแกรมที่ใช้ทำงานเฉพาะด้านตามความต้องการของผู้ใช้ การประยุกต์งานคอมพิวเตอร์จึงกว้างขวางและแพร่หลาย โดยอาจแบ่งซอฟต์แวร์ประยุกต์ออกเป็นสองกลุ่มคือโปรแกรมสำเร็จรูปและโปรแกรมที่พัฒนาขึ้นใช้งานเฉพาะ
 โปรแกรมอรรถประโยชน์ หรือ Utility Program เป็นโปรแกรมประเภทประเภทหนึ่งที่ทำงานบนระบบปฏิบัตรการ มีหน้าที่บำรุงรักษาและเพิ่มประสิทธิภาพการทำงานของคอมพิวเตอร์ และถ้าเป็นโปรแกรมอรรถประโยชน์บนเครือข่ายจะหมายถึงโปรแกรมที่ทำงานเกี่ยวกันเครือข่าย Lab, เครือข่าย Wan และ Cloud Computing ที่ช่วยในการเครือข่ายหรือใช้ในการตรวจสอบการใช้งานของเครือข่าย เช่น โปรแกรมตรวจจับการใช้งานข้อมูลบนเครือข่าย (Netcap.exe) เพื่อเก็บข้อมูลการจราจรเครือข่าย หรือ โปรแกรม Wireshark ที่ใช้เก็บข้อมูลการใช้งานบนเครือข่ายหรือโปรแกรม Putty ที่ทำงานเกี่ยวกับการรับส่งข้อมมูลทาง Telnet &ssh หรือโปรแกรม ftp โปรแกรม Teamviewer ทำงานผ่านเครือข่าย โดยการไป remote เครืองที่เป็น client ใช้ในการควบคุมเครื่องที่ต้องการทำงาน เป็นต้น

      </p>
      <hr>
    </div>

    <div id="page3" class="tabcontent">
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">8.1 การใช้คำสั่งตรวจสอบการทำงานของระบบเครือข่าย</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สำหรับปัจจุบันนี้น้อยคนนักที่ใช้คอมพิวเตอร์และไม่รู้จักอินเตอร์เน็ต ส่วนใหญ่จะใช้เป็นอยู่แล้วในการท่องโลกออนไลน์? แต่มีไม่มากนักที่จะรู้ว่าเมื่อเราใช้อินเตอร์เน็ตเข้าเว็บไซต์ต่างๆ แล้วเกิดปัญหาล่าช้าหรือเข้าไม่ได้ จะใช้คำสั่งใดๆ ตรวจสอบความผิดผลาดของการสือสารกันระหว่างคอมพิวเตอร์ของเรากับเว็บไซต์ที่จะต้องการเข้าไปใช้บริการ
วันนี้ผมจะมาบอกกล่าวคำสั่ง ในการตรวจสอบเส้นทางสื่อสารของอินเตอร์เน็ตเพื่อเป็นประโยชน์สำหรับเพื่อนๆ น้องๆ สักเล็กน้อย
คำสั่งที่จะกล่าวนี้จะต้องใช้ใน Command Prompt ซึ่งเราสามารถเปิดหน้าต่าง ??Command Prompt ได้ดังนี้
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;–พิมพ์ cmd ลงในช่องว่างของ Start Menu แล้วกดคีย์ Enter หรือ <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;–กดคีย์โลโก้ Windows + R พิมพ์ พิมพ์ cmd ลงในช่องว่าง Open แล้วกดคีย์ Enter

      </p>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">1. คำสั่ง Ping </b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ping เป็นการทดสอบว่าเส้นทางสื่อสารจากเครื่องที่ใช้อยู่ไปยังเครื่องคอมพิวเตอร์เครื่องอื่นในเครือข่าย? ว่ายังใช้การได้อยู่หรือไม่ โดยสามารถพิมพ์ชื่อเครื่อง หรือหมายเลข IP Address ของเครื่องที่ต้องการทดสอบ หรือเว็บไซต์ที่ต้องการทดสอบก็ได้ Ping สามารถประมาณเวลาเดินทางโดยเฉลี่ยของข้อมูลไปกลับ โดยคำนวณจากช่วงเวลาและอัตราเร็วในการตอบรับ เป็นหน่วยมิลลิวินาที และอัตราการสูญเสียข้อมูลระหว่างโฮสต์เป็นเปอร์เซ็นต์<br>
รูปแบบคำสั่ง
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ping 122.155.17.132 (เป็นการทดสอบเส้นทางระหว่างเครื่องที่เราใช้กับ เครื่องที่มี ?IP 122.155.17.132) ping www.notebookspec.com (เป็นการทดสอบเส้นทางระหว่างเครื่องที่เราใช้กับเว็บไซต์ www.notesbookspec.com)
      </p>
      <div align="center">
        <img src="assets/img/img8-1.jpg"><br>
        รูปที่ 8.1 การทดสอบเส้นทางระหว่างเครื่องที่เราใช้กับเว็บไซต์
      </div><hr>
    </div>

    <div id="page4" class="tabcontent">
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">2. คำสั่ง IPConfig, Ping</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IP Address คือหมายเลขประจำเครื่องที่ต้องกำหนดให้กับเครื่องคอมพิวเตอร์ทุกเครื่องและอุปกรณ์ทุกชิ้นในเครือข่ายเน็ตเวิร์ค โดยมีข้อแม้ว่าหมายเลข IP Address ที่จะกำหนดให้กับคอมพิวเตอร์ทุกเครื่องหรืออุปกรณ์ต่างๆ จะต้องไม่ซ้ำซ้อนกัน ซึ่งเมื่อกำหนดหมายเลข IP Address ได้อย่างถูกต้องจะช่วยให้คอมพิวเตอร์ทุกเครื่องและอุปกรณ์ต่างๆในเครือข่ายรู้จักกันรวมถึงสามารถรับส่งข้อมูลไปมาระหว่างกันได้อย่างถูกต้อง โดย IP Address จะเป็นตัวอ้างอิงชื่อที่อยู่ของคอมพิวเตอร์แต่ละเครื่อง ตัวอย่างเช่น หากคอมพิวเตอร์ A ต้องการส่งไฟล์ข้อมูลไปให้คอมพิวเตอร์ B คอมพิวเตอร์ A จะต้องรู้จักหรือมองเห็นคอมพิวเตอร์ B เสียก่อน โดยการอ้างอิงหมายเลข IP Address ของคอมพิวเตอร์ B ให้ถูกต้อง จากนั้นจึงอาศัยโปรโตคอลเป็นตัวรับส่งข้อมูลระหว่างทั้ง 2 เครื่อง IP Address จะประกอบไปด้วยตัวเลขจำนวน 4 ชุด ระหว่างตัวเลขแต่ละชุดจะถูกคั่นด้วยจุด “.” เช่น 192.168.0.1 โดยคอมพิวเตอร์จะแปลงค่าตัวเลขทั้ง 4 ชุดให้กลายเป็นเลขฐาน 2 ก่อนจะนำค่าที่แปลงได้ไปเก็บลงเครื่องทุกครั้ง และนอกจากนี้หมายเลข IP Address ยังแบ่งออกเป็น 2 ส่วนดังนี้<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.ส่วนที่ใช้เป็นหมายเลขเครือข่าย (Network Address) <br> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.ส่วนที่ใช้เป็นหมายเลขเครื่อง (Host Address)

      </p>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Class A</b> หมายเลข IP Address จะอยู่ในช่วง 0.0.0.0 ถึง 127.255.255.255 มีไว้สำหรับจัดสรรให้กับองค์กรขนาดใหญ่ที่มีคอมพิวเตอร์เชื่อมต่อภายในเครือข่ายจำนวนมากๆ
      </p>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Class B</b>หมายเลข IP Address จะอยู่ในช่วง 128.0.0.0 ถึง 191.255.255.255 มีไว้สำหรับจัดสรรให้กับองค์กรขนาดกลาง ซึ่งสามารถเชื่อมต่อคอมพิวเตอร์ในเครือข่ายได้มากถึง 65,534 เครื่อง
      </p>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Class C </b>หมายเลข IP Address จะอยู่ในช่วง 192.0.0.0 ถึง 223.255.255.255 มีไว้สำหรับจัดสรรให้กับองค์กรขนาดเล็กและใช้กับคอมพิวเตอร์ส่วนใหญ่ในเครือข่ายอินเตอร์เน็ตสามารถต่อเชื่อมกับคอมพิวเตอร์ในเครือข่ายได้ 254 เครื่อง
      </p>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Class D</b>หมายเลข IP Address จะอยู่ในช่วง 224.0.0.0 ถึง 239.255.255.255 สำหรับหมายเลข IP Address ของ Class นี้มีไว้เพื่อใช้ในเครือข่ายแบบ Multicast เท่านั้น
      </p>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Class E</b> หมายเลข IP Address จะอยู่ในช่วง 240.0.0.0 ถึง 254.255.255.255 สำหรับหมายเลข IP Address ของ Class นี้จะเก็บสำรองไว้ใช้ในอนาคต ปัจจุบันจึงยังไม่ได้มีการนำมาใช้งาน
      </p><hr>
    </div>

    <div id="page5" class="tabcontent">
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">Private IP</b></h4></label>
      </div>
      <div align="center">
        <img src="assets/img/img8-2.gif"><br>
        รูปที่ 8.2 ดู IP Address
      </div>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">IPConfig คำสั่งสำหรับเรียกดูหมายเลข IP Address ภายในเครื่อง</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;คำสั่ง IPConfig เป็นคำสั่งที่ใช้สำหรับเรียกดูหมายเลข IP Address ของเครื่องที่ท่านใช้งานอยู่ ซึ่งถ้าหากท่านไม่ทราบว่าหมายเลข IP Address ของเครื่องที่ท่านใช้งานอยู่นั้นเป็นหมายเลขอะไรหรือมีรายละเอียดอะไรที่เกี่ยวข้องกับหมายเลข IP Address บ้าง ก็สามารถใช้คำสั่งนี้เรียกดูผ่านหน้าต่าง Command Prompt ได้เลยครับ โดยเข้าไปที่<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.คลิกปุ่ม Start > Run > พิมพ์ cmd วรรค /k วรรค ipconfig
      </p>
      <div align="center">
        <img src="assets/img/img8-3.gif"><br>
        รูปที่ 8.3 Start > Run > พิมพ์ cmd วรรค /k วรรค ipconfig
      </div>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">จะได้ผลลัพธ์ออกมาดังรูป</b></h4></label>
      </div>
      <div align="center">
        <img src="assets/img/img8-4.gif"><br>
        รูปที่ 8.4 โชว์หน้า ipconfig
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.ถ้าหากต้องการดูหมายเลข IP Address ซึ่งบอกรายละเอียดทั้งหมดก็สามารถดูได้โดยคลิกปุ่ม Start > Run > พิมพ์ cmd วรรค /k วรรค ipconfig วรรค /all
      </p>
      <div align="center">
        <img src="assets/img/img8-5.gif"><br>
        รูปที่ 8.5 Run > พิมพ์ cmd วรรค /k วรรค ipconfig วรรค /all
      </div>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">จะได้ผลลัพธ์ออกมาดังรูป</b></h4></label>
      </div>
      <div align="center">
        <img src="assets/img/img8-6.gif"><br>
        รูปที่ 8.5 โชว์หน้า ipconfig/all
      </div><hr>
    </div>

    <div id="page6" class="tabcontent">
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">และนอกจากนี้ยังมีตัวเลือกเพิ่มเติมที่นิยมใช้ร่วมกับคำสั่ง IPConfig ได้แก่</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ipconfig [/? | /all | /renew [adapter] | /release [adapter] | /flushdns | /displaydns        
| /registerdns | /showclassid adapter | /setclassid adapter [classid] ]
Options: /? แสดง help ของคำสั่งนี้/all แสดงรายละเอียดทั้งหมด/release ยกเลิกหมายเลข IP ปัจจุบัน/renew ขอหมายเลข IP ใหม่ ในกรณีที่เน็ตเวิร์คมีปัญหา เราอาจจะลองตรวจสอบได้โดยการใช้คำสั่งนี้ ซึ่งหากคำสั่งนี้ทำงานได้สำเร็จ แสดงว่าปัญหาไม่ได้มาจากระบบเครือข่าย แต่อาจจะเกิดจากซอฟท์แวร์ของเรา/flushdns ขจัด DNS Resolver ออกจาก cache.
/registerdns ทำการ Refreshes DHCP ทั้งหมด และ registers DNS names ใหม่  /displaydns แสดง DNS Resolver ทั้งหมดที่มีอยู่ใน Cache./showclassid แสดง class IDs
 ทั้งหมดที่ DHCP ยอมให้กับการ์ดแลนใบนี้/setclassid แก้ไข dhcp class id.

      </p>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">3. คำสั่ง net view</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เป็นคำสั่งที่ใช้สำหรับตรวจสอบระบบเครือข่ายในเวิร์กกรุ๊ปเดียวกัน ว่ามีเครื่องคอมพิวเตอร์เชื่อมอยู่ในวง ทั้งหมดกี่เครื่องในกรณีที่ต้องการตรวจสอบเครื่องคอมพิวเตอร์ที่อยู่ต่างโดเมน หรือต่างเวิร์กกรุ๊ปกัน แต่อยู่บน Hub/Switch ตัวเดียวกัน ให้ใช้คำสั่ง net view/ชื่อ domain นั้นและถ้าต้องการดูรายละเอียดทรัพยากรที่ต่อกับเครื่องคอมพิวเตอร์นั้น ก็พิมพ์ net view \\ชื่อคอมพิวเตอร์เครื่องนั้น
      </p>
      <div align="center">
        <img src="assets/img/img8-7.png"><br>
        รูปที่ 8.7 คำสั่ง net view 
      </div>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">4. คำสั่ง nslookup </b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เป็นคำสั่งที่ใช้ทดสอบ DNS Server ที่เราใช้งานอยู่ สามารถตอบสนองการทำงาน หรือไม่เมื่อพิมพ์เข้าไปแล้วจะเป็นการเปิดคำสั่ง nslookupทดสอบว่าโดเมนนี้
ตรงกับหมายเลข IP Address อะไร และยังสามารถตรวจสอบได้ว่า DNS ที่คุณใช้งานอยู่ ยังบริการให้กับคุณอยู่หรือไม่
      </p>
      <div align="center">
        <img src="assets/img/img8-8.jpg"><br>
        รูปที่ 8.8 คำสั่ง nslookup
      </div>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">5.คำสั่ง netstat</b></h4></label>
      </div>
      <div align="center">
        <img src="assets/img/img8-9.jpg"><br>
        รูปที่ 8.9 คำสั่ง netstat
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>รูปแบบคำสั่ง netstat</b><br>
Proto Local Address Foreign Address State <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>คำอธิบาย</b>
      </p>
      <p style="font-size: 23px; margin-left: 40px;">
        1. Proto = โปรโตคอลที่ใช้งานอยู่ เป็น TCP หรือ UDP <br>
        2. Local Address = หมายเลข IP หรือชื่อเครื่องเรา:พอร์ตที่ใช้งานอยู่ <br>
        3. Foreign Address = หมายเลข IP หรือชื่อเครื่องปลายทาง:พอร์ตที่ใช้งานอยู่ <br>
        4. State สถานะต่างๆ <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.1 ESTABLISHED = สถาปนาการเชื่อมต่อ - เครื่องต้นทาง(เครื่องเรา)ทำการเชื่อมต่อกับ IP address ปลายทาง(เครื่องเป้าหมาย)ด้วยพอร์ตหมายเลขนั้นแล้ว <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.2 TIME_WAIT = รอการเชื่อมต่อกลับมา / กำลังโดนสแกนพอร์ตอยู่<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.3 LISTEN = รอการเชื่อมต่อ <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.4 CLOSE_WAIT = ปิดการเชื่อมต่อ<br>
      </p>
      <div align="center">
        <img src="assets/img/img8-10-1.jpg" width="400" height="250"><br>
        รูปที่ 8.10 netstat
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>ตัวอย่างการใช้งานเช่น</b>
ตรวจสอบการเชื่อมต่อด้วยโปรโตคอล TCP netstat -n | less [enter] netstat -lnt [enter] <br>ตรวจสอบพอร์ตการใช้งานทั้งหมด netstat -na | less [enter]
      </p>
      <hr>
    </div>

    <div id="page7" class="tabcontent">
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">ตรวจสอบเฉพาะที่ต้องการตรวจสอบ</b></h4></label>
      </div>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">ตรวจสอบเฉพาพอร์ตเว็บไซต์</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- httpd[root@det ~]# netstat -nat | grep 80 tcp 0 0 127.0.0.1:50686 127.0.0.1:80 TIME_WAIT tcp 0 0 127.0.0.1:10050 127.0.0.1:55580 TIME_WAIT tcp 0 0 127.0.0.1:10050 127.0.0.1:55680 TIME_WAIT tcp 0 0 :::80 :::* LISTEN
      </p>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">ตรวจสอบเฉพาพอร์ตฐานข้อมูล</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- mysql[root@det ~]# netstat -nat | grep 3306 tcp 0 0 0.0.0.0:3306 0.0.0.0:* LISTEN
      </p>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">ตรวจสอตจำนวนการเชื่อมต่อ (ทั้งหมดกี่คอนเนคชั่น)</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- [root@det ~]# netstat -nat | grep 80 | wc -l4 <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- [root@det ~]# netstat -nat | grep 443 | wc -l2 <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- [root@det ~]# netstat -nat | grep 25 | wc -l4
      </p>
      <hr>
    </div>

    <div id="page8" class="tabcontent">
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">8.2 โปรแกรม TeamViewer</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TeamViewer เป็นโปรแกรม Remote Desktop ส าหรับการใช้งานในการเชื่อมต่อระหว่างคอมพิวเตอร์จากระยะไกลตัว โดยมีฟังก์ชั่นการใช้งานอย่างง่าย และมีระบบความปลอดภัยที่น่าเชื่อถือ ขนาดโปรแกรมไม่ใหญ่มาก สามารถใช้งานได้โดยไม่จำเป็นต้องติดตั้งโปรแกรมลงเครื่อง นอกจากการใช้งานในแบบRemote Support ได้แล้ว ยังสามารถใช้งานในลักษณะ Remote presentation Remoteadministration และสามารถใช้งานผ่านทางอินเทอร์เน็ตโดยที่ไม่ต้องทำการตั้งค่าไฟร์วอลล์ใหม่
      </p>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">วิธีการติดตั้งโปรแกรม TeamViewer</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. ทำการดาวน์โหลดโปรแกรม TeamViewer จากเว็บไซต์ http://www.teamviewer.com/ โดยเลือกเวอร์ชั่นสมบูรณ์ และให้ใช้งานได้โดยไม่เสียค่าใช้จ่าย
      </p>
      <div align="center">
        <img src="assets/img/img8-10.png" width="400" height="250"><br>
        รูปที่ 8.10 ดาวน์โหลดโปรแกรม
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. บันทึกไฟล์โปรแกรมการติดตั้งลงเครื่องคอมพิวเตอร์ และเปิดต าแหน่งที่อยู่ไฟล์เพื่อทำการติดตั้งโปรแกรม
      </p>
      <div align="center">
        <img src="assets/img/img8-11.png" width="400" height="250"><br>
        รูปที่ 8.11 บันทึกไฟล์โปรแกรมการติดตั้งลงเครื่องคอมพิวเตอร์
      </div><p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. ไฟล์ติดตั้งโปรแกรมที่ดาวน์โหลดได้จะมีลักษณะไฟล์เป็น .exe ซึ่งสามารถด าเนินการติดตั้งได้ดังนี้<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.1 ดับเบิลคลิกไฟล์ TeamViewer_Setup.exe
      </p>
      <div align="center">
        <img src="assets/img/img8-12.png" width="150" height="150"><br>
        รูปที่ 8.12 ดับเบิลคลิกไฟล์ TeamViewer_Setup.exe
      </div>
      <hr>
    </div>

    <div id="page9" class="tabcontent">
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.2 คลิกปุ่ม Run เพื่อทำการติดตั้ง
      </p>
      <div align="center">
        <img src="assets/img/img8-13.png" width="400" height="250"><br>
        รูปที่ 8.13 คลิกปุ่ม Run เพื่อทำการติดตั้ง
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.3 คลิกเลือก Install เพื่อท าการติดตั้งโปรแกรม หรือกรณีไม่ต้องการติดตั้งโปรแกรมให้เลือกRun เพื่อใช้งานชั่วคราว เมื่อทำการเลือกแล้วให้คลิกปุ่ม Next
      </p>
      <div align="center">
        <img src="assets/img/img8-14.png" width="400" height="250"><br>
        รูปที่ 8.14 Install เพื่อท าการติดตั้งโปรแกรม
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.4 เลือก personal/ non-commercial use เป็นการใช้งานส่วนบุคคลและไม่ใช่เพื่อการค้า เมื่อทำการเลือกแล้วให้คลิกปุ่ม Next
      </p>
      <div align="center">
        <img src="assets/img/img8-15.png" width="400" height="250"><br>
        รูปที่ 8.15 เลือก personal/ non-commercial use
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.5 ให้คลิกเลือกทั้งสอง 2 รายการ เป็นการยอมรับเงื่อนไข และยืนยันในลักษณะการใช้งานแบบส่วนบุคคลและไม่ใช่เพื่อการค้า แล้วให้คลิกปุ่ม Next
      </p>
      <div align="center">
        <img src="assets/img/img8-16.png" width="400" height="250"><br>
        รูปที่ 8.16 คลิกเลือกทั้งสอง 2 รายการ เป็นการยอมรับเงื่อนไข
      </div>
      <hr>
    </div>

    <div id="page10" class="tabcontent">
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.6 เลือกประเภทในการติดตั้งเป็นแบบ Default แล้วคลิกปุ่ม Next
      </p>
      <div align="center">
        <img src="assets/img/img8-17.png" width="400" height="250"><br>
        รูปที่ 8.17 ประเภทในการติดตั้งเป็นแบบ Default
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.7 โปรแกรม TeamViewer จะเริ่มติดตั้ง
      </p>
      <div align="center">
        <img src="assets/img/img8-18.png" width="400" height="250"><br>
        รูปที่ 8.18 โปรแกรม TeamViewer จะเริ่มติดตั้ง
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.8 เมื่อทำการติดตั้งโปรแกรมเสร็จสิ้น จะปรากฎหน้าต่างโปรแกรมพร้อมใช้งานดังรูป
      </p>
      <div align="center">
        <img src="assets/img/img8-19.png" width="400" height="250"><br>
        รูปที่ 8.19 เการติดตั้งโปรแกรมเสร็จสิ้น
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.5 ให้คลิกเลือกทั้งสอง 2 รายการ เป็นการยอมรับเงื่อนไข และยืนยันในลักษณะการใช้งานแบบส่วนบุคคลและไม่ใช่เพื่อการค้า แล้วให้คลิกปุ่ม Next
      </p>
      <div align="center">
        <img src="assets/img/img8-16.png" width="400" height="250"><br>
        รูปที่ 8.16 คลิกเลือกทั้งสอง 2 รายการ เป็นการยอมรับเงื่อนไข
      </div>
      <hr>
    </div>

    <div id="page11" class="tabcontent">
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">8.3 โปรแกรม PuTTY</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;โปรแกรม Putty เป็นโปรแกรม SecureShell ขนาดเล็กเมื่อ Download เรียบร้อยสามารถเรียกใช้งานได้ทันที
      </p>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">การติดตั้งโปรแกรม PUTTY</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การ Remote เข้าใช้งาน Linux Server จาก Window ในที่นี้ เราจะใช้โปรแกรม PuTTY (SSH Client) ในการ Remote เข้ามายัง Linux Server ซึ่งจะต้องทำการดาวน์โหลด เพื่อติดตั้งที่เครื่อง Windows ก่อน สามารถดาวน์โหลดได้จาก URL : http://www.putty.org/
      </p>
      <div align="center">
        <img src="assets/img/img8-20.png" width="400" height="250"><br>
        รูปที่ 8.20 http://www.putty.org/
      </div>
      <div align="center">
        <img src="assets/img/img8-21.png" width="400" height="250"><br>
        รูปที่ 8.21 ดาวน์โหลดโปรแกรม
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ดาวน์โหลดแล้วสามารถเข้าใช้งานโปรแกรมได้ทันทีโดยไม่ต้องติดตั้ง
      </p>
      <div align="center">
        <img src="assets/img/img8-22.png" width="400" height="200"><br>
        รูปที่ 8.22 บันทึกไฟล์โปรแกรมการติดตั้งลงเครื่องคอมพิวเตอร์
      </div><p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;โปรแกรม PuTTY จะมีหน้าจอการทำงานแสดงดังรูป
      </p>
      <div align="center">
        <img src="assets/img/img8-23.png" width="400" height="250"><br>
        รูปที่ 8.23 ปรแกรม PuTTY
      </div>
      <hr>
    </div>

    <div id="page12" class="tabcontent">
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">8.4 โปรแกรม Filezilla</b></h4></label>
      </div>
      <div align="left">
        <label><h4><b style="font-size: 23px; margin-left: 15px;">การติดตั้งโปรแกรม Filezilla</b></h4></label>
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. ไปโหลดโปรแกรมที่เว็บ http://filezilla-project.org แล้วกดเลือก Download FileZilla Client จะไปหน้าใหม่ จะมี Software ให้โหลด โดยเลือกตามโปรแกรมระบบภายในเครื่องที่ต้องการลง
      </p>
      <div align="center">
        <img src="assets/img/img8-24.jpg" width="400" height="250"><br>
        รูปที่ 8.24 http://filezilla-project.org
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. เมื่อโหลดเสร็จจะได้ ตัวลงโปรแกรม Filezilla จากนั้นกดเพื่อทำการลงโปรแกรม
      </p>
      <div align="center">
        <img src="assets/img/img8-25.jpg" width="150" height="150"><br>
        รูปที่ 8.25 ตัวลงโปรแกรม Filezilla 
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. หน้าแรกจะเป็นการให้ยืนยันข้อตกลงการใช้โปรแกรม ให้กด I Agree
      </p>
      <div align="center">
        <img src="assets/img/img8-26.jpg" width="400" height="250"><br>
        รูปที่ 8.26 การให้ยืนยันข้อตกลงการใช้โปรแกรม
      </div><p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. ต่อมาเป็นการระบุว่าให้สิทธิ์ของระบบให้ใช้งานได้บ้าง ถ้าต้องการให้ทุกคนในเครื่องใช้โปรแกรมได้ให้ เลือก Anyone who uses this computer (all user) แล้วกดปุ่ม Next
      </p>
      <div align="center">
        <img src="assets/img/img8-27.jpg" width="400" height="250"><br>
        รูปที่ 8.27 Anyone who uses this computer (all user) 
      </div>
      <hr>
    </div>
    <div id="page13" class="tabcontent">
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5. ต่อมาหน้า Choose Components ให้กดปุ่ม Next
      </p>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6. ต่อมาหน้า Choose Install Location เป็นการให้เลือกพื้นที่เก็บโปรแกรม ถ้าไม่เปลี่ยนให้ ให้กดปุ่ม Next
      </p>
      <div align="center">
        <img src="assets/img/img8-28.jpg" width="400" height="250"><br>
        รูปที่ 8.28 Choose Install Location เป็นการให้เลือกพื้นที่เก็บโปรแกรม 
      </div>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7. ต่อมาหน้า Choose Start Menu Folder ให้ปุ่ม Install จากนั้นตัวลงโปรแกรมจะทำการลงโปรแกรม รอจนเสร็จ
      </p>
      <p style="font-size: 23px; margin-left: 40px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8. เมื่อโปรแกรมลงเสร็จ กดปุ่ม Finish
      </p>
      <div align="center">
        <img src="assets/img/img8-29.jpg" width="400" height="250"><br>
        รูปที่ 8.29 ลงโปรแกรมเสร็จสิ้น
      <hr>
      <p align="center">
      <iframe width="100%" height="350" src="https://www.youtube.com/embed/ZT2V_6reXuE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  
      </p>
      <p align="center">
      <a href="chl8.php" style="background-color:#000; padding: 10px;">ทำแบบทดสอบหลังเรียนบทที่ 8</a>
      <a href="updata/updatetoch1.php" style="background-color:#000; padding: 10px;">จบบทเรียนทหน่วยที่ 8 คลิกเพื่อกลับไปหน่วยที่ 1</a></p>
    </div>
  </div>

<button class="tablink btn" onclick="openCity('page1', this, 'orange')" id="defaultOpen">หน้าที่ 1</button>
<button class="tablink btn" onclick="openCity('page2', this, 'orange')">หน้าที่ 2</button>
<button class="tablink btn" onclick="openCity('page3', this, 'orange')">หน้าที่ 3</button>
<button class="tablink btn" onclick="openCity('page4', this, 'orange')">หน้าที่ 4</button>
<button class="tablink btn" onclick="openCity('page5', this, 'orange')">หน้าที่ 5</button>
<button class="tablink btn" onclick="openCity('page6', this, 'orange')">หน้าที่ 6</button>
<button class="tablink btn" onclick="openCity('page7', this, 'orange')">หน้าที่ 7</button>
<button class="tablink btn" onclick="openCity('page8', this, 'orange')">หน้าที่ 8</button>
<button class="tablink btn" onclick="openCity('page9', this, 'orange')">หน้าที่ 9</button>
<button class="tablink btn" onclick="openCity('page10', this, 'orange')">หน้าที่ 10</button>
<button class="tablink btn" onclick="openCity('page11', this, 'orange')">หน้าที่ 11</button>
<button class="tablink btn" onclick="openCity('page12', this, 'orange')">หน้าที่ 12</button>
<button class="tablink btn" onclick="openCity('page13', this, 'orange')">หน้าที่ 13</button>

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