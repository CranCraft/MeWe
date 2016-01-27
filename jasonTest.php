<!-- Header wird eingefügt -->

<?php
include ("header.php");
?>

<!-- Main Content -->

<div id="topCal">

	<!-- Menu -->

	<?php
	include ("mainMenu.php");
	?>

	<div id="caldenderPerson" class="container-fluid pageHeader">
		<div class="row">
			<div id="logoMain" class="col-sm-2 col-xs-2">
				<img class="img-responsive center-block" src="img/icon/logo.png">
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="col-xs-12 topShadow"><img class="img-responsive center-block" src="img/shadow-top.png">
		</div>
	</div>
</div>
<div class="container" id="wrapper">
	<div id="JasonObjekt" class="col-xs-12 contentBox shadowOne">

	</div>
</div>
<!-- Footer wird eingefügt-->
<script src="https://apis.google.com/js/client.js?onload=checkAuth"></script>
<script>
<?php
include ("footer.php");
?>