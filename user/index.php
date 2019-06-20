<?php
session_start();
include 'view/header.php';
?>
<!-- User Account Page-->
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
      <h1 class="centered-h1">Add User Account</h1>
      <div class="w-form">
        <form id="email-form" name="email-form" data-name="Email Form" class="form">
          <div class="right-aligned-text"><span class="asterisk">*</span>Required Fields</div>
          <div class="field-wrapper"><label for="name" class="field-label wide">Username/Email:</label><label for="name-3" class="asterisk">*</label><input type="text" class="form-field w-input" maxlength="256" name="name" data-name="Name" id="name"></div>
          <div class="field-wrapper"><label for="name-3" class="field-label wide">Password:</label><label for="name-3" class="asterisk">*</label><input type="text" class="form-field w-input" maxlength="256" name="name-2" data-name="Name 2" id="name-2"></div>
          <div class="field-wrapper"><label for="name-3" class="field-label wide">Re-Enter Password:</label><label for="name-3" class="asterisk">*</label><input type="text" class="form-field w-input" maxlength="256" name="name-2" data-name="Name 2" id="name-2"></div>
          <div class="field-wrapper"><label for="name-3" class="field-label wide">First Name:</label><label for="name-3" class="asterisk">*</label><input type="text" class="form-field w-input" maxlength="256" name="name-2" data-name="Name 2" id="name-2"></div>
          <div class="field-wrapper"><label for="name-3" class="field-label wide">Last Name:</label><label for="name-3" class="asterisk">*</label><input type="text" class="form-field w-input" maxlength="256" name="name-2" data-name="Name 2" id="name-2"></div>
          <div class="field-wrapper"><label for="name-2" class="field-label wide">Department:</label><label for="name-3" class="asterisk">*</label><input type="text" class="form-field w-input" maxlength="256" name="name-2" data-name="Name 2" id="name-2"></div>
          <div class="field-wrapper"><label for="name-3" class="field-label wide">Permissions:</label><label for="Admin" class="asterisk">*</label><select id="Admin" name="Admin" data-name="Admin" class="w-select"><option value="admin">Admin</option><option value="employee">Employee</option><option value="volunteer">Volunteer</option><option value="view-only">View Only</option></select></div>
          <div class="form-button-wrapper"><input type="submit" value="Submit" data-wait="Please wait..." class="button login w-button"><input type="submit" value="Cancel" data-wait="Please wait..." class="button w-button"></div>
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
  <div><a href="account/create-account.html" class="link">Create Account</a><a href="event/create-event.html" class="link">Create Event</a><a href="user/add-user.html" class="link w--current">Add User</a><a href="report/generate-report.html" class="link">Generate Report</a><a href="user/admin-page.html" class="link">Admin Page</a><a href="event/event-tracker.html" class="link">Event Tracker</a></div>
  <script src="https://d1tdp7z6w94jbb.cloudfront.net/js/jquery-3.3.1.min.js" type="text/javascript" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
<?php include 'view/footer.php'; ?>