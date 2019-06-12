<?php
session_start();
include 'view/header.php';
?>
<body>
  <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
    <div class="container-2 w-container"><a href="index.html" class="w-nav-brand w--current"><img src="images/orem-library.jpg" alt="" class="navbar-image"></a>
      <div class="w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div class="page-wrapper">
    <div class="container w-container">
      <div class="div-block"><img src="images/EventTracker_Logo-1.png" alt="" class="logo-image">
        <h1 class="heading">Event<br>Tracker</h1>
      </div>
      <div class="w-form">
        <form id="email-form" name="email-form" data-name="Email Form" class="form">
          <div class="field-wrapper"><label for="name" class="field-label">Username: </label><input type="text" class="form-field w-input" maxlength="256" name="name" data-name="Name" id="name"></div>
          <div class="field-wrapper"><label for="name-2" class="field-label">Password:</label><input type="text" class="form-field w-input" maxlength="256" name="name-2" data-name="Name 2" id="name-2"></div>
          <div class="w-clearfix"><a href="#" class="forgot-password-link">forgot password?</a></div>
          <div class="form-button-wrapper"><input type="submit" value="Login" data-wait="Please wait..." class="button login w-button"><input type="submit" value="Sign Up" data-wait="Please wait..." class="button w-button"></div>
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
  <div><a href="create-account.html" class="link">Create Account</a><a href="create-event.html" class="link">Create Event</a><a href="add-user.html" class="link">Add User</a><a href="generate-report.html" class="link">Generate Report</a><a href="admin-page.html" class="link">Admin Page</a><a href="event-tracker.html" class="link">Event Tracker</a></div>
<?php include 'view/footer.php'; ?>