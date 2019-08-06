<?php include '../view/header.php' ?>
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
      <h1 class="centered-h1">Event Test 1</h1>
      <h4 class="centered-h1">Event Data Tracker</h4>
      <div class="fields-wrapper w-form">
        <form id="email-form" name="email-form" data-name="Email Form" action='../event/index.php' method="post">
          <div>
            <h2 class="h2-centered">Total: 85</h2>
          </div>
          <div class="attendance-demographic-wrapper">
            <div class="w-row">
              <div class="w-col w-col-4">
                <h3 class="demographic-heading">Age:</h3>
              </div>
              <div class="w-col w-col-8">
                <div class="event-tracker-field-wrapper">
                  <div class="event-tracker-label">Under 18</div>
                    <input type="number" maxlength="256" name="age-under-18" data-name="age-under-18" id="age-under-18" class="event-tracker-field w-input">
                  <div>%</div>
                </div>
                <div class="event-tracker-field-wrapper">
                  <div class="event-tracker-label">18-64</div>
                    <input type="number" maxlength="256" name="age-18-to-64" data-name="age-18-to-64" id="age-18-to-64" class="event-tracker-field w-input">
                  <div>%</div>
                </div>
                <div class="event-tracker-field-wrapper">
                  <div class="event-tracker-label">65+</div>
                    <input type="number" maxlength="256" name="age-over-65" data-name="age-over-65" id="age-over-65" class="event-tracker-field w-input">
                  <div>%</div>
                </div>
              </div>
            </div>
          </div>
          <div class="attendance-demographic-wrapper">
            <div class="w-row">
              <div class="w-col w-col-4">
                <h3 class="demographic-heading">Gender:</h3>
              </div>
              <div class="w-col w-col-8">
                <div class="event-tracker-field-wrapper">
                  <div class="event-tracker-label">Boys</div>
                    <input type="number" maxlength="256" name="gender-boys" data-name="gender-boys" id="gender-boys" class="event-tracker-field w-input">
                  <div>%</div>
                </div>
                <div class="event-tracker-field-wrapper">
                  <div class="event-tracker-label">Girls</div>
                    <input type="number" maxlength="256" name="gender-girls" data-name="gender-girls" id="gender-girls" class="event-tracker-field w-input">
                  <div>%</div>
                </div>
                <div class="event-tracker-field-wrapper">
                  <div class="event-tracker-label">Men</div>
                  <input type="number" maxlength="256" name="gender-men" data-name="gender-men" id="gender-men" class="event-tracker-field w-input">
                  <div>%</div>
                </div>
                <div class="event-tracker-field-wrapper">
                  <div class="event-tracker-label">Women</div>
                  <input type="number" maxlength="256" name="gender-women" data-name="gender-women" id="gender-women" class="event-tracker-field w-input">
                  <div>%</div>
                </div>
              </div>
            </div>
          </div>
          <div class="attendance-demographic-wrapper">
            <div class="w-row">
              <div class="w-col w-col-4">
                <h3 class="demographic-heading">Ethnicity:</h3>
              </div>
              <div class="w-col w-col-8">
                <div class="event-tracker-field-wrapper">
                  <div class="event-tracker-label">Hispanic</div>
                    <input type="number" maxlength="256" name="ethnicity-hispanic" data-name="ethnicity-hispanic" id="ethnicity-hispanic" class="event-tracker-field w-input">
                  <div>%</div>
                </div>
                <div class="event-tracker-field-wrapper">
                  <div class="event-tracker-label">Black</div>
                    <input type="number" maxlength="256" name="ethnicity-black" data-name="ethnicity-black" id="ethnicity-black" class="event-tracker-field w-input">
                  <div>%</div>
                </div>
                <div class="event-tracker-field-wrapper">
                  <div class="event-tracker-label">White</div>
                    <input type="number" maxlength="256" name="ethnicity-white" data-name="ethnicity-white" id="ethnicity-white" class="event-tracker-field w-input">
                  <div>%</div>
                </div>
                <div class="event-tracker-field-wrapper">
                  <div class="event-tracker-label">Asian</div>
                    <input type="number" maxlength="256" name="ethnicity-asian" data-name="ethnicity-asian" id="ethnicity-asian" class="event-tracker-field w-input">
                  <div>%</div>
                </div>
                <div class="event-tracker-field-wrapper">
                  <div class="event-tracker-label">Other</div>
                    <input type="number" maxlength="256" name="ethnicity-other" data-name="ethnicity-other" id="ethnicity-other" class="event-tracker-field w-input">
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
          <input type="submit" value="Cancel" onclick="window.location.href = '../index.php?action=user_dashboard';" data-wait="Please wait..." class="button w-button">
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

