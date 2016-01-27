<!-- Header wird eingefügt -->
<?php
include ("header.php");
?>

<!-- Main Content -->
<div id="topCal" class="container-fluid pageHeader">
	<div class="col-xs-12">
		<h2 class="text-center">MeWe</h2>
	</div>
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
						<!--<img class="img-responsive center-block" src="https://www.gstatic.com/images/icons/material/product/2x/calendar_64dp.png">-->
						<img id="loginLogo" class="img-responsive center-block" src="img/icon/logo.png">
						<button id="authorize-button" onclick="handleAuthClick(event)" class="btn btn-default btn-block hvr-grow">
							Los geht`s
						</button>
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div id="einleitungsText" class="contentBox shadowOne">
				 <div class="spoiler" data-spoiler-link="1"><strong>Was ist MeWe?</strong></div>
				 <div class="spoiler-content" data-spoiler-link="1">	
				<p>
					MeWe- ist ein Kalender der anderen Sorte.
					Er zeigt dir nicht deine Termine an, sondern deine Zeit die noch nicht verplant ist. Durch diesen Kalender ist es einfacher einen überblick zu erhalten wann wer für dich Zeit hat.
					Dieser Kalender findet Zeit in der du dich mit deiner Familie, deinen
					Freunden oder auch Arbeitskollegen treffen kannst.
				</p>
				<p>
			Das Prinzip ist einfach:
			<ul>
				<li>
					melde dich mit deinem Googlekonto an.
				</li>
				<li>
					Links ist die 24 Stunden Zeitleiste.
				</li>
				<li>
					Die erste farbige Spalte zeigt dir deine freie Zeit an.
				</li>
				<li>
					Lücken zeigen dir deine Termine an.
				</li>
				<li>
					Die jeweiligen weitern farbigen Spalten sind die Personen die ihren Kalender für dich freigegeben haben.
				</li>
			</ul>
		</p>
		</div>
			</div>
		</div>
	</div>
</div>
<script src="https://apis.google.com/js/client.js?onload=checkAuth"></script>
<script>
	function redirectCheck(pageurl) {
		if (!window.location.href.endsWith(pageurl)) {
			window.location.href = pageurl;
		}
	}


<?php
include ("footer.php");
?>