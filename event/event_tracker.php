<?php include '../view/event_tracker_header.php' ?>
<body class="event-tracker-body">
  <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
    <div class="container-2 w-container"><a href="index.html" class="w-nav-brand"><img src="images/orem-library.jpg" alt="" class="navbar-image"></a>
      <div class="w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div class="page-wrapper">
    <div class="container w-container">
      <h1 class="centered-h1">Acting Up: Beauty and the Beast</h1>
      <h4 class="centered-h1">Event Data Tracker</h4>
      <div class="fields-wrapper w-form">
        <form id="email-form" name="email-form" data-name="Email Form" action='../index.php' method="post">
          <div>
            <h2 class="h2-centered">Total: 0</h2>
          </div>
          <div class="attendance-demographic-wrapper">
            <div class="w-row">
              <div class="w-col w-col-4">
                <!-- Age Demographic Category  -->
                <h3 class="demographic-heading">Age:</h3>
              </div>
              <div class="w-col w-col-8">
                <div class="event-tracker-field-wrapper">
                  <!-- Age: Under 18         -->
                  <!-- name="age_under_18"   -->
                  <div class="event-tracker-label">Under 18</div>
                    <input type="number" maxlength="256" name="age_under_18" data-name="age_under_18" id="age_under_18" class="event-tracker-field w-input">
                  <div>%</div>
                </div>
                <div class="event-tracker-field-wrapper">
                  <!-- Age: 18 to 64         -->
                  <!-- name="age_18_to_64"   -->
                  <div class="event-tracker-label">18-64</div>
                    <input type="number" maxlength="256" name="age_18_to_64" data-name="age_18_to_64" id="age_18_to_64" class="event-tracker-field w-input">
                  <div>%</div>
                </div>
                <div class="event-tracker-field-wrapper">
                  <!-- Age: 65 + (plus)     -->
                  <!-- name="age_over_65"   -->
                  <div class="event-tracker-label">65+</div>
                    <input type="number" maxlength="256" name="age_over_65" data-name="age_over_65" id="age_over_65" class="event-tracker-field w-input">
                  <div>%</div>
                </div>
              </div>
            </div>
          </div>
          <div class="attendance-demographic-wrapper">
            <div class="w-row">
              <div class="w-col w-col-4">
                <!-- Gender Demographic Category  -->
                <h3 class="demographic-heading">Gender:</h3>
              </div>
              <div class="w-col w-col-8">
                <div class="event-tracker-field-wrapper">
                  <!-- Gender: Boys         -->
                  <!-- name="gender_boys"   -->
                  <div class="gender_boys">Boys</div>
                    <input type="number" maxlength="256" name="gender_boys" data-name="gender_boys" id="gender_boys" class="event-tracker-field w-input">
                  <div>%</div>
                </div>
                <div class="event-tracker-field-wrapper">
                  <!-- Gender: Girls         -->
                  <!-- name="gender_girls"   -->
                  <div class="event-tracker-label">Girls</div>
                    <input type="number" maxlength="256" name="gender_girls" data-name="gender_girls" id="gender_girls" class="event-tracker-field w-input">
                  <div>%</div>
                </div>
                <div class="event-tracker-field-wrapper">
                  <!-- Gender: Men         -->
                  <!-- name="gender_men"   -->
                  <div class="event-tracker-label">Men</div>
                  <input type="number" maxlength="256" name="gender_men" data-name="gender_men" id="gender_men" class="event-tracker-field w-input">
                  <div>%</div>
                </div>
                <div class="event-tracker-field-wrapper">
                  <!-- Gender: Women         -->
                  <!-- name="gender_women"   -->
                  <div class="event-tracker-label">Women</div>
                  <input type="number" maxlength="256" name="gender_women" data-name="gender_women" id="gender_women" class="event-tracker-field w-input">
                  <div>%</div>
                </div>
              </div>
            </div>
          </div>
          <div class="attendance-demographic-wrapper">
            <div class="w-row">
              <div class="w-col w-col-4">
                <!-- Ethnicity Demographic Category  -->
                <h3 class="demographic-heading">Ethnicity:</h3>
              </div>
              <div class="w-col w-col-8">
                <div class="event-tracker-field-wrapper">
                  <!-- Ethnicity: Hispanic         -->
                  <!-- name="ethnicity_hispanic"   -->
                  <div class="event-tracker-label">Hispanic</div>
                    <input type="number" maxlength="256" name="ethnicity_hispanic" data-name="ethnicity_hispanic" id="ethnicity_hispanic" class="event-tracker-field w-input">
                  <div>%</div>
                </div>
                <div class="event-tracker-field-wrapper">
                  <!-- Ethnicity: Black         -->
                  <!-- name="ethnicity_black"   -->
                  <div class="event-tracker-label">Black</div>
                    <input type="number" maxlength="256" name="ethnicity_black" data-name="ethnicity_black" id="ethnicity_black" class="event-tracker-field w-input">
                  <div>%</div>
                </div>
                <div class="event-tracker-field-wrapper">
                  <!-- Ethnicity: White         -->
                  <!-- name="ethnicity_white"   -->
                  <div class="event-tracker-label">White</div>
                    <input type="number" maxlength="256" name="ethnicity_white" data-name="ethnicity_white" id="ethnicity_white" class="event-tracker-field w-input">
                  <div>%</div>
                </div>
                <div class="event-tracker-field-wrapper">
                  <!-- Ethnicity: Asian         -->
                  <!-- name="ethnicity_asian"   -->
                  <div class="event-tracker-label">Asian</div>
                    <input type="number" maxlength="256" name="ethnicity_asian" data-name="ethnicity_asian" id="ethnicity_asian" class="event-tracker-field w-input">
                  <div>%</div>
                </div>
                <div class="event-tracker-field-wrapper">
                  <!-- Ethnicity: Other         -->
                  <!-- name="ethnicity_other"   -->
                  <div class="event-tracker-label">Other</div>
                    <input type="number" maxlength="256" name="ethnicity_other" data-name="ethnicity_other" id="ethnicity_other" class="event-tracker-field w-input">
                  <div>%</div>
                </div>
              </div>
            </div>
          </div>
          <div class="add-attendee-wrapper">
            <h2 class="heading-2">Add Attendee</h2>
            <div id="add-attendee-button" class="add-attendee-button">
              <img src="../images/person_add_white_2048x2048.png" srcset="../images/person_add_white_2048x2048-p-500.png 500w, ../images/person_add_white_2048x2048-p-800.png 800w, ../images/person_add_white_2048x2048-p-1080.png 1080w, ../images/person_add_white_2048x2048.png 2048w" sizes="34px" alt="" class="image-2">
            </div>
          </div>
          <div class="form-button-wrapperv">
          <input type="submit" value="Submit" data-wait="Please wait..." class="button login w-button">
            <a href="../index.php" class="button w-button">Cancel</a>
          <input type="hidden" name="action" value="track_event">
        </div>
          <div class="w-embed w-script">
            <script>
	            document.getElementById('add-attendee-button').addEventListener('click', function() {
  	            console.log('add attendee clicked');
              });
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
  <?php include '../view/footer.php' ?>

