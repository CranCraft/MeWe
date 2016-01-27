<script src="jquery/mainMenu.js"></script>


<a id="mainMenu" class="menuButton hvr-grow" href="#mainMenu"><img src="img/menuIcone.png" tabindex="1"></a>

<div id="sidr">
	<header id="menuHeader">
		<h1>Hauptmenü</h1>
	</header>

	<div id="menuContent">
		<p>
			<?php

			$zitat[] = "Fang nie an aufzuhören, hör nie auf anzufangen. – Marcus Tullius Cicero";
			$zitat[] = "Leb in der Vergangenheit, wenn du traurig sein willst. Leb in der Zukunft, wenn du ängstlich sein willst. Und wenn du glücklich sein willst, dann genieß den Moment.";
			$zitat[] = "Liebe ist die stärkste Macht der Welt, und doch ist sie die demütigste, die man sich vorstellen kann. – Mahatma Gandhi";
			$zitat[] = "Was du liebst, lass frei. Kommt es zurück, gehört es dir – für immer. – Konfuzius";
			$zitat[] = "Ein Mensch kann viel ertragen, solange er sich selbst ertragen kann. – Axel Munthe";
			$zitat[] = "Überwinde dich selbst und du wirst die Welt überwinden.";
			$zitat[] = "Als Gott den Menschen erschuf, war er bereits m&uuml;de; das erkl&auml;rt manches. - Mark Twain";
			$zitat[] = "\"Zwei Dinge sind unendlich: das Universum und die menschliche Dummheit, aber bei dem Universum bin ich mir noch nicht ganz sicher.\" - Albert Einstein";

			$zufall = array_rand($zitat);
			echo "<b>Zitat:</b> " . $zitat[$zufall];
			?>
		</p>
	</div>
	<!-- Your content -->
	<ul>
		<li>
			<a href="main.php">Home</a>
		</li>
		<li>
			<a href="settings.php">Einstellungen</a>
		</li>
		<li>
			<a href="help.php">Hilfe</a>
		</li>
		<li>
			<a href="impressum.php">Impressum</a>
		</li>
		<li>
			<a href="jasonTest.php">Jason Objekt</a>
		</li>
		<li>
			<!--<a href="#" onclick="signOut();">Sign out</a>-->
			<a href="https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue=http://localhost:8080/home/mi">Logout</a>
		</li>
	</ul>
</div>