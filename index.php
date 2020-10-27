<?php  include "layer/header.php"; include("connectDB.php"); ?>
<div class="container">
  <div>
    <div class="col-sm-3">
      <ul class="ul-menu well">
        <li><b><h3>บทเรียน</h3></b></li><hr>
        <?php
          // $sql = "SELECT * FROM readunits INNER JOIN member ON readunits.studentID = member.studentID
          //  INNER JOIN units ON readunits.unitsID = units.unitID";
          //     while ($row=mysqli_fetch_assoc($conn,$sql)) {
          //       if(!empty($_SESSION['studentID'])){
          //         if($_SESSION['studentID']==$row['studentID']){
          //         if(is_null($row['statusunit'])){
          //           for ($i=0; $i < $row['unitID'] ; $i++){   
        ?>
        <li><a href="chl<?php //echo $i+1 ?>.php"><?php  //} ?><?php //echo $row['unitName']; ?></a></li>
        <?php
            //}else{ 
            //for ($i=0; $i < $row['unitID'] ; $i++){
        ?>
        <style>
          .not-active {
            pointer-events: none;
            cursor: default;
            text-decoration: none;
            color: black;
          }
        </style>
        <li><a class="not-active"><?php //} ?><?php //echo $row['unitName']; ?></a></li>
       <?php //} } }} ?>

      <?php 
        $sqll = "SELECT * FROM units";
        $ress = mysqli_query($conn,$sqll);
        while ($roww=mysqli_fetch_array($ress)) {
          if(!empty($_SESSION['studentID'])){}else{
       ?>
         <li><a class="not-active"><?php echo $roww['unitName']; ?></a></li> 
    
    <?php }} ?>
      </ul>
    </div>

		<div class="detal-b col-sm-6 well">
      
<script>
  function myFunction(imgs) {
    var expandImg = document.getElementById("expandedImg");
    var imgText = document.getElementById("imgtext");
    expandImg.src = imgs.src;
    imgText.innerHTML = imgs.alt;
    expandImg.parentElement.style.display = "block";
  }
</script>
			<label><h3><b>ระบบเครือข่ายของคอมพิวเตอร์</b></h3></label>
			<p style="font-size: 20px; word-spacing: 5px;text-indent: 25px;">
				ระบบเครือข่ายของคอมพิวเตอร์ คือ ระบบที่มีคอมพิวเตอร์อย่างน้อยสองเครื่องเชื่อมต่อกันโดยใช้สื่อกลาง และสามารถสื่อสารข้อมูลกันได้อย่างมีประสิทธิภาพ ซึ่งทำให้ผู้ใช้คอมพิวเตอร์แต่ละเครื่องสามารถแลกเปลี่ยนข้อมูลซึ่งกันและกันได้  นอกจากนี้ยังสามารถใช้ทรัพยากรที่มีอยู่ในเครือข่ายร่วมกันได้ เช่น เครื่องพิมพ์ สแกนเนอร์ ฮาร์ดดิสก์ เป็นต้น  การใช้ทรัพยากรเหล่านี้ผ่านเครือข่ายคอมพิวเตอร์ ช่วยให้ประหยัดค่าใช้จ่ายได้มาก  เมื่อมีการเชื่อมต่อกับเครือข่ายอื่นๆ ที่อยู่ห่างไกล เช่น ระบบอินเตอร์เน็ต ซึ่งเป็นเครือข่ายที่เชื่อมต่อคอมพิวเตอร์ทั่วโลก  ก็ทำให้สามารถแลกเปลี่ยนข้อมูล ข่าวสาร ได้กับคนทั่วโลก
			</p><br>
      <div>
      <img src="assets/img/lan.gif" width="170" height="130">
      <img src="assets/img/man.png" width="170" height="130">
      <img src="assets/img/wan.gif" width="170" height="130">
      </div>
      <label style="margin-left: 10px; font-size: 16px;">ระบบเครือข่ายระดับท้องถิ่น</label>
      <label style="margin-left: 45px; font-size: 16px;">ระบบเครือข่ายระดับเมือง</label>
      <label style="margin-left: 55px; font-size: 16px;">ระบบเครือข่ายระดับประเทศ</label>
      
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