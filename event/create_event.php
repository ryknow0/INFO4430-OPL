<?php include '../view/header.php'; ?>

<body>
  <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
    <div class="container-2 w-container"><a href="index.html" class="w-nav-brand"><img src="../images/orem-library.jpg" alt="" class="navbar-image"></a>
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
              <option value="Story Telling Wing">Story Telling Wing</option>
              <option value="Fireplace">Fireplace</option>
              <option value="Media Auditorium">Media Auditorium</option>
              <option value="Library Hall">Library Hall</option>
              <option value="Kids Zone">Kids Zone</option>
              <option value="City Center (Building)">City Center (Building)</option>
              <option value="City Center (Courtyard)">City Center (Courtyard)</option>
              <option value="Offsite">Offsite</option>
              <option value="Book Discussion Room">Book Discussion Room</option>
              <option value="Makerspace">Makerspace</option>
              <option value="Outdoor Stage">Outdoor Stage</option>
            </select>
          </div>
          <!-- Category Field   -->
          <!-- name="category"  -->
          <div class="field-wrapper">
            <label for="name-3" class="field-label wide">Category:</label><label for="category" class="asterisk">*</label>
            <select id="category" name="category" data-name="category" class="w-select">
              <option value="After Hours">After Hours</option>
              <option value="Author Reading/Book Signing">Author Reading/Book Signing</option>
              <option value="Clubs">Clubs</option>
              <option value="Film Screening">Film Screening</option>
              <option value="Lecture">Lecture</option>
              <option value="Outreach">Outreach</option>
              <option value="Panel">Panel</option>
              <option value="Passive Program">Passive Program</option>
              <option value="Performance">Performance</option>
              <option value="Stations/Booths">Stations/Booths</option>
              <option value="Storytimes">Storytimes</option>
            </select>
          </div>
          <!-- Target Audience Field   -->
          <!-- name="target_audience"  -->
          <div class="field-wrapper">
            <label for="target-audience" class="field-label wide">Target Audience:</label>
            <select id="target-audience" name="target_audience" data-name="target_audience" class="w-select">
              <option value="Kids">Kids</option>
              <option value="Teen">Teen</option>
              <option value="Adult">Adult</option>
              <option value="Family">Family</option>
            </select>
          </div>
          <!-- Event Type Field   -->
          <!-- name="event_type"  -->
          <div class="field-wrapper">
            <label for="event-type" class="field-label wide">Event Type:</label>
            <select id="event-type" name="event_type" data-name="event_type" class="w-select">
              <option value="Library Sponsored">Library Sponsored</option>
              <option value="Community Sponsored">Community Sponsored</option>
              <option value="Recurring">Recurring</option>
              <option value="Series">Series</option>
            </select>
          </div>
          <!-- Topic Field   -->
          <!-- name="topic"  -->
          <div class="field-wrapper">
            <label for="topic" class="field-label wide">Topic:</label>
            <select id="topic" name="topic" data-name="topic" class="w-select">
              <option value="STEM">STEM</option>
              <option value="Arts">Arts</option>
              <option value="Science">Science</option>
            </select>
          </div>
          <!-- Series Field   -->
          <!-- name="part_of_series"  -->
          <div class="field-wrapper">
            <label for="name-3" class="field-label wide">Part of a series?</label>
            <label class="radio-button w-radio">
              <input type="radio" data-name="part_of_series" id="series-yes" name="part_of_series" value="Yes" class="w-radio-input">
              <span for="radio" class="w-form-label">Yes</span>
            </label>
            <label class="radio-button w-radio">
              <input type="radio" data-name="part_of_series" id="series-no" name="part_of_series" value="No" class="w-radio-input">
              <span for="radio-2" class="w-form-label">No</span>
            </label
            ></div>
          <!-- Series Field   -->
          <!-- name="series"  -->
          <div id="series-details-div">
            <div class="field-wrapper">
              <label for="select-series" class="field-label wide">Select Series:</label>
              <select id="select-series" name="series" data-name="series" class="w-select">
                <option value="Summer Reading">Summer Reading</option>
                <option value="Orem Reads">Orem Reads</option>
                <option value="Research Revolution">Research Revolution</option>
                <option value="New Year New You">New Year New You</option>
                <option value="Holiday Concerts">Holiday Concerts</option>
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
            <input type="hidden" name="action" value="add_event">
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