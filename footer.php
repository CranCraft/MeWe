<script src="https://apis.google.com/js/client.js?onload=checkAuth"></script>
<script>
	function redirectCheck(pageurl) {
		if (!window.location.href.endsWith(pageurl)) {
			window.location.href = pageurl;
		}
	}

	function signOut() {
		var auth2 = gapi.auth2.getAuthInstance();
		auth2.signOut().then(function() {
			console.log('User signed out.');
		});
	}

   	$(window).load(function(){
      $("#topCal").sticky({ topSpacing: 0 });
    });
    
	$.getJSON("date.json", function(data2) {
		$('#zeiten').graspSchedule(data2);
	});

	$(document).ready(function() {
		$("#zeiten").wrap("<div class='new'></div>");
	});

</script>
</body>
</html>