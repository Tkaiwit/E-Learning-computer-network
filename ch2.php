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
				<label><h3><b>หน่วยที่ 2 เรื่อง อุปกรณ์ระบบเครือข่าย</b></h3></label>
			</div>
			<div align="left">
				<label><h4><b style="font-size: 23px; margin-left: 15px;">หัวข้อเรื่อง (Topics)</b></h4></label>
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				2.1 อุปกรณ์เชื่อมต่อเครือข่ายคอมพิวเตอร์<br>
				2.2 อุปกรณ์รักษาความปลอดภัย<br>
				2.3 อุปกรณ์ไร้สาย
			</p>
			<div align="left">
				<label><h4><b style="font-size: 23px; margin-left: 15px;">2.1 อุปกรณ์เชื่อมต่อเครือข่ายคอมพิวเตอร์</b></h4></label>
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การสร้างเครือข่ายคอมพิวเตอร์ เริ่มมาจาดที่ผู้ใช้ต้องการที่จะเปลี่ยนข้อมูลกันอย่างมีประสิทธิภาพและรวดเร็ว คอมพิวเตอร์เป็นอุปกรณ์ที่มีความสามารถในการประมวลผลข้อมูลในปริมาณมากอย่างรวดเร็วอยู่แล้ว แต่มาสามารถแชร์ข้อมูลนั้นกับคนอื่นอย่างมีประสิทธิภาพได้และที่สำคัญคอมพิวเตอร์จะเชื่อมต่อกันเป็นเครือข่ายได้ ต้อมมีอุปกรณ์พื้นฐานดังต่อไปนี้
			</p>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. การ์ดเครือข่าย (Network Interface Card) หรือการ์ดแลน หรืออีเทอร์เน็ตการ์ด ทำหน้าที่ในการเชื่อมต่อคอมพิวเตอร์ที่ใช้งานอยู่เข้ากับระบบเครือข่ายได้ เช่น ในระบบแลนเครื่องคอมพิวเตอร์ทุกเครื่องในเครือข่ายจะต้องมีการ์ดเครือข่ายที่เชื่อมโยงด้วยสายเคเบิลจึงสามารถทำให้เครื่องติดต่อเครือข่ายได้
			</p>
			<div align="center">
				<img src="assets/img/img2-1.jpg"><br>
				รูปที่ 2.1 การ์ดแลนหรืออีเทอร์เน็ตการ์ด
			</div><hr>
		</div>

		<div id="page2" class="tabcontent">
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. ฮับ (Hub) คือ อุปกรณ์ที่รวมสัญญาณที่มาจากอุปกรณ์รับส่งหลาย ๆ สถานีเข้าด้วยกัน ฮับเปรียบเสมือนเป็นบัสที่รวมอยู่ที่จุดเดียวกัน ฮับที่ใช้งานอยู่ภายใต้มาตรฐานการรับ-ส่งแบบอีเทอร์เน็ต หรือ IEEE802.3 ข้อมูลที่รับ-ส่งผ่านฮับจากเครื่องหนึ่งกระจายไปยังทุกสถานีที่ติดต่ออยู่บนฮับนั้น ดังนั้นทุกสถานีจะรับสัญญาณข้อมูลที่กระจายมาได้ทั้งหมดแต่จะเลือกคัดลอกเฉพาะข้อมูลที่ส่งมาถึงตนเท่านั้น การตรวจสอบข้อมูลจึงต้องดูที่แอดเดรส (address) ที่กำกับมาในกลุ่มของข้อมูลหรือแพ็กเกจ
			</p>
			<div align="center">
				<img src="assets/img/img2-2.jpg"><br>
				รูปที่ 2.2 ลักษณะ Hub
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. สวิตช์ (Switch) คือ อุปกรณ์รวมสัญญาณที่มาจากอุปกรณ์รับ-ส่งหลายสถานีเช่นเดียวกับฮับ แต่มีข้อแตกต่างจากฮับ คือ การฮับ-ส่งข้อมูลจากสถานีหรืออุปกรณ์ตัวหนึ่งจะไม่กระจายไปยังทุกสถานีเหมือนฮับ ทั้งนี้เพราะสวิตช์จะรับกลุ่มข้อมูลหรือแพ็กเกจมาตรวจสอบก่อน แล้วดูว่าแอดเดรสของสถานีหลายทางไปที่ใด สวิตช์จะลดปัญหาการชนกันของข้อมูลเพราะ ไม่ต้องกระจายข้อมูลไปทุกสถานี และยังมีข้อดีในเรื่องการป้องกันการดักจับข้อมูลที่กระจายไปในเครือข่าย
			</p>
			<div align="center">
				<img src="assets/img/img2-3.jpg"><br>
				รูปที่ 2.3 ลักษณะ Switch
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. บริดจ์ (Bridge) คือ อุปกรณ์ที่เหมาะสมกับเครือข่ายหลาย ๆ กลุ่มที่เชื่อมต่อกันเนื่องจากสามารถแบ่งเครือข่ายที่เชื่อมต่อกันหลาย ๆ เซ็กเมนต์แยกออกจากกันได้ ทำให้ข้อมูลในแต่ละเซ็กเมนต์ไม่ต้องวิ่งไปทั่วทั้งเครือข่าย กล่าวคือ บริดจ์สามารถอ่านเฟรมข้อมูลที่ส่งมาได้ว่ามาจากเครื่องในเซ็กเมนต์ใด จากนั้นจะทำการส่งข้อมูลไปยังเครื่องซึ่งอาจอยู่ในเซ็กเมนต์เดียวกันหรือต่างเซ็กเมนต์ก็ได้ ซึ่งความสามารถดังกล่าวทำให้ช่วยลดปัญหาความคับคั่งของข้อมูลในระบบได้
			</p>
			<div align="center">
				<img src="assets/img/img2-4.jpg"><br>
				รูปที่ 2.4 ลักษณะ Bridge
			</div>
			<hr>
		</div>

		<div id="page3" class="tabcontent">
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5. รีพีตเตอร์ (Repeater) คือ อุปกรณ์ทวนสัญญาณเพื่อให้สามารถส่งข้อมูลถึงกันได้ระยะไกลขึ้น คือ รีพีตเตอร์จะปรับรูปแบบเดิม เพื่อได้สัญญาณสามารถส่งต่อไปได้อีก เช่น การเชื่อมต่อเครือข่ายแลนหลาย ๆ เซ็กเมนต์ ซึ่งความยาวของแต่ละเซ็กเมนต์นั้นจะมีระยะทางที่จำกัด ดังนั้น อุปกรณ์อย่างรีพีตเตอร์จะช่วยแก้ไขปัญหาเหล่านี้ได้
			</p>
			<div align="center">
				<img src="assets/img/img2-5.jpg"><br>
				รูปที่ 2.5 Repeater
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.  โมเด็ม (Modem) คือ อุปกรณ์ที่ทำหน้าที่แปลงสัญญาณคอมพิวเตอร์ให้สามารถเชื่อมคอมพิวเตอร์ที่อยู่ระยะไกลเข้าหากันได้ด้วยการผ่านสายโทรศัพท์ โดยโมเด็มจะทำหน้าที่แปลงสัญญาณ ซึ่งแบ่งออกเป็นทั้งภาคส่งและภาครับ โดยภาคส่งจะทำการแปลงสัญญาณคอมพิวเตอร์ให้เป็นสัญญาณโทรศัพท์ (Digital to Analog) ในขณะที่ภาครับนั้นจะทำการแปลงสัญญาณโทรศัพท์กลับมาเป็นสัญญาณคอมพิวเตอร์ (Analog to Digital) ดังนั้น ในการเชื่อมต่อเครือข่ายระยะไกลๆ เช่น อินเทอร์เน็ต จึงจำเป็นต้องใช้โมเด็ม โดยโมเด็มมีทั้งแบบภายใน (Internal Modem) ที่มีลักษณะเป็นการ์ด โมเด็มภายนอก (External Modem) ที่มีลักษณะเป็นกล่องแยกออกต่างหาก และรวมถึงโมเด็มที่เป็น PCMCIA ที่มักใช้กับเครื่องคอมพิวเตอร์โน้ตบุ๊ค
			</p>
			<div align="center">
				<img src="assets/img/img2-6.jpg"><br>
				รูปที่ 2.6 Modem
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7.  เราเตอร์ (Router) ในการเชื่อมโยงเครือข่ายคอมพิวเตอร์จะต้องมีการเชื่อมโยงหลายๆ เครือข่าย หรืออุปกรณ์หลายอย่างเข้าด้วยกัน ดังนั้น จึงมีเส้นทางเข้า - ออกของข้อมูลได้หลายเส้นทาง และแต่ละเส้นทางอาจใช้เทคโนโลยีเครือข่ายที่ต่างกัน อุปกรณ์จัดเส้นทางจะทำหน้าที่หาเส้นทางที่เหมาะสมเพื่อให้การส่งข้อมูลเปนไปอย่างมีประพสิทธิภาพ การที่อุปกรณ์จัดหาเส้นทางต้องรับรู้ตำแหน่งและสามารถนำข้อมูลออกเส้นทางได้ถูกต้องตามตำแหน่งแอดเดรสที่กำกับอยู่เส้นทางนั้น
			</p>
			<div align="center">
				<img src="assets/img/img2-7.jpg"><br>
				รูปที่ 2.7 Router
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8.  เกตเวย์ (Gateway) คือ อุปกรณ์อิเล็กทรอนิกส์ที่ช่วยในการสื่อสารข้อมูล หน้าที่หลักของเกตเวย์ คือ ช่วยทำให้เครือข่ายคอมพิวเตอร์ 2 เครือข่าย หรือมากกว่าที่มีลักษณะไม่เหมือนกัน คือ ลักษณะของการเชื่อต่อ (Connectivity) ของเครือข่ายที่แตกต่างกัยน และมีโพรโตคอลสำหรับการส่ง - รับข้อมูลต่างกัน เช่น LAN เครือหนึ่งเป็นแบบ Ethernet และ โพรโตคอลแบบอะซิงโครนัส ส่วน LAN อีกเครือข่ายหนึ่งเป็นแบบ Token Ring และใช้โพรโตคอลแบบซิงโครนัสเพื่อให้สามารถติดต่อกันได้เสมือนเป็นเครือข่ายเดียวกัน เพื่อกำจัดวงให้แคบลงมา เกตเวย์โดยทั่วไปจะใช้เป็นเครื่องมือส่ง - รับข้อมูลกันระหว่าง LAN 2 เครือข่ายหรือ LAN กับเครื่องคอมพิวเตอร์เมนเฟรม หรือระหว่าง LAN กับ WAN โดยผ่านเครือข่ายโทรศัพท์สาธารณะ เช่น X.25 แพ็กเกจสวิตซ์ เครือข่าย ISDN เทเล็กซ์ หรือเครือข่ายทางไกลอื่น
			</p>
			<div align="center">
				<img src="assets/img/img2-8.jpg"><br>
				รูปที่ 2.8 Gateway
			</div><hr>
		</div>

		<div id="page4" class="tabcontent">
			<div align="left">
				<label><h4><b style="font-size: 23px; margin-left: 15px;">2.2 อุปกรณ์รักษาความปลอดภัย</b></h4></label>
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ในระบบเครือข่ายนั้นมีผู้ร่วมใช้เป็นจำนวนมาก ดังนั้นจึงมีทั้งผู้ที่ประสงค์ดีและประสงค์ร้ายควบคู่กันไป สิ่งที่พบเห็นกันบ่อยๆ ในระบบเครือข่ายก็คืออาชญากรรมทางด้านเครือข่ายคอมพิวเตอร์หลายประเภทด้วยกัน เช่น พวกที่คอยดักจับสัญญาณผู้อื่นโดยการใช้เครื่องมือพิเศษจั๊มสายเคเบิลแล้วแอบบันทึกสัญญาณ พวกแฮกเกอร์ (Hackers) ซึ่งได้แก่ ผู้ที่มีความรู้ความชำนาญด้านคอมพิวเตอร์เข้าไปเจาะระบบคอมพิวเตอร์ผ่านเครือข่าย หรือไวรัสคอมพิวเตอร์ (Virus Computer) ซึ่งเป็นโปรแกรมคอมพิวเตอร์ที่เขียนขึ้นมาโดยมุ่งหวังในการก่อกวน หรือทำลายข้อมูลในระบบการรักษาความปลอดภัยในระบบเครือข่าย
			</p>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. ไฟร์วอลล์ (Firewall) คือ ระบบรักษาความปลอดภัยของเครื่องคอมพิวเตอร์ (อ่านว่า ไฟร์วอลล์) ไม่ให้ถูกโจมตีจากผู้ไม่หวังดีหรือการสื่อสารที่ไม่ได้รับอนุญาต ซึ่งส่วนใหญ่จะมาจากระบบเครือข่ายอินเตอร์เน็ต รวมถึงเครือข่าย LAN ด้วย ซึ่งในปัจจุบัน Firewall มีทั้งอุปกรณ์ที่เป็น Hardware และ Software ทำหน้าที่ตรวจสอบการเชื่อมต่อต่างๆให้เป็นไปตามกฏ ซึ่ง Firewall จะเป็นตัวกรองข้อมูลว่า ข้อมูลชนิดนี้คือ ใคร (Source) ตัวข้อมูลต้องการจะไปที่ไหน (Destination) และข้อมูลชิ้นนี้จะบริการอะไรหรือทำอะไร (Service/Port) ถ้ารู้สึกว่าข้อมูลไม่ปลอดภัยหรือมีความเสี่ยงที่จะมาทำความเสียหาย Firewall ก็จะทำหน้าที่กันไม่ให้ข้อมูลเข้าไปได้
			</p>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. AAA Server ในการใช้งานอุปกรณ์ Cisco IOS นั้น เชื่อว่าเพื่อน ๆ ก็คงจะมีการกำหนด username และpassword ให้กับผู้ใช้หรือสำหรับตัวเอง เพื่อใช้สำหรับให้ผู้ใช้สามารถ login ผ่านการ remote หรือผ่าน console เข้ามาบนอุปกรณ์ได้ ซึ่งในการเก็บรายชื่อผู้ใช้นี้ สามารถที่จะเก็บไว้บนตัวอุปกรณ์Cisco IOS เอง (LOCAL) หรือจะใช้งาน Server ที่ทำงานในการเก็บข้อมูลผู้ใช้ เช่น Radius Server, Tacacs+ Server หรือ Kerberos ก็ได้
			</p>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>ความเชื่อถือได้ของระบบงาน</b> นับเป็นสิ่งที่สำคัญสำหรับการดำเนินธุรกิจ ถ้าทำงานได้เร็วแต่ขาดความน่าเชื่อถือก็ถือว่าใช้ไม่ได้ ไม่มีประสิทธิภาพ ดังนั้นเมื่อนำระบบเครือข่ายคอมพิวเตอร์ มาใช้งาน ทำระบบงานมีประสิทธิภาพ มีความน่าเชื่อถือของข้อมูล เพราะจะมีการทำสำรองข้อมูลไว้ เมื่อเครื่องที่ใช้งานเกิดมีปัญหา ก็สามารถนำข้อมูลที่มีการสำรองมาใช้ได้ อย่างทันที
			</p>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ในการพิสูจน์ตัวตนผู้ใช้รวมทั้งการกำหนดสิทธิผู้ใช้บนอุปกรณ์ Cisco IOS นั้น จะมีการใช้โมเดลที่เรียกว่า AAA model ในการทำงาน สำหรับเพื่อน ๆ ที่อยากรู้ถึงวิธีการทำงานของ AAA modelก็ เชิญติดตามบทความนี้ได้เลยครับ
			</p><hr>
		</div>

		<div id="page5" class="tabcontent">
			<div align="left">
				<label><h4><b style="font-size: 23px; margin-left: 15px;">2.3 อุปกรณ์ไร้สาย</b></h4></label>
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;อุปกรณ์เครือข่ายไร้สายสามารถแบ่งเป็นประเภทใหญ่ๆ 3 ประเภท ดังนี้
LAN Adapters   ทำหน้าที่เป็น Interface ระหว่าง OS ของระบบเครือข่ายกับเสาอากาศ เพื่อจะสร้างการเชื่อมต่อไปยังโครงข่ายอื่นต่อไป  แบ่งได้ดังนี้
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-   แลนการ์ดไร้สายแบบ PCMCIA    ใช้ติดตั้งกับเครื่องคอมพิวเตอร์ Nootebook
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-   แลนการ์ดไร้สายแบบ PCI     ใช้ติดตั้งกับเครื่องคอมพิวเตอร์ตั้งโต๊ะ
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-   แลนการ์ดไร้สายแบบ USB    ใช้ได้ทั้งเครื่องคอมพิวเตอร์ตั้งโต๊ะและ Nootebook                       
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-   แลนการ์ดไร้สายแบบ CF   ใช้ติดตั้งบนเครื่อง Pocket PC หรือ PDA

			</p>
			<table align="center">
			<tr>
				<td>
					<div align="center">
						<img src="assets/img/img2-9.gif"><br>
						รูปที่ 2.9  แลนการ์ดไร้สายแบบ PCMCIA
					</div>
				</td>
				<td>
					<div align="center">
						<img src="assets/img/img2-10.gif"><br>
						รูปที่ 2.10 แลนการ์ดไร้สายแบบ PCI
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div align="center">
						<img src="assets/img/img2-11.gif"><br>
						รูปที่ 2.11 แลนการ์ดไร้สายแบบ USB
					</div>
				</td>
				<td>
					<div align="center">
						<img src="assets/img/img2-12.gif"><br>
						รูปที่ 2.12 แลนการ์ดไร้สายแบบ CF
			</div>
				</td>
			</tr>
			</table>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Wireless Access Point</b> ทำหน้าที่คล้าย Hub ของระบบ LAN แบบใช้สาย โดยที่จะเป็นตัวรับเป็น Buffers และส่งข้อมูลระหว่าง WLAN และโครงสร้างแบบใช้สาย สนับสนุนการใช้งานของอุปกรณ์ไร้สายแบบเป็นกลุ่ม ซึ่งตัว Access Point มันจะเชื่อมต่อกับ Backbone  ของโครงข่ายใช้สายผ่านมาตรฐานเคเบิลแบบ Ethernet และสื่อสารกับอุปกรณ์ไร้สายผ่านเสาอากาศ
			</p>
			<div align="center">
				<img src="assets/img/img2-13.gif"><br>
				รูปที่ 2.13 Wireless Access Point
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Outdoor Wireless Bridge</b> ใช้สำหรับเชื่อมต่อระบบเครือข่ายกับอาคารอื่น ๆ ให้อัตรารับส่งข้อมูลสูง และมีรัศมีการรับส่งหลายไมล์ แต่ต้องอยู่ในลักษณะระดับสายตา line-of-sight   
			</p>
			<div align="center">
				<img src="assets/img/img2-14.gif"><br>
				รูปที่ 2.14 Outdoor Wireless Bridge  
			</div>
			<p align="center">
				<iframe width="100%" height="350" src="https://www.youtube.com/embed/ygLaG_uQfvc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</p>
			<p align="center">
			<a href="chl2.php" style="background-color:#000; padding: 10px;">ทำแบบทดสอบหลังเรียนบทที่ 2</a>
			<a href="updata/updatetoch3.php" style="background-color:#000; padding: 10px;">จบบทเรียนทหน่วยที่ 2 คลิกเพื่อไปหน่วยต่อไป</a></p>
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