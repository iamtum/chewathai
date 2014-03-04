<?php
	// ADD MORE CSS FILE
	$css = array('index.css');
	// ADD MORE JS FILE
	$js = array('main.js');
?>
<?php include("inc/header.php") ?>


<div class="container">
	<select class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}'>
      <option value="1">TH</option>
      <option value="2">EN</option>
    </select>
    <nav class="mainmenu">
    	<ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.php" class="active">ABOUT CHEWATHAI</a></li>
            <li><a href="javascript:;">RESIDENCE</a></li>
            <li><a href="index.php" style="padding:0px;"><img src="image/brand.gif" /></a></li>
            <li><a href="industrial.php">INDUSTRIAL</a></li>
            <li><a href="news.php">NEWS &amp; PROMOTION</a></li>
            <li><a href="contact.php">CONTACT US</a></li>
        </ul>
    </nav>
	<div class="bigbanner" style="padding-bottom:40px;">
    	<img src="image/aboutus.jpg" /> 
    </div>
    
	<div style="width:100%; border:30px #7d7d7b solid;">
    	<div class="row">
          <div class="col-md-8 about-left">
          	<h4>ประวัติบริษัท</h4>
            <p>บริษัทชีวาทัย จำกัด เป็นกิจการร่วมลงทุนระหว่าง บริษัท ชาติชีวะ จำกัด และ บริษัท ทรานส อิควอโทเรียล เอ็นจิเนียริ่ง
จำกัด โดยก่อตั้งเมื่อวันที่ 13 มีนาคม 2551 มีทุนจดทะเบียนเริ่มแรก 10 ล้านบาท</p>

<p>เพื่อดำเนินธุรกิจอสังหาริมทรัพย์ภายใต้แนวคิดที่จะพัฒนาที่อยู่อาศัยเพื่อตอบสนองความต้องการของลูกค้าทุกระดับ
ณ วันที่ 19 พฤศจิกายน 2551 บริษัทฯ ได้เพิ่มทุนจดทะเบียนเป็น 200 ล้านบาท</p>
		    <p><img src="image/logo2.gif" /></p>
          </div> 
          <div class="col-md-4 about-right">
          	<ul>
              <li><a href="javascript:;"><img src="image/icon/about_arrow.gif" /> ประวัติบริษัท</a></li>
              <li><a href="javascript:;"><img src="image/icon/about_arrow.gif" /> วิสัยทัศน์พันธกิจ</a></li>
              <li><a href="javascript:;"><img src="image/icon/about_arrow.gif" /> กรรมการผู้บริหาร</a></li>
            </ul>
          </div> 	
        </div>
    </div>

    <footer>
    	<div class="content" >
        	<div class="row">
            	<div class="col-md-6">
                <span class="copyright">COPYRIGHT &copy; 2013 CHEWATHAI ALL RIGHTS RESERVED.</span>
                </div>
                <div class="col-md-6">
                	<div class="row">
                        <div class="col-md-10">
                          <h4 class="gray2"><img src="image/icon/home.png" /> 1168 อาคาร ลุมพินีทาวน์เวอร์ ชั้น 27 ยูนิต D ถ.พระราม4 แขวงทุ่งมหาเฆม เขตสาทร กรุงเทพฯ</h4>
                          <p>Phone: +66 2 679 8870-4 E-mail: mkt@chewathai.com</p>
                        </div>
                        <div class="col-md-2">
                         <img src="image/social.png" usemap="#Map" />
                         <map name="Map">
                           <area shape="rect" coords="3,4,23,22" href="javascript:;">
                           <area shape="rect" coords="29,4,53,23" href="javascript:;">
                         </map>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
</div>


<?php include("inc/footer.php") ?>