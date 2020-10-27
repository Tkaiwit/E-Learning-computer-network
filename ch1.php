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
          if(!empty($_SESSION['lastName'])){}else{
       ?>
         <li><a class="not-active"><?php echo $roww['unitName']; ?></a></li> 
    <?php  } }?>
      </ul>
    </div>
		<div class="detal-b col-sm-6 well">
			<div id="page1" class="tabcontent">
			<div align="center">
				<label><h3><b>หน่วยที่ 1 เรื่อง พื้นฐานระบบเครื่อข่ายคอมพิวเตอร์</b></h3></label>
			</div>
			<div align="left">
				<label><h4><b style="font-size: 23px; margin-left: 15px;">หัวข้อเรื่อง (Topics)</b></h4></label>
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				1.1 ความหมายของระบบเครื่อข่าย<br>
				1.2 ประโยชน์ของเครื่อข่ายคอมพิวเตอร์<br>
				1.3 หลักการทำงานของระบบเครื่อข่าย<br>
				1.4 แบบจำลอง OSI <br>	
				1.5 องค์ประกอบของระบบเครื่อข่าย
			</p>
			<div align="left">
				<label><h4><b style="font-size: 23px; margin-left: 15px;">แนวคิดสำคัญ (Main Idea)</b></h4></label>
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เครื่อข่ายคอมพิวเตอร์ หมายถึง เครื่อข่ายการสื่อสารโทรคมนาคมร่างคอมพิวเตอร์จำนวนตั้งแต่ 2 เครื่องขึ้นไปสามารถแลกเปลี่ยนข้อมูลกันได้ การเชื่อมต่อระหว่าอุปกรณ์คอมพิวเตอร์ต่างๆในเครื่อข่ายจะใช้สื่อที่เป็นสานเคเบิลหรื่อสื่อไร้สาย เครื่อข่ายคอมพิวเตอร์ที่รู้จักกันดีคือ อินเทอร์เน็ต
			</p>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การที่ระบบเครื่อข่ายมีบทบาทสำคัญมากขึ้นในปัจจุบัน เพราะมีการใช้งานคอมพิวเตอร์อย่างแพร่หลาย จึงเกิดความต้องการที่จะเชื่อมต่อคอมพิวเตอร์เหล่านั้นถึงกัน เพื่อเพิ่มความสามารถของระบบให้สูงขึ้น และลดต้นทุนองงงของระบบโดยรวมลง
			</p>
			<div align="left">
				<label><h4><b style="font-size: 23px; margin-left: 15px;">สมรรถนะย่อย (Element of Competency)</b></h4></label>
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				แสดงความรู้เกี่ยวกับหลักการพื้นฐานระบบเครื่อข่ายคอมพิวเตอร์
			</p><hr>
		</div>

		<div id="page2" class="tabcontent">
			<div align="center">
				<label><h3><b>จุดประสงค์เชิงพฤติกรรม (Behaviral Objectives)</b></h3></label>
			</div>
			<div align="left">
				<label><h4><b style="font-size: 23px; margin-left: 15px;">หัวข้อเรื่อง (Topics)</b></h4></label>
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				1.	บอกความหมายของระบบเครื่อข่ายได้ถูกต้อง <br>
				2.	บอกประโยชน์ของเครื่อข่ายคอมพิวเตอร์ได้ถูกต้อง<br>
				3.	อธิบายหลักการทำงานของระบบเครื่อข่ายได้ถูกต้อง<br>
				4.	บอกคุณลักษณะทั่วไปของของแบบจำลองโอเอสไอ (OSL Model)
			</p>
			<div align="left">
				<label><h4><b style="font-size: 23px; margin-left: 15px;">เนื้อหาสาระ (Content)</b></h4></label>
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ปัจจุบันเป็นยุคแห่งการสื่อสารข้อมูลแบบไร้พรมแดน เนื่องจากความก้าวหน้าอย่างรวดเร็วแล้วต่อเนื่องของเทคโนโลยีสารสนเทศและการสื่อสาร ซึ้งเป็นปัจจัยสำคัญที่สนันสนุนให้เกิดการติดต่อสื่อสารแลกเปลี่ยนข้อมมูลระหว่างกันและกันอย่างกว้างไกล อีกทั้งยังง่ายสะดวกและรวดเร็วกว่าในอดีตมาก ดังจะเห็นได้จากการพัฒนาอุปกรณ์ที่เกี่ยวข้องกับการสื่อสาร รวมทั่งเครื่องมื่อสื่อสารที่มีรูปแบบหลากหลายมีฟังก์ชันสำหรับการใช้งานมากมายที่ผู้ใช้งานเลือกใช้ได้ตามความต้องการ
			</p>
			<hr>
		</div>

		<div id="page3" class="tabcontent">
			<div align="left">
				<label><h4><b style="font-size: 23px; margin-left: 15px;">1.1 ความหมายของระบบเครื่อข่าย</b></h4></label>
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ระบบเครือข่ายคอมพิวเตอร์ ( Computer Network ) หมายถึง การเชื่อมต่อคอมพิวเตอร์ตั้งแต่ 2 เครื่องขึ้นไปเข้าด้วยกันด้วยสายเคเบิล หรือสื่ออื่นๆ ทำให้คอมพิวเตอร์สามารถรับส่งข้อมูลแก่กันและกันได้ในกรณีที่เป็นการเชื่อมต่อระหว่างเครื่องคอมพิวเตอร์หลายๆ เครื่องเข้ากับเครื่องคอมพิวเตอร์ขนาดใหญ่ที่เป็นศูนย์กลาง เราเรียกคอมพิวเตอร์ที่เป็นศูนย์กลางนี้ว่า โฮสต์ (Host) และเรียกคอมพิวเตอร์ขนาดเล็กที่เข้ามาเชื่อมต่อว่า ไคลเอนต์ (Client)ระบบเครือข่าย (Network) จะเชื่อมโยงคอมพิวเตอร์เข้าด้วยกันเพื่อการติดต่อสื่อสาร เราสามารถส่งข้อมูลภายในอาคาร หรือข้ามระหว่างเมืองไปจนถึงอีกซีกหนึ่งของโลก ซึ่งข้อมูลต่างๆ อาจเป็นทั้งข้อความ รูปภาพ เสียง ก่อให้เกิดความสะดวก รวดเร็วแก่ผู้ใช้ ซึ่งความสามารถเหล่านี้ทำให้เครือข่ายคอมพิวเตอร์มีความสำคัญ และจำเป็นต่อการใช้งานในแวดวงต่างๆ
			</p>
			<div align="center">
				<img src="assets/img/img1-1.jpg"><br>
				รูปที่ 1.1 ลักษณะเครือข่ายคอมพิวเตอร์
			</div>
			<div align="left">
				<label><h4><b style="font-size: 23px; margin-left: 15px;">1.2 ประโยช์ของเครือข่ายคอมพิวเตอร์</b></h4></label>
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ระบบเครือข่ายคอมพิวเตอร์หนึ่งเครือข่ายจะมีการทำงานรวมกันเป็นกลุ่ม ที่เรียกว่า กลุ่มงาน (workgroup)  แต่เมื่อเชื่อมโยงหลายๆ กลุ่มงานเข้าด้วยกัน   ก็จะเป็นเครือข่ายขององค์กร และถ้าเชื่อมโยงระหว่างองค์กรผ่านเครือข่ายแวน ก็จะได้เครือข่ายขนาดใหญ่ขึ้น การประยุกต์ใช้งานเครือข่ายคอมพิวเตอร์เป็นไปอย่างกว้างขวางและสามารถใช้ประโยชน์ได้มากมาย ทั้งนี้เพราะระบบเครือข่ายคอมพิวเตอร์ ทำให้เกิดการเชื่อมโยงอุปกรณ์ต่างๆ เข้าด้วยกัน และสื่อสารข้อมูลระหว่างกันได้
			</p>
			<div align="left">
				<label><h4><b style="font-size: 23px; margin-left: 15px;">ประโยชน์ของระบบเครือข่ายคอมพิวเตอร์ มีดังนี้</b></h4></label>
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>การใช้อุปกรณ์ร่วมกัน</b>(Sharing of peripheral devices) เครือข่ายคอมพิวเตอร์ทำให้ผู้ใช้ สามารถใช้อุปกรณ์ รอบข้างที่ต่อพ่วงกับระบบคอมพิวเตอร์ ร่วมกันได้อย่างมีประสิทธิภาพ เช่นเครื่องพิมพ์ ดิสก์ไดร์ฟ ซีดีรอม สแกนเนอร์ โมเด็ม เป็นต้น ทำให้ประหยัดค่าใช้จ่าย ไม่ต้องซื้ออุปกรณ์ที่มีราคาแพง เชื่อมต่อพ่วงให้กับคอมพิวเตอร์ทุกเครื่อง
			</p>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>การใช้โปรแกรมและข้อมูลร่วมกัน</b>(Sharing of program and data) เครือข่ายคอมพิวเตอร์ ทำให้ผู้ใช้สามารถใช้โปรแกรม และข้อมูลร่วมกันได้ โดยจัดเก็บโปรแกรมไว้แหล่งเก็บข้อมูล ที่เป็นศูนย์กลาง เช่น ที่ฮาร์ดดิสก์ของเครื่อง File Server ผู้ใช้สามารถใช้โปรแกรมร่วมกัน ได้จากแหล่งเดียวกัน ไม่ต้องเก็บโปรแกรมไว้ในแต่ละเครื่อง ให้ซ้ำซ้อนกัน นอกจากนั้นยังสามารถรวบรวม ข้อมูลต่าง ๆ จัดเก็บเป็นฐานข้อมูล ผู้ใช้สามารถใช้สารสนเทศ จากฐานข้อมูลกลาง ผ่านระบบเครือข่ายคอมพิวเตอร ์ที่ใช้งานได้อย่างสะดวกสบาย โดยไม่ต้องเดินทางไปสำเนาข้อมูลด้วยตนเอง เพราะใช้การเรียกใช้ข้อมูล ผ่านระบบเครือข่ายคอมพิวเตอร์นั่นเอง เครื่องลูก (Client) สามารถเข้ามาใช้ โปรแกรม ข้อมูล ร่วมกันได้จากเครื่องแม่ (Server) หรือระหว่างเครื่องลูกกับเครื่องลูกก็ได้ เป็นการประหยัดเนื้อที่ในการจัดเก็บโปรแกรม ไม่จำเป็นว่าทุกเครื่องต้องมีโปรแกรมเดียวกันนี้ในเครื่องของตนเอง
			</p><hr>
		</div>

		<div id="page4" class="tabcontent">
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>สามารถติดต่อสื่อสารระยะไกลได้</b>(Telecommunication) การเชื่อมต่อคอมพิวเตอร์ เป็นเครือข่าย ทั้งประเภทเครือข่าย LAN , MAN และ WAN ทำให้คอมพิวเตอร์ สามารถสื่อสารแลกเปลี่ยนข้อมูล ระยะไกลได ้โดยใช้ซอฟต์แวร์ประยุกต์ ทางด้านการติดต่อสื่อสาร โดยเฉพาะอย่างยิ่ง ในระบบเครือข่ายอินเทอร์เน็ต มีการให้บริการต่าง ๆ มากมาย เช่น การโอนย้ายไฟล์ข้อมูล การใช้จดหมายอิเล็กทรอนิกส์ (Electronic Mail) การสืบค้นข้อมูล (Serach Engine) เป็นต้น
			</p>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>สามารถประยุกต์ใช้ในงานด้านธุรกิจได้</b>(ฺBusinessApplicability) องค์กรธุรกิจ มีการเชื่อมโยงเครือข่ายคอมพิวเตอร์ เพื่อประโยชน์ทางธุรกิจ เช่น เครือข่ายของธุรกิจธนาคาร ธุรกิจการบิน ธุรกิจประกันภัย ธุรกิจการท่องเที่ยว ธุรกิจหลักทรัพย์ สามารถดำเนินธุรกิจ ได้อย่างรวดเร็ว ตอบสนองความพึงพอใจ ให้แก่ลูกค้าในปัจจุบัน เริ่มมีการใช้ประโยชน์จากเครือข่าย Internet เพื่อทำธุรกิจกันแล้ว เช่นการสั่งซื้อสินค้า การจ่ายเงินผ่านระบบธนาคาร เป็นต้น
			</p>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>ความประหยัด</b> นับเป็นการลงทุนที่คุ้มค่า อย่างเช่นในสำนักงานหนึ่งมีเครื่องอยู่ 30 เครื่อง หรือมากกว่านี้ ถ้าไม่มีการนำระบบเครือข่ายคอมพิวเตอร์มาใช้  จะเห็นว่าต้องใช้เครื่องพิมพ์อย่างน้อย 5 – 10 เครื่อง มาใช้งาน แต่ถ้ามีระบบเครือข่ายคอมพิวเตอร์มาใช้แล้วละก้อ ก็สามารถใช้อุปกรณ์ หรือเครื่องพิมพ์ประมาณ 2-3 เครื่องก็พอต่อการใช้งานแล้ว เพราะว่าทุกเครื่องสามารถเข้าใช้เครื่องพิมพ์เครื่องใดก็ได้ ผ่านเครื่องอื่น ๆ ที่ในระบบเครือข่ายเดียวกัน
			</p>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>ความเชื่อถือได้ของระบบงาน</b> นับเป็นสิ่งที่สำคัญสำหรับการดำเนินธุรกิจ ถ้าทำงานได้เร็วแต่ขาดความน่าเชื่อถือก็ถือว่าใช้ไม่ได้ ไม่มีประสิทธิภาพ ดังนั้นเมื่อนำระบบเครือข่ายคอมพิวเตอร์ มาใช้งาน ทำระบบงานมีประสิทธิภาพ มีความน่าเชื่อถือของข้อมูล เพราะจะมีการทำสำรองข้อมูลไว้ เมื่อเครื่องที่ใช้งานเกิดมีปัญหา ก็สามารถนำข้อมูลที่มีการสำรองมาใช้ได้ อย่างทันที
			</p><hr>
		</div>

		<div id="page5" class="tabcontent">
			<div align="left">
				<label><h4><b style="font-size: 23px; margin-left: 15px;">1.3 หลักการทำงานของระบบเครือข่าย</b></h4></label>
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การเชื่อมต่อเครือข่ายคอมพิวเตอร์จุดประสงค์เพื่อใช้สื่อสารข้อมูลระหว่างกัน ดังนั้นหลักการทำงานของระบบเครือข่ายคอมพิวเตอร์ จึงมีพื้นฐานเดียวกับการสื่อสารข้อมมูล ซึ่งหมายถึงการแลกเปลี่ยนข้อมูลและสารสนเทศระหว่างอุปกรณ์หรือจากคอมพิวเตอร์ที่เป็นผู้ส่งข้อมูลกับผู้รับผ่านสื่อกลางโดยจะต้องมีข้อตกลงหรือกฏเกณฑ์วิธีการสื่อสารระหว่างกันและการสื่อสารข้อมูลมีองค์ประกอบพื้นฐานที่สำคัญ 5 องค์ประกอบ ได้แก่
			</p>
			<div align="center">
				<img src="assets/img/img1-2.png"><br>
				รูปที่ 1.2 องค์ประกอบพื้นฐานของการสื่อสารข้อมูล
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. ผู้ส่งหรืออุปกรณ์ส่งข้อมูล (Sender) เป็นแหล่งต้นทางของการสื่อสารโดยมีหน้าที่ในการให้กำเนิดข้อมูล หรือเตรียมข้อมูล เช่น ผู้พูด คอมพิวเตอร์ต้นทาง เป็นต้น 
			</p>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. ผู้รับหรืออุปกรณ์รับข้อมูล (Receiver) เป็นแหล่งปลายทางของการสื่อสาร หรือเป็นอุปกรณ์สำหรับข้อมูลที่จะนำข้อมูลนั้นไปใช้ดำเนินการต่อไป เช่น ผู้รับ คอมพิวเตอร์ปลายทาง เครื่องพิมพ์
			</p>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. ข่าวสาร (Massage) เป็นตัวเนื้อหาของข้อมูล ซึ่งมีได้หลายรูปแบบดังนี้ คือ 
- ข้อความ (Text) ข้อมูลที่อยู่ในรูปอักขระ หรือเอกสาร เช่น ข้อความในหนังสือ เป็นต้น
- เสียง (Voice) ข้อมูลเสียงที่แหล่งต้นทางสร้างขึ้นมา ซึ่งอาจจะเป็นเสียงที่มนุษย์หรืออุปกรณ์บางอย่างเป็นตัวสร้างก็ได้ 
- รูปภาพ (Image) เป็นข้อมูลที่ไม่เหมือนข้อความตัวอักษรที่เรียงติดต่อกัน แต่จะมีลักษณะเหมือนรูปภาพ เช่น การสแกนภาพเข้าคอมพิวเตอร์ เป็นต้น เมื่อเปรียบเทียบข้อมูลรูปภาพกับข้อมูลข้อความ แล้วรูปภาพจะมีขนาดใหญ่กว่า 
- สื่อผสม (Multimedia) ข้อมูลที่ผสมลักษณะของทั้งรูปภาพ เสียงและข้อความเข้าด้วยกัน โดยสามารถเคลื่อนไหวได้ เช่น การเรียนผ่านระบบ VDO conference เป็นต้น โดยข้อมูลจะมีขนาดใหญ่มาก

			</p>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. สื่อกลางหรือตัวกลางในการนำส่งข้อมูล (Medium) เป็นสื่อหรือช่องทางที่ใช้ในการนำข้อมูลจากต้นทางไปยังปลายทาง ซึ่งอาจเป็นตัวกลางที่มีสายสัญญาณ เช่น สายไฟ หรือตัวกลางที่ไม่ใช้สายสัญญาณ เช่น อากาศ เป็นต้น
			</p>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5. โปรโตคอล (Protocol) เป็นข้อกำหนดหรือข้อตกลงถึงกฎระเบียบและวิธีการที่ใช้ในการสื่อสารเพื่อให้ผู้ส่งและผู้รับมีความเข้าใจตรงกัน
			</p><hr>
		</div>

		<div id="page6" class="tabcontent">
			<div align="left">
				<label><h4><b style="font-size: 23px; margin-left: 15px;">1.4 แบบจำลอง OSI</b></h4></label>
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การเชื่อมต่อคอมพิวเตอร์เป็นระบบเครือข่ายในยุคแรกจะมีลักษณะเฉพาะตัวตามบริษัทผู้ผลิตอุปกรณ์เครือข่ายนั้นๆ ทำให้เกิดปัญหาความเข้ากันได้ของอุปกรณ์ที่ผลิตจากต่างบริษัทกัน ดังนั้นหน่วยงานมาตรฐานสากล (International Standard Organization) หรือ ISO จึงได้กำหนดโครงสร้างมาตรฐานในการรับ-ส่งข้อมูลในเครือข่ายคอมพิวเตอร์ให้เป็นแบบเดียวกัน เพื่อให้ใช้งานร่วมกันได้ เรียกว่า แบบจำลอง OSI Model (Open Systems Interconnection Model) เพื่อใช้เป็นแบบอ้างอิงในการผลิต ทำให้อุปกรณ์เครือข่ายต่างบริษัทกันสามารถใช้งานร่วมกันได้ โดยไม่มีปัญหา แบบจำลอง OSI Model จะแบ่งการเชื่อมต่อในเครือข่ายคอมพิวเตอร์ออกเป็นชั้นย่อยๆ จำนวน 7 ชั้น (Layer)
			</p>
			<div align="center">
				<img src="assets/img/img1-3.png"><br>
				รูปที่ 1.3 ระดับชั้นของแบบจำลอง OSI
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ลักษณะการเชื่อมต่อคือ แต่ละชั้นหรือแต่ละเลเยอร์ (Layer) จะเสมือนเชื่อมต่อถึงกันและกันแต่ในส่วนของการเชื่อมต่อจริงทางกายภาพจะมีเพียงชั้นล่างสุดคือ Physical Layer เท่านั้นที่เชื่อมต่อถึงกัน ส่วนชั้นอื่นๆ จะไม่ได้เชื่อมต่อถึงกันจริง เพียงแต่เสมือนว่าเชื่อมต่อกัน โดยผ่านกลไกในระบบเครือข่ายเท่านั้น
			</p>
			<div align="center">
				<img src="assets/img/img1-4.jpg" width="400" height="400"><br>
				รูปที่ 1.4 ระดับชั้นของแบบจำลอง OSI
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตามแนวทางของแบบจำลอง OSI Model จะกำหนดให้การติดต่อระหว่างกันจะต้องติดต่อภายในชั้นเดียวกันเท่านั้น จะติดต่อข้ามชั้นกันไม่ได้ เช่น ชั้นที่ 3 ทางฝั่งผู้ส่ง ก็จะต้องเชื่อมต่อกับชั้นที่ 3 ของฝั่งผู้รับ เท่านั้น ส่วนผู้ใช้งานจะต้องติดต่อผ่านทางชั้นที่ 7 คือ Application Layer ซึ่ง เป็นชั้นบนสุด ในทางปฏิบัติ 4 ชั้น ด้านบนคือ Application Layer, Presentation Layer, Session Layer และ Transport Layer จะจัดเป็นการเชื่อมต่อข้อมูลในส่วนซอฟต์แวร์ (Application Dependent Layer) ส่วน 3 ชั้น ด้านล่าง คือ Network Layer, Data Link Layer และ Physical Layer จะเป็นส่วนควบคุมการรับส่งข้อมูล โดยทำการติดต่อกับฮาร์ดแวร์โดยตรง คือ เป็นส่วนของการเชื่อมต่อทางเครือข่าย (Network Dependent Layer)
			</p>
			<hr>
		</div>

		<div id="page7" class="tabcontent">
			<div align="left">
				<label><h4><b style="font-size: 23px; margin-left: 15px;">หน้าที่ของแต่ละชั้นจะเป็นดังนี้</b></h4></label>
			</div>
			<div align="left">
				<label><h4><b style="font-size: 23px; margin-left: 15px;">1. Application Layer</b></h4></label>
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ทำหน้าที่ในการเชื่อมต่อข้อมูลระหว่างผู้ใช้งานกับโปรแกรมใช้งาน โดยจะแบ่งคำสั่งต่างๆ ที่ผู้ใช้กำหนดผ่านทางเมนู หรือการคลิกเมาส์ ส่งให้โปรแกรมใช้งาน ซึ่งโปรแกรมใช้งานจะไปเรียกฟังก์ชั่นที่ให้บริการจากระบบปฏิบัติการอีกต่อหนึ่ง ดังนั้นคำสั่งหรือข้อมูลที่ผู้ใช้ส่งมาให้จะต้องถูกต้องตามกฎเกณฑ์ของระบบปฏิบัติการนั้นๆ หากมีข้อผิดพลาด ฟังก์ชั่นที่เรียกใช้งานก็จะแจ้งกลับมายังโปรแกรม และ โปรแกรมใช้งานก็จะแสดงข้อความการผิดพลาดให้กับผู้ใช้อีกต่อหนึ่ง ลักษณะการทำงานส่วนใหญ่ในชั้นนี้ได้แก่ การระบุตำแหน่งของเครื่องคอมพิวเตอร์ปลายทาง การกำหนดสิทธิในการเข้าถึงข้อมูล ตัวอย่างเช่น การเข้าใช้งานระบบ E-Mail การถ่ายโอนไฟล์ในเครือข่าย
			</p>
			<div align="left">
				<label><h4><b style="font-size: 23px; margin-left: 15px;">2. Presentation Laye</b></h4></label>
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เป็นชั้นที่ทำหน้าที่เป็นส่วนติดต่อระหว่างชั้น Application และ Session ให้เข้าใจกัน โดยจะเป็นการสร้างขบวนการย่อยๆ ในการทำงานระหว่างกัน และ จัดรูปแบบการนำเสนอข้อมูลในการสื่อสารให้เข้าใจกันได้ เช่น การแปลงรหัสข้อมูล การเข้ารหัส (Encrypt) และ ถอดรหัสข้อมูล (Decrypt)
			</p>
			<div align="left">
				<label><h4><b style="font-size: 23px; margin-left: 15px;">3. Session Layer</b></h4></label>
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เป็นชั้นที่ทำหน้าที่สร้างส่วนติดต่อ (Session) ในการสื่อสารข้อมูล โดยกำหนดจังหวะในการรับ-ส่งข้อมูลว่าจะทำงานในแบบผลัดการส่ง (Half Duplex) หรือ ส่งรับพร้อมกัน (Full Duplex) โดยจะสร้างเป็นส่วนของชุดข้อมูลโต้ตอบกัน
			</p>
			<hr>
		</div>

		<div id="page8" class="tabcontent">
			<div align="left">
				<label><h4><b style="font-size: 23px; margin-left: 15px;">4. Transport Layer</b></h4></label>
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ทำหน้าที่แบ่งข้อมูลที่มีขนาดใหญ่เกินมาตรฐานการรับ-ส่ง ออกเป็นส่วนย่อยๆ ให้เหมาะสมกับการทำงานทางฮาร์ดแวร์ของอุปกรณ์ในระบบเครือข่ายตามมาตรฐานที่ใช้งาน
			</p>
			<div align="left">
				<label><h4><b style="font-size: 23px; margin-left: 15px;">5. Network Layer</b></h4></label>
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ทำหน้าที่เชื่อมต่อและกำหนดเส้นทางในการรับส่งข้อมูลผ่านระบบเครือข่าย โดยจะนำข้อมูลในชั้นบนที่ส่งมาในรูปของ Package หรือ Frame ซึ่งมีเพียงแอดเดรสของผู้รับ-ผู้ส่ง ลำดับการรับ- ส่งข้อมูล และส่วนของข้อมูล นอกจากนี้ยังทำหน้าที่ในการสถาปนาการเชื่อมต่อในครั้งแรก (Call Setup) และ การยกเลิกการติดต่อ (Call Clearing)
			</p>
			<div align="left">
				<label><h4><b style="font-size: 23px; margin-left: 15px;">6. Data Link Layer</b></h4></label>
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ทำหน้าที่ในการจัดเตรียมข้อมูลในการเชื่อมต่อให้กับอุปกรณ์ทางฮาร์ดแวร์ โดยหลังจากที่ได้รับข้อมูลจากชั้น Network Layer ที่กำหนดเส้นทางในการติดต่อมาให้ ก็จะทำการสร้างคำสั่งที่จะใช้ควบคุมฮาร์ดแวร์ในการติดต่อ และทำการตรวจสอบข้อผิดพลาดในการรับ-ส่งข้อมูล เพื่อให้ข้อมูลที่รับ-ส่งกันตรงกับมาตรฐานการรับ-ส่งข้อมูลในระดับฮาร์ดแวร์ เช่น มาตรฐานอีเธอร์เน็ต (Ethernet) มาตรฐานโทเค็นริง (Token Ring) ฯลฯ
			</p>
			<div align="left">
				<label><h4><b style="font-size: 23px; margin-left: 15px;">7. Physical Layer</b></h4></label>
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เป็นชั้นล่างสุดของแบบจำลอง OSI Model และเป็นชั้นที่มีการเชื่อมต่อจริงทางกายภาพ ในชั้นนี้จะเป็นส่วนที่ใช้กำหนดคุณสมบัติทางกายภาพของอุปกรณ์ที่จะนำมาเชื่อมต่อกัน เช่น จะใช้ขั้วต่อสัญญาณแบบใด ใช้การรับ-ส่งข้อมูลแบบใด ความเร็วในการรับ-ส่งข้อมูลที่จะใช้เป็นเท่าใด ข้อมูลในชั้นนี้จะอยู่ในรูปของสัญญาณทางไฟฟ้าแบบดิจิตอลคือมีระดับสัญญาณ 0 หรือ 1 หากมีปัญหาในการรับ-ส่งทางฮาร์ดแวร์ เช่น สายรับ-ส่งข้อมูลขาด หรืออุปกรณ์ในเครือข่ายชำรุดเสียหาย ก็จะทำการตรวจสอบและส่งข้อมูลความผิดพลาดไปให้ชั้นอื่นๆ ที่อยู่เหนือขึ้นไปได้รับทราบ
			</p>
			<div align="left">
				<label><h4><b style="font-size: 23px; margin-left: 15px;">1.6 องค์ประกอบของระบบเครือข่าย</b></h4></label>
			</div>
			<p style="font-size: 23px; margin-left: 40px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การที่คอมพิวเตอร์จะเชื่อมต่อกันเป็นเครือข่ายได้ ต้องมีองค์ประกอบพื้นฐานดังต่อไปนี้
     - คอมพิวเตอร์ อย่างน้อย  2  เครื่อง

      - เน็ตเวิร์ดการ์ด  หรือ  NIC ( Network  Interface  Card) เป็นการ์ดที่เสียบเข้ากับช่องที่ เมนบอร์ดของคอมพิวเตอร์  ซึ่งเป็นจุดเชื่อมต่อระหว่างคอมพิวเตอร์และเครือข่าย
      - สื่อกลางและอุปกรณ์สำหรับการรับส่งข้อมูล  เช่น  สายสัญญาณ  ส่วนสายสัญญาณที่นิยมที่ใช้กันในเครือข่ายก็เช่น  สายโคแอ็กเชียล  สายคู่เกลียวบิด  และสายใยแก้วนำแสง  เป็นต้น ส่วนอุปกรณ์ เครือข่าย  เช่น  ฮับ สวิตช์ เราท์เตอร์ เกตเวย์ เป็นต้น
      - โปรโตคอล  ( Protocol) โปรโตคอลเป็นภาษาที่คอมพิวเตอร์ใช้ติดต่อสื่อสารกันผ่านเครือข่ายคอมพิวเตอร์ที่สามารถสื่อสารกันได้นั้นจำเป็นที่ต้องใช้  “ภาษา” หรือใช้โปรโตคอลเดียวกันเช่น  OSI,  TCP/IP,  IPX/SPX เป็นต้น

			</p>
			<p align="center">
			<iframe width="100%" height="350" src="https://www.youtube.com/embed/1q4b2WUUVPk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</p>
			<p align="center">
			<a href="chl1.php" style="background-color:#000; padding: 10px;">ทำแบบทดสอบหลังเรียนบทที่ 1</a>
			<a href="updata/updatetoch2.php" style="background-color:#000; padding: 10px;">จบบทเรียนทหน่วยที่ 1 คลิกเพื่อไปหน่วยต่อไป</a></p>
			<hr>
		</div>
			
		

<button class="tablink btn" onclick="openCity('page1', this, 'orange')" id="defaultOpen">หน้าที่ 1</button>
<button class="tablink btn" onclick="openCity('page2', this, 'orange')">หน้าที่ 2</button>
<button class="tablink btn" onclick="openCity('page3', this, 'orange')">หน้าที่ 3</button>
<button class="tablink btn" onclick="openCity('page4', this, 'orange')">หน้าที่ 4</button>
<button class="tablink btn" onclick="openCity('page5', this, 'orange')">หน้าที่ 5</button>
<button class="tablink btn" onclick="openCity('page6', this, 'orange')">หน้าที่ 6</button>
<button class="tablink btn" onclick="openCity('page7', this, 'orange')">หน้าที่ 7</button>
<button class="tablink btn" onclick="openCity('page8', this, 'orange')">หน้าที่ 8</button>

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