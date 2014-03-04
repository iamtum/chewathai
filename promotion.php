<?php
	// ADD MORE CSS FILE
	$css = array('share.css');
	// ADD MORE JS FILE
	$js = array('main.js','tabData.js');
?>
<?php include("inc/header.php") ?>

<div class="container">
	<div class="title-page">
        <img src="image/title_promo.jpg" width="1116" height="182" alt="" class="w100p"/> 
    </div>
    <div class="content-area">
        <div class="two-col bxS clearfix">
        	<div class="dataTab">
                <h1 class="col-gold">PROMOTION</h1>
                <div>
                    <img src="image/pic_promo.jpg" width="738" height="230" alt="" class="w100p"/>
                    <div class="headWitdhDate clearfix"><h2>Lorem ipsum dolar</h2><span>24 Jan 2014</span></div>
                    <p>
                	    1 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                	</p>
                </div>
                <div>
                	<p>
                	    2 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                	</p>
                	<p>
                	    2 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                	</p>
                </div>
                <div>
                	<p>
                	    3 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                	</p>
                	<p>
                	    3 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                	</p>
                </div>
            </div>
        	<div class="">
                <ul class="menu-hor">
                	<li><a href="#" class="current">LOREM IPSUM DOLAR</a></li>
                	<li><a href="#">LOREM IPSUM DOLAR</a></li>
                	<li><a href="#">LOREM IPSUM DOLAR</a></li>
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