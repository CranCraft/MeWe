<!-- Header wird eingefügt -->
<?php
include ("header.php");
?>


<!-- Main Content -->
<div id="topCal" class="container-fluid">
	<div class="col-xs-12 topShadow"><img class="img-responsive center-block" src="img/shadow-top.png">
	</div>
	
<!-- Menu -->
	<?php
include ("loginMenu.php");
?>

</div>
<div class="container" id="wrapper">
	<div id="loginScreen">
		<div class="col-sm-offset-3 col-sm-6 col-xs-12">
			<div id="loginBox">
				<div class="panel panel-info">
					<div class="panel-heading"></div>
					<div class="panel-body">
						<img class="img-responsive center-block" src="https://www.gstatic.com/images/icons/material/product/2x/calendar_64dp.png">
						<button id="authorize-button" onclick="handleAuthClick(event)" class="btn btn-default btn-block hvr-grow">
							Los geht`s
						</button>
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div id="einleitungsText">
				<p>
					<span class="aboutUs">MeWe</span>- ist ein Kalender, der dir den Tag einfacher gestaltet.
				</p>
				<p>
					Dieser Kalender findet Zeit in der du dich mit deiner Familie, deinen
				</p>
				<p>
					Freunden oder auch Arbeitskollegen treffen kannst.
				</p>
				<p>
					Das Prinzip ist einfach:
				</p>
				<p>
					- melde dich mit deinem Googlekonto an
				</p>
			</div>
		</div>
	</div>
</div>

<!--Footer wird eingefügt-->
<?php
include ("footer.php");
?>