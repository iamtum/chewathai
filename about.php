<?php
	// ADD MORE CSS FILE
	$css = array('share.css');
	// ADD MORE JS FILE
	$js = array('main.js','tabData.js');
?>
<?php include("inc/header.php") ?>

<div class="container">
	<div class="title-page">
        <img src="image/title-about.jpg" width="1116" height="182" alt="" class="w100p"/> 
    </div>
    <div class="content-area">
        <div class="two-col bxS clearfix">
        	<div class="dataTab">
                <div>
                	<h2 class="mgB20 col-gold">ประวัติบริษัท</h2>
                	<p class="tC">
                	    บริษัทชีวาทัย จำกัด เป็นกิจการร่วมลงทุนระหว่าง บริษัท ชาติชีวะ จำกัด และ บริษัท ทรานส อิควอโทเรียล เอ็นจิเนียริ่ง 
จำกัด โดยก่อตั้งเมื่อวันที่ 13 มีนาคม 2551 มีทุนจดทะเบียนเริ่มแรก 10 ล้านบาท 
                	</p>
                	<p class="tC">เพื่อดำเนินธุรกิจอสังหาริมทรัพย์ภายใต้แนวคิดที่จะพัฒนาที่อยู่อาศัยเพื่อตอบสนองความต้องการของลูกค้าทุกระดับ 
ณ วันที่ 19 พฤศจิกายน 2551 บริษัทฯได้เพิ่มทุนจดทะเบียนเป็น 200 ล้านบาท</p><br>

                    <img src="image/pic-about-01.gif" width="156" height="201" alt="" class="imgC"/> 
                </div>
                <div>
                	<h2 class="mgB20 col-gold">วิสัยทัศน์และพันธกิจ</h2>
                    <img src="image/pic-about02.jpg" width="596" height="242" alt="" class="w100p mgB20"/>
                    <p>เราจะเป็นผู้พัฒนาโครงการที่อยู่อาศัยที่มีคุณภาพ ทั้งในด้านการออกแบบ การบริการ และการบริหารจัดการงาน
                    ก่อสร้างระดับชั้นนำของโลก เรามีความมั่นใจที่จะนำบริษัทเข้าจดทะเบียนในตลาดหลักทรัพย์แห่งประเทศไทย
                    ภายในปี 2557</p>
                	
                </div>
                <div class="board">
                	<h2 class="mgB20 col-gold">กรรมการผู้บริหาร</h2>
                	<div class="row">
                    	<div class="col-xs-10 col-xs-offset-1">
                            <div class="row">
                                <div class="col-md-3 col-xs-6"><img src="image/pic-about-board01.jpg" width="143" height="184" alt=""/></div>
                                <div class="col-md-3 col-xs-6"><img src="image/pic-about-board02.jpg" width="143" height="184" alt=""/></div>
                                <div class="col-md-3 col-xs-6"><img src="image/pic-about-board03.jpg" width="143" height="184" alt=""/></div>
                                <div class="col-md-3 col-xs-6"><img src="image/pic-about-board04.jpg" width="143" height="183" alt=""/></div>
                            </div>
                        </div>
                    </div>    
                    <div class="row">
                    	<div class="col-md-8 col-sm-10 col-xs-10 col-md-offset-2 col-xs-offset-1">
                            <div class="row">
                            	<div class="col-md-4 col-xs-6"><img src="image/pic-about-board05.jpg" width="135" height="193" alt=""/></div>
                            	<div class="col-md-4 col-xs-6"><img src="image/pic-about-board06.jpg" width="138" height="176" alt=""/></div>
                            	<div class="col-md-4 col-xs-6"><img src="image/pic-about-board07.jpg" width="135" height="176" alt=""/></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        	<div class="">
                <ul class="menu-hor">
                	<li><a href="#" class="current">ประวัติบริษัท</a></li>
                	<li><a href="#">วิสัยทัศน์และพันธกิจ</a></li>
                	<li><a href="#">กรรมการผู้บริหาร</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php include("inc/footer.php") ?>
<script>
	$(function(){ 		
		$(".menu-hor").tabData({data:$(".dataTab")});		
	})
</script>