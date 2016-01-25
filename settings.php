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

	<div id="caldenderPerson" class="container-fluid">
		<div class="row">

		</div>
	</div>

	<div class="container-fluid">
		<div class="col-xs-12 topShadow"><img class="img-responsive center-block" src="img/shadow-top.png">
		</div>
	</div>
</div>

<div class="container" id="wrapper">
	<div class="col-xs-12 contentBox shadowOne">
		<div class="userSettings">
			<div class="col-sm-offset-2">
				<h2>Einstellungen</h2>
			</div>
			<div class="row"><hr></div>
			<form class="form-horizontal">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Goolge Account</label>
					<div class="col-sm-10">
						<p class="form-control-static">
							email@gmail.com
						</p>
					</div>
				</div>
			</form>
			<div class="col-sm-offset-2">
				<h3>Benachrichtigungen</h3>
				<hr>
				<div class="checkbox">
					<label>
						<input type="checkbox" value="">
						Push Benachrichtigungen im Browser (Berechtigungen benötigt) </label>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" value="">
						Email Benachrichtigungen </label>
				</div>
				<div class="checkbox disabled">
					<label>
						<input type="checkbox" value="" disabled>
						Handy Benachrichtigungen (comming soon) </label>
				</div>
				<h3>h1. Bootstrap heading</h3>
				<hr>
				<div class="radio">
					<label>
						<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
						Option one is this and that&mdash;be sure to include why it's great </label>
				</div>
				<div class="radio">
					<label>
						<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
						Option two can be something else and selecting it will deselect option one </label>
				</div>
				<h3>Benutzer Management</h3>
				<hr>
				<div class="row">
					<div class="col-xs-12 col-sm-6">
										<h5>Benutzer</h5>
						<div class="checkbox">
							<label>
								<input type="checkbox" value="">
								Person 1</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" value="">
								Person 2</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" value="">
								Person 3</label>
						</div>						
					</div>
					<div class="col-xs-12 col-sm-6">
										<h5>Reihenfolge (Drag an Drop)</h5>
						<ol class='simple_with_animation list-group'>
							<li class="list-group-item">
								Person 1
							</li>
							<li class="list-group-item">
								Person 2
							</li>
							<li class="list-group-item">
								Person 3
							</li>
						</ol>
					</div>
				</div>				
			</div>
			<div class="row">
				<hr>
				<div class="col-xs-12 col-sm-offset-4 col-sm-4">
					<button type="button" class="btn btn-default btn-block">Speichern</button>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
<!-- Footer wird eingefügt-->

<?php
include ("footer.php");
?>