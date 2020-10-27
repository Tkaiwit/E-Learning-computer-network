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
				<label><h3><b>หน่วยที่ 3 เรื่อง ประเภทของเครือข่าย</b></h3></label>
			</div>
			<div align="left">
				<label><h4><b style="font-size: 23px; margin-left: 15px;">หัวข้อเรื่อง (Topics)</b></h4></label>
			</div>
			<p >
				<table align="center" width="500" style="font-size: 23px; margin-left: 40px;">
					<tr>
						<td><p>3.1 เครือข่ายแลน (LAN)</p></td>
						<td><p>3.2 โทเค็น (Token)</p></td>
					</tr>
					<tr>
						<td><p>3.3 เครือข่าย FDDI</p></td>
						<td><p>3.4 เครือข่าย (ATM)</p></td>
					</tr>
					<tr>
						<td><p>3.5 เครือข่ายแลนเสมือน</p></td>
						<td><p>3.6 เครือข่ายแวน (WAN)</p></td>
					</tr>
					<tr>
						<td><p>3.7 เครือข่ายอินเตอร์เน็ต</p></td>
						<td><p>3.8 VPN</p></td>
					</tr>
					<tr>
						<td colspan="2">3.9 Intranet and Extranet</td>
					</tr>
				</table>
			</p>
			<div align="left">
				<label><h4><b style="font-size: 23px; margin-left: 15px;">แนวคิดสำคัญ (Main Idea)</b></h4></label>
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การเชื่อมต่อคอมพิวเตอร์เป็นเครือข่ายคอมพิวเตอร์ เป็นการเชื่อมต่อคอมพิวเตอร์หลายเครื่องเข้าด้วยกันโดยมีวัตถุประสงค์เพื่อใช้งานอุปกรณ์ ซอฟต์แวร์และข้อมูลร่วมกัน ตลดอจนทำงานร่วมกันได้ในเครือข่ายคอมพิวเตอร์ เป็นการเพิ่มความสามรถของระบบให้สูงขึ้นและลดต้นทุนของระบบโดยรวมลงซึ่งการเชื่อมต่อของระบบเครือข่ายยังรวมไปถึงการเชื่อมต่ออุปกรณ์รอบข้าง มีการใช้เครื่องบริการแฟ้มข้อมูลเป็นที่เก็บรวบรวมแฟ้มข้อมูล มีการทำฐานข้อมูลกลาง มีหน่วยบริการใช้เครื่องพิมพ์ และอุปกรณ์สำหรับทำงานเฉพาะอย่างใดอย่างหนึ่<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เนื้อหาในหน่วยนี้จะกล่าวถึงเครือข่ายประเภทต่างๆ ได้แก่ เครือข่ายแลน (LAN) เครือข่ายแวน (WAN) และ Intranet and Extranet
			</p>
			<div align="left">
				<label><h4><b style="font-size: 23px; margin-left: 15px;">สมรรถนะย่อย (Element of Competency)</b></h4></label>
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. แสดงความรู้เกี่ยวกับเครือข่ายประเทศต่างๆ<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. เชื่อมต่อเครื่อข่ายแลน

			</p><hr>
		</div>

		<div id="page2" class="tabcontent">
			<div align="center">
				<label><h3><b>จุดประสงค์เชิงพฤติกรรม (Behaviral Objectives)</b></h3></label>
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				1. บอกความหมายเครือข่ายแลนได้<br>
				2. บอกถึงองค์ประกอบเครือข่ายแลนได้<br>
				3. บอกประเภทของเครือข่ายแลนได้<br>
				4. บอกถึงมาตรฐานเครือข่ายแลนได้<br>
				5. บอกความหมายและรูปแบบการเชื่อมต่อ Ethernet ได้<br>
				6. อธิบายวิธีการเข้าใช้ตัวกลางของ Ethernet ได้<br>
				7. บอกถึงประเภทมาตรฐานการเชื่อมต่อ Ethernet ได้<br>
				8. บอกความหมายของ Fast Ethernet ได้<br>
				9. บอกความหมายของ Gigabit Ethernet ได้<br>
				10. บอกความหมายของเครือข่ายแลนไร้สายได้<br>
				11. บอกถึงวิธีการจัดการระบบความปลอดภัยบนเครือข่ายไร้สายได้<br>
				12. บอกถึงมาตรฐานเครือข่ายแลนไร้สายได้<br>
				13. บอกถึงอุปกรณ์ที่ใช้ในการติดต่อเครือข่ายไร้สายได้<br>
				14. บอกการประยุกต์ใช้งานเครือข่ายแลนได้<br>
				15. บอกถึงลักษณะเครือข่ายโทเค็นบัสได้<br>
				16. บอกถึงลักษณะเครือข่ายโทเค็นริงได้<br>
				17. บอกถึงลักษณะเครือข่าย ATM ได้<br>
				18. บอกถึงลักษณะเครือข่าย FDDI ได้<br>
				19. อธิบายลักษณะการเชื่อมต่อเครือข่ายเสมือนได้
			</p>
			<div align="left">
				<label><h4><b style="font-size: 23px; margin-left: 15px;">เนื้อหาสาระ (Content)</b></h4></label>
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เครือข่ายคอมพิวเตอร์ (Computer Network) หมายถึง เครือข่ายการสื่อสารระหว่างคอมพิวเตอร์ตั้งแต่สองเครื่องขึ้นไป ที่สามารถแลกเปลี่ยนข้อมูลกันได้ มีการเชื่อมต่อระหว่างอุปกรณ์คอมพิวเตอร์ต่างๆในเครือข่าย โดยใช้สื่อที่เป็นสายหรือสื่อแบบไร้สาย<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การเชื่อมต่อคอมพิวเตอร์เป็นเครือข่ายคอมพิวเตอร์มี จุดประสงค์เพื่อความสามารถของระบบคอมพิวเตอร์ให้สูงขึ้น และลดต้นทุนของระบบคอมพิวเตอร์โดยรวมลง ซึ่งการโอนย้ายข้อมูลระหว่างเครื่องคอมพิวเตอร์ในเครือข่ายจะทำให้ระบบมีความสามารถเพิ่มมากขึ้น มีการใช้ทรัพยากร เช่น หน่วยประมวล หน่วยความจำหน่วยจัดเก็บข้อมูลโปรแกรมคอมพิวเตอร์ และอุปกรณ์ต่างๆ ที่มีราคาแพงและไม่สามารถจัดหามาให้ทุกคนได้ ทำให้ลดต้นทุนค่าใช้จ่ายด้านทรัพยากรของระบบคอมพิวเตอร์ลงได้
			</p>
			<hr>
		</div>

		<div id="page3" class="tabcontent">
			<div align="left">
				<label><h4><b style="font-size: 23px; margin-left: 15px;">3.1 เครือข่ายแลน (LAN)</b></h4></label>
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ความหมายของเครือข่ายแลน LAN ย่อมาจาก Local Area Network คือระบบเครือข่าย แบบเชื่อมต่อคอมพิวเตอร์เข้าด้วยกันในระยะจำกัด เช่น ในอาคารเดียวกัน หรือบริเวณเดียวกันที่สามารถลากสายถึงกันได้โดยตรง ส่วนมากจะใช้สายเคเบิ้ล หรือ ที่เรียกกันว่า สายแลน เป็นตัวกลางในการเชื่อมต่อ อัตราเร็วของเครือข่าย  LAN อยู่ที่ระหว่าง 1-100 Mbps ทั้งนี้ความเร็วขอมูลขึ้นอยู่กับ ตัวกลางสายส่งที่ใช้ เทคนิคการส่งสัญญาณ และข้อกำหนดของผู้ให้บริการเน็ตเวิร์ค<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ลักษณะสำคัญของเครือข่ายแลน คือ อุปกรณ์ที่ประกอบภายในเครือข่ายสามารถส่งรับสัญญาณกันด้วยความเร็วสูงมาก โดยทั่วไปมีความเร็วตั้งแต่หลายสิบล้านบิตต่อวินาที จนถึงกว่าพันล้านบิตต่อวินาที การสื่อสารในระยะใกล้จะมีความเร็วในการสื่อสารสูง ทำให้การรับส่งข้อมูลมีความผิดพลาดน้อยและสามารถรับส่งข้อมูลจำนวนมากในเวลาจำกัดได้ เครือข่ายแลนจึงเป็นเครือข่ายที่มีบทบาทสำคัญในการเชื่อมโยงระบบคอมพิวเตอร์ในองค์กรและมีแนวโน้มที่จะทำให้ทรัพยากรและการประมวลผลในองค์กรเชื่อมโยงเป็นระบบเดียวทำให้ใช้งานร่วมกันได้ทั้งองค์กร
			</p>
			<div align="left">
				<label><h4><b style="font-size: 23px; margin-left: 15px;">3.2 โทเค็น (Token)</b></h4></label>
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;โทเคน (Token) เป็นข้อมูลชุดหนึ่งที่ถูกส่งอยู่ในระบบเครือข่ายที่มี โทโปโลจี (Topology) แบบริง (Ring) ในโทโปโลจีแบบนี้ หากคอมพิวเตอร์เครื่องใดในเครือข่ายต้องการส่งข้อมูลจะเก็บเอา โทเคน ไว้แล้วส่งข้อมูลของตนเองออกมา เพราะฉะนั้น โทเคนเป็นเหมือนบัตรสิทธิ์ ใครมีโทเคนก็มีสิทธิ์ส่งข้อมูล ใครไม่มีโทเคนก็ไม่มีบัตรสิทธิ์ส่งข้อมูลไม่ได้ เพราะในเครือข่ายแบบริง จะมี โทเคน เพียงชุดเดียวเท่านั้น ทำให้คอมพิวเตอร์ที่อยู่ในเครือข่ายลักษณะนี้ ส่งข้อมูลได้ไม่ชนกัน
			</p>
			<div align="center">
				<img src="assets/img/img3-1.png" width="600"><br>
				รูปที่ 3.1 ระบบเครือข่าย Token Bus
			</div>
			<div align="center">
				<img src="assets/img/img3-2.gif"><br>
				รูปที่ 3.2 เครือข่ายแบบโทเคนริง
			</div>
			<hr>
		</div>

		<div id="page4" class="tabcontent">
			<div align="left">
				<label><h4><b style="font-size: 23px; margin-left: 15px;">3.3 เครือข่าย FDDI</b></h4></label>
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FDDI เป็นมาตรฐานการต่อระบบเครือข่ายโดยอาศัยแบบ Fiber Optic ซึ่งจะสามารถรับส่งข้อมูลได้ที่ความเร็วสูงถึง 100 Mbps เท่ากับ Fast Ethernet หรือสิบเท่าของ Ethernet  พื้นฐานลักษณะของ FDDI จะต่อเป็น Ring ที่มีสายสองชั้นเดินคู่ขนานกัน เพื่อสำรองในกรณีเกิดสายขาดขึ้น วงจรจะได้ตัดส่วนที่ขาดออกแล้ววนสายที่เหลือให้ครบรอบเป็น Ring ตามเดิมในแบบเดียวกับสาย Token-Ring ของ IBM ลักษณะการรับส่งข้อมูลของ FDDI ก็ใช้วิธี Token-Passing เช่นเดียวกับ Token-Ring ส่วนสายที่ต่อนั้นจะได้ระยะระหว่างแต่ละเครื่องไม่เกิน 2 กิโลเมตร และระยะรวมทั้งหมดไม่เกิน 100 กิโลเมตร
			</p>
			<div align="center">
				<img src="assets/img/img3-3.gif"><br>
				รูปที่ 3.3 เครือข่าย FDDI
			</div>
			<div align="left">
				<label><h4><b style="font-size: 23px; margin-left: 15px;">3.4 เครือข่าย ATM</b></h4></label>
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ระบบการสื่อสารข้อมูลและเครือข่ายคอมพิวเตอร์ที่กำลังเป็นเทคโนโลยีที่มีผู้กล่าวถึงและให้ความสนใจกันมากในขณะนี้อีกระบบหนึ่งคือ ATM ATM ที่จะกล่าวถึงในที่นี้ไม่ใช่ระบบการเบิกถอนเงินสด ATM มาจากคำย่อของ Asynchronous Transfer Mode ATM เป็นระบบสื่อสารข้อมูลที่ใช้รูปแบบการสื่อสารเป็นแบบ แพ็กเก็จ เหมือนเช่นในเครือข่าย X.25 หรือระบบ LAN อื่น ๆ เช่น อีเทอร์เน็ตโทเกินริง แต่การสื่อสารเป็นแบบอะซิงโครนัสกล่าวคือ ตัวรับและตัวส่งใช้สัญญาณนาฬิกาแยกจากกันไม่เกี่ยวข้องกัน สิ่งที่ ATM แตกต่างจากระบบ แพ็กเก็จสวิตชิ่งอื่น ๆ คือ ATM ส่งข้อมูลด้วยขนาดของแพ็กเก็จที่ทุกแพ็กเก็จมีจำนวนข้อมูลเท่ากันเสมอ แพ็กเก็จของ ATM มีขนาด 53 ไบต์ โดยให้ 5 ไบต์แรกเป็นส่วนหัวที่จะบอกรายละเอียดของแอดเดรสและมีส่วนข้อมูลข่าวสารอีก 48 ไบต์ตามมา เราเรียกแพ็กเก็จของ ATM ว่า " เซล "
			</p>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การออกแบบให้เซลข้อมูลมีขนาดสั้นก็เพื่อความเหมาะสมที่จะประยุกต์ใช้งานต่าง ๆ ได้อย่างกว้างขวางขึ้นคือ ใช้รับส่งข้อมูล เสียง ภาพหรือข้อมูลต่าง ๆ ที่ต้องการส่งผ่านกันและกันด้วยความเร็วสูง
			</p><hr>
		</div>

		<div id="page5" class="tabcontent">
			<div align="left">
				<label><h4><b style="font-size: 23px; margin-left: 15px;">3.5 เครือข่ายแลนเสมือน</b></h4></label>
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ก่อนอื่นต้องรู้จักระบบ LAN (แลน) ก่อนเพื่อความเข้าใจระบบ VLAN (วีแลน) ได้ง่ายขึ้น ระบบ LAN ย่อมาจาก Local Area Network (ลอคอล แอเรีย เน็ตเวิร์ก) คือระบบเครือข่าย ที่เชื่อมต่อคอมพิวเตอร์เข้าด้วยกันในระยะจำกัด เช่น ภาคในอาคาร บริเวณเดียวกัน หรือในพื้นที่เดียวกัน อาจจะเชื่อมต่อด้วยอุปกรณ์ SWITCH (สวิตซ์), BRIDGE (บิต) หรือ HUB (ฮับ) เป็นต้น<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หากในระบบ LAN 1 วง มีการเชื่อมต่ออุปกรณ์ที่มากขึ้นเรื่อย ๆ มีผลเกิดให้ระบบทำงานช้า จนถึงบางครั้งก็ทำงานไม่ได้เลย สาเหตุหลัก ๆ เกิดจากการส่งข้อมูล Broadcast (บอร์ดแคช) ของอุปกรณ์ เป็นการส่งให้อุปกรณ์ทุก ๆ เครื่องในวง LAN (แลน) เดียวกันได้รับ
			</p>
			<div align="center">
				<img src="assets/img/img3-4.png"><br>
				รูปที่ 3.4 ระบบ VLAN
			</div>
			<div align="left">
				<label><h4><b style="font-size: 23px; margin-left: 15px;">3.6 เครือข่ายแวน (WAN)</b></h4></label>
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ระบบเครือข่ายแบบ WAN หรือระบบเครือข่ายบริเวณกว้าง จะเป็นระบบเครือข่ายที่เชื่อมโยงเครือข่ายแบบท้องถิ่นตั้งแต่ 2 เครือข่ายขึ้นไปเข้าด้วยกันผ่านระยะทางที่ไกลมาก โดยการเชื่อมโยงจะผ่านช่องทางการสื่อสารข้อมูลสาธารณะของบริษัทโทรศัพท์หรือองค์การโทรศัพท์ของประเทศต่างๆ เช่น สายโทรศัพท์แบบอนาลอก สายแบบดิจิทัล ดาวเทียม ไมโครเวฟ เป็นต้น
			</p>
			<hr>
		</div>

		<div id="page6" class="tabcontent">
			<div align="left">
				<label><h4><b style="font-size: 23px; margin-left: 15px;">3.7 เครือข่ายอินเทอร์เน็ต</b></h4></label>
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;อินเทอร์เน็ต คือ เครือข่ายคอมพิวเตอร์ที่เชื่อมต่อกันเป็นจำนวนมากครอบคลุมไปทั่วโลกโดยอาศัยโครงสร้างระบบสื่อสารโทรคมนาคมเป็นตัวกลางในการแลกเปลี่ยนข้อมูล มีการประยุกต์ใช้งานหลากหลายรูปแบบ อินเทอร์เน็ตเป็นทั้งเครือข่ายของคอมพิวเตอร์ และเครือข่ายของเครือข่าย เพราะอินเทอร์เน็ตประกอบด้วยเครือข่ายย่อยเป็นจำนวนมากต่อเชื่อมเข้าด้วยกันภายใต้มาตรฐานเดียวกันจนเป็นสังคมเครือข่ายขนาดใหญ่ อินเทอร์เน็ตเป็นเครือข่ายสาธารณะที่ไม่มีผู้ใดเป็นเจ้าของ ทำให้การเข้าสู่เครือข่ายเป็นไปได้อย่างเสรีภายใต้กฎเกณฑ์บางประการที่กำหนดขึ้น เพื่อไม่ให้เกิดความสับสนและวุ่นวายจากการเชื่อมต่อจากเครือข่ายทั่วโลก
			</p>
			<div align="center">
				<img src="assets/img/img3-5.jpg"><br>
				รูปที่ 3.5 เครือข่ายอินเทอร์เน็ต
			</div>
			<div align="left">
				<label><h4><b style="font-size: 23px; margin-left: 15px;">3.8 VPN</b></h4></label>
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หนึ่งในโปรโตคอลของระบบเน็ตเวิร์คซึ่งหลายๆคนน่าจะเคยได้ยินกัน คือ VPN (Virtual Private Network) หรือ “เครือข่ายส่วนตัวเสมือน” เป็นระบบเครือข่ายที่น่าสนใจระบบหนึ่งของระบบอินเตอร์เน็ต ซึ่งช่วยในการรับส่งข้อมูล รวมถึงสร้างความปลอดภัยในข้อมูลในระบบ VPN นี้ได้ด้วย
			</p>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VPN : Virtual Private Network เป็นฟังก์ชั่นหนึ่งในระบบเน็ตเวิร์ค สร้างขึ้นมาทำให้สามารถรับส่งข้อมูลได้ปลอดภัยมากขึ้น และสามารถเชื่อมตรงกับเซิร์ฟเวอร์/อุปกรณ์ที่อยู่ใน VPN เดียวกันได้สะดวกขึ้น ซึ่งมันจะทำงานโดยใช้โครงสร้างของอินเตอร์เน็ต เป็นตัวส่งผ่านข้อมูล แต่ที่ว่ามีความปลอดภัยก็คือ มันมีการเข้ารหัสข้อมูลทั้งหมด และจะมี Gateway เฉพาะในการส่งข้อมูลด้วย มีการ login ผู้ใช้/พาสเวิร์ดสำหรับบุคลลที่ได้รับอนุญาต คนที่ไม่เกี่ยวข้องก็จะไม่สามารถมายุ่งกับข้อมูลนี้ได้เลย และแต่ละอุปกรณ์ที่เชื่อมเข้ามาใน VPN จะมี IP เฉพาะ ทำให้การกำหนดIP ในวง VPN ทำได้สะดวกขึ้น เชื่อมต่อข้อมูลได้ง่ายมากขึ้น เหมือนกับมีเครือข่ายส่วนตัวตามชื่อนั่นเองครับ แต่ทั้งนี้ก็ต้องที VPN Server เป็นตัวกลางในการเชื่อมต่อด้วย
			</p>
			<div align="left">
				<label><h4><b style="font-size: 23px; margin-left: 15px;">3.9 Intranet and Extranet</b></h4></label>
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เอกซ์ทราเน็ต (extranet) คือระบบเครือข่ายซึ่งเชื่อมเครือข่ายภายในองค์กร หรือ อินทราเน็ต (intranet) เข้ากับระบบคอมพิวเตอร์ที่อยู่ภายนอกองค์กร เช่น ระบบคอมพิวเตอร์ของสาขาของผู้จัดจำหน่าย หรือของลูกค้า เป็นต้น โดยการเชื่อมต่อเครือข่ายอาจเป็นได้ทั้งการเชื่อมต่อโดยตรงระหว่าง 72 จุด หรือการเชื่อมต่อแบบเครือข่ายเสมือน (virtual network) ระหว่างระบบอินทราเน็ตหลาย ๆ เครือข่ายผ่านอินเทอร์เน็ตก็ได้
			</p>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ระบบเครือข่ายแบบเอกซ์ทราเน็ต โดยปกติแล้วจะอนุญาตให้ใช้งานเฉพาะสมาชิกขององค์กร หรือผู้ที่ได้รับสิทธิในการใช้งานเท่านั้น โดยผู้ใช้จากภายนอกที่เชื่อมต่อเข้ามาผ่านเครือข่ายเอกซ์ทราเน็ต อาจแบ่งเป็นประเภท ๆ เช่น ผู้ดูแลระบบ สมาชิก คู่ค้า หรือผู้สนใจทั่ว ๆ ไป เป็นต้น ซึ่งผู้ใช้แต่ละกลุ่มจะได้รับสิทธิในการเข้าใช้งานเครือข่ายที่แตกต่างกันไป
			</p>
			<p align="center">
				<iframe width="100%" height="350" src="https://www.youtube.com/embed/7GbKafYCy24" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</p>
			<p align="center">
			<a href="chl3.php" style="background-color:#000; padding: 10px;">ทำแบบทดสอบหลังเรียนบทที่ 3</a>
			<a href="updata/updatetoch4.php" style="background-color:#000; padding: 10px;">จบบทเรียนทหน่วยที่ 3 คลิกเพื่อไปหน่วยต่อไป</a></p>
			<hr>
		</div>

<button class="tablink btn" onclick="openCity('page1', this, 'orange')" id="defaultOpen">หน้าที่ 1</button>
<button class="tablink btn" onclick="openCity('page2', this, 'orange')">หน้าที่ 2</button>
<button class="tablink btn" onclick="openCity('page3', this, 'orange')">หน้าที่ 3</button>
<button class="tablink btn" onclick="openCity('page4', this, 'orange')">หน้าที่ 4</button>
<button class="tablink btn" onclick="openCity('page5', this, 'orange')">หน้าที่ 5</button>
<button class="tablink btn" onclick="openCity('page6', this, 'orange')">หน้าที่ 6</button>

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