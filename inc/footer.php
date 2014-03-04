
<div class="container">
	<div class="row">
	  <div class="col-md-5 col-md-push-7">code1</div>
	  <div class="col-md-7 col-md-pull-5">code2</div>
	</div>
</div>
<script src="js/jquery-1.8.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/selectivizr.js"></script>
<script src="js/jquery.easydropdown.js"></script>
<?php  if(isset($js)) foreach ($js as $key => $value) echo'<script src="js/' . $value . '"></script>'; ?>
</body>
</html>
