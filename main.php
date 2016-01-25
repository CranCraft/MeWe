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

	<div id="caldenderPerson" class="container">
		<div class="row">
			<div class="col-xs-3 col-xs-offset-3">
				<span class="img-circle center-block personOne" aria-hidden="true"> <span class="glyphicon glyphicon-user personImage" aria-hidden="true"></span> </span>
			</div>
			<div class="col-xs-2 col-sm-3">
				<span class="img-circle center-block personTwo" aria-hidden="true"> <span class="glyphicon glyphicon-user personImage" aria-hidden="true"></span> </span>
			</div>
			<div class="col-xs-2 col-sm-3">
				<span class="img-circle center-block personThree" aria-hidden="true"> <span class="glyphicon glyphicon-user personImage" aria-hidden="true"></span> </span>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="col-xs-12 topShadow"><img class="img-responsive center-block" src="img/shadow-top.png">
		</div>
	</div>
</div>
<div class="container" id="wrapper">
	<div id="mainCalendar">
		<div id="zeiten/"></div>
		<div id="botCal" class="row">
			<div class="col-xs-3 timeList">
				<?php
				include ("content/timetable.php");
				?>
			</div>
			<div id="tableMe" class="col-xs-3 personOne">
				<?php
				include ("content/me.php");
				?>
			</div>
			<div id="tableTwo" class="col-xs-3 personTwo">
				<?php
				include ("content/personTwo.php");
				?>
			</div>
			<div id="tableThree" class="col-xs-2 col-sm-3 personThree">
				<?php
				include ("content/personThree.php");
				?>
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
	    
	$.getJSON("date.json", function(data2) {
		$('#zeiten').graspSchedule(data2);
	});

<!-- Footer wird eingefügt-->
<?php
include ("footer.php");
?>