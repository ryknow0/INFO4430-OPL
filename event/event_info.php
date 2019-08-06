<?php include '../view/header.php'; ?>

<body>
  <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
    <div class="container-2 w-container"><a href="index.html" class="w-nav-brand"><img src="images/orem-library.jpg" alt="" class="navbar-image"></a>
      <div class="w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div class="page-wrapper">
    <div class="container w-container">
      <h1 class="centered-h1">Create Event</h1>
      <div class="w-form">
      <!-- Event CREATION FORM            --> 
      <!-- action="index.php"  -->
      <!-- method="post"                    -->  
        <form id="email-form" name="email-form" data-name="Email Form" action='../event/index.php' class="form" method="post">
          <div class="right-aligned-text"><span class="asterisk">*</span>Required Fields</div>
          <!-- Event Name Field   -->
          <!-- name="event_name"  -->
          <div class="field-wrapper">
            <label for="name" class="field-label wide">Event Name:</label><label for="event-name" class="asterisk">*</label>
            <input type="text" class="form-field w-input" maxlength="256" name="event_name" data-name="event_name" id="event-name">
          </div>
          <!-- Date Field   -->
          <!-- name="date"  -->
          <div class="field-wrapper">
            <label for="name-2" class="field-label wide">Date:</label><label for="date" class="asterisk">*</label>
            <input type="text" class="form-field w-input" maxlength="256" name="date" data-name="date" id="date">
          </div>
          <!-- Start Time Field   -->
          <!-- name="start_time"  -->
          <div class="field-wrapper">
            <label for="name-3" class="field-label wide">Start Time:</label><label for="start-time" class="asterisk">*</label>
            <input type="text" class="form-field w-input" maxlength="256" name="start_time" data-name="start_time" id="start-time">
          </div>
          <!-- End Time Field   -->
          <!-- name="end_time"  -->
          <div class="field-wrapper">
            <label for="name-3" class="field-label wide">End Time:</label><label for="end-time" class="asterisk">*</label>
            <input type="text" class="form-field w-input" maxlength="256" name="end_time" data-name="end_time" id="end-time">
          </div>
          <!-- Location Field   -->
          <!-- name="location"  -->
          <div class="field-wrapper">
            <label for="name-3" class="field-label wide">Location:</label><label for="location" class="asterisk">*</label>
            <select id="location" name="location" data-name="location" class="w-select">
              <option value="1">Story Telling Wing</option>
              <option value="2">Fireplace</option>
              <option value="3">Media Auditorium</option>
              <option value="4">Library Hall</option>
              <option value="5">Kids Zone</option>
              <option value="6">City Center (Building)</option>
              <option value="7">City Center (Courtyard)</option>
              <option value="8">Offsite</option>
              <option value="9">Book Discussion Room</option>
              <option value="10">Makerspace</option>
              <option value="11">Outdoor Stage</option>
            </select>
          </div>
          <!-- Category Field   -->
          <!-- name="category"  -->
          <div class="field-wrapper">
            <label for="name-3" class="field-label wide">Category:</label><label for="category" class="asterisk">*</label>
            <select id="category" name="category" data-name="category" class="w-select">
              <option value="1">After Hours</option>
              <option value="2">Author Reading/Book Signing</option>
              <option value="3">Clubs</option>
              <option value="4">Film Screening</option>
              <option value="5">Lecture</option>
              <option value="6">Outreach</option>
              <option value="7">Panel</option>
              <option value="8">Passive Program</option>
              <option value="9">Performance</option>
              <option value="10">Stations/Booths</option>
              <option value="11">Storytimes</option>
            </select>
          </div>
          <!-- Target Audience Field   -->
          <!-- name="target_audience"  -->
          <div class="field-wrapper">
            <label for="target-audience" class="field-label wide">Target Audience:</label>
            <select id="target-audience" name="target_audience" data-name="target_audience" class="w-select">
              <option value="1">Kids</option>
              <option value="2">Teen</option>
              <option value="3">Adult</option>
              <option value="4">Family</option>
            </select>
          </div>
          <!-- Event Type Field   -->
          <!-- name="event_type"  -->
          <div class="field-wrapper">
            <label for="event-type" class="field-label wide">Event Type:</label>
            <select id="event-type" name="event_type" data-name="event_type" class="w-select">
              <option value="1">Library Sponsored</option>
              <option value="2">Community Sponsored</option>
              <option value="3">Recurring</option>
              <option value="4">Series</option>
            </select>
          </div>
          <!-- Topic Field   -->
          <!-- name="topic"  -->
          <div class="field-wrapper">
            <label for="topic" class="field-label wide">Topic:</label>
            <select id="topic" name="topic" data-name="topic" class="w-select">
              <option value="1">STEM</option>
              <option value="2">Arts</option
              option value="3">Science</option>
            </select>
          </div>
          <!-- Series Field   -->
          <!-- name="part_of_series"  -->
          <div class="field-wrapper">
            <label for="name-3" class="field-label wide">Part of a series?</label>
            <label class="radio-button w-radio">
              <input type="radio" data-name="part_of_series" id="series-yes" name="part_of_series" value="Radio" class="w-radio-input">
              <span for="radio" class="w-form-label">Yes</span>
            </label>
            <label class="radio-button w-radio">
              <input type="radio" data-name="part_of_series" id="series-no" name="part_of_series" value="Radio" class="w-radio-input">
              <span for="radio-2" class="w-form-label">No</span>
            </label
            ></div>
          <!-- Series Field   -->
          <!-- name="series"  -->
          <div id="series-details-div">
            <div class="field-wrapper">
              <label for="select-series" class="field-label wide">Select Series:</label>
              <select id="select-series" name="series" data-name="series" class="w-select">
                <option value="1">Summer Reading</option>
                <option value="2">Orem Reads</option>
                <option value="3">Research Revolution</option>
                <option value="4">New Year New You</option>
                <option value="5">Holiday Concerts</option>
              </select>
            </div>
            <!-- Add Series Field   -->
            <!-- name="series_add"  -->
            <div class="button-and-field-wrapper">
              <a href="#" class="button-2 w-button">Add Series</a>
              <input type="text" class="text-field w-input" maxlength="256" name="series_add" data-name="series_add" placeholder="series name" id="add-series">
            </div>
          </div>
          <!-- Create Event form buttons                                -->
          <!-- name="action"  value="create_event"                      -->
          <!-- SUCCESS redirect to account dashboard(index.php)         -->
          <!-- FAIL or CANCEL redirect to account dashboard index.php   --> 
          <div class="form-button-wrapper">
            <input type="submit" value="Create Event" onclick="window.location.href = '../index.php';" data-wait="Please wait..." class="button login w-button">
             <a href="../index.php" class="button w-button">Cancel</a>
            <input type="hidden" name="action" value="create_event">
          </div>
          <div class="w-embed w-script">
            <script>
	setInterval(function() {
  	var seriesYesRadioBtn = document.getElementById('series-yes');
    var seriesDetailDiv = document.getElementById('series-details-div');
  	if (seriesYesRadioBtn.checked) {
    	seriesDetailDiv.style.display = 'block';
    } else {
      seriesDetailDiv.style.display = 'none';
    }
  }, 100);
</script>
          </div>
        </form>
        <div class="w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>
    </div>
  </div>
  <?php include '../view/footer.php'; ?>
  <div><a href="create-account.html" class="link">Create Account</a><a href="create-event.html" class="link w--current">Create Event</a><a href="add-user.html" class="link">Add User</a><a href="generate-report.html" class="link">Generate Report</a><a href="admin-page.html" class="link">Admin Page</a><a href="event-tracker.html" class="link">Event Tracker</a><a href="reset-password.html" class="link">Reset Password</a></div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>
