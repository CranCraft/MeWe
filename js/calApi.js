      // Your Client ID can be retrieved from your project in the Google
      // Developer Console, https://console.developers.google.com
      var CLIENT_ID = '848318626401-4lo2eghrkim2vlspiogv033v3or728og.apps.googleusercontent.com';
      
      var E_MAIL = "felixohlsen0@gmail.com";

      var SCOPES = ["https://www.googleapis.com/auth/calendar.readonly"];
 	  
 	  
      /**
       * Check if current user has authorized this application.
       */
	   
		function redirectCheck(pageurl){
			if ( !window.location.href.endsWith(pageurl)) {
				window.location.href = pageurl;
			}
		}
	
      function checkAuth() {
        gapi.auth.authorize(
          {
            'client_id': CLIENT_ID,
            'scope': SCOPES.join(' '),
            'immediate': true
          }, handleAuthResult);
      }

      /**
       * Handle response from authorization server.
       *
       * @param {Object} authResult Authorization result.
       */
      function handleAuthResult(authResult) {
        var authorizeDiv = document.getElementById('authorize-div');
        if (authResult && !authResult.error) {
          // Hide auth UI, then load client library.
          /* if (window.location.href != "http://localhost/MeWe/main.php"){
			window.location.href = "index.php";
		  }*/
		  redirectCheck("main.php");
          loadCalendarApi();
        } else {
          // Show auth UI, allowing the user to initiate authorization by
          // clicking authorize button.
		  // console.log(window.location.href)
		  redirectCheck("index.php");
		  /*if (window.location.href != "http://localhost/MeWe/index.php"){
			window.location.href = "index.php";
		  }*/
        }
      }

      /**
       * Initiate auth flow in response to user clicking authorize button.
       *
       * @param {Event} event Button click event.
       */
      function handleAuthClick(event) {
        gapi.auth.authorize(
          {client_id: CLIENT_ID, scope: SCOPES, immediate: false},
          handleAuthResult);
        return false;
      }

      /**
       * Load Google Calendar client library. List upcoming events
       * once client library is loaded.
       */
      function loadCalendarApi() {
        gapi.client.load('calendar', 'v3', listUpcomingEvents);
      }

      /**
       * Print the summary and start datetime/date of the next ten events in
       * the authorized user's calendar. If no events are found an
       * appropriate message is printed.
       */
      function listUpcomingEvents() {
        var request = gapi.client.calendar.events.list({
          'calendarId': 'primary',
          'timeMin': (new Date()).toISOString(),
          'showDeleted': false,
          'singleEvents': true,
          'maxResults': 10,
          'orderBy': 'startTime'
        });

        request.execute(function(resp) {
          var events = resp.items;
          //appendPre('Upcoming events:');

          if (events.length > 0) {
            for (i = 0; i < events.length; i++) {
              var event = events[i];
              var when = event.start.dateTime;
              if (!when) {
                when = event.start.date;
              }
              //appendPre(event.summary + ' (' + when + ')');
            }
          } else {
            //appendPre('No upcoming events found.');
          }

        });
      
      	// ------------------------ Free Busy ----------------------
	      var request2 = gapi.client.calendar.freebusy.query({
	        "kind": "calendar#freeBusy",
	        "timeMin": "2016-01-12T01:00:10.256Z",
	        "timeMax": "2016-01-30T23:00:10.256Z",
	        "timeZone": "Europe/Berlin",
	        "items": [{
	          id: "felixohlsen0@gmail.com"
	        }]
	      });
	
	      request2.execute(function(result) {
	        console.log(result);
	      });
      
      }

      /**
       * Append a pre element to the body containing the given message
       * as its text node.
       *
       * @param {string} message Text to be placed in pre element.
       
      function appendPre(message) {
        var pre = document.getElementById('output');
        var textContent = document.createTextNode(message + '\n');
        pre.appendChild(textContent);
      }
      */
